<?php
/**
 * Header corporativo unificado - Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <?php wp_head(); ?>
  
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"/>
  <link rel="shortcut icon" href="<?php echo home_url('/favicon.ico'); ?>"/>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"/>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#8a0018",
            "primary-container": "#b50524",
            "crimson-deep": "#8F031C",
            "slate-border": "#E2E8F0",
            "on-surface": "#0b1c30",
            "on-surface-variant": "#5b403f",
            "surface": "#f8f9ff",
            "surface-container": "#eff4ff",
            "surface-container-low": "#f1f5f9",
            "surface-container-lowest": "#ffffff",
            "inverse-surface": "#0f172a",
            "inverse-on-surface": "#f8fafc",
            "badge-accent-blue": "#0284C7",
            "badge-accent-emerald": "#059669",
            "badge-accent-amber": "#D97706"
          },
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'sans-serif'],
            headline: ['Plus Jakarta Sans', 'sans-serif']
          }
        }
      }
    };
  </script>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
  </style>
</head>
<body <?php body_class('bg-white text-on-surface antialiased selection:bg-primary-container selection:text-white'); ?>>
<?php wp_body_open(); ?>

  <!-- ==========================================
       TOPBAR B2B INSTITUCIONAL
       ========================================== -->
  <aside class="w-full bg-inverse-surface text-inverse-on-surface text-xs border-b border-slate-800">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8 py-2 flex flex-wrap items-center justify-between gap-3">
      
      <!-- Teléfono y Sede -->
      <div class="flex items-center gap-4 text-xs font-medium">
        <a class="flex items-center gap-1.5 text-white hover:text-primary-container font-bold transition-colors" href="<?php echo pedregosa_phone_link(); ?>">
          <span class="material-symbols-outlined text-primary-container text-sm">call</span>
          <span><?php echo pedregosa_phone(); ?></span>
        </a>
        <span class="hidden sm:inline text-white/30">&bull;</span>
        <span class="hidden sm:flex items-center gap-1.5 text-white/80">
          <span class="material-symbols-outlined text-sm text-sky-400">pin_drop</span>
          <span><?php echo pedregosa_address(); ?></span>
        </span>
        <span class="hidden lg:inline text-white/30">&bull;</span>
        <span class="hidden lg:flex items-center gap-1.5 text-white/70">
          <span class="material-symbols-outlined text-sm text-emerald-400">schedule</span>
          <span><?php echo pedregosa_schedule(); ?></span>
        </span>
      </div>

      <!-- Enlace directo a Tienda PrestaShop & Acceso B2B -->
      <div class="flex items-center gap-3">
        <a class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-white/10 hover:bg-white/20 text-white text-[11px] font-bold tracking-wide transition-colors" href="<?php echo pedregosa_shop_url(); ?>" target="_blank">
          <span class="material-symbols-outlined text-[13px] text-sky-300">shopping_cart</span>
          <span>Tienda Online Informática B2B</span>
          <span class="material-symbols-outlined text-[11px]">arrow_forward</span>
        </a>
        <a class="hidden md:inline-flex items-center gap-1 text-white/70 hover:text-white text-[11px] font-medium transition-colors" href="<?php echo pedregosa_shop_url(); ?>login" target="_blank">
          <span class="material-symbols-outlined text-[13px]">person</span>
          <span>Acceso Clientes / DIR3</span>
        </a>
      </div>

    </div>
  </aside>

  <!-- ==========================================
       HEADER PRINCIPAL
       ========================================== -->
  <header class="sticky top-0 z-50 w-full bg-white/95 backdrop-blur-md border-b border-slate-border shadow-xs">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8 h-20 flex items-center justify-between gap-6">
      
      <!-- Logotipo Oficial Pedregosa -->
      <a class="flex items-center gap-3 py-1 group" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="h-10 w-auto object-contain transition-transform group-hover:scale-102" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcEnboILhk3Zf9NN_H5a0mL0u_lLrAANPEMxZTdJawbR6tAK20qM_41PaWvzqGTRcbkb_sZqD5Vw7X_6f9aeZdtpc06dN4bfHgkIFLaOkhPqurncWfwMKqEe2RoCQYXfah4Pv35FBbxXUp31wzBZzK4vbztrwUh9PjZ-bLi4UwDTLL2-MA63XMfVp4JHjY3adtA4ERNlHfxpB7E450wQ88c5NiaB5s4BCdRryWqfdIMk-WIAODdtK9sA" alt="Pedregosa S.L. - Suministro Integral B2B desde 1987"/>
        <div class="hidden xl:flex flex-col border-l border-slate-200 pl-3">
          <span class="text-[11px] font-extrabold uppercase tracking-wider text-primary">Suministro Integral B2B</span>
          <span class="text-[10px] text-slate-500 font-medium">Soluciones para Empresas &bull; Desde 1987</span>
        </div>
      </a>

      <!-- Menú de Navegación Principal (Orden Oficial Solicitado) -->
      <nav class="hidden lg:flex items-center gap-1 font-semibold text-sm text-on-surface">
        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors font-bold <?php echo is_front_page() ? 'text-primary' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>">
          Inicio
        </a>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors <?php echo is_page('quienes-somos') ? 'text-primary font-bold' : ''; ?>" href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">
          Quiénes Somos
        </a>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors <?php echo is_page('catalogos') ? 'text-primary font-bold' : ''; ?>" href="<?php echo esc_url(home_url('/catalogos/')); ?>">
          Catálogos
        </a>
        
        <!-- Dropdown Servicios -->
        <div class="relative group">
          <button class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors flex items-center gap-1 font-semibold cursor-pointer">
            <span>Servicios</span>
            <span class="material-symbols-outlined text-[17px] text-slate-400 group-hover:text-primary transition-transform group-hover:rotate-180">expand_more</span>
          </button>
          
          <div class="absolute top-full left-0 w-72 bg-white rounded-xl border border-slate-border shadow-xl p-2 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/informatica/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-red-50 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">laptop_mac</span></span>
              <div><span>Informática y Software IT</span><span class="block text-[10px] text-slate-400 font-normal">Puestos, portátiles y servidores</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/consumibles-e-impresoras/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">print</span></span>
              <div><span>Consumibles e Impresoras</span><span class="block text-[10px] text-slate-400 font-normal">Tóner oficial y flotas MPS</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/audiovisuales/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">tv</span></span>
              <div><span>Audiovisuales e Integración</span><span class="block text-[10px] text-slate-400 font-normal">Pantallas táctiles y videoconferencia</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/mobiliario-e-instalaciones-de-oficina/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">chair</span></span>
              <div><span>Mobiliario de Oficina</span><span class="block text-[10px] text-slate-400 font-normal">Sillería ergonómica y mamparas</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/equipos-educat/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">school</span></span>
              <div><span>Tecnología Educativa</span><span class="block text-[10px] text-slate-400 font-normal">Campus digitales y colegios</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/artes-graficas-y-regalos/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-rose-50 text-rose-700 flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">card_giftcard</span></span>
              <div><span>Artes Gráficas y Regalos</span><span class="block text-[10px] text-slate-400 font-normal">Merchandising e imprenta</span></div>
            </a>
          </div>
        </div>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors text-slate-600" href="<?php echo esc_url(home_url('/#ventajas-b2b')); ?>">
          Ventajas B2B
        </a>
      </nav>

      <!-- Botón CTA Presupuesto -->
      <div class="flex items-center gap-3">
        <a class="hidden sm:inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container transition-all" href="<?php echo esc_url(home_url('/#contacto')); ?>">
          <span class="material-symbols-outlined text-[18px]">send</span>
          <span>Solicitar Presupuesto</span>
        </a>
      </div>

    </div>
  </header>
