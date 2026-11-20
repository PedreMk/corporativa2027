<?php
/**
 * Hero Template - Demo 2: IT & Hardware Tech-First (Equipos B2B)
 * Tema: Pedregosa Corporativa 3.0
 */
if (!defined('ABSPATH')) exit;
$shop_url = pedregosa_shop_url();
?>
<section class="relative w-full pt-12 pb-16 bg-white border-b border-slate-border overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-4 md:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Columna Izquierda: Información de Hardware & Lotes -->
      <div class="lg:col-span-7 flex flex-col items-start gap-5">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-50 border border-slate-border text-xs font-bold shadow-xs">
          <span class="px-2 py-0.5 rounded bg-primary text-white text-[10px] uppercase font-extrabold tracking-wider">Flotas B2B</span>
          <span class="text-slate-600 uppercase tracking-wide">Renovación de Puestos IT &bull; Licitaciones</span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
          Flotas de <span class="text-primary">Portátiles &amp; PCs</span> Homologados para Empresas
        </h1>

        <p class="text-base text-slate-600 leading-relaxed max-w-2xl">
          Suministro masivo de puestos de trabajo masivos, portátiles ultraligeros y estaciones de trabajo de alto rendimiento. Conexión directa a stock mayorista oficial, configuración homogénea y entrega en sus instalaciones en 24/48h.
        </p>

        <div class="flex flex-wrap items-center gap-4 pt-1 w-full">
          <a href="<?php echo esc_url($shop_url); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-primary text-white font-bold text-sm shadow-md hover:bg-primary-container transition-all">
            <span class="material-symbols-outlined text-[19px]">laptop_mac</span>
            <span>Ver Catálogo de Ordenadores</span>
          </a>
          <a href="#contacto" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white border border-primary text-primary font-bold text-sm shadow-xs hover:bg-red-50 transition-all">
            <span class="material-symbols-outlined text-[19px]">description</span>
            <span>Cotización por Lote (954 36 80 11)</span>
          </a>
        </div>

        <div class="flex flex-wrap items-center gap-4 pt-2 text-xs font-semibold text-slate-700">
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> HP EliteBook &amp; ProBook</span>
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> Lenovo ThinkPad &amp; ThinkCentre</span>
          <span class="flex items-center gap-1 text-emerald-700"><span class="material-symbols-outlined text-sm">check_circle</span> ASUS ExpertBook</span>
        </div>
      </div>

      <!-- Columna Derecha: Tarjeta de Producto Flotante Tech -->
      <div class="lg:col-span-5">
        <div class="rounded-2xl border border-slate-border bg-slate-50 p-6 shadow-xl flex flex-col justify-between">
          <div class="bg-white rounded-xl border border-slate-border p-6 text-center relative overflow-hidden mb-4 shadow-xs">
            <span class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold border border-emerald-200">En Stock Oficial</span>
            <img class="max-h-56 mx-auto object-contain my-4" src="http://images.soluziondigital.com/334789-product_main/tcl-65t69c-t69c-65t69c-televisor-165-1-cm-65-4k-ultra-hd-smart-tv-wifi-negro-350-cd-m-.webp" alt="Equipos IT B2B"/>
            <div class="font-mono text-xs text-slate-500">Ref. Mayorista Oficial Homologada</div>
          </div>
          <div class="flex items-center justify-between pt-2 text-xs">
            <div>
              <span class="text-slate-400 uppercase tracking-wider block font-bold text-[10px]">Disponibilidad Inmediata</span>
              <strong class="text-slate-800 text-sm font-extrabold">+2.400 Referencias de Movilidad IT</strong>
            </div>
            <span class="px-3 py-1 rounded-md bg-primary text-white font-bold text-xs">Entrega 24/48h</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
