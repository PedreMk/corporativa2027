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
    // 3. DIAPOSITIVAS DEL HERO (SLIDER B2B)
    // =========================================================================
    $wp_customize->add_section('ped_section_hero', [
        'title'    => __('🖼️ Diapositivas de Portada (Slider)', 'pedregosa-corporate'),
        'panel'    => 'pedregosa_options_panel',
        'priority' => 30,
    ]);

    // Slide 1
    $wp_customize->add_setting('ped_slide1_title', [
        'default'           => 'Soluciones integrales en Impresión, Oficina y Tecnología para su empresa',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ped_slide1_title', [
        'label'   => __('Slide 1 - Titular Principal', 'pedregosa-corporate'),
        'section' => 'ped_section_hero',
        'type'    => 'textarea',
    ]);

    $wp_customize->add_setting('ped_slide1_desc', [
        'default'           => 'Centralice sus compras en un único proveedor de máxima solvencia técnica. Más de 35 años aprovisionando con rigor a administraciones públicas, universidades y aportando agilidad, precios directos y asesoría personalizada a PYMES y sector privado. Catálogo con más de 30.000 referencias y entregas 24/48h.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('ped_slide1_desc', [
        'label'   => __('Slide 1 - Párrafo Descriptivo', 'pedregosa-corporate'),
        'section' => 'ped_section_hero',
        'type'    => 'textarea',
    ]);

    $wp_customize->add_setting('ped_slide1_btn1_text', ['default' => 'Solicitar Presupuesto Corporativo', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('ped_slide1_btn1_text', ['label' => 'Slide 1 - Botón 1 Texto', 'section' => 'ped_section_hero', 'type' => 'text']);

    $wp_customize->add_setting('ped_slide1_btn1_url', ['default' => '#contacto-rapido', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('ped_slide1_btn1_url', ['label' => 'Slide 1 - Botón 1 Enlace', 'section' => 'ped_section_hero', 'type' => 'text']);

    $wp_customize->add_setting('ped_slide1_btn2_text', ['default' => 'Explorar Portales Online', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('ped_slide1_btn2_text', ['label' => 'Slide 1 - Botón 2 Texto', 'section' => 'ped_section_hero', 'type' => 'text']);

    $wp_customize->add_setting('ped_slide1_btn2_url', ['default' => '#portales-tienda', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('ped_slide1_btn2_url', ['label' => 'Slide 1 - Botón 2 Enlace', 'section' => 'ped_section_hero', 'type' => 'text']);

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
