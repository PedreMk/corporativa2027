<?php
/**
 * Template Name: Catálogos B2B (Pedregosa Corporativa 3.0)
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

$theme_uri = get_template_directory_uri();
$uploads_uri = content_url('/uploads');

$catalogos = [
    [
        'titulo'      => 'Catálogo General Papelería e Integral 2026',
        'subtitulo'   => 'Edición Oficial 2026',
        'badge'       => 'Papelería y Oficina',
        'badge_color' => 'bg-primary-container text-white',
        'descripcion' => 'Catálogo de referencia completo con más de 15.000 artículos para la oficina, escolar, consumibles de archivo, encuadernación y papelería corporativa.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-catalogo-2026.jpg',
        'url'         => $uploads_uri . '/2026/CATALOGOS/CATALOGO2026-WEB.pdf',
        'icono'       => 'picture_as_pdf',
        'tipo'        => 'Descargar Catálogo PDF'
    ],
    [
        'titulo'      => 'Catálogo de Regalos Publicitarios y Merchandising',
        'subtitulo'   => 'Promocional & Welcome Packs',
        'badge'       => 'Regalos y Textil',
        'badge_color' => 'bg-amber-600 text-white',
        'descripcion' => 'Extenso catálogo de artículos publicitarios personalizados, bolígrafos, botellas térmicas, textil de trabajo, memorias USB y bienvenida para empleados.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-regalos-publicitarios.png',
        'url'         => 'https://generalcatalogue2026.eu/84c9d8fffd443588f84ecd273f1194da/',
        'icono'       => 'menu_book',
        'tipo'        => 'Abrir Catálogo Digital'
    ],
    [
        'titulo'      => 'Catálogo de Agendas y Calendarios de Oficina 2027',
        'subtitulo'   => 'Colección Anual',
        'badge'       => 'Agendas y Calendarios',
        'badge_color' => 'bg-emerald-700 text-white',
        'descripcion' => 'Colección completa de agendas ejecutivas, planificadores de mesa, tacos y calendarios corporativos personalizables con grabado en seco o serigrafía.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-agendas-2027.jpg',
        'url'         => $uploads_uri . '/2026/09/Catalogo-agendas-de-oficina-2027.pdf',
        'icono'       => 'picture_as_pdf',
        'tipo'        => 'Descargar Catálogo PDF'
    ],
    [
        'titulo'      => 'Emobok Magazine - Mobiliario Corporativo e Innovación',
        'subtitulo'   => 'Espacios de Trabajo',
        'badge'       => 'Mobiliario de Vanguardia',
        'badge_color' => 'bg-indigo-700 text-white',
        'descripcion' => 'Mobiliario para oficinas operativas, despachos de dirección, islas de trabajo colaborativo bench, cabinas acústicas y zonas de recepción.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-emobok.jpg',
        'url'         => $uploads_uri . '/2026/CATALOGOS/EMOBOK_MAGAZINE_2026.pdf',
        'icono'       => 'picture_as_pdf',
        'tipo'        => 'Descargar Catálogo PDF'
    ],
    [
        'titulo'      => 'Catálogo Especializado en Sillería Técnica Ergonómica',
        'subtitulo'   => 'Ergonomía Certificada',
        'badge'       => 'Sillería de Oficina',
        'badge_color' => 'bg-sky-700 text-white',
        'descripcion' => 'Sillería de oficina ergonómica para jornadas intensivas de trabajo, sillones de dirección, sillas de colectividades y salas de reuniones.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-silleria.jpg',
        'url'         => $uploads_uri . '/2026/CATALOGOS/SILLERIAWEB.pdf',
        'icono'       => 'picture_as_pdf',
        'tipo'        => 'Descargar Catálogo PDF'
    ],
    [
        'titulo'      => 'Atlantic Devices - Tecnología Audiovisual y Tecnología Educativa',
        'subtitulo'   => 'Aulas Digitales & Gran Formato',
        'badge'       => 'Audiovisuales y Tecnología Educativa',
        'badge_color' => 'bg-purple-700 text-white',
        'descripcion' => 'Monitores táctiles interactivos de 65", 75" y 86", pizarras digitales, soportes motorizados, tótems y soluciones audiovisuales para colegios y universidades.',
        'imagen'      => $theme_uri . '/assets/img/catalogs/portada-atlantic-devices.jpg',
        'url'         => 'https://www.dropbox.com/scl/fi/mfz7ptwrboi5tsaed1p6w/ATLANTIC-DEVICES-CAT-LOGO-ENERO-2026-B.pdf?rlkey=v7badmqfzys5bdb6f6zqyr410&e=2&st=jzeudly3&dl=0',
        'icono'       => 'picture_as_pdf',
        'tipo'        => 'Descargar Catálogo PDF'
    ]
];

get_header();
?>

<main class="flex-1 pt-32">
    <section class="relative py-12 md:py-16 bg-gradient-to-b from-surface-container to-surface border-b border-slate-border overflow-hidden">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8 text-center max-w-3xl">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center justify-center gap-2 text-xs font-semibold text-on-surface-variant mb-6">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline">Inicio</a>
          <span class="text-slate-border">/</span>
          <span class="text-primary font-bold">Catálogos Oficiales</span>
        </nav>

        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-primary-container mb-4 shadow-2xs">
          <span class="material-symbols-outlined text-[16px]">picture_as_pdf</span>
          <span>Catálogos Oficiales Disponibles para Descarga</span>
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
          Catálogos de Producto en PDF
        </h1>

        <p class="text-base md:text-lg text-on-surface-variant leading-relaxed mt-4 font-normal">
          Acceda a la biblioteca completa de catálogos técnicos y comerciales de Pedregosa S.L. Puede consultar y descargar directamente en formato PDF o visualizador online cada una de nuestras divisiones.
        </p>

        <div class="flex items-center justify-center gap-3 text-xs font-bold text-emerald-800 bg-emerald-50 border border-emerald-200 px-4 py-2 rounded-xl mt-6 w-fit mx-auto">
          <span class="material-symbols-outlined text-[18px]">verified</span>
          <span>Descarga directa sin registro • Tarifas especiales para Empresas y Administraciones</span>
        </div>

      </div>
    </section>

    <!-- ==========================================
         PARRILLA DE CATÁLOGOS CON PORTADAS REALES
         ========================================== -->
    <section class="py-16 bg-white border-b border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <?php foreach ($catalogos as $cat): ?>
            <article class="catalog-card bg-surface rounded-2xl border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between group">
              
              <div>
                <!-- Portada del Catálogo con estilo editorial de libro -->
                <div class="relative w-full aspect-[3/4] max-h-[360px] bg-white rounded-xl border border-slate-border p-3 flex items-center justify-center overflow-hidden mb-5">
                  <a href="<?php echo esc_url($cat['url']); ?>" target="_blank" rel="noopener" class="w-full h-full flex items-center justify-center">
                    <img src="<?php echo esc_url($cat['imagen']); ?>" alt="<?php echo esc_attr($cat['titulo']); ?>" class="catalog-cover max-h-full max-w-full object-contain rounded-lg shadow-md group-hover:scale-105 transition-all duration-300"/>
                  </a>
                  
                  <!-- Badge Flotante de Categoría -->
                  <div class="absolute top-4 left-4">
                    <span class="text-[11px] font-bold px-3 py-1 rounded-full shadow-xs <?php echo esc_attr($cat['badge_color']); ?>">
                      <?php echo esc_html($cat['badge']); ?>
                    </span>
                  </div>
                </div>

                <!-- Textos Informativos -->
                <div class="space-y-2">
                  <span class="text-xs font-bold text-primary uppercase tracking-wider block">
                    <?php echo esc_html($cat['subtitulo']); ?>
                  </span>
                  <h3 class="text-lg font-bold text-on-surface leading-snug group-hover:text-primary transition-colors">
                    <?php echo esc_html($cat['titulo']); ?>
                  </h3>
                  <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed font-normal">
                    <?php echo esc_html($cat['descripcion']); ?>
                  </p>
                </div>
              </div>

              <!-- Botón de Descarga / Apertura Directa -->
              <div class="mt-6 pt-4 border-t border-slate-border/60 flex items-center justify-between">
                <a href="<?php echo esc_url($cat['url']); ?>" target="_blank" rel="noopener" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-primary-container hover:bg-crimson-deep text-white text-xs md:text-sm font-bold shadow-sm hover:shadow-md transition-all">
                  <span class="material-symbols-outlined text-[18px]"><?php echo esc_html($cat['icono']); ?></span>
                  <span><?php echo esc_html($cat['tipo']); ?></span>
                  <span class="material-symbols-outlined text-[16px]">open_in_new</span>
                </a>
              </div>

            </article>
          <?php endforeach; ?>

        </div>

      </div>
    </section>

    <!-- ==========================================
         SOLICITUD DE CATÁLOGO FÍSICO O ASESORÍA
         ========================================== -->
    <section class="py-16 bg-surface-container-low" id="contacto-b2b">
      <div class="max-w-3xl mx-auto px-4 md:px-8">
        <div class="bg-white rounded-2xl p-8 md:p-10 border border-slate-border shadow-md">
          <div class="text-center max-w-xl mx-auto mb-8">
            <span class="text-xs font-bold uppercase tracking-widest text-primary">Atención Comercial B2B</span>
            <h2 class="text-2xl font-extrabold text-on-surface mt-2">¿Prefiere recibir el catálogo impreso en su empresa?</h2>
            <p class="text-xs md:text-sm text-on-surface-variant mt-2">Enviamos ejemplares físicos a departamentos de compras, administraciones y empresas de toda Andalucía y España sin coste.</p>
          </div>

          <form action="/home-stitch/#contacto" method="POST" class="space-y-4">
            <input type="hidden" name="origen" value="Solicitud de Catálogo Físico"/>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Empresa u Organismo *</label>
                <input type="text" name="empresa" required placeholder="Nombre de la empresa o entidad" class="w-full px-4 py-2.5 rounded-xl border border-slate-border text-sm focus:outline-none focus:border-primary"/>
              </div>
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Persona de Contacto *</label>
                <input type="text" name="nombre" required placeholder="Nombre y apellidos" class="w-full px-4 py-2.5 rounded-xl border border-slate-border text-sm focus:outline-none focus:border-primary"/>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Teléfono Directo *</label>
                <input type="tel" name="telefono" required placeholder="954 00 00 00" class="w-full px-4 py-2.5 rounded-xl border border-slate-border text-sm focus:outline-none focus:border-primary"/>
              </div>
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Correo Electrónico *</label>
                <input type="email" name="email" required placeholder="contacto@empresa.com" class="w-full px-4 py-2.5 rounded-xl border border-slate-border text-sm focus:outline-none focus:border-primary"/>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-on-surface mb-1">Dirección de Envío Postal y Observaciones</label>
              <textarea name="direccion_postal" rows="2" placeholder="Calle, número, código postal, localidad y catálogos solicitados..." class="w-full px-4 py-2.5 rounded-xl border border-slate-border text-sm focus:outline-none focus:border-primary"></textarea>
            </div>

            <div class="pt-2 text-center">
              <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm rounded-xl shadow-md transition-all inline-flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">mail</span>
                <span>Solicitar Catálogo Impreso</span>
              </button>
            </div>
          </form>

        </div>
      </div>
    </section>

  </main>

</main>

<?php
get_footer();
