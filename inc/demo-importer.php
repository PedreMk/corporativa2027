<?php
/**
 * Asistente de Instalación de Demos en 1 Clic (One-Click Demo Importer)
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 * Tema: Pedregosa Corporativa 3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Añadir submenú en Apariencia
function pedregosa_add_demo_importer_menu() {
    add_theme_page(
        __('Demos Pedregosa 3.0', 'pedregosa-corporate'),
        __('⚡ Demos Pedregosa 3.0', 'pedregosa-corporate'),
        'manage_options',
        'pedregosa-demo-importer',
        'pedregosa_render_demo_importer_page'
    );
}
add_action('admin_menu', 'pedregosa_add_demo_importer_menu');

// Procesar importación vía POST
function pedregosa_handle_demo_import() {
    if (isset($_POST['pedregosa_run_import']) && check_admin_referer('pedregosa_import_demo_action', 'pedregosa_import_nonce')) {
        $selected_demo = sanitize_text_field($_POST['selected_demo'] ?? 'stitch');
        
        // 1. Guardar demo activa en los ajustes del tema
        set_theme_mod('ped_demo_style', $selected_demo);

        // 2. Crear o actualizar páginas esenciales
        $pages = [
            'home' => [
                'title'    => 'Inicio Corporativo',
                'slug'     => 'inicio',
                'template' => 'front-page.php',
            ],
            'quienes-somos' => [
                'title'    => 'Quiénes Somos',
                'slug'     => 'quienes-somos',
                'template' => 'page-quienes-somos.php',
            ],
            'catalogos' => [
                'title'    => 'Catálogos y Descargas B2B',
                'slug'     => 'catalogos',
                'template' => 'page-catalogos.php',
            ],
            'informatica' => [
                'title'    => 'Informática y Software IT',
                'slug'     => 'informatica',
                'template' => 'page-servicios.php',
            ],
            'consumibles' => [
                'title'    => 'Consumibles e Impresoras',
                'slug'     => 'consumibles-e-impresoras',
                'template' => 'page-servicios.php',
            ],
            'audiovisuales' => [
                'title'    => 'Audiovisuales e Integración',
                'slug'     => 'audiovisuales',
                'template' => 'page-servicios.php',
            ],
            'mobiliario' => [
                'title'    => 'Mobiliario de Oficina',
                'slug'     => 'mobiliario-e-instalaciones-de-oficina',
                'template' => 'page-servicios.php',
            ],
            'educat' => [
                'title'    => 'Tecnología Educativa',
                'slug'     => 'equipos-educat',
                'template' => 'page-servicios.php',
            ],
            'regalos' => [
                'title'    => 'Artes Gráficas y Regalos',
                'slug'     => 'artes-graficas-y-regalos',
                'template' => 'page-servicios.php',
            ],
        ];

        $page_ids = [];
        foreach ($pages as $key => $p) {
            $existing = get_page_by_path($p['slug']);
            if (!$existing) {
                // Comprobar por título
                $existing = get_page_by_title($p['title']);
            }

            if ($existing) {
                $page_id = $existing->ID;
                wp_update_post([
                    'ID'          => $page_id,
                    'post_status' => 'publish',
                ]);
            } else {
                $page_id = wp_insert_post([
                    'post_title'   => $p['title'],
                    'post_name'    => $p['slug'],
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                    'post_content' => '<!-- Contenido generado por Pedregosa Corporativa 3.0 -->',
                ]);
            }

            if ($p['template'] && $page_id) {
                update_post_meta($page_id, '_wp_page_template', $p['template']);
            }
            $page_ids[$key] = $page_id;
        }

        // 3. Establecer Inicio como portada estática
        if (!empty($page_ids['home'])) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_ids['home']);
        }

        // 4. Crear y asignar Menú Principal Oficial (INICIO / QUIENES SOMOS / CATALOGOS / SERVICIOS / VENTAJAS B2B)
        $menu_name = 'Menú Principal B2B';
        $menu_exists = wp_get_nav_menu_object($menu_name);
        if ($menu_exists) {
            wp_delete_nav_menu($menu_exists->term_id);
        }
        $menu_id = wp_create_nav_menu($menu_name);
        if (!is_wp_error($menu_id)) {
            // 1. Inicio
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title'   => 'Inicio',
                'menu-item-url'     => home_url('/'),
                'menu-item-type'    => 'custom',
                'menu-item-status'  => 'publish',
            ]);
            // 2. Quiénes Somos
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title'   => 'Quiénes Somos',
                'menu-item-url'     => home_url('/quienes-somos/'),
                'menu-item-type'    => 'custom',
                'menu-item-status'  => 'publish',
            ]);
            // 3. Catálogos
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title'   => 'Catálogos',
                'menu-item-url'     => home_url('/catalogos/'),
                'menu-item-type'    => 'custom',
                'menu-item-status'  => 'publish',
            ]);
            // 4. Servicios
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title'   => 'Servicios',
                'menu-item-url'     => home_url('/#servicios'),
                'menu-item-type'    => 'custom',
                'menu-item-status'  => 'publish',
            ]);
            // 5. Ventajas B2B
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title'   => 'Ventajas B2B',
                'menu-item-url'     => home_url('/#ventajas-b2b'),
                'menu-item-type'    => 'custom',
                'menu-item-status'  => 'publish',
            ]);

            // Asignar ubicación
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary-menu'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        // Redirigir con mensaje de éxito
        wp_safe_redirect(admin_url('themes.php?page=pedregosa-demo-importer&imported=1&demo=' . urlencode($selected_demo)));
        exit;
    }
}
add_action('admin_init', 'pedregosa_handle_demo_import');

// Renderizar la página de administración
function pedregosa_render_demo_importer_page() {
    $current_demo = get_theme_mod('ped_demo_style', 'stitch');
    $demos = [
        'stitch' => [
            'name'        => 'Demo 1: Corporativa B2B & Sector Público (Base Oficial)',
            'desc'        => 'Enfoque en solvencia técnica desde 1987, acuerdos marco, licitaciones públicas (FACe / DIR3) y conexión mayorista oficial.',
            'badge'       => 'Recomendada Oficial',
            'preview_url' => home_url('/home-stitch/'),
        ],
        'tech' => [
            'name'        => 'Demo 2: IT & Hardware Tech-First (Equipos y Movilidad)',
            'desc'        => 'Enfoque en microinformática, portátiles y estaciones de trabajo con tarjeta interactiva de producto y stock 24/48h.',
            'badge'       => 'Catálogo IT',
            'preview_url' => home_url('/preview-premium.html'),
        ],
        'visual' => [
            'name'        => 'Demo 3: Proyectos Audiovisuales & Tecnología Educativa',
            'desc'        => 'Enfoque visual en integración de pantallas interactivas, aulas digitales, salas de juntas y proyectos llave en mano.',
            'badge'       => 'Proyectos Llave en Mano',
            'preview_url' => home_url('/preview-carrusel.html'),
        ],
        'mps' => [
            'name'        => 'Demo 4: Impresión Gestionada & Coste por Copia (MPS)',
            'desc'        => 'Enfoque en flotas de impresión HP/Brother/Epson, coste por página, auditoría de ahorro y mantenimiento integral.',
            'badge'       => 'Pago por Uso',
            'preview_url' => home_url('/preview-carrusel.html'),
        ],
    ];
    ?>
    <div class="wrap" style="max-width: 1200px;">
        <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #fff; padding: 24px 32px; border-radius: 12px; margin-bottom: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <span style="background: #b50524; color: #fff; padding: 4px 10px; border-radius: 999px; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 0.05em;">InfoPixel Theme Framework</span>
                    <h1 style="color: #fff; font-size: 26px; font-weight: 800; margin: 8px 0 4px 0;">Pedregosa Corporativa 3.0 &bull; Instalador de Demos</h1>
                    <p style="color: #94a3b8; margin: 0; font-size: 14px;">Desarrollado por <strong>CHRISTOPHE PALMIERO</strong> (<a href="https://www.infopixel.es" target="_blank" style="color: #38bdf8; text-decoration: none;">www.infopixel.es</a> &bull; info@infopixel.es)</p>
                </div>
                <div>
                    <a href="<?php echo esc_url(admin_url('customize.php?panel=pedregosa_options_panel')); ?>" class="button button-primary" style="background: #b50524; border-color: #b50524; padding: 6px 16px; font-weight: bold; height: auto;">
                        🎨 Abrir Personalizador en Vivo
                    </a>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['imported'])): ?>
            <div class="notice notice-success is-dismissible" style="padding: 14px 20px; border-left-color: #10b981; border-radius: 8px; margin-bottom: 24px;">
                <p style="font-size: 15px; font-weight: bold; color: #065f46; margin: 0;">
                    ✅ ¡Demo instalada y activada con éxito en 1 clic! La web está 100% configurada y lista para recibir visitas.
                </p>
            </div>
        <?php endif; ?>

        <div style="background: #fff; padding: 24px; border-radius: 10px; border: 1px solid #e2e8f0; margin-bottom: 28px;">
            <h2 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-top: 0;">Elige una de las 4 versiones comerciales disponibles</h2>
            <p style="color: #64748b; font-size: 14px; margin-bottom: 20px;">
                Al pulsar <strong>"Instalar y Activar Demo"</strong>, el sistema configurará automáticamente la portada, creará las páginas de catálogo y servicios si no existen, enlazará el menú corporativo y dejará el sitio listo para funcionar.
            </p>

            <form method="post" action="">
                <?php wp_nonce_field('pedregosa_import_demo_action', 'pedregosa_import_nonce'); ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 24px;">
                    <?php foreach ($demos as $id => $d): 
                        $is_active = ($current_demo === $id);
                    ?>
                        <label style="display: block; border: 2px solid <?php echo $is_active ? '#b50524' : '#e2e8f0'; ?>; border-radius: 10px; padding: 18px; background: <?php echo $is_active ? '#fff5f6' : '#f8fafc'; ?>; cursor: pointer; transition: all 0.2s ease;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <span style="background: #0f172a; color: #38bdf8; font-size: 10.5px; font-weight: bold; padding: 2px 8px; border-radius: 4px;"><?php echo esc_html($d['badge']); ?></span>
                                <input type="radio" name="selected_demo" value="<?php echo esc_attr($id); ?>" <?php checked($is_active); ?> style="accent-color: #b50524; transform: scale(1.2);">
                            </div>
                            <h3 style="font-size: 15px; font-weight: 700; color: #0f172a; margin: 8px 0;"><?php echo esc_html($d['name']); ?></h3>
                            <p style="font-size: 12.5px; color: #64748b; line-height: 1.5; margin: 0 0 14px 0;"><?php echo esc_html($d['desc']); ?></p>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #e2e8f0; padding-top: 10px;">
                                <a href="<?php echo esc_url($d['preview_url']); ?>" target="_blank" style="font-size: 12px; color: #b50524; text-decoration: none; font-weight: 600;">
                                    👁️ Ver Maqueta &rarr;
                                </a>
                                <?php if ($is_active): ?>
                                    <span style="font-size: 11px; font-weight: bold; color: #059669;">● Activa ahora</span>
                                <?php endif; ?>
                            </div>
                        </label>
                    <?php endforeach; ?>
                </div>

                <div style="text-align: right; padding-top: 12px; border-top: 1px solid #e2e8f0;">
                    <button type="submit" name="pedregosa_run_import" class="button button-primary button-hero" style="background: #b50524; border-color: #8a0018; font-weight: 800; font-size: 15px; padding: 10px 28px; box-shadow: 0 4px 10px rgba(181, 5, 36, 0.25);">
                        🚀 Instalar y Activar Demo Seleccionada en 1 Clic
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php
}
