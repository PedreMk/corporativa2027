<?php
/**
 * Template Name: Portada Corporativa B2B
 * Tema: Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();

// 1. Cargar Hero según la Demo activa en el Personalizador
$demo = pedregosa_get_option('ped_demo_style', 'stitch');
get_template_part('templates/hero', $demo);
?>

  <!-- ==========================================
       SECCIÓN DE MÉTRICAS DE SOLVENCIA B2B (LOS 4 CONTADORES)
       ========================================== -->
  <section class="py-8 bg-white border-b border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
        
        <?php
        $m1_n = pedregosa_get_option('ped_m1_num', '+35 Años');
        $m1_l = pedregosa_get_option('ped_m1_label', 'Liderazgo Continuo (desde 1987)');
        $m2_n = pedregosa_get_option('ped_m2_num', '+50.000');
        $m2_l = pedregosa_get_option('ped_m2_label', 'Pedidos B2B Gestionados al Año');
        $m3_n = pedregosa_get_option('ped_m3_num', '+30.000');
        $m3_l = pedregosa_get_option('ped_m3_label', 'Refs. Catálogo Multimarca Homologado');
        $m4_n = pedregosa_get_option('ped_m4_num', '24/48 Horas');
        $m4_l = pedregosa_get_option('ped_m4_label', 'Entrega Rápida en Andalucía e Iberia');
        ?>

        <div class="p-5 rounded-xl border border-slate-border bg-slate-50 flex flex-col justify-center">
          <div class="text-2xl sm:text-3xl font-extrabold text-primary"><?php echo esc_html($m1_n); ?></div>
          <div class="text-xs text-slate-600 font-medium mt-1"><?php echo esc_html($m1_l); ?></div>
        </div>

        <div class="p-5 rounded-xl border border-slate-border bg-slate-50 flex flex-col justify-center">
          <div class="text-2xl sm:text-3xl font-extrabold text-slate-900"><?php echo esc_html($m2_n); ?></div>
          <div class="text-xs text-slate-600 font-medium mt-1"><?php echo esc_html($m2_l); ?></div>
        </div>

        <div class="p-5 rounded-xl border border-slate-border bg-slate-50 flex flex-col justify-center">
          <div class="text-2xl sm:text-3xl font-extrabold text-slate-900"><?php echo esc_html($m3_n); ?></div>
          <div class="text-xs text-slate-600 font-medium mt-1"><?php echo esc_html($m3_l); ?></div>
        </div>

        <div class="p-5 rounded-xl border border-slate-border bg-slate-50 flex flex-col justify-center">
          <div class="text-2xl sm:text-3xl font-extrabold text-primary-container"><?php echo esc_html($m4_n); ?></div>
          <div class="text-xs text-slate-600 font-medium mt-1"><?php echo esc_html($m4_l); ?></div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================
       CATÁLOGO INTEGRAL: LAS 6 FAMILIAS CORPORATIVAS
       ========================================== -->
  <section id="servicios" class="py-16 bg-surface border-b border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
        <div>
          <span class="text-xs font-bold uppercase tracking-widest text-primary">Aprovisionamiento Centralizado</span>
          <h2 class="text-2xl md:text-3xl font-extrabold text-on-surface mt-1">Líneas de Suministro Profesional</h2>
        </div>
        <a href="<?php echo pedregosa_shop_url(); ?>" target="_blank" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
          <span>Ir a la Tienda Online B2B</span>
          <span class="material-symbols-outlined text-xs">arrow_forward</span>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Tarjeta 1: Informática -->
        <a href="<?php echo esc_url(home_url('/informatica/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-red-50 text-primary flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">laptop_mac</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Informática y Software IT</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Equipos de sobremesa, portátiles profesionales, servidores dedicados, almacenamiento masivo NAS y licencias de software empresarial.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Explorar catálogo IT</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Tarjeta 2: Consumibles -->
        <a href="<?php echo esc_url(home_url('/consumibles-e-impresoras/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">print</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Consumibles e Impresoras</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Cartuchos originales y compatibles garantizados, tóner, tambores y flotas de impresión bajo modalidad de coste por copia / MPS.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Ver consumibles oficiales</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Tarjeta 3: Audiovisuales -->
        <a href="<?php echo esc_url(home_url('/audiovisuales/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">tv</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Audiovisuales e Integración</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Monitores de gran formato, pantallas táctiles interactivas de 65" a 86", videoproyectores láser y salas de reuniones profesionales.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Sistemas audiovisuales</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Tarjeta 4: Mobiliario -->
        <a href="<?php echo esc_url(home_url('/mobiliario-e-instalaciones-de-oficina/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">chair</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Mobiliario e Instalaciones</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Puestos operativos ergonómicos, despachos directivos, sillería certificada UNE-EN, armarios de seguridad y mamparas divisorias.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Mobiliario corporativo</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Tarjeta 5: Tecnología Educativa -->
        <a href="<?php echo esc_url(home_url('/equipos-educat/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">school</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Tecnología Educativa</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Solución integral para colegios, institutos y universidades: pantallas táctiles con Android/Windows, carros de carga y licencias educativas.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Soluciones educativas</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

        <!-- Tarjeta 6: Regalos e Imprenta -->
        <a href="<?php echo esc_url(home_url('/artes-graficas-y-regalos/')); ?>" class="group rounded-2xl bg-white border border-slate-border p-6 shadow-xs hover:shadow-xl hover:border-primary/40 transition-all flex flex-col justify-between">
          <div>
            <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-700 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-2xl">card_giftcard</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">Artes Gráficas y Regalos</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Merchandising corporativo, imprenta editorial, agendas personalizadas y catálogos comerciales con su identidad corporativa.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-primary">
            <span>Catálogo promocional</span>
            <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ==========================================
       BLOQUE B2B DE LICITACIONES Y SECTOR PÚBLICO
       ========================================== -->
  <section class="py-16 bg-inverse-surface text-white">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        
        <div class="lg:col-span-8">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-bold text-sky-400 mb-4 border border-white/10">
            <span class="w-2 h-2 rounded-full bg-sky-400"></span>
            <span>Licitaciones y Sector público</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
            ¿ Compras por licitaciones o Acuerdos Marcos ?
          </h2>
          <p class="text-sm text-slate-300 mt-3 max-w-3xl leading-relaxed">
            Tenemos un departamento especializado en licitaciónes públicas, localizamos el producto que cumple tus requisitos técnicos y presentamos la oferta en tiempo y forma. Si lo necesitas podemos crearte hasta una tienda online exclusiva para tu organismo, con tu catálogo personalizado y los precios pactados para que puedas supervisar todos los pedidos.
          </p>
          
          <!-- Destacados debajo del texto -->
          <div class="flex flex-col sm:flex-row flex-wrap items-start sm:items-center gap-3 pt-5 text-xs font-bold text-slate-200">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/10 border border-white/15">
              <span class="material-symbols-outlined text-emerald-400 text-[18px]">verified</span>
              <span>1. FACTURACIÓN FACe</span>
            </span>
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/10 border border-white/15">
              <span class="material-symbols-outlined text-sky-400 text-[18px]">gavel</span>
              <span>2. CONCURSOS DE SUMINISTROS Y ACUERDOS MARCOS</span>
            </span>
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/10 border border-white/15">
              <span class="material-symbols-outlined text-amber-400 text-[18px]">store</span>
              <span>3. CATÁLOGO ON-LINE PERSONALIZADO</span>
            </span>
          </div>
        </div>

        <!-- Botones de Acción Oficiales: Teléfono y Correo -->
        <div class="lg:col-span-4 flex flex-col gap-3.5">
          <a href="<?php echo pedregosa_phone_link(); ?>" class="px-6 py-4 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-center text-sm shadow-lg transition-all flex items-center justify-center gap-2.5">
            <span class="material-symbols-outlined text-[20px]">call</span>
            <span>Teléfono: <?php echo pedregosa_phone(); ?></span>
          </a>
          <a href="mailto:concurso@pedregosa.es?subject=Consulta%20Licitaci%C3%B3n%20o%20Acuerdo%20Marco" class="px-6 py-4 rounded-xl bg-white/15 hover:bg-white/25 text-white font-bold text-center text-sm border border-white/20 transition-all flex items-center justify-center gap-2.5">
            <span class="material-symbols-outlined text-[20px]">mail</span>
            <span>Email: concurso@pedregosa.es</span>
          </a>
          <p class="text-[11px] text-slate-400 text-center">Atención directa a mesas de contratación y organismos públicos L-V</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================
       SECCIÓN DE SEDE REAL Y LOGÍSTICA OFICIAL (MODELO OPERATIVO AMPLIO)
       ========================================== -->
  <section class="py-16 bg-white border-b border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      
      <div class="text-center max-w-5xl mx-auto mb-12">
        <span class="text-xs font-bold uppercase tracking-widest text-primary">Modelo Operativo &amp; Distribución Directa</span>
        <h2 class="text-2xl md:text-3xl font-extrabold text-on-surface mt-2">Conexión Directa con Fabricantes y Mayoristas Oficiales</h2>
        <p class="text-sm sm:text-base text-slate-600 mt-3 leading-relaxed max-w-4xl mx-auto">
          Somos una compañía digital con integración directa a los almacenes centrales de los principales fabricantes y mayoristas oficiales de España. Un modelo ágil sin costes superfluos que garantiza un catálogo multimarca inigualable y entrega con seguimiento en tiempo real en las instalaciones del cliente en 24/48 horas.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Tarjeta Sede Central -->
        <div class="rounded-2xl border border-slate-border bg-slate-50 p-8 flex flex-col justify-between shadow-xs">
          <div>
            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center mb-5 shadow-xs">
              <span class="material-symbols-outlined text-2xl">apartment</span>
            </div>
            <div class="text-xs font-bold uppercase tracking-wider text-primary mb-1">OFICINA COMERCIAL</div>
            <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo pedregosa_address(); ?></h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Nuestras oficinas centrales en Sevilla albergan el departamento de compras corporativas, licitaciones públicas y acuerdos marco, soporte técnico preventa y atención personalizada para empresas y sector público.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-bold text-slate-800">
            <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[17px]">call</span> <?php echo pedregosa_phone(); ?></span>
            <span class="text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded border border-emerald-200"><?php echo pedregosa_schedule(); ?></span>
          </div>
        </div>

        <!-- Tarjeta Logística Mayorista -->
        <div class="rounded-2xl border border-slate-border bg-slate-50 p-8 flex flex-col justify-between shadow-xs">
          <div>
            <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center mb-5 shadow-xs">
              <span class="material-symbols-outlined text-2xl">local_shipping</span>
            </div>
            <div class="text-xs font-bold uppercase tracking-wider text-sky-600 mb-1">LOGISTICA INTEGRAL CON MÁXIMA TRAZABILIDAD</div>
            <h3 class="text-xl font-bold text-slate-900 mb-3">Acceso Directo a Almacenes Centrales</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
              Integración informática con las plataformas mayoristas de los principales fabricantes (HP, Lenovo, ASUS, Epson, Brother, Dell...). Gestionamos cada expedición con seguimiento exhaustivo en tiempo real y entrega directa en 24/48 horas.
            </p>
          </div>
          <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-xs font-bold text-slate-800">
            <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[17px]">verified</span> +30.000 Referencias Oficiales</span>
            <span class="text-blue-700 bg-blue-50 px-2.5 py-1 rounded border border-blue-200">Seguimiento 24/48h</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================
       FORMULARIO DIRECTO DE SOLICITUD DE PRESUPUESTO
       ========================================== -->
  <section id="contacto" class="py-16 bg-slate-50 border-b border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-5">
          <span class="text-xs font-bold uppercase tracking-widest text-primary">Atención Comercial B2B</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">
            Solicite su Presupuesto o Cotización Express
          </h2>
          <p class="text-sm text-slate-600 mt-3 leading-relaxed">
            Disponemos de 2 tiendas on line especializadas, pero si no encuentras lo que necesitas te podemos ayudar.
          </p>
          
          <div class="flex flex-col gap-3 mt-6 text-xs text-slate-700">
            <div class="flex items-center gap-3">
              <span class="w-8 h-8 rounded-lg bg-red-50 text-primary flex items-center justify-center font-bold">1</span>
              <span>Propuesta detallada con desglose de IVA y referencias oficiales</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-8 h-8 rounded-lg bg-red-50 text-primary flex items-center justify-center font-bold">2</span>
              <span>Descuentos por escalado y volumen de compra</span>
            </div>
            <div class="flex items-center gap-3">
              <span class="w-8 h-8 rounded-lg bg-red-50 text-primary flex items-center justify-center font-bold">3</span>
              <span>Confirmación de stock y plazo exacto de entrega</span>
            </div>
          </div>
        </div>

        <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-2xl border border-slate-border shadow-md">
          <form class="grid grid-cols-1 sm:grid-cols-2 gap-4" action="mailto:pedidos@pedregosa.es" method="post" enctype="text/plain">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Nombre y Apellidos *</label>
              <input type="text" name="nombre" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-border text-xs focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Persona de contacto"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Empresa / Organismo *</label>
              <input type="text" name="empresa" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-border text-xs focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Razón social o CIF"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Email Profesional *</label>
              <input type="email" name="email" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-border text-xs focus:ring-2 focus:ring-primary focus:outline-none" placeholder="email@empresa.com"/>
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Teléfono Directo *</label>
              <input type="tel" name="telefono" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-border text-xs focus:ring-2 focus:ring-primary focus:outline-none" placeholder="600 000 000"/>
            </div>
            <div class="sm:col-span-2">
              <label class="block text-xs font-bold text-slate-700 mb-1">Material o Servicios Requeridos *</label>
              <textarea name="mensaje" rows="3" required class="w-full px-3.5 py-2.5 rounded-lg border border-slate-border text-xs focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Describa los equipos, consumibles o referencias que necesita cotizar..."></textarea>
            </div>
            <div class="sm:col-span-2 pt-2">
              <button type="submit" class="w-full py-3.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[19px]">send</span>
                <span>Enviar consulta al departamento comercial</span>
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

<?php
get_footer();
