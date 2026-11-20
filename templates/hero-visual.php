<?php
/**
 * Hero Template - Demo 3: Proyectos Audiovisuales & Tecnología Educativa
 * Tema: Pedregosa Corporativa 3.0
 */
if (!defined('ABSPATH')) exit;
?>
<section class="relative w-full pt-12 pb-16 bg-surface border-b border-slate-border overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-4 md:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Columna Izquierda: Información de Proyectos -->
      <div class="lg:col-span-7 flex flex-col items-start gap-5">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-border text-xs font-bold text-slate-700 shadow-xs">
          <span class="w-2 h-2 rounded-full bg-blue-600"></span>
          <span class="text-blue-700 font-extrabold uppercase tracking-wide">Campus Digitales &bull; Audiovisuales</span>
          <span class="text-slate-300">|</span>
          <span class="text-slate-500">Aulas Digitales y Salas Corporativas</span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
          Aulas Interactivas, <span class="text-primary">Pantallas Táctiles</span> y Entornos Digitales
        </h1>

        <p class="text-base text-slate-600 leading-relaxed max-w-2xl">
          Especialistas en digitalización integral para centros educativos, universidades y salas ejecutivas. Instalación de paneles táctiles interactivos de 65" a 86", megafonía y mobiliario modular ergonómico.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-1 w-full">
          <a href="<?php echo esc_url(home_url('/equipos-educat/')); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container transition-all">
            <span class="material-symbols-outlined text-[19px]">tv</span>
            <span>Ver Tecnología Educativa</span>
          </a>
          <a href="<?php echo esc_url(home_url('/audiovisuales/')); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white border border-slate-border text-slate-800 font-bold text-sm shadow-xs hover:bg-slate-50 transition-all">
            <span class="material-symbols-outlined text-[19px]">meeting_room</span>
            <span>Salas de Videoconferencia</span>
          </a>
        </div>

        <div class="flex items-center gap-6 pt-2 text-xs text-slate-600 border-t border-slate-200/80 w-full">
          <div><strong class="text-slate-900 text-sm block font-extrabold">+1.200</strong> Aulas Digitalizadas</div>
          <div class="h-6 w-px bg-slate-300"></div>
          <div><strong class="text-slate-900 text-sm block font-extrabold">Canal Oficial</strong> Promethean &bull; Clevertouch &bull; ViewSonic</div>
        </div>
      </div>

      <!-- Columna Derecha: Foto de Gran Formato de Aulas -->
      <div class="lg:col-span-5">
        <div class="relative rounded-2xl overflow-hidden border border-slate-border shadow-2xl bg-inverse-surface aspect-[4/3] group">
          <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQUIEobhZtr4BoI6HCihb221vwQwVdQrAzrFFy2Q8oD4oQreo7YsTFGr8XlG8kWOxYuhRsRM2qqEH9S6d2TQVT7CLu3kDf9BWL4JwSv8-qWgAuLJuXOoeOOhDFniWvrmdU-4-SrdYbH-RwHVfO6sg1ptdReUmbpwLR5umZ5QTAcIdr6d-UwpBcs6ybtgPuKPzb9s8U5n_cpz2jyvFuvEg3yx8XojfihMkMYR4kuEcIA9w71DilGBRAYQ" alt="Aulas Digitales EduCAT Pedregosa"/>
          <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-transparent to-transparent pointer-events-none"></div>
          <div class="absolute bottom-5 left-5 right-5 bg-inverse-surface/90 backdrop-blur-md p-4 rounded-xl border border-white/10 text-white">
            <div class="text-xs font-bold text-sky-400 uppercase tracking-wider mb-0.5">Entornos Educativos y Corporativos</div>
            <div class="text-sm font-bold">Proyectos Llave en Mano para Instituciones</div>
            <div class="text-xs text-white/70 mt-1">Garantía oficial y suministro homologado en toda Andalucía</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
