<?php
/**
 * Header corporativo unificado - Pedregosa Corporativa 3.0
 * Diseñado y desarrollado por INFOPIXEL STUDIO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <!-- Autoría Técnica Oficial (No visible en pantalla) -->
  <meta name="author" content="INFOPIXEL STUDIO - www.infopixel.es"/>
  <meta name="creator" content="INFOPIXEL STUDIO"/>
  <meta name="developer" content="INFOPIXEL STUDIO (www.infopixel.es)"/>
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
  <!-- Datos Estructurados Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["WholesaleStore", "LocalBusiness"],
    "name": "PEDREGOSA S.L.",
    "taxID": "B41501388",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "logo": "<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-pedregosa-tagline.png'); ?>",
    "telephone": "+34954368011",
    "email": "pedidos@pedregosa.es",
    "priceRange": "€€",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Polígono Store, Calle Gramil nº 8",
      "addressLocality": "Sevilla",
      "postalCode": "41008",
      "addressRegion": "Andalucía",
      "addressCountry": "ES"
    },
    "openingHoursSpecification": [
      { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday"], "opens": "08:30", "closes": "14:30" },
      { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday"], "opens": "15:30", "closes": "17:30" },
      { "@type": "OpeningHoursSpecification", "dayOfWeek": "Friday", "opens": "08:00", "closes": "15:00" }
    ],
    "sameAs": [
      "https://tienda.pedregosa.es/",
      "https://oficina.pedregosa.es/",
      "https://www.linkedin.com/company/pedregosa-sl/"
    ]
  }
  </script>
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

      <!-- Menú de Navegación Principal (Orden Oficial Unificado: Inicio, Quiénes Somos, Servicios, Productos, Licitaciones B2G, Ventajas B2B) -->
      <nav class="hidden lg:flex items-center gap-1 font-semibold text-sm text-on-surface">
        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors font-bold <?php echo is_front_page() ? 'text-primary' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>">
          Inicio
        </a>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors <?php echo is_page('quienes-somos') ? 'text-primary font-bold' : ''; ?>" href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">
          Quiénes Somos
        </a>

        <!-- Dropdown Servicios (Páginas específicas de soluciones a puntos de dolor) -->
        <div class="relative group">
          <button type="button" class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors flex items-center gap-1 font-semibold cursor-pointer <?php echo (is_page('coste-por-copia') || is_page('informatica') || is_page('mobiliario-de-oficina') || is_page('audiovisuales') || is_page('equipos-educat') || is_page('artes-graficas-y-regalos')) ? 'text-primary font-bold' : ''; ?>">
            <span>Servicios</span>
            <span class="material-symbols-outlined text-[17px] text-slate-400 group-hover:text-primary transition-transform group-hover:rotate-180">expand_more</span>
          </button>
          
          <div class="absolute top-full left-0 w-[560px] bg-white rounded-xl border border-slate-border shadow-xl p-2.5 grid grid-cols-2 gap-1 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/coste-por-copia/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-red-50 text-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">print</span></span>
              <div><span>Coste por Copia (MPS)</span><span class="block text-[10px] text-slate-400 font-normal">Ahorro hasta 30% y calculadora</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/informatica/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">laptop_mac</span></span>
              <div><span>Informática y Flotas IT</span><span class="block text-[10px] text-slate-400 font-normal">Despliegues a medida y pliegos</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/mobiliario-de-oficina/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">chair_alt</span></span>
              <div><span>Mobiliario y Proyectos 2D/3D</span><span class="block text-[10px] text-slate-400 font-normal">Mesas Emobok y montaje propio</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/audiovisuales/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">tv</span></span>
              <div><span>Audiovisuales y Salas Híbridas</span><span class="block text-[10px] text-slate-400 font-normal">Pantallas táctiles 4K y Teams/Zoom</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/equipos-educat/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">school</span></span>
              <div><span>Tecnología Educativa</span><span class="block text-[10px] text-slate-400 font-normal">Campus digitales y colegios</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/artes-graficas-y-regalos/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-rose-50 text-rose-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">card_giftcard</span></span>
              <div><span>Artes Gráficas y Regalo Corporativo</span><span class="block text-[10px] text-slate-400 font-normal">Imprenta y merchandising B2B</span></div>
            </a>
          </div>
        </div>

        <!-- Dropdown Productos (Tiendas online directas y Catálogos PDF) -->
        <div class="relative group">
          <button type="button" class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors flex items-center gap-1 font-semibold cursor-pointer <?php echo is_page('catalogos') ? 'text-primary font-bold' : ''; ?>">
            <span>Productos</span>
            <span class="material-symbols-outlined text-[17px] text-slate-400 group-hover:text-primary transition-transform group-hover:rotate-180">expand_more</span>
          </button>

          <div class="absolute top-full left-0 w-80 bg-white rounded-xl border border-slate-border shadow-xl p-2 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(pedregosa_shop_url()); ?>" target="_blank" rel="noopener">
              <span class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">devices</span></span>
              <div><span>Tienda Informática &amp; Hardware IT</span><span class="block text-[10px] text-slate-400 font-normal">Portátiles, PCs, servidores y periféricos</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="https://oficina.pedregosa.es" target="_blank" rel="noopener">
              <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">inventory_2</span></span>
              <div><span>Tienda Material de Oficina &amp; Tóner</span><span class="block text-[10px] text-slate-400 font-normal">Papelería, archivo y consumibles 24/48h</span></div>
            </a>
            <a class="flex items-center gap-3 p-2.5 rounded-lg hover:bg-slate-50 text-xs font-bold text-slate-800 hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/catalogos/')); ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-[18px]">menu_book</span></span>
              <div><span>Catálogos Oficiales y Tarifas PDF</span><span class="block text-[10px] text-slate-400 font-normal">Catálogo General 2026, Emobok y Sillería</span></div>
            </a>
          </div>
        </div>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors <?php echo is_page('acuerdos-licitaciones') ? 'text-primary font-bold' : ''; ?>" href="<?php echo esc_url(home_url('/acuerdos-licitaciones/')); ?>">
          Licitaciones B2G
        </a>

        <a class="px-3.5 py-2 rounded-lg hover:text-primary transition-colors <?php echo is_page('ventajas-b2b') ? 'text-primary font-bold' : 'text-slate-600'; ?>" href="<?php echo esc_url(home_url('/ventajas-b2b/')); ?>">
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
