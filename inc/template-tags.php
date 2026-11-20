<?php
/**
 * Funciones auxiliares y etiquetas de plantilla para Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Obtener valor de personalización con valor por defecto
 */
function pedregosa_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Datos de contacto rápidos
 */
function pedregosa_phone() {
    return esc_html(pedregosa_get_option('ped_phone', '954 36 80 11'));
}

function pedregosa_phone_link() {
    return esc_url(pedregosa_get_option('ped_phone_link', 'tel:954368011'));
}

function pedregosa_email() {
    return esc_html(pedregosa_get_option('ped_email', 'pedidos@pedregosa.es'));
}

function pedregosa_email_concurso() {
    return esc_html(pedregosa_get_option('ped_email_concurso', 'concurso@pedregosa.es'));
}

function pedregosa_address() {
    return esc_html(pedregosa_get_option('ped_address', 'Polígono Store, C/ Gramil nº 8, 41008 Sevilla'));
}

function pedregosa_schedule() {
    return esc_html(pedregosa_get_option('ped_schedule', 'L-J 8:30 - 17:30 | V 8:00 - 15:00'));
}

function pedregosa_shop_url() {
    return esc_url(pedregosa_get_option('ped_shop_url', 'http://34.255.186.36/'));
}
