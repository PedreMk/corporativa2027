<?php
/**
 * Template Name: Política de Calidad y Medio Ambiente (Pedregosa Corporativa 3.0)
 * Diseñado y desarrollado por INFOPIXEL STUDIO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="pt-[116px] pb-20 flex-1">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Inicio</a>
        <span class="text-slate-300">/</span>
        <span class="text-primary font-bold">Calidad y Medio Ambiente</span>
      </nav>

      <!-- Encabezado de la Página -->
      <div class="border-b border-slate-200 pb-6 mb-8">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 border border-emerald-200 mb-3">
          <span class="material-symbols-outlined text-sm">verified</span>
          <span>Sistemas Integrados de Gestión &bull; ISO 9001 e ISO 14001</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Política de Calidad, Sostenibilidad y Mejora Continua</h1>
        <p class="text-xs text-slate-500 mt-2">Documento oficial del Sistema Integrado de Gestión &bull; Revisado y aprobado por Dirección</p>
      </div>

      <!-- Tarjeta Destacada: Sellos Oficiales de Certificación -->
      <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 mb-10 shadow-xs">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
          <div class="max-w-xl">
            <h2 class="text-lg font-bold text-slate-900 mb-1 flex items-center gap-2">
              <span class="material-symbols-outlined text-emerald-600">workspace_premium</span>
              <span>Certificaciones Oficiales Acreditadas</span>
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              En <strong>PEDREGOSA, S.L.</strong> implementamos y mantenemos un Sistema Integrado de Gestión certificado por la entidad acreditada <strong>Adok Certificación</strong>, que garantiza el cumplimiento estricto de las normas internacionales más exigentes en aprovisionamiento empresarial y contratación pública.
            </p>
          </div>
          <!-- Logos de Certificación -->
          <div class="flex items-center gap-3 flex-shrink-0">
            <div class="p-2 bg-white rounded-xl border border-slate-200 shadow-xs flex flex-col items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso9001-120.jpg" alt="Certificado ISO 9001 Adok" class="h-16 w-auto object-contain"/>
              <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase">ISO 9001:2015</span>
            </div>
            <div class="p-2 bg-white rounded-xl border border-slate-200 shadow-xs flex flex-col items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso14001-120.jpg" alt="Certificado ISO 14001 Adok" class="h-16 w-auto object-contain"/>
              <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase">ISO 14001:2015</span>
            </div>
            <div class="p-2 bg-white rounded-xl border border-slate-200 shadow-xs flex flex-col items-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hp_amplify.jpg" alt="HP Amplify Sostenibilidad" class="h-16 w-auto object-contain"/>
              <span class="text-[9px] font-bold text-slate-500 mt-1 uppercase">HP Amplify</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Contenido de la Política Oficial -->
      <div class="space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed">
        
        <!-- Sección 1: Compromiso -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs font-bold">1</span>
            Compromiso de Gestión y Alcance
          </h2>
          <p>
            En <strong>PEDREGOSA, S.L.</strong> nos comprometemos a ofrecer servicios de comercialización, distribución y soporte técnico de material de oficina, consumibles de impresión, equipamiento informático, mobiliario y tecnología audiovisual que cumplan rigurosamente con las expectativas de nuestros clientes y con todos los requisitos legales y reglamentarios aplicables, minimizando el impacto ambiental de nuestras actividades.
          </p>
          <p>
            Nuestro Sistema Integrado de Gestión asegura la <strong>mejora continua de nuestros procesos, productos y servicios</strong>, actuando siempre con un alto sentido de responsabilidad social, ética y medioambiental.
          </p>
        </section>

        <!-- Sección 2: Principios Rectores -->
        <section class="space-y-4">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs font-bold">2</span>
            Principios de Calidad y Medio Ambiente
          </h2>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-xl border border-slate-200 bg-white space-y-1">
              <strong class="text-slate-900 font-bold block flex items-center gap-1.5">
                <span class="material-symbols-outlined text-emerald-600 text-base">support_agent</span>
                Enfoque en el Cliente
              </strong>
              <p class="text-slate-600 text-xs">
                Lograr la satisfacción plena de nuestros clientes mediante soluciones adaptadas, comunicación directa y asesoramiento técnico con interlocutor asignado.
              </p>
            </div>

            <div class="p-4 rounded-xl border border-slate-200 bg-white space-y-1">
              <strong class="text-slate-900 font-bold block flex items-center gap-1.5">
                <span class="material-symbols-outlined text-emerald-600 text-base">psychology</span>
                Liderazgo y Know-how del Personal
              </strong>
              <p class="text-slate-600 text-xs">
                Fomento de la formación continua, desarrollo de competencias e implicación de nuestro equipo humano como pilar del servicio excelente.
              </p>
            </div>

            <div class="p-4 rounded-xl border border-slate-200 bg-white space-y-1">
              <strong class="text-slate-900 font-bold block flex items-center gap-1.5">
                <span class="material-symbols-outlined text-emerald-600 text-base">schema</span>
                Gestión Basada en Procesos
              </strong>
              <p class="text-slate-600 text-xs">
                Operaciones estandarizadas y trazables que garantizan resultados coherentes, puntualidad en la entrega e integración ambiental en cada fase.
              </p>
            </div>

            <div class="p-4 rounded-xl border border-slate-200 bg-white space-y-1">
              <strong class="text-slate-900 font-bold block flex items-center gap-1.5">
                <span class="material-symbols-outlined text-emerald-600 text-base">recycling</span>
                Sostenibilidad y Normativa RAEE
              </strong>
              <p class="text-slate-600 text-xs">
                Gestión autorizada de Residuos de Aparatos Eléctricos y Electrónicos (RAEE), recogida de cartuchos usados y fomento del ecodiseño.
              </p>
            </div>
          </div>
        </section>

        <!-- Sección 3: Objetivos y Evaluación Periódica -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs font-bold">3</span>
            Objetivos Medibles y Revisión por Dirección
          </h2>
          <p>
            Para asegurar la eficacia del sistema, en Pedregosa establecemos <strong>objetivos anuales medibles de calidad y medio ambiente</strong>, revisados periódicamente en comités de dirección para evaluar su progreso:
          </p>
          <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
            <li>Índice de puntualidad en entregas superior al 98,5% en Andalucía.</li>
            <li>Optimización de rutas logísticas y reducción progresiva de la huella de carbono.</li>
            <li>Gestión y recogida certificada de tóners y consumibles agotados a través de programas de canal oficial.</li>
            <li>Resolución de incidencias técnicas en un plazo máximo inferior a 24 horas laborables.</li>
          </ul>
        </section>

        <!-- ==========================================
             MÓDULO DESTACADO: MEJORA CONTINUA Y ENCUESTA DE CALIDAD
             ========================================== -->
        <section class="mt-12 p-8 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 text-white shadow-xl relative overflow-hidden">
          <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
          
          <div class="relative z-10 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-950/80 border border-emerald-500/30 mb-4">
              <span class="material-symbols-outlined text-sm">trending_up</span>
              <span>Proceso de Mejora Continua</span>
            </div>
            
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight mb-3">
              Su opinión es clave para seguir mejorando
            </h2>
            
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6 font-normal">
              Dentro de nuestro compromiso con la norma ISO 9001 y la excelencia en el servicio, realizamos un seguimiento continuo de la satisfacción de nuestros clientes. Le agradecemos que dedique 2 minutos a completar nuestra encuesta de calidad oficial.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
              <a href="https://docs.google.com/forms/d/1CCDqS6svIs9XGckyoOLlQ27xFQcgJXrino_pD7QxMrk/viewform" target="_blank" rel="noopener" class="px-6 py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs sm:text-sm rounded-xl shadow-lg transition-all inline-flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-lg">rate_review</span>
                <span>Completar Encuesta de Calidad</span>
                <span class="material-symbols-outlined text-sm">open_in_new</span>
              </a>
              <span class="text-[11px] text-slate-400 text-center sm:text-left">
                Formulario oficial confidencial de evaluación de proveedores.
              </span>
            </div>
          </div>
        </section>

      </div>

    </div>
  </main>

<?php get_footer(); ?>