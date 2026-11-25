<?php
/**
 * Panel de Personalización de WordPress (Theme Customizer API) para Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */

if (!defined('ABSPATH')) {
    exit;
}

function pedregosa_customize_register($wp_customize) {

    // PANEL PRINCIPAL
    $wp_customize->add_panel('pedregosa_options_panel', [
        'title'       => __('⚙️ Opciones Pedregosa B2B 3.0 (InfoPixel)', 'pedregosa-corporate'),
        'description' => __('Gestión visual completa de la web corporativa: demos, datos de sede, sliders, métricas y enlaces B2B.', 'pedregosa-corporate'),
        'priority'    => 20,
    ]);

    // =========================================================================
    // 1. SELECCIÓN DE DEMO / VERSIÓN COMERCIAL
    // =========================================================================
    $wp_customize->add_section('ped_section_demo', [
        'title'    => __('🎨 Selección de Versión / Demo', 'pedregosa-corporate'),
        'panel'    => 'pedregosa_options_panel',
        'priority' => 10,
    ]);

    $wp_customize->add_setting('ped_demo_style', [
        'default'           => 'stitch',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('ped_demo_style', [
        'label'       => __('Elige el modelo de portada activo:', 'pedregosa-corporate'),
        'description' => __('Cambia al instante el enfoque comercial de la portada entre las 4 versiones oficiales disponibles.', 'pedregosa-corporate'),
        'section'     => 'ped_section_demo',
        'type'        => 'select',
        'choices'     => [
            'stitch' => __('Demo 1: Corporativa B2B & Sector Público (Base Oficial)', 'pedregosa-corporate'),
            'tech'   => __('Demo 2: IT & Hardware Tech-First (Equipos y Movilidad)', 'pedregosa-corporate'),
            'visual' => __('Demo 3: Proyectos Audiovisuales & Tecnología Educativa', 'pedregosa-corporate'),
            'mps'    => __('Demo 4: Impresión Gestionada & Coste por Copia (MPS)', 'pedregosa-corporate'),
        ],
    ]);

    // =========================================================================
    // 2. DATOS DE SEDE Y CANALES DE CONTACTO
    // =========================================================================
    $wp_customize->add_section('ped_section_company', [
        'title'    => __('🏢 Datos de Sede y Contacto', 'pedregosa-corporate'),
        'panel'    => 'pedregosa_options_panel',
        'priority' => 20,
    ]);

    $company_fields = [
        'ped_phone'        => ['label' => 'Teléfono Comercial', 'default' => '954 36 80 11'],
        'ped_phone_link'   => ['label' => 'Enlace Teléfono (tel:)', 'default' => 'tel:954368011'],
        'ped_email'        => ['label' => 'Email de Pedidos y Presupuestos B2B', 'default' => 'pedidos@pedregosa.es'],
        'ped_email_concurso' => ['label' => 'Email de Concursos y Licitaciones', 'default' => 'concurso@pedregosa.es'],
        'ped_address'      => ['label' => 'Dirección de Sede Central', 'default' => 'Polígono Store, C/ Gramil nº 8, 41008 Sevilla'],
        'ped_schedule'     => ['label' => 'Horario Comercial', 'default' => 'L-J 8:30 - 17:30 | V 8:00 - 15:00'],
    ];

    foreach ($company_fields as $key => $info) {
        $wp_customize->add_setting($key, [
            'default'           => $info['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control($key, [
            'label'   => $info['label'],
            'section' => 'ped_section_company',
            'type'    => 'text',
        ]);
    }

    // =========================================================================
    // 3. DIAPOSITIVAS DEL HERO (SLIDER B2B: SLIDES 1, 2, 3 Y 4 EDITABLES)
    // =========================================================================
    $slides_config = [
        1 => [
            'section'    => 'ped_section_hero',
            'sec_title'  => __('🖼️ Slide 1: Portada Corporativa B2B', 'pedregosa-corporate'),
            'priority'   => 30,
            'badge'      => 'PROVEEDOR HOMOLOGADO B2B & SECTOR PÚBLICO',
            'badge_sub'  => 'Soluciones para PYMES, Grandes Cuentas y Administraciones',
            'title'      => 'Soluciones integrales en <span class="text-primary-container">Impresión</span>, Oficina y <span class="text-primary-container">Tecnología</span> para su empresa.',
            'desc'       => 'Centralice sus compras en un único proveedor de máxima solvencia técnica. Más de 35 años aprovisionando con rigor a administraciones públicas, universidades y aportando agilidad, precios directos y asesoría personalizada a PYMES y sector privado. Catálogo con más de 30.000 referencias y entregas 24/48h.',
            'tags'       => '+35 Años de Experiencia | 30.000+ Referencias | Entrega 24/48h Península',
            'btn1_text'  => 'Solicitar Presupuesto Corporativo',
            'btn1_url'   => '#contacto',
            'btn2_text'  => 'Explorar Portales Online',
            'btn2_url'   => '#servicios',
            'microcopy'  => '¿Consultas o stock crítico? Llámenos al 954 36 80 11 | Atención comercial directa L-V',
            'img'        => 'http://pedregosa-30.local/wp-content/uploads/2026/03/FACHADA-CALLE-GRAMIL-8-1030x433.jpg',
            'card_badge' => 'Sede Central • Polígono Store (Sevilla)',
            'card_title' => 'Polígono Store, C/ Gramil nº 8, 41008 Sevilla',
            'card_sub'   => 'Conexión telemática directa con almacenes oficiales de fabricantes en España',
        ],
        2 => [
            'section'    => 'ped_section_hero_slide2',
            'sec_title'  => __('💻 Slide 2: Renovación IT & Acuerdos Marco', 'pedregosa-corporate'),
            'priority'   => 31,
            'badge'      => 'RENOVACIÓN DE PARQUE INFORMÁTICO • ACUERDOS MARCO',
            'badge_sub'  => 'Aprovisionamiento Corporativo Homologado',
            'title'      => 'Flotas de <span class="text-primary-container">Portátiles y Puestos IT</span> configurados a medida para su equipo.',
            'desc'       => 'No solo entregamos hardware: diseñamos y desplegamos proyectos de renovación tecnológica para empresas y organismos públicos. Si su proyecto o concurso lo requiere, preparamos, serigrafiamos y etiquetamos sus equipos antes de la entrega, con ampliación oficial de garantía del fabricante y cumplimiento estricto de pliegos técnicos.',
            'tags'       => 'ACER | ASUS | LG Electronics (LGE)',
            'btn1_text'  => 'Solicitar Propuesta de Proyecto',
            'btn1_url'   => '#contacto',
            'btn2_text'  => 'Explorar Catálogo Profesional',
            'btn2_url'   => 'https://tienda.pedregosa.es',
            'microcopy'  => 'Asesoramiento técnico previo • Facturación adaptada a AA.PP. y empresas privadas',
            'img'        => 'https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?auto=format&fit=crop&w=1000&q=80',
            'card_badge' => 'DISPONIBILIDAD GARANTIZADA • 24/48H',
            'card_title' => '+2.400 Configuraciones Profesionales',
            'card_sub'   => 'Condiciones especiales para proyectos por volumen, licitaciones y Acuerdos Marco.',
        ],
        3 => [
            'section'    => 'ped_section_hero_slide3',
            'sec_title'  => __('🖥️ Slide 3: Aulas Digitales & Audiovisuales', 'pedregosa-corporate'),
            'priority'   => 32,
            'badge'      => 'TECNOLOGÍA EDUCATIVA • AUDIOVISUALES',
            'badge_sub'  => 'Salas de Juntas y Campus Homologados',
            'title'      => 'Pantallas Interactivas y <span class="text-primary-container">Tecnología Educativa</span>.',
            'desc'       => 'Equipamiento interactivo para educación digital y salas ejecutivas. Monitores táctiles 4K de 65", 75" y 86", videobar inteligentes Teams/Zoom con IA y soporte de instalación llave en mano por técnicos cualificados.',
            'tags'       => 'Paneles Táctiles 4K | Videoconferencia Inteligente | Instalación Llave en Mano',
            'btn1_text'  => 'Solicitar Proyecto Audiovisual',
            'btn1_url'   => '#contacto',
            'btn2_text'  => 'Ver Soluciones Audiovisuales',
            'btn2_url'   => '/audiovisuales/',
            'microcopy'  => 'Canal Oficial Promethean, Clevertouch, ViewSonic y equipamiento homologado',
            'img'        => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1000&q=80',
            'card_badge' => 'CENTROS EDUCATIVOS • SECTOR PÚBLICO',
            'card_title' => 'Aulas Digitales y Campus Digitales',
            'card_sub'   => 'Pantallas táctiles interactivas y entornos de colaboración digital',
        ],
        4 => [
            'section'    => 'ped_section_hero_slide4',
            'sec_title'  => __('🖨️ Slide 4: Impresión y Pago por Copia', 'pedregosa-corporate'),
            'priority'   => 33,
            'badge'      => 'OPTIMIZACIÓN DE COSTES • PAGO POR COPIA',
            'badge_sub'  => 'Servicios Gestionados de Impresión (MPS)',
            'title'      => 'Servicios Gestionados de <span class="text-primary-container">Impresión y Pago por Copia</span>.',
            'desc'       => 'Reduzca hasta un 30% los costes de su parque de impresoras multifunción. Monitorización automática de niveles de tóner, reposición predictiva de consumibles y mantenimiento técnico in situ con piezas y mano de obra incluidos.',
            'tags'       => 'Ahorro hasta 30% | Reposición Automática de Tóner | Soporte Técnico In Situ',
            'btn1_text'  => 'Solicitar Auditoría Sin Coste',
            'btn1_url'   => '#contacto',
            'btn2_text'  => 'Ver Consumibles e Impresoras',
            'btn2_url'   => '/consumibles-e-impresoras/',
            'microcopy'  => 'Monitorización remota proactiva y contratos de mantenimiento directo',
            'img'        => get_template_directory_uri() . '/assets/img/tecnico-impresora-encuadrado.jpg',
            'card_badge' => 'AUDITORÍA SIN COSTE • FLOTAS MPS',
            'card_title' => 'Parque de Multifuncionales Profesionales',
            'card_sub'   => 'Optimización integral de costes documentales y contratos de mantenimiento directo',
        ],
    ];

    foreach ($slides_config as $num => $cfg) {
        $sec = $cfg['section'];
        $wp_customize->add_section($sec, [
            'title'    => $cfg['sec_title'],
            'panel'    => 'pedregosa_options_panel',
            'priority' => $cfg['priority'],
        ]);

        $fields = [
            "ped_slide{$num}_badge"      => ['label' => "Slide {$num} - Etiqueta Superior (Badge)", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_badge_sub"  => ['label' => "Slide {$num} - Sub-etiqueta", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_title"      => ['label' => "Slide {$num} - Titular Principal (admite <span>)", 'type' => 'textarea', 'sanitize' => 'wp_kses_post'],
            "ped_slide{$num}_desc"       => ['label' => "Slide {$num} - Párrafo Descriptivo", 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
            "ped_slide{$num}_tags"       => ['label' => "Slide {$num} - Pills / Fabricantes (separados por |)", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_btn1_text"  => ['label' => "Slide {$num} - Botón 1 Texto", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_btn1_url"   => ['label' => "Slide {$num} - Botón 1 Enlace", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_btn2_text"  => ['label' => "Slide {$num} - Botón 2 Texto", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_btn2_url"   => ['label' => "Slide {$num} - Botón 2 Enlace", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_microcopy"  => ['label' => "Slide {$num} - Microcopy Inferior", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_card_badge" => ['label' => "Slide {$num} - Tarjeta Imagen (Etiqueta)", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_card_title" => ['label' => "Slide {$num} - Tarjeta Imagen (Título)", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
            "ped_slide{$num}_card_sub"   => ['label' => "Slide {$num} - Tarjeta Imagen (Subtítulo)", 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
        ];

        $map_keys = [
            "ped_slide{$num}_badge"      => 'badge',
            "ped_slide{$num}_badge_sub"  => 'badge_sub',
            "ped_slide{$num}_title"      => 'title',
            "ped_slide{$num}_desc"       => 'desc',
            "ped_slide{$num}_tags"       => 'tags',
            "ped_slide{$num}_btn1_text"  => 'btn1_text',
            "ped_slide{$num}_btn1_url"   => 'btn1_url',
            "ped_slide{$num}_btn2_text"  => 'btn2_text',
            "ped_slide{$num}_btn2_url"   => 'btn2_url',
            "ped_slide{$num}_microcopy"  => 'microcopy',
            "ped_slide{$num}_card_badge" => 'card_badge',
            "ped_slide{$num}_card_title" => 'card_title',
            "ped_slide{$num}_card_sub"   => 'card_sub',
        ];

        foreach ($fields as $setting_id => $meta) {
            $default_key = $map_keys[$setting_id];
            $wp_customize->add_setting($setting_id, [
                'default'           => $cfg[$default_key],
                'sanitize_callback' => $meta['sanitize'],
                'transport'         => 'refresh',
            ]);
            $wp_customize->add_control($setting_id, [
                'label'   => $meta['label'],
                'section' => $sec,
                'type'    => $meta['type'],
            ]);
        }

        $wp_customize->add_setting("ped_slide{$num}_img", [
            'default'           => $cfg['img'],
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "ped_slide{$num}_img", [
            'label'   => "Slide {$num} - Imagen Lateral",
            'section' => $sec,
        ]));
    }

    // =========================================================================
    // 4. MÉTRICAS DE SOLVENCIA B2B (LOS 4 CONTADORES)
    // =========================================================================
    $wp_customize->add_section('ped_section_metrics', [
        'title'    => __('📊 Métricas de Solvencia B2B', 'pedregosa-corporate'),
        'panel'    => 'pedregosa_options_panel',
        'priority' => 40,
    ]);

    $metrics = [
        ['key' => 'ped_m1', 'num' => '+35 Años', 'label' => 'Liderazgo Continuo (desde 1987)'],
        ['key' => 'ped_m2', 'num' => '+50.000', 'label' => 'Pedidos B2B Gestionados al Año'],
        ['key' => 'ped_m3', 'num' => '+30.000', 'label' => 'Refs. Catálogo Multimarca Homologado'],
        ['key' => 'ped_m4', 'num' => '24/48 Horas', 'label' => 'Entrega Rápida en Andalucía e Iberia'],
    ];

    foreach ($metrics as $idx => $m) {
        $wp_customize->add_setting("{$m['key']}_num", ['default' => $m['num'], 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_control("{$m['key']}_num", [
            'label'   => sprintf(__('Métrica %d - Valor', 'pedregosa-corporate'), $idx + 1),
            'section' => 'ped_section_metrics',
            'type'    => 'text',
        ]);

        $wp_customize->add_setting("{$m['key']}_label", ['default' => $m['label'], 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_control("{$m['key']}_label", [
            'label'   => sprintf(__('Métrica %d - Etiqueta', 'pedregosa-corporate'), $idx + 1),
            'section' => 'ped_section_metrics',
            'type'    => 'text',
        ]);
    }

    // =========================================================================
    // 5. ENLACES A TIENDA PRESTASHOP Y PORTALES
    // =========================================================================
    $wp_customize->add_section('ped_section_links', [
        'title'    => __('🛒 Enlaces a Portales y Tienda Online', 'pedregosa-corporate'),
        'panel'    => 'pedregosa_options_panel',
        'priority' => 50,
    ]);

    $links = [
        'ped_shop_url'    => ['label' => 'URL Tienda PrestaShop Informática', 'default' => 'http://34.255.186.36/'],
        'ped_catalog_url' => ['label' => 'URL Catálogos / Fichas Técnicas', 'default' => '/catalogos/'],
        'ped_dir3_url'    => ['label' => 'URL Información Licitaciones FACe / DIR3', 'default' => '#licitaciones'],
    ];

    foreach ($links as $k => $info) {
        $wp_customize->add_setting($k, ['default' => $info['default'], 'sanitize_callback' => 'esc_url_raw']);
        $wp_customize->add_control($k, [
            'label'   => $info['label'],
            'section' => 'ped_section_links',
            'type'    => 'url',
        ]);
    }
}
add_action('customize_register', 'pedregosa_customize_register');
