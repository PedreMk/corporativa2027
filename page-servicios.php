<?php
/**
 * Template Name: Página de Servicio B2B (Pedregosa Corporativa 3.0)
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

// Determinamos qué página es mediante el slug o ID
global $post;
$slug = $post ? $post->post_name : '';
$post_id = $post ? $post->ID : 0;

// Configuración de contenidos por servicio
$servicios = [
    'audiovisuales' => [
        'badge' => 'División Audiovisual & Colaboración',
        'badge_color' => 'bg-badge-accent-blue',
        'title' => 'Audiovisuales e Integración Multimedia',
        'subtitle' => 'Diseño e integración de salas ejecutivas, sistemas de videoconferencia Microsoft Teams y Zoom Rooms, pantallas táctiles y cartelería digital para administraciones públicas y empresas.',
        'hero_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQUIEobhZtr4BoI6HCihb221vwQwVdQrAzrFFy2Q8oD4oQreo7YsTFGr8XlG8kWOxYuhRsRM2qqEH9S6d2TQVT7CLu3kDf9BWL4JwSv8-qWgAuLJuXOoeOOhDFniWvrmdU-4-SrdYbH-RwHVfO6sg1ptdReUmbpwLR5umZ5QTAcIdr6d-UwpBcs6ybtgPuKPzb9s8U5n_cpz2jyvFuvEg3yx8XojfihMkMYR4kuEcIA9w71DilGBRAYQ',
        'highlight_stat' => 'Más de 350 salas integradas',
        'features' => [
            [
                'icon' => 'videocam',
                'title' => 'Salas de Reuniones & Videoconferencia',
                'desc' => 'Sistemas homologados con cámaras 4K PTZ, micrófonos con cancelación de ruido ambiental por IA y altavoces de sala integrados.'
            ],
            [
                'icon' => 'tv',
                'title' => 'Cartelería Digital & Gran Formato',
                'desc' => 'Tótems interactivos, pantallas de recepción y software centralizado para difusión de contenidos dinámicos en sedes y edificios públicos.'
            ],
            [
                'icon' => 'touch_app',
                'title' => 'Monitores Interactivos Táctiles',
                'desc' => 'Paneles táctiles multitoque de 65", 75" y 86" con resolución 4K y herramientas colaborativas de anotación en tiempo real.'
            ],
            [
                'icon' => 'build_circle',
                'title' => 'Instalación y Puesta en Marcha Llave en Mano',
                'desc' => 'Equipo propio de instaladores certificados. Cableado estructurado oculto, configuración de red y soporte técnico posterior.'
            ]
        ],
        'catalog_link' => '#contacto-b2b',
        'catalog_text' => 'Solicitar Consultoría Técnica'
    ],
    'consumibles-e-impresoras' => [
        'badge' => 'Especialidad Histórica Homologada',
        'badge_color' => 'bg-primary-container',
        'title' => 'Consumibles, Impresoras y Pago por Copia',
        'subtitle' => 'El mayor catálogo de tóner, tinta y consumibles en Andalucía. Especialistas en flotas gestionadas HP Managed y Xerox con ahorro demostrado de hasta un 30% en costes de impresión.',
        'hero_image' => '<?php echo get_template_directory_uri(); ?>/assets/img/tecnico-impresora-encuadrado.jpg',
        'highlight_stat' => 'Stock permanente de +10.000 referencias',
        'features' => [
            [
                'icon' => 'print',
                'title' => 'Tóner y Tinta Original Homologada',
                'desc' => 'Garantía oficial de los principales fabricantes del mercado: HP, Brother, Epson, Xerox, Kyocera y Canon con entrega inmediata.'
            ],
            [
                'icon' => 'recycling',
                'title' => 'Línea Compatible & Remanufacturada ISO 14001',
                'desc' => 'Cartuchos sostenibles de alto rendimiento con certificación europea de calidad, garantizando cero fallos y coste por página reducido.'
            ],
            [
                'icon' => 'contract',
                'title' => 'Servicio Gestionado Pago por Copia (PPU)',
                'desc' => 'Monitorización automática de niveles de tinta. Le enviamos los consumibles antes de que se agoten e incluimos mantenimiento in situ.'
            ],
            [
                'icon' => 'inventory_2',
                'title' => 'Tambores, Fusores y Kits de Mantenimiento',
                'desc' => 'Repuestos originales para alargar el ciclo de vida de sus equipos de impresión corporativos e industriales.'
            ]
        ],
        'catalog_link' => 'https://oficina.pedregosa.es',
        'catalog_text' => 'Ir a Tienda de Consumibles'
    ],
    'informatica' => [
        'badge' => 'División Tecnología IT',
        'badge_color' => 'bg-badge-accent-blue',
        'title' => 'Informática, Servidores y Puestos de Trabajo',
        'subtitle' => 'Renovación integral de parques informáticos, virtualización en centros de datos, microinformática corporativa, redes gestionadas y licenciamiento oficial Microsoft.',
        'hero_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBb4ypWCBlBsscQRESZ_4mOkbnmmPQmu0Hx6sXj4G0cy3okxN35Jp5LJpzZKDxO9bIoqj72bqH9ayXUFQGsacXE3hs6NMxUYLI7zHRQPP9IVx5mLIV_ecBuCR_G44bDeE84nEC_vqaPC7tgjagDoZZBr36VjPZUa9H3AKnL7Ez9dBrbPW1LTOUNldlXHSU_Y3Azdf5AvqtxH-CM7gUZrwzBOXjuVgZRjNoKW-aml_37Afowy3mn9X8pWw',
        'highlight_stat' => 'Adjudicatarios en Gobiernos y Grandes Empresas',
        'features' => [
            [
                'icon' => 'laptop_mac',
                'title' => 'Puestos de Trabajo Fijos y Portátiles',
                'desc' => 'Equipos para trabajo híbrido y movilidad empresarial: portátiles ultraligeros, estaciones de trabajo gráficas y periféricos ergonómicos.'
            ],
            [
                'icon' => 'dns',
                'title' => 'Servidores y Almacenamiento Corporativo',
                'desc' => 'Servidores en rack y torre para despliegues de virtualización VMware/Hyper-V, almacenamiento SAN/NAS y copias de seguridad inmutables.'
            ],
            [
                'icon' => 'hub',
                'title' => 'Switches, WiFi 6E y Ciberseguridad',
                'desc' => 'Infraestructura de red de alta disponibilidad, cortafuegos corporativos NGFW y monitorización para evitar interrupciones operativas.'
            ],
            [
                'icon' => 'cloud_sync',
                'title' => 'Licenciamiento y Cloud Microsoft 365',
                'desc' => 'Gestión de licencias por volumen, suscripciones Microsoft 365 Business/Enterprise y soluciones de correo seguro.'
            ]
        ],
        'catalog_link' => 'https://tienda.pedregosa.es',
        'catalog_text' => 'Ir a Tienda de Informática'
    ],
    'mobiliario-e-instalaciones-de-oficina' => [
        'badge' => 'Arquitectura de Espacios & Ergonomía',
        'badge_color' => 'bg-badge-accent-emerald',
        'title' => 'Mobiliario Corporativo e Instalaciones de Oficina',
        'subtitle' => 'Diseño de espacios de trabajo colaborativos y saludables. Suministro y montaje de mobiliario operativo, despachos de dirección, salas de juntas y sillería técnica con proyección 3D.',
        'hero_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDDC9Yv0jdhrFPBbqvmUx8dQvSEzFFQDRmyOTt75d_axJzi8sudpSaiD27EGMQX0b97blxW_aO6t9KwNBGMAdaLSh3_3fshzOvcdUbPn1zV9XIs3ufIxWMduEo96lTvmXCMZU9r6pOVFqrnUJgMx0hhqKgA-6mSGRk8nm6vw9Fd7gY8iPX6AszjjTRDNvEK74aHEzr4WL4vkg78ZQZJw25fdUt3l9nz1V6K8aeIykYSB1dMQUBwC88DIA',
        'highlight_stat' => 'Montaje propio y mediciones in situ sin coste',
        'features' => [
            [
                'icon' => 'table_restaurant',
                'title' => 'Mesas Operativas y Sistemas Modulares',
                'desc' => 'Programas de mesas individuales, islas de trabajo banco (bench) y mesas regulables en altura para bienestar laboral.'
            ],
            [
                'icon' => 'chair',
                'title' => 'Sillería Ergonómica Certificada',
                'desc' => 'Sillas de oficina con mecanismos sincro, soporte lumbar regulable y tapicerías transpirables para uso intensivo de 8 horas.'
            ],
            [
                'icon' => 'meeting_room',
                'title' => 'Salas de Dirección y Juntas Ejecutivas',
                'desc' => 'Mobiliario de alta gama con pasacables integrados, acabados en maderas nobles y electrificación para conferencias.'
            ],
            [
                'icon' => 'domain',
                'title' => 'Mamparas, Separadores y Cabinas Acústicas',
                'desc' => 'Zonificación de oficinas sin obra para mejorar la concentración, privacidad telefónica y confort acústico.'
            ]
        ],
        'catalog_link' => 'https://oficina.pedregosa.es',
        'catalog_text' => 'Catálogo de Mobiliario'
    ],
    'equipos-educat' => [
        'badge' => 'División Tecnología Educativa',
        'badge_color' => 'bg-badge-accent-amber',
        'title' => 'Tecnología Educativa',
        'subtitle' => 'Transformación digital de centros escolares, institutos, academias y universidades. Pantallas interactivas táctiles de última generación, portátiles para alumnos y carros de carga inteligentes.',
        'hero_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBfZsx4QUnwvzOG3Dg_H5h2Rl90sfUPbq5_rD0idGUaQcYPiOckWtJ7WH79fjyHJdYL5tsMB05oa3GfevE6kDBYU-P7wXlRe8X1zhzV8agve7iNcQ-KnCkbYtQ_WuEbjiRReULyaK0IxsTXgFgJeqb1gfO1oelBpwRUIPfUmcd_H-KfXtCy0Gvlkid7XhGh5QYoVzDkRW5EdhX2_ErFgZnn1JL69_z_KV_vBqLpksNHjYNF4mp-syxqQw',
        'highlight_stat' => 'Aulas Digitales & Entornos Educativos',
        'features' => [
            [
                'icon' => 'co_present',
                'title' => 'Paneles Interactivos Táctiles',
                'desc' => 'Pantallas interactivas multitoque antirreflejos con Android integrado, doble lápiz de precisión y conectividad inalámbrica para alumnos.'
            ],
            [
                'icon' => 'school',
                'title' => 'Dispositivos Portátiles para Estudiantes',
                'desc' => 'Ordenadores ajustados a las necesidades de profesores y estudiantes.'
            ],
            [
                'icon' => 'charging_station',
                'title' => 'Carros de Carga Seguros e Inteligentes',
                'desc' => 'Mobiliario móvil blindado con cerradura de seguridad y regletas con temporizador inteligente para carga simultánea de 24 a 36 equipos.'
            ],
            [
                'icon' => 'cast_for_education',
                'title' => 'Equipamiento Multimedia y Didáctico',
                'desc' => 'Escáner y cámaras documentales, pizarras interactivas rotulables, visualizadores 4K para aulas, microscopios educativos, kit de podcast, e iluminación.'
            ]
        ],
        'catalog_link' => '#contacto-b2b',
        'catalog_text' => 'Solicitar Demo para Centro Educativo'
    ],
    'artes-graficas-y-regalos' => [
        'badge' => 'Identidad de Marca & Merchandising',
        'badge_color' => 'bg-primary-container',
        'title' => 'Artes Gráficas, Rotulación y Regalos Publicitarios',
        'subtitle' => 'Impulsa la visibilidad de tu marca con impresión publicitaria de calidad profesional, catálogos, packaging corporativo, rotulación de sedes y más de 10.000 artículos promocionales personalizables.',
        'hero_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuARqgbe3vklYrj5rUrFrDDoQtVHXI_Lf1xVR3VJecsUUiPDzXZpyHfQJF8GKjE1TqdTgXzHTSWgyf76aVQ6V45VNSqT1g015PjPNDNm9Y-5fD0262f3H1aSYz2I5JNvRUyVhUAuy4adUu0Z2RTdokRjorkm5Bt8e_UgvoqADjTJEnzoaRnA4aVbjfb2zH2EmsOGcC-SpiozBMKV8xYxlJyF4Xm3zySrzgHDIipZy3vqW2IlMnUW80p23w',
        'highlight_stat' => 'Talleres propios de marcaje y serigrafía',
        'features' => [
            [
                'icon' => 'draw',
                'title' => 'Impresión Digital, Offset y Papelería Corporativa',
                'desc' => 'Carpetas con solapa, tarjetas de visita con acabados especiales, folletos, trípticos y catálogos de producto con encuadernación profesional.'
            ],
            [
                'icon' => 'card_giftcard',
                'title' => 'Regalos Publicitarios y Merchandising',
                'desc' => 'Bolígrafos de marca, botellas térmicas, memorias USB, textil corporativo bordado y bienvenida para empleados (welcome packs).'
            ],
            [
                'icon' => 'calendar_month',
                'title' => 'Agendas Ejecutivas y Calendarios',
                'desc' => 'Producción estacional de calendarios de pared y mesa, agendas personalizadas con grabado en seco o serigrafía a todo color.'
            ],
            [
                'icon' => 'storefront',
                'title' => 'Rotulación, Roll-ups y Señalética',
                'desc' => 'Vinilos para escaparates, lonas de gran formato, roll-ups para ferias y congresos, y placas corporativas para entradas de edificios.'
            ]
        ],
        'catalog_link' => '#contacto-b2b',
        'catalog_text' => 'Solicitar Catálogo de Regalos'
    ]
];

// Fallback al primer servicio si el slug no coincide exactamente
$data = isset($servicios[$slug]) ? $servicios[$slug] : $servicios['consumibles-e-impresoras'];

get_header();
?>

<main class="flex-1 pt-32">
  <section class="relative py-12 md:py-16 bg-gradient-to-b from-surface-container to-surface border-b border-slate-border overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      
      <!-- Breadcrumbs -->
      <nav class="flex items-center gap-2 text-xs font-semibold text-on-surface-variant mb-6">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline">Inicio</a>
        <span class="text-slate-border">/</span>
        <span class="text-primary font-bold"><?php echo esc_html($data['title']); ?></span>
      </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
          
          <!-- Columna Izquierda: Títulos y Propuesta -->
          <div class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white <?php echo esc_attr($data['badge_color']); ?>">
              <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
              <?php echo esc_html($data['badge']); ?>
            </div>

            <h1 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
              <?php echo esc_html($data['title']); ?>
            </h1>

            <p class="text-base md:text-lg text-on-surface-variant leading-relaxed max-w-2xl font-normal">
              <?php echo esc_html($data['subtitle']); ?>
            </p>

            <div class="flex items-center gap-2 text-xs font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 px-3.5 py-2 rounded-lg w-fit">
              <span class="material-symbols-outlined text-[18px]">verified</span>
              <span><?php echo esc_html($data['highlight_stat']); ?></span>
            </div>

            <!-- Botones de Acción -->
            <div class="flex flex-wrap items-center gap-4 pt-2">
              <a href="#contacto-b2b" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm shadow-md hover:shadow-lg transition-all">
                <span class="material-symbols-outlined text-[18px]">request_quote</span>
                <span>Solicitar Oferta / Licitación</span>
              </a>

              <a href="<?php echo esc_url($data['catalog_link']); ?>" target="_blank" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-on-surface border border-slate-border font-bold text-sm shadow-xs transition-all">
                <span><?php echo esc_html($data['catalog_text']); ?></span>
                <span class="material-symbols-outlined text-[18px]">open_in_new</span>
              </a>
            </div>

            <!-- Teléfono Directo -->
            <div class="flex items-center gap-2 text-xs text-on-surface-variant pt-2">
              <span class="material-symbols-outlined text-primary-container text-base">support_agent</span>
              <span>Asesoramiento técnico inmediato:</span>
              <a href="tel:954368011" class="text-primary font-bold hover:underline">954 36 80 11</a>
              <span class="text-slate-border">•</span>
              <span>L-V 08:00 - 15:00 / 16:30 - 19:30</span>
            </div>
          </div>

          <!-- Columna Derecha: Foto de Servicio Anclada en Esquina Inferior Derecha -->
          <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden border border-slate-border shadow-xl bg-inverse-surface aspect-[4/3] group">
              <img id="service-hero-img" class="w-full h-full object-cover img-right-bottom group-hover:scale-105 transition-transform duration-700" style="object-position: right bottom !important; object-fit: cover !important;" src="<?php echo esc_url($data['hero_image']); ?>" alt="<?php echo esc_attr($data['title']); ?>"/>
              <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-transparent to-transparent pointer-events-none"></div>
              <div class="absolute bottom-4 left-4 right-4 bg-inverse-surface/85 backdrop-blur-md p-3.5 rounded-xl border border-white/10 text-white">
                <div class="text-[11px] font-bold text-primary-fixed uppercase tracking-wider mb-0.5">Solución Homologada</div>
                <div class="text-sm font-bold truncate"><?php echo esc_html($data['title']); ?></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================
         PILARESS Y CAPACIDADES TÉCNICAS
         ========================================== -->
    <section class="py-16 bg-white border-b border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
          <span class="text-xs font-bold uppercase tracking-widest text-primary">Capacidades & Especialización</span>
          <h2 class="text-2xl md:text-3xl font-extrabold text-on-surface mt-2"><?php echo ($slug === 'equipos-educat' || (isset($data['title']) && $data['title'] === 'Tecnología Educativa')) ? '¿Qué material informático y audiovisual necesita realmente un centro educativo?' : '¿Qué incluye nuestro servicio en ' . esc_html($data['title']) . '?'; ?></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <?php foreach ($data['features'] as $f): ?>
            <div class="bg-surface rounded-2xl p-6 border border-slate-border shadow-xs hover:shadow-md hover:border-primary/40 transition-all flex flex-col justify-between group">
              <div>
                <div class="w-12 h-12 rounded-xl bg-white border border-slate-border flex items-center justify-center text-primary-container mb-4 group-hover:bg-primary-container group-hover:text-white transition-colors shadow-2xs">
                  <span class="material-symbols-outlined text-2xl"><?php echo esc_html($f['icon']); ?></span>
                </div>
                <h3 class="text-base font-bold text-on-surface mb-2 leading-snug"><?php echo esc_html($f['title']); ?></h3>
                <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed font-normal"><?php echo esc_html($f['desc']); ?></p>
              </div>
              <div class="mt-4 pt-3 border-t border-slate-border/50 text-xs font-bold text-primary flex items-center gap-1">
                <span>Garantía Oficial</span>
                <span class="material-symbols-outlined text-[15px]">check_circle</span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ==========================================
         CLIENTES INSTITUCIONALES QUE CONFÍAN EN ESTA DIVISIÓN
         ========================================== -->
    <section class="py-12 bg-surface-container-low border-b border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="text-center mb-8">
          <p class="text-xs font-bold uppercase tracking-wider text-on-surface-variant">Organismos e instituciones suministradas por Pedregosa S.L.</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 items-center justify-items-center opacity-85">
          <img src="/wp-content/uploads/2026/09/LOGO-BANCO-ESPANA.jpg" alt="Banco de España" class="h-16 w-auto object-contain hover:scale-105 transition-all">
          <img src="/wp-content/uploads/2026/09/LOGO-MINISTERIO-DE-DEFENSA.jpg" alt="Ministerio de Defensa" class="h-16 w-auto object-contain hover:scale-105 transition-all">
          <img src="/wp-content/uploads/2026/09/LOGO-HEINEKEN.jpg" alt="Heineken España" class="h-16 w-auto object-contain hover:scale-105 transition-all">
          <img src="/wp-content/uploads/2026/09/LOGO-EMASESA.jpg" alt="Emasesa Metropolitana" class="h-16 w-auto object-contain hover:scale-105 transition-all">
          <img src="/wp-content/uploads/2026/09/LOGO-PUERTO-BARCELONA.jpg" alt="Puerto de Barcelona" class="h-16 w-auto object-contain hover:scale-105 transition-all">
          <img src="/wp-content/uploads/2026/09/LOGO-GOB-VASCO.jpg" alt="Gobierno Vasco" class="h-16 w-auto object-contain hover:scale-105 transition-all">
        </div>
      </div>
    </section>

    <!-- ==========================================
         FORMULARIO DE CONTACTO Y SOLICITUD B2B
         ========================================== -->
    <section class="py-16 bg-white" id="contacto-b2b">
      <div class="max-w-4xl mx-auto px-4 md:px-8">
        <div class="bg-surface rounded-2xl p-8 md:p-10 border border-slate-border shadow-lg">
          <div class="text-center max-w-xl mx-auto mb-8">
            <span class="text-xs font-bold uppercase tracking-widest text-primary">Atención Comercial Directa</span>
            <h2 class="text-2xl font-extrabold text-on-surface mt-2">Solicitar Presupuesto o Asesoramiento</h2>
            <p class="text-xs md:text-sm text-on-surface-variant mt-2">Indíquenos qué necesita para <?php echo esc_html($data['title']); ?> y nuestro equipo de Sevilla contactará en menos de 24 horas laborables.</p>
          </div>

          <form action="/home-stitch/#contacto" method="POST" class="space-y-4">
            <input type="hidden" name="servicio_origen" value="<?php echo esc_attr($data['title']); ?>"/>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Empresa u Organismo *</label>
                <input type="text" name="empresa" required placeholder="Nombre de la empresa o entidad" class="w-full px-4 py-2.5 rounded-xl border border-slate-border bg-white text-sm focus:outline-none focus:border-primary"/>
              </div>
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Persona de Contacto *</label>
                <input type="text" name="nombre" required placeholder="Nombre y apellidos" class="w-full px-4 py-2.5 rounded-xl border border-slate-border bg-white text-sm focus:outline-none focus:border-primary"/>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Teléfono Directo *</label>
                <input type="tel" name="telefono" required placeholder="Ej: 954 00 00 00" class="w-full px-4 py-2.5 rounded-xl border border-slate-border bg-white text-sm focus:outline-none focus:border-primary"/>
              </div>
              <div>
                <label class="block text-xs font-bold text-on-surface mb-1">Correo Electrónico *</label>
                <input type="email" name="email" required placeholder="contacto@empresa.com" class="w-full px-4 py-2.5 rounded-xl border border-slate-border bg-white text-sm focus:outline-none focus:border-primary"/>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-on-surface mb-1">Descripción del requerimiento o pliego</label>
              <textarea name="mensaje" rows="3" placeholder="Indique volumen estimado, equipos, referencias o especificaciones técnicas..." class="w-full px-4 py-2.5 rounded-xl border border-slate-border bg-white text-sm focus:outline-none focus:border-primary"></textarea>
            </div>

            <div class="pt-2 text-center">
              <button type="submit" class="w-full sm:w-auto px-8 py-3.5 bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm rounded-xl shadow-md transition-all inline-flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">send</span>
                <span>Enviar Solicitud de Presupuesto</span>
              </button>
            </div>
          </form>

        </div>
      </div>
    </section>

    <!-- ==========================================
         ENLACES RÁPIDOS AL RESTO DE SECCIONES
         ========================================== -->
    <section class="py-12 bg-surface-container border-t border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <h3 class="text-sm font-bold uppercase tracking-wider text-on-surface-variant text-center mb-6">Explorar el resto de Divisiones de Pedregosa</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 text-center text-xs font-bold">
          <a href="/audiovisuales/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Audiovisuales</a>
          <a href="/consumibles-e-impresoras/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Consumibles</a>
          <a href="/informatica/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Informática IT</a>
          <a href="/mobiliario-e-instalaciones-de-oficina/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Mobiliario</a>
          <a href="/equipos-educat/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Tecnología Educativa</a>
          <a href="/artes-graficas-y-regalos/" class="p-3 rounded-xl bg-white border border-slate-border hover:border-primary hover:text-primary transition-all">Regalos</a>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
