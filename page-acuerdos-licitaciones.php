<?php
/**
 * Template Name: Acuerdos y Licitaciones (Pedregosa Corporativa 3.0)
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="flex-1 pt-32">
  <!-- Hero Section -->
  <section class="py-12 md:py-16 bg-gradient-to-b from-slate-900 via-slate-850 to-slate-900 text-white border-b border-slate-800 relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8 relative z-10">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-6">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
        <span class="text-slate-600">/</span>
        <span class="text-primary-container font-bold text-rose-400">Acuerdos y Licitaciones</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-8 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-emerald-300 bg-emerald-500/15 border border-emerald-400/30">
            <span class="material-symbols-outlined text-sm">account_balance</span>
            Homologación Oficial &bull; Sector Público Andaluz
          </div>

          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
            Solvencia técnica, rigor normativo y suministro homologado para la Administración Pública
          </h1>

          <p class="text-base md:text-lg text-slate-300 leading-relaxed font-normal">
            Más de 35 años aportando cumplimiento estricto de pliegos técnicos, tramitación administrativa ágil con códigos DIR3 y logística capilar descentralizada para universidades, consejerías, agencias públicas y corporaciones locales en toda Andalucía.
          </p>

          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4 border-t border-slate-800">
            <div class="p-3.5 rounded-xl bg-slate-800/80 border border-slate-700">
              <div class="text-xl font-extrabold text-amber-300">+35 Años</div>
              <div class="text-[11px] text-slate-300 mt-0.5">En Licitaciones Oficiales</div>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-800/80 border border-slate-700">
              <div class="text-xl font-extrabold text-emerald-400">ISO 9001/14001</div>
              <div class="text-[11px] text-slate-300 mt-0.5">Auditoría Adok al Día</div>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-800/80 border border-slate-700">
              <div class="text-xl font-extrabold text-sky-400">24/48 Horas</div>
              <div class="text-[11px] text-slate-300 mt-0.5">SLA de Reposición In Situ</div>
            </div>
            <div class="p-3.5 rounded-xl bg-slate-800/80 border border-slate-700">
              <div class="text-xl font-extrabold text-rose-400">100% Homologado</div>
              <div class="text-[11px] text-slate-300 mt-0.5">Códigos DIR3 y Facturación</div>
            </div>
          </div>
        </div>

        <!-- Tarjeta de Contacto Licitaciones -->
        <div class="lg:col-span-4">
          <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md shadow-2xl space-y-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                <span class="material-symbols-outlined text-2xl">verified</span>
              </div>
              <div>
                <h3 class="font-bold text-sm text-white">Unidad de Contratación</h3>
                <div class="text-xs text-slate-400">Atención a Técnicos de Compras</div>
              </div>
            </div>

            <p class="text-xs text-slate-300 leading-snug">
              Asesoría técnica para redacción de pliegos, memorias valoradas, muestras homologadas y consultas de expedientes.
            </p>

            <div class="space-y-2 pt-2 border-t border-white/10 text-xs">
              <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                <span class="text-slate-400">Teléfono Directo:</span>
                <a href="<?php echo pedregosa_phone_link(); ?>" class="font-bold text-white hover:text-emerald-400"><?php echo pedregosa_phone(); ?></a>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                <span class="text-slate-400">Email Concursos:</span>
                <a href="mailto:concurso@pedregosa.es" class="font-bold text-sky-400 hover:underline">concurso@pedregosa.es</a>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                <span class="text-slate-400">NIF / CIF:</span>
                <span class="font-mono font-bold text-amber-300">B-41228227</span>
              </div>
            </div>

            <a href="#contacto-licitaciones" class="w-full py-2.5 px-4 rounded-xl bg-primary hover:bg-crimson-bright text-white font-bold text-xs flex items-center justify-center gap-2 transition shadow-lg">
              <span class="material-symbols-outlined text-sm">mail</span>
              <span>Enviar Pliego o Consulta</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Slider de Concursos Ganados -->
  <section class="py-16 bg-white border-b border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
        <div>
          <span class="text-xs font-extrabold uppercase tracking-wider text-primary">Historial Acreditado</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
            Concursos Ganados y Acuerdos Marco en Ejecución
          </h2>
          <p class="text-xs sm:text-sm text-slate-600 mt-2 max-w-2xl">
            Solvencia técnica y económica acreditada en las principales instituciones universitarias y públicas del sur de España.
          </p>
        </div>

        <div class="flex items-center gap-2 self-start md:self-auto">
          <button type="button" id="tender-prev-btn" class="w-9 h-9 rounded-full border border-slate-300 hover:bg-slate-100 flex items-center justify-center text-slate-700 transition cursor-pointer">
            <span class="material-symbols-outlined text-lg">chevron_left</span>
          </button>
          <button type="button" id="tender-next-btn" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-primary text-white flex items-center justify-center transition cursor-pointer shadow-xs">
            <span class="material-symbols-outlined text-lg">chevron_right</span>
          </button>
        </div>
      </div>

      <div class="relative overflow-hidden rounded-2xl border border-slate-border bg-slate-50 min-h-[360px] p-6 sm:p-8">
        
        <!-- Slide 1: US -->
        <div class="tender-slide transition-opacity duration-500 ease-in-out opacity-100 flex flex-col lg:flex-row gap-8 items-center justify-between">
          <div class="lg:w-7/12 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-crimson-deep text-xs font-extrabold uppercase tracking-wider">
              <span class="material-symbols-outlined text-sm">school</span>
              Universidad de Sevilla (US) &bull; Adjudicación Oficial
            </div>
            <h3 class="text-2xl font-black text-slate-900 leading-tight">
              Acuerdo Marco de Equipamiento Informático, Microinformática y Consumibles de Impresión
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Adjudicación continuada para el suministro de equipos portátiles, puestos de trabajo de laboratorio, pantallas interactivas y consumibles originales para facultades, departamentos e institutos universitarios de investigación.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs">
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Entrega piso a piso en 4 Campus</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Tiempos de respuesta SAT in situ &lt; 24h</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Facturación telemática por códigos DIR3</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Certificación de recepción técnica 100%</div>
            </div>
          </div>
          <div class="lg:w-5/12 w-full">
            <div class="bg-white p-6 rounded-xl border border-slate-border shadow-md space-y-3">
              <div class="text-[11px] font-bold uppercase text-slate-400">Ficha del Contrato</div>
              <div class="border-b border-slate-100 pb-2">
                <div class="text-xs text-slate-500">Organismo Contratante</div>
                <div class="text-sm font-bold text-slate-900">Universidad de Sevilla</div>
              </div>
              <div class="border-b border-slate-100 pb-2">
                <div class="text-xs text-slate-500">Objeto del Lote</div>
                <div class="text-sm font-semibold text-slate-900">Suministro de Consumibles Originales y Puestos IT</div>
              </div>
              <div class="flex items-center justify-between text-xs pt-1">
                <span class="text-emerald-700 font-bold flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Contrato en Vigor</span>
                <span class="text-slate-500">Ámbito Andalucía</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: UPO -->
        <div class="tender-slide transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none hidden flex-col lg:flex-row gap-8 items-center justify-between">
          <div class="lg:w-7/12 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-900 text-xs font-extrabold uppercase tracking-wider">
              <span class="material-symbols-outlined text-sm">school</span>
              Universidad Pablo de Olavide (UPO) &bull; Adjudicación Oficial
            </div>
            <h3 class="text-2xl font-black text-slate-900 leading-tight">
              Acuerdo Marco de Material de Oficina Integral y Equipamiento Sostenible
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Gestión integral de suministro de papelería, archivo y ergonomía para todo el campus único de la Universidad Pablo de Olavide con criterios de compra verde e ISO 14001.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs">
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Pedidos agrupados por centros de gasto</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Recogida gratuita de residuos de tóner</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Cero roturas de stock en convocatorias</div>
              <div class="flex items-center gap-2 text-slate-700"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span> Almacén central propio en Sevilla</div>
            </div>
          </div>
          <div class="lg:w-5/12 w-full">
            <div class="bg-white p-6 rounded-xl border border-slate-border shadow-md space-y-3">
              <div class="text-[11px] font-bold uppercase text-slate-400">Ficha del Contrato</div>
              <div class="border-b border-slate-100 pb-2">
                <div class="text-xs text-slate-500">Organismo Contratante</div>
                <div class="text-sm font-bold text-slate-900">Universidad Pablo de Olavide</div>
              </div>
              <div class="border-b border-slate-100 pb-2">
                <div class="text-xs text-slate-500">Objeto del Lote</div>
                <div class="text-sm font-semibold text-slate-900">Material de Oficina, Archivo y Ergonomía</div>
              </div>
              <div class="flex items-center justify-between text-xs pt-1">
                <span class="text-emerald-700 font-bold flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Contrato en Vigor</span>
                <span class="text-slate-500">Campus Dos Hermanas</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.tender-slide');
    const prevBtn = document.getElementById('tender-prev-btn');
    const nextBtn = document.getElementById('tender-next-btn');
    let currentIdx = 0;

    function showTender(index) {
      if (index >= slides.length) index = 0;
      if (index < 0) index = slides.length - 1;
      currentIdx = index;

      slides.forEach((s, idx) => {
        if (idx === currentIdx) {
          s.classList.remove('opacity-0', 'pointer-events-none', 'hidden');
          s.classList.add('opacity-100', 'flex');
        } else {
          s.classList.remove('opacity-100', 'flex');
          s.classList.add('opacity-0', 'pointer-events-none', 'hidden');
        }
      });
    }

    if (prevBtn) prevBtn.addEventListener('click', () => showTender(currentIdx - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => showTender(currentIdx + 1));
  });
</script>

<?php get_footer(); ?>
