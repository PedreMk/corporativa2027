<?php
/**
 * Hero Template - Demo 4: Impresión Gestionada & Coste por Copia (MPS)
 * Tema: Pedregosa Corporativa 3.0
 */
if (!defined('ABSPATH')) exit;
?>
<section class="relative w-full pt-12 pb-16 bg-white border-b border-slate-border overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-4 md:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Columna Izquierda: Información de MPS -->
      <div class="lg:col-span-7 flex flex-col items-start gap-5">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-50 border border-slate-border text-xs font-bold text-slate-700 shadow-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-emerald-700 font-extrabold uppercase tracking-wide">Pago por Copia &bull; Flotas Managed</span>
          <span class="text-slate-300">|</span>
          <span class="text-slate-500">Auditoría y Ahorro Corporativo</span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
          Flotas de Impresión <span class="text-primary">HP Managed</span> y Coste por Copia
        </h1>

        <p class="text-base text-slate-600 leading-relaxed max-w-2xl">
          Optimice hasta un 35% el gasto de consumibles de su empresa con contratos de pago por uso. Monitorización telemática automática: reciba los tóners originales en su sede antes de que se agoten, sin facturas imprevistas.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-1 w-full">
          <button type="button" class="ped-open-calc-btn inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container transition-all cursor-pointer" data-open-calc="true">
            <span class="material-symbols-outlined text-[19px]">calculate</span>
            <span>Solicitar Auditoría de Ahorro</span>
          </button>
          <a href="<?php echo esc_url(home_url('/consumibles-e-impresoras/')); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white border border-slate-border text-slate-800 font-bold text-sm shadow-xs hover:bg-slate-50 transition-all">
            <span class="material-symbols-outlined text-[19px]">print</span>
            <span>Ver Gama Multifunción A3/A4</span>
          </a>
        </div>

        <div class="flex flex-wrap items-center gap-4 pt-2 text-xs font-semibold text-slate-700">
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> Sin inversión inicial en equipos</span>
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> Piezas y asistencia técnica in-situ</span>
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> Facturación transparente mensual</span>
        </div>
      </div>

      <!-- Columna Derecha: Foto de Multifuncional y Badge Oficial -->
      <div class="lg:col-span-5">
        <div class="relative rounded-2xl overflow-hidden border border-slate-border shadow-2xl bg-inverse-surface aspect-[4/3] group">
          <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJeUxGQfPQmUPmoOLRInQNtwan1tBtU2u-QV8-6fxsBHacLRdzc2WVQEumZNxeK8BeCHkRtn1wtC7m7QHGxHd_GGRbQVjLRQ0_NQ-odQ4cKb6CFkodp6mf5anIs-b292LIkzYQmtb0le8830w30s5bt0c3rqnrkFqKwKuwjjBMzieF0NYylIXOUgAY9aS9MfXOOKnoy-ijRjQmC-eUp7W43h5BhPiIki2ENDaK6XWU_gazs0jC_Gkb6A" alt="Impresoras Departamentales Pedregosa"/>
          <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/85 via-transparent to-transparent pointer-events-none"></div>
          <div class="absolute bottom-5 left-5 right-5 bg-inverse-surface/90 backdrop-blur-md p-4 rounded-xl border border-white/10 text-white">
            <div class="text-xs font-bold text-emerald-400 uppercase tracking-wider mb-0.5">Soporte y Monitorización Automática</div>
            <div class="text-sm font-bold">Distribuidor Oficial Especialista HP / Brother / Epson</div>
            <div class="text-xs text-white/70 mt-1">Servicio técnico oficial directo y reposición de consumibles</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
