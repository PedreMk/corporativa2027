<?php
/**
 * Template Name: Quiénes Somos (Pedregosa Corporativa 3.0)
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="flex-1 pt-32">
    <section class="relative py-12 md:py-20 bg-gradient-to-b from-surface-container to-surface border-b border-slate-border overflow-hidden">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs font-semibold text-on-surface-variant mb-6">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline">Inicio</a>
          <span class="text-slate-border">/</span>
          <span class="text-primary font-bold">Quiénes Somos</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <!-- Columna Izquierda: Historia y Valores -->
          <div class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white bg-primary-container">
              <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
              Empresa 100% Andaluza • Fundada en Sevilla en 1987
            </div>

            <h1 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
              Más de 35 años equipando con rigor a empresas e instituciones públicas
            </h1>

            <p class="text-base md:text-lg text-on-surface-variant leading-relaxed font-normal">
              Pedregosa S.L. nació con una clara vocación de servicio: aportar agilidad, solvencia técnica y asesoramiento cercano a organizaciones que necesitan operar sin interrupciones. Hoy somos un referente regional e interautonómico en el suministro integral de consumibles de impresión, equipamiento informático, mobiliario corporativo, tecnología educativa y servicios gestionados.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4 border-t border-slate-border">
              <div class="p-4 rounded-xl bg-white border border-slate-border">
                <div class="text-2xl font-extrabold text-primary">+35 Años</div>
                <div class="text-xs text-on-surface-variant mt-1 font-medium">De experiencia directa</div>
              </div>
              <div class="p-4 rounded-xl bg-white border border-slate-border">
                <div class="text-2xl font-extrabold text-primary">30.000+</div>
                <div class="text-xs text-on-surface-variant mt-1 font-medium">Referencias en catálogo</div>
              </div>
              <div class="p-4 rounded-xl bg-white border border-slate-border col-span-2 sm:col-span-1">
                <div class="text-2xl font-extrabold text-primary">24/48h</div>
                <div class="text-xs text-on-surface-variant mt-1 font-medium">Entrega en península</div>
              </div>
            </div>

          </div>

          <!-- Columna Derecha: Foto de Instalaciones y Sede -->
          <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden border border-slate-border shadow-2xl bg-inverse-surface aspect-[4/3] group">
              <img class="w-full h-full object-cover img-right-bottom group-hover:scale-105 transition-transform duration-700" style="object-position: right bottom !important; object-fit: cover !important;" src="http://pedregosa-30.local/wp-content/uploads/2026/03/FACHADA-CALLE-GRAMIL-8-1030x433.jpg" alt="Instalaciones Pedregosa Calle Gramil Sevilla"/>
              <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-transparent to-transparent pointer-events-none"></div>
              <div class="absolute bottom-5 left-5 right-5 bg-inverse-surface/90 backdrop-blur-md p-4 rounded-xl border border-white/10 text-white">
                <div class="text-xs font-bold text-primary-fixed uppercase tracking-wider mb-0.5">Sede Central en Sevilla</div>
                <div class="text-sm font-bold">Calle Gramil 8 • Polígono Store, 41008 Sevilla</div>
                <div class="text-xs text-white/70 mt-1">Sede corporativa, gestión administrativa y atención comercial B2B</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================
         MODELO OPERATIVO Y LOGÍSTICA OFICIAL
         ========================================== -->
    <section class="py-16 bg-white border-b border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
          <span class="text-xs font-bold uppercase tracking-widest text-primary">Modelo Operativo &amp; Distribución Directa</span>
          <h2 class="text-2xl md:text-3xl font-extrabold text-on-surface mt-2">Conexión Directa con Fabricantes y Mayoristas Oficiales</h2>
          <p class="text-sm text-on-surface-variant mt-2 leading-relaxed">
            Somos una compañía digital con acceso e integración telemática directa a los almacenes centrales de los principales fabricantes y mayoristas oficiales de España. Un modelo ágil y transparente que nos permite ofrecer un catálogo multimarca inigualable, con seguimiento exhaustivo en tiempo real de cada envío hasta las instalaciones del cliente en 24/48 horas.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          
          <!-- Sede 1: Sede Central y Oficinas -->
          <div class="rounded-2xl border border-slate-border bg-surface p-8 flex flex-col justify-between shadow-xs hover:shadow-md transition-all">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary-container text-white flex items-center justify-center mb-5 shadow-sm">
                <span class="material-symbols-outlined text-2xl">apartment</span>
              </div>
              <div class="text-xs font-bold uppercase tracking-wider text-primary mb-1">Sede Corporativa &amp; Comercial</div>
              <h3 class="text-xl font-bold text-on-surface mb-3">Calle Gramil nº 8 · Polígono Store (Sevilla)</h3>
              <p class="text-sm text-on-surface-variant leading-relaxed">
                Nuestras oficinas centrales en Sevilla albergan el departamento de compras corporativas, licitaciones públicas y acuerdos marco, soporte técnico preventa y atención personalizada para PYMES, grandes empresas y administraciones públicas.
              </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-border/60 flex items-center justify-between text-xs font-bold text-on-surface">
              <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[18px]">call</span> 954 36 80 11</span>
              <span class="text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-200">Horario: L-J 8:30-17:30 | V 8:00-15:00</span>
            </div>
          </div>

          <!-- Sede 2: Logística y Distribución Oficial -->
          <div class="rounded-2xl border border-slate-border bg-surface p-8 flex flex-col justify-between shadow-xs hover:shadow-md transition-all">
            <div>
              <div class="w-12 h-12 rounded-xl bg-inverse-surface text-white flex items-center justify-center mb-5 shadow-sm">
                <span class="material-symbols-outlined text-2xl">local_shipping</span>
              </div>
              <div class="text-xs font-bold uppercase tracking-wider text-badge-accent-blue mb-1">Logística Oficial &amp; Trazabilidad Integral</div>
              <h3 class="text-xl font-bold text-on-surface mb-3">Acceso a Almacenes Centrales Autorizados</h3>
              <p class="text-sm text-on-surface-variant leading-relaxed">
                Conexión telemática con las plataformas logísticas de los principales fabricantes (HP, Lenovo, ASUS, Epson, Brother, Dell...) y distribuidores oficiales. Gestionamos cada pedido con trazabilidad completa y entrega directa en las dependencias del cliente en 24/48 horas.
              </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-border/60 flex items-center justify-between text-xs font-bold text-on-surface">
              <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[18px]">verified</span> +30.000 Referencias Oficiales</span>
              <span class="text-badge-accent-blue bg-blue-50 px-2.5 py-1 rounded-md border border-blue-200">Seguimiento 24/48h</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================
         CALIDAD, MEDIO AMBIENTE Y HOMOLOGACIONES
         ========================================== -->
    <section class="py-16 bg-surface-container-low border-b border-slate-border">
      <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
          <span class="text-xs font-bold uppercase tracking-widest text-primary">Solvencia Oficial y Garantías</span>
          <h2 class="text-2xl md:text-3xl font-extrabold text-on-surface mt-2">Certificaciones de Calidad y Solvencia Técnica</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
          
          <div class="p-6 rounded-2xl bg-white border border-slate-border shadow-xs text-center flex flex-col items-center">
            <div class="w-20 h-20 mb-3 flex items-center justify-center p-1 bg-white rounded-xl border border-slate-border shadow-xs">
              <img class="max-h-full max-w-full object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso9001-240.jpg" alt="Certificación ISO 9001 Adok Calidad"/>
            </div>
            <h3 class="font-bold text-lg text-on-surface">ISO 9001:2015</h3>
            <p class="text-xs text-on-surface-variant mt-2 leading-relaxed">Sistema de Gestión de Calidad certificado por Adok que garantiza procesos rigurosos en aprovisionamiento, preparación de pedidos y posventa.</p>
          </div>

          <div class="p-6 rounded-2xl bg-white border border-slate-border shadow-xs text-center flex flex-col items-center">
            <div class="w-20 h-20 mb-3 flex items-center justify-center p-1 bg-white rounded-xl border border-slate-border shadow-xs">
              <img class="max-h-full max-w-full object-contain" src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso14001-240.jpg" alt="Certificación ISO 14001 Adok Medio Ambiente"/>
            </div>
            <h3 class="font-bold text-lg text-on-surface">ISO 14001:2015</h3>
            <p class="text-xs text-on-surface-variant mt-2 leading-relaxed">Gestión Ambiental certificada por Adok orientada a la sostenibilidad, reciclaje de consumibles y reparto eco-eficiente.</p>
          </div>

          <div class="p-6 rounded-2xl bg-white border border-slate-border shadow-xs text-center flex flex-col items-center">
            <div class="w-20 h-20 mb-3 flex items-center justify-center p-1 bg-blue-50 text-blue-700 rounded-xl border border-blue-200 shadow-xs">
              <span class="material-symbols-outlined text-4xl">shield</span>
            </div>
            <h3 class="font-bold text-lg text-on-surface">Ciberseguridad SSL & Clasificación</h3>
            <p class="text-xs text-on-surface-variant mt-2 leading-relaxed">Seguridad telemática cifrada SSL 256-bit conforme a guías de INCIBE y Clasificación oficial de Contratista del Estado.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================
         CONTACTO B2B
         ========================================== -->
    <section class="py-16 bg-white" id="contacto-b2b">
      <div class="max-w-3xl mx-auto px-4 md:px-8 text-center space-y-6">
        <span class="text-xs font-bold uppercase tracking-widest text-primary">Atención Comercial Directa</span>
        <h2 class="text-3xl font-extrabold text-on-surface">¿Desea concertar una visita o solicitar propuesta corporativa?</h2>
        <p class="text-base text-on-surface-variant max-w-xl mx-auto">
          Contacte directamente con nuestro equipo de Sevilla. Evaluaremos sus necesidades operativas para ofrecerle la solución más eficiente al mejor coste garantizado.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
          <a href="tel:954368011" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm shadow-md transition-all">
            <span class="material-symbols-outlined text-[18px]">call</span>
            <span>Llamar al 954 36 80 11</span>
          </a>
          <a href="mailto:pedidos@pedregosa.es" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-on-surface border border-slate-border font-bold text-sm shadow-xs transition-all">
            <span class="material-symbols-outlined text-[18px]">mail</span>
            <span>pedidos@pedregosa.es</span>
          </a>
        </div>
      </div>
    </section>


</main>

<?php
get_footer();
