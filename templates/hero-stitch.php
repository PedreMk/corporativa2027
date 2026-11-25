<?php
/**
 * Hero Template - Slider B2B Rotativo Multi-Diapositiva (Grid Stacking Anti-Escalón)
 * Tema: Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

$theme_uri = get_template_directory_uri();
$phone = pedregosa_phone();
$address = pedregosa_address();

// Definición dinámica de las 4 diapositivas del carrusel corporativo (editables desde Personalizar)
$slide_defaults = [
    1 => [
        'badge'      => 'PROVEEDOR HOMOLOGADO B2B &amp; SECTOR PÚBLICO',
        'badge_sub'  => 'Soluciones para PYMES, Grandes Cuentas y Administraciones',
        'badge_icon' => 'verified',
        'title'      => 'Soluciones integrales en <span class="text-primary-container">Impresión</span>, Oficina y <span class="text-primary-container">Tecnología</span> para su empresa.',
        'desc'       => 'Centralice sus compras en un único proveedor de máxima solvencia técnica. Más de 35 años aprovisionando con rigor a administraciones públicas, universidades y aportando agilidad, precios directos y asesoría personalizada a PYMES y sector privado. Catálogo con más de 30.000 referencias y entregas 24/48h.',
        'tags'       => '+35 Años de Experiencia | 30.000+ Referencias | Entrega 24/48h Península',
        'btn1_text'  => 'SOLICITAR PRESUPUESTO',
        'btn1_url'   => '#contacto',
        'btn2_text'  => 'Explorar Portales Online',
        'btn2_url'   => '#servicios',
        'microcopy'  => '¿Consultas o stock crítico? Llámenos al ' . $phone . ' | Atención comercial directa L-V',
        'img_src'    => $theme_uri . '/assets/img/fachada-gramil.jpg',
        'card_badge' => 'Sede Central &bull; Polígono Store (Sevilla)',
        'card_title' => $address,
        'card_sub'   => 'Conexión telemática directa con almacenes oficiales de fabricantes en España',
    ],
    2 => [
        'badge'      => 'RENOVACIÓN DE PARQUE INFORMÁTICO &bull; ACUERDOS MARCO',
        'badge_sub'  => 'Aprovisionamiento Corporativo Homologado',
        'badge_icon' => 'laptop_mac',
        'title'      => 'Flotas de <span class="text-primary-container">Portátiles y Puestos IT</span> configurados a medida para su equipo.',
        'desc'       => 'No solo entregamos hardware: diseñamos y desplegamos proyectos de renovación tecnológica para empresas y organismos públicos. Si su proyecto o concurso lo requiere, preparamos, serigrafiamos y etiquetamos sus equipos antes de la entrega, con ampliación oficial de garantía del fabricante y cumplimiento estricto de pliegos técnicos.',
        'tags'       => 'ACER | ASUS | LG Electronics (LGE)',
        'btn1_text'  => 'Solicitar Propuesta de Proyecto',
        'btn1_url'   => '#contacto',
        'btn2_text'  => 'Explorar Catálogo Profesional',
        'btn2_url'   => 'https://tienda.pedregosa.es',
        'microcopy'  => 'Asesoramiento técnico previo &bull; Facturación adaptada a AA.PP. y empresas privadas',
        'img_src'    => 'https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?auto=format&fit=crop&w=1000&q=80',
        'card_badge' => 'DISPONIBILIDAD GARANTIZADA &bull; 24/48H',
        'card_title' => '+2.400 Configuraciones Profesionales',
        'card_sub'   => 'Condiciones especiales para proyectos por volumen, licitaciones y Acuerdos Marco.',
    ],
    3 => [
        'badge'      => 'TECNOLOGÍA EDUCATIVA &bull; TECNOLOGÍA AUDIOVISUAL',
        'badge_sub'  => 'Salas de Juntas y Centros de Formación Homologados',
        'badge_icon' => 'co_present',
        'title'      => 'Pantallas Interactivas y <span class="text-primary-container">Tecnología Educativa</span>',
        'desc'       => 'Equipamiento interactivo para educación digital y salas ejecutivas. Monitores táctiles 4K de 65", 75" y 86", videobar inteligentes Teams/Zoom con IA y soporte de instalación llave en mano por técnicos cualificados.',
        'tags'       => 'Paneles Táctiles 4K | Videoconferencia Inteligente | Instalación Llave en Mano',
        'btn1_text'  => 'SOLICITAR PRESUPUESTO',
        'btn1_url'   => '#contacto',
        'btn2_text'  => 'Ver Soluciones Audiovisuales',
        'btn2_url'   => esc_url(home_url('/audiovisuales/')),
        'microcopy'  => 'Canal Oficial Promethean, Clevertouch, ViewSonic y equipamiento homologado',
        'img_src'    => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1000&q=80',
        'card_badge' => 'CENTROS EDUCATIVOS &bull; SECTOR PÚBLICO',
        'card_title' => 'Aulas Digitales y Campus Digitales',
        'card_sub'   => 'Pantallas táctiles interactivas y entornos de colaboración digital',
    ],
    4 => [
        'badge'      => 'OPTIMIZACIÓN DE COSTES &bull; PAGO POR COPIA',
        'badge_sub'  => 'Servicios Gestionados de Impresión (MPS)',
        'badge_icon' => 'print',
        'title'      => 'Servicios Gestionados de <span class="text-primary-container">Impresión y Pago por Copia</span>',
        'desc'       => 'Reduzca hasta un 30% los costes de su parque de impresoras multifunción. Monitorización automática de niveles de tóner, reposición predictiva de consumibles y mantenimiento técnico in situ con piezas y mano de obra incluidos.',
        'tags'       => 'Facturación Exacta por Copia | Reposición Automática de Tóner | Soporte In Situ',
        'btn1_text'  => 'SOLICITAR PRESUPUESTO',
        'btn1_url'   => '#contacto',
        'btn2_text'  => 'Ver Consumibles e Impresoras',
        'btn2_url'   => esc_url(home_url('/consumibles-e-impresoras/')),
        'microcopy'  => 'Monitorización remota proactiva y contratos de mantenimiento directo',
        'img_src'    => $theme_uri . '/assets/img/tecnico-impresora-encuadrado.jpg',
        'card_badge' => 'AUDITORÍA SIN COSTE &bull; FLOTAS MPS',
        'card_title' => 'Parque de Multifuncionales Profesionales',
        'card_sub'   => 'Optimización integral de costes documentales y contratos de mantenimiento directo',
    ],
];

$slides = [];
foreach ($slide_defaults as $n => $def) {
    $raw_tags = pedregosa_get_option("ped_slide{$n}_tags", $def['tags']);
    $tags_arr = array_filter(array_map('trim', explode('|', $raw_tags)));
    $slides[] = [
        'badge'        => pedregosa_get_option("ped_slide{$n}_badge", $def['badge']),
        'badge_sub'    => pedregosa_get_option("ped_slide{$n}_badge_sub", $def['badge_sub']),
        'badge_icon'   => $def['badge_icon'],
        'title'        => pedregosa_get_option("ped_slide{$n}_title", $def['title']),
        'desc'         => pedregosa_get_option("ped_slide{$n}_desc", $def['desc']),
        'tags'         => $tags_arr,
        'btn1_text'    => pedregosa_get_option("ped_slide{$n}_btn1_text", $def['btn1_text']),
        'btn1_url'     => pedregosa_get_option("ped_slide{$n}_btn1_url", $def['btn1_url']),
        'btn2_text'    => pedregosa_get_option("ped_slide{$n}_btn2_text", $def['btn2_text']),
        'btn2_url'     => pedregosa_get_option("ped_slide{$n}_btn2_url", $def['btn2_url']),
        'microcopy'    => pedregosa_get_option("ped_slide{$n}_microcopy", $def['microcopy']),
        'img_src'      => pedregosa_get_option("ped_slide{$n}_img", $def['img_src']),
        'fallback_img' => $theme_uri . '/assets/img/fachada-gramil.jpg',
        'card_badge'   => pedregosa_get_option("ped_slide{$n}_card_badge", $def['card_badge']),
        'card_title'   => pedregosa_get_option("ped_slide{$n}_card_title", $def['card_title']),
        'card_sub'     => pedregosa_get_option("ped_slide{$n}_card_sub", $def['card_sub']),
    ];
}
?>

<section class="relative w-full pt-4 pb-8 bg-surface border-b border-slate-border overflow-hidden" id="hero-slider-section">
  <div class="max-w-[1440px] mx-auto px-4 md:px-8 relative">
    
    <!-- Contenedor del Carrusel en CSS Grid Stacking (elimina por completo el escalón o salto de altura) -->
    <div class="relative w-full" id="pedregosa-hero-carousel" style="display: grid; grid-template-columns: 1fr; align-items: center;">
      
      <?php foreach ($slides as $idx => $s): 
        $active_class = ($idx === 0) ? 'opacity-100 z-10 pointer-events-auto' : 'opacity-0 z-0 pointer-events-none';
      ?>
        <div class="hero-slide transition-opacity duration-500 ease-in-out <?php echo $active_class; ?>" style="grid-area: 1 / 1;" data-slide-index="<?php echo $idx; ?>">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-4">
            
            <!-- Columna Izquierda: Textos y Acciones -->
            <div class="lg:col-span-7 flex flex-col items-start gap-4">
              
              <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-border text-xs font-bold text-on-surface-variant shadow-xs">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-primary font-bold uppercase tracking-wider"><?php echo $s['badge']; ?></span>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <span class="text-slate-600 font-medium hidden sm:inline"><?php echo $s['badge_sub']; ?></span>
              </div>

              <?php $heading_tag = ($idx === 0) ? 'h1' : 'h2'; ?>
              <<?php echo $heading_tag; ?> class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface tracking-tight leading-tight min-h-[2.4em] flex items-center">
                <span><?php echo wp_kses_post($s['title']); ?></span>
              </<?php echo $heading_tag; ?>>

              <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl min-h-[4.5em] flex items-center">
                <?php echo esc_html($s['desc']); ?>
              </p>

              <!-- Tags de valor / marcas -->
              <?php if (!empty($s['tags'])): ?>
                <div class="flex flex-wrap items-center gap-2 pt-1">
                  <?php foreach ($s['tags'] as $tag): ?>
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-lg bg-slate-100 text-slate-700 text-xs font-bold border border-slate-200">
                      <span class="material-symbols-outlined text-emerald-600 text-[15px]">check_circle</span>
                      <span><?php echo $tag; ?></span>
                    </span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <!-- Botones de Acción: Botón 1 = SOLICITAR PRESUPUESTO -->
              <div class="flex flex-wrap items-center gap-3 pt-2 w-full">
                <a href="<?php echo esc_attr($s['btn1_url']); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container hover:shadow-lg transition-all">
                  <span class="material-symbols-outlined text-[19px]">assignment</span>
                  <span><?php echo esc_html($s['btn1_text']); ?></span>
                </a>
                <a href="<?php echo esc_attr($s['btn2_url']); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white border border-slate-border text-on-surface font-bold text-sm shadow-xs hover:bg-slate-50 hover:border-slate-400 transition-all">
                  <span class="material-symbols-outlined text-[19px]">open_in_new</span>
                  <span><?php echo esc_html($s['btn2_text']); ?></span>
                </a>
              </div>

              <!-- Micro Info Urgencias -->
              <div class="flex items-center gap-2 pt-1 text-xs text-slate-500">
                <span class="material-symbols-outlined text-primary text-[17px]">verified_user</span>
                <span><?php echo wp_kses_post($s['microcopy']); ?></span>
              </div>

            </div>

            <!-- Columna Derecha: Tarjeta Visual -->
            <div class="lg:col-span-5">
              <div class="relative rounded-2xl overflow-hidden border border-slate-border shadow-xl bg-slate-900 aspect-[4/3] group">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="<?php echo esc_url($s['img_src']); ?>" alt="<?php echo esc_attr(strip_tags($s['title'])); ?>" onerror="this.src='<?php echo esc_url($s['fallback_img'] ?? $theme_uri . '/assets/img/fachada-gramil.jpg'); ?>'"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent pointer-events-none"></div>
                
                <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md p-4 rounded-xl border border-white/15 text-white">
                  <div class="text-[11px] font-bold text-primary-container uppercase tracking-wider mb-1 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
                    <span><?php echo $s['card_badge']; ?></span>
                  </div>
                  <div class="text-sm font-bold text-white"><?php echo esc_html($s['card_title']); ?></div>
                  <div class="text-xs text-slate-300 mt-1"><?php echo esc_html($s['card_sub']); ?></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Controles de Navegación del Carrusel (Flechas y Puntos) -->
    <div class="flex items-center justify-between pt-4 border-t border-slate-200/60 mt-3" id="ped-slider-nav-bar">
      
      <!-- Flecha Anterior -->
      <button type="button" id="ped-slider-prev" class="w-10 h-10 rounded-xl bg-white border border-slate-border text-slate-700 hover:text-primary hover:border-primary flex items-center justify-center shadow-xs transition-all cursor-pointer" aria-label="Diapositiva Anterior">
        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
      </button>

      <!-- Indicadores de Puntos -->
      <div class="flex items-center gap-2" id="ped-slider-dots">
        <?php foreach ($slides as $idx => $s): 
          $dot_active = ($idx === 0) ? 'w-8 bg-primary' : 'w-2.5 bg-slate-300 hover:bg-slate-400';
        ?>
          <button type="button" class="ped-dot h-2.5 rounded-full transition-all duration-300 cursor-pointer <?php echo $dot_active; ?>" data-target-index="<?php echo $idx; ?>" aria-label="Ir a diapositiva <?php echo $idx + 1; ?>"></button>
        <?php endforeach; ?>
      </div>

      <!-- Flecha Siguiente -->
      <button type="button" id="ped-slider-next" class="w-10 h-10 rounded-xl bg-white border border-slate-border text-slate-700 hover:text-primary hover:border-primary flex items-center justify-center shadow-xs transition-all cursor-pointer" aria-label="Diapositiva Siguiente">
        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
      </button>

    </div>

  </div>
</section>

<!-- Script Ligero de Rotación Automática y Controles del Carrusel (Sin salto ni escalón) -->
<script>
(function() {
  const container = document.getElementById('pedregosa-hero-carousel');
  if (!container) return;
  
  const slides = container.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('#ped-slider-dots .ped-dot');
  const prevBtn = document.getElementById('ped-slider-prev');
  const nextBtn = document.getElementById('ped-slider-next');
  const total = slides.length;
  let current = 0;
  let timer = null;

  function goToSlide(idx) {
    if (idx < 0) idx = total - 1;
    if (idx >= total) idx = 0;
    current = idx;

    slides.forEach((s, i) => {
      if (i === current) {
        s.classList.remove('opacity-0', 'pointer-events-none');
        s.classList.add('opacity-100', 'z-10', 'pointer-events-auto');
      } else {
        s.classList.remove('opacity-100', 'z-10', 'pointer-events-auto');
        s.classList.add('opacity-0', 'z-0', 'pointer-events-none');
      }
    });

    dots.forEach((d, i) => {
      if (i === current) {
        d.classList.remove('w-2.5', 'bg-slate-300', 'hover:bg-slate-400');
        d.classList.add('w-8', 'bg-primary');
      } else {
        d.classList.remove('w-8', 'bg-primary');
        d.classList.add('w-2.5', 'bg-slate-300', 'hover:bg-slate-400');
      }
    });
  }

  function startAutoplay() {
    stopAutoplay();
    timer = setInterval(() => {
      goToSlide(current + 1);
    }, 6000);
  }

  function stopAutoplay() {
    if (timer) clearInterval(timer);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      goToSlide(current - 1);
      startAutoplay();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      goToSlide(current + 1);
      startAutoplay();
    });
  }

  dots.forEach(d => {
    d.addEventListener('click', () => {
      const idx = parseInt(d.getAttribute('data-target-index'), 10);
      goToSlide(idx);
      startAutoplay();
    });
  });

  const section = document.getElementById('hero-slider-section');
  if (section) {
    section.addEventListener('mouseenter', stopAutoplay);
    section.addEventListener('mouseleave', startAutoplay);
  }

  startAutoplay();
})();
</script>
