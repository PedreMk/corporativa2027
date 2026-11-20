<?php
/**
 * Funciones y definiciones del tema - Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 * Versión: 3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PEDREGOSA_THEME_VERSION', '3.0.0');
define('PEDREGOSA_THEME_DIR', get_template_directory());
define('PEDREGOSA_THEME_URI', get_template_directory_uri());

/**
 * Soporte de características de WordPress
 */
function pedregosa_theme_setup() {
    // Título dinámico en <head>
    add_theme_support('title-tag');

    // Imágenes destacadas
    add_theme_support('post-thumbnails');

    // Logotipo personalizable
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Soporte HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Registro de menús
    register_nav_menus([
        'primary-menu' => __('Menú Principal B2B', 'pedregosa-corporate'),
        'footer-menu'  => __('Menú Pie de Página', 'pedregosa-corporate'),
    ]);
}
add_action('after_setup_theme', 'pedregosa_theme_setup');

/**
 * Encolar estilos y scripts
 */
function pedregosa_enqueue_scripts() {
    // Estilos del tema
    wp_enqueue_style('pedregosa-style', get_stylesheet_uri(), [], PEDREGOSA_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'pedregosa_enqueue_scripts');

/**
 * Cargar módulos internos de arquitectura
 */
require_once PEDREGOSA_THEME_DIR . '/inc/template-tags.php';
require_once PEDREGOSA_THEME_DIR . '/inc/customizer.php';
require_once PEDREGOSA_THEME_DIR . '/inc/demo-importer.php';


/**
 * Favicon oficial Pedregosa
 */
function pedregosa_custom_favicon() {
    $favicon = get_template_directory_uri() . '/assets/img/favicon.png';
    $ico = home_url('/favicon.ico');
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url($favicon) . '">' . "\n";
    echo '<link rel="shortcut icon" href="' . esc_url($ico) . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($favicon) . '">' . "\n";
}
add_action('wp_head', 'pedregosa_custom_favicon', 1);
add_action('login_head', 'pedregosa_custom_favicon', 1);
add_action('admin_head', 'pedregosa_custom_favicon', 1);


/**
 * Filtro de seguridad para limpiar shortcodes obsoletos de temas antiguos (Enfold/Avia)
 */
add_filter('the_content', function($content) {
    if (empty($content)) return $content;
    // Eliminar shortcodes [av_...] y [/av_...]
    $content = preg_replace('/\[\/?av_[^\]]*\]/', '', $content);
    return $content;
}, 5);
