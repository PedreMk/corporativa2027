<?php
/**
 * Live Demo & Style Switcher Drawer - Pedregosa B2B 3.0
 * Barra de Configuración Rápida en vivo para demostraciones a clientes
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (defined('ABSPATH') && !current_user_can('manage_options')) {
    return;
}
?>

<!-- =========================================================================
     BOTÓN FLOTANTE LATERAL VERTICAL (PESTAÑA DE AJUSTES & DEMOS)
     ========================================================================= -->
<div id="ped-customizer-toggle-wrap" class="fixed right-0 top-1/2 -translate-y-1/2 z-50">
  <button type="button" id="ped-customizer-toggle" class="group flex flex-col items-center justify-center py-4 px-2.5 bg-slate-900/95 hover:bg-primary text-white rounded-l-xl shadow-2xl border-y border-l border-white/20 transition-all cursor-pointer backdrop-blur-md select-none" title="Personalizar vista y cambiar versión">
    <span class="material-symbols-outlined text-[20px] text-amber-400 mb-2 group-hover:rotate-90 transition-transform">tune</span>
    <span style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(180deg);" class="tracking-widest text-[11px] font-black uppercase text-white/90 group-hover:text-white py-1">
      Ajustes &amp; Demos
    </span>
  </button>
</div>

<!-- =========================================================================
     DRAWER LATERAL DESLIZANTE (SIN FONDO OSCURO PARA VER LA WEB EN VIVO)
     ========================================================================= -->
<aside id="ped-customizer-drawer" class="fixed top-0 right-0 w-84 sm:w-96 h-full bg-white text-slate-900 shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col border-l border-slate-300" aria-label="Panel de Configuración Rápida">
  
  <!-- Header del Panel -->
  <div class="p-4 sm:p-5 border-b border-slate-200 bg-slate-900 text-white flex items-center justify-between">
    <div class="flex items-center gap-2.5">
      <div class="w-8 h-8 rounded-lg bg-primary text-white flex items-center justify-center shadow-xs">
        <span class="material-symbols-outlined text-[18px]">palette</span>
      </div>
      <div>
        <h3 class="text-sm font-extrabold text-white leading-tight">Configurador B2B</h3>
        <p class="text-[11px] text-slate-300">Demostración interactiva en vivo</p>
      </div>
    </div>
    <button type="button" id="ped-customizer-close" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-red-600 hover:text-white text-white/80 flex items-center justify-center transition cursor-pointer" aria-label="Cerrar panel">
      <span class="material-symbols-outlined text-[18px]">close</span>
    </button>
  </div>

  <!-- Contenido desplazable -->
  <div class="flex-1 overflow-y-auto p-4 sm:p-5 space-y-6 text-xs bg-white text-slate-900">

    <!-- AVISO DE VISUALIZACIÓN EN VIVO -->
    <div class="p-2.5 rounded-lg bg-amber-50 border border-amber-200 text-amber-900 text-[11px] flex items-start gap-2">
      <span class="material-symbols-outlined text-amber-600 text-[16px] flex-shrink-0 mt-0.5">visibility</span>
      <span><strong>Vista en vivo:</strong> Puedes interactuar con los ajustes y ver los cambios en la página inmediatamente.</span>
    </div>

    <!-- 1. SELECTOR DE VERSIONES DE PORTADA -->
    <div class="space-y-2.5">
      <div class="flex items-center justify-between">
        <span class="font-extrabold uppercase tracking-wider text-[11px] text-slate-800">1. Versiones de Portada</span>
        <span class="text-[10px] bg-red-100 text-primary font-bold px-2 py-0.5 rounded">4 Modelos</span>
      </div>
      <div class="grid grid-cols-1 gap-2">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="ped-demo-link p-2.5 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary hover:bg-primary/5 transition flex items-center justify-between group">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-[18px]">apartment</span>
            <div>
              <div class="font-bold text-slate-900">V1: Corporativa 3.0 Oficial</div>
              <div class="text-[10px] text-slate-500">Tema activo oficial con selector Hero dual</div>
            </div>
          </div>
          <span class="material-symbols-outlined text-[14px] text-slate-400 group-hover:text-primary group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
        </a>

        <a href="<?php echo esc_url(home_url('/preview-carrusel.html')); ?>" class="ped-demo-link p-2.5 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary hover:bg-primary/5 transition flex items-center justify-between group">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-emerald-600 text-[18px]">view_carousel</span>
            <div>
              <div class="font-bold text-slate-900">V2: Slider Superior a Toda Página</div>
              <div class="text-[10px] text-slate-500">Slide completo rotativo 4 pilares</div>
            </div>
          </div>
          <span class="material-symbols-outlined text-[14px] text-slate-400 group-hover:text-primary group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
        </a>

        <a href="<?php echo esc_url(home_url('/preview-equipo.html')); ?>" class="ped-demo-link p-2.5 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary hover:bg-primary/5 transition flex items-center justify-between group">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-green-600 text-[18px]">chat</span>
            <div>
              <div class="font-bold text-slate-900">V3: Equipo &amp; WhatsApp B2B</div>
              <div class="text-[10px] text-slate-500">Enfoque a conversión rápida y cercanía</div>
            </div>
          </div>
          <span class="material-symbols-outlined text-[14px] text-slate-400 group-hover:text-primary group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
        </a>

        <a href="<?php echo esc_url(home_url('/preview-premium.html')); ?>" class="ped-demo-link p-2.5 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary hover:bg-primary/5 transition flex items-center justify-between group">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-purple-600 text-[18px]">workspace_premium</span>
            <div>
              <div class="font-bold text-slate-900">V4: Corporativa Minimal Premium</div>
              <div class="text-[10px] text-slate-500">Sobria y ejecutiva de alta gama</div>
            </div>
          </div>
          <span class="material-symbols-outlined text-[14px] text-slate-400 group-hover:text-primary group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
        </a>
      </div>
    </div>

    

    <!-- 2. INTERRUPTORES DE MÓDULOS (ON / OFF EN VIVO) -->
    <div class="space-y-3 pt-3 border-t border-slate-200">
      <div class="flex items-center justify-between">
        <span class="font-extrabold uppercase tracking-wider text-[11px] text-slate-800">2. Módulos Operativos (En Vivo)</span>
        <span class="text-[10px] text-slate-400">Clic para ver/ocultar</span>
      </div>
      
      <div class="space-y-2">
        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-primary">view_carousel</span> Slider Superior Hero
          </span>
          <input type="checkbox" id="toggle-hero-slider" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#hero-slider-section, #hero-carousel-container, #hero-square-slider, #hero-stitch, .hero-sq-slide" checked/>
        </label>

        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-sky-600">account_balance</span> Clientes Sector Público
          </span>
          <input type="checkbox" id="toggle-pub-sector" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#homologaciones" checked/>
        </label>

        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-primary">domain</span> Tres áreas de especialización
          </span>
          <input type="checkbox" id="toggle-divisiones" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#divisiones, .seccion-divisiones" checked/>
        </label>

        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-amber-600">verified</span> Marcas Líderes &amp; Fabricantes
          </span>
          <input type="checkbox" id="toggle-marcas" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#marcas-lideres" checked/>
        </label>

        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-blue-600">hub</span> Casos de Éxito &amp; LinkedIn
          </span>
          <input type="checkbox" id="toggle-casos" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#casos-exito" checked/>
        </label>

        <label class="flex items-center justify-between p-2 rounded-lg bg-slate-50 border border-slate-200 cursor-pointer hover:bg-slate-100 transition">
          <span class="font-semibold text-slate-800 flex items-center gap-2">
            <span class="material-symbols-outlined text-sm text-emerald-600">military_tech</span> Calidad Adok ISO 9001/14001
          </span>
          <input type="checkbox" id="toggle-cert" class="ped-module-toggle accent-primary w-4 h-4 cursor-pointer" data-target="#certificaciones" checked/>
        </label>
      </div>
    </div>

    <!-- 3. TAMAÑO DE FUENTE & ACCESIBILIDAD -->
    <div class="space-y-2.5 pt-3 border-t border-slate-200">
      <div class="flex items-center justify-between">
        <span class="font-extrabold uppercase tracking-wider text-[11px] text-slate-800">3. Tamaño de Fuente (Web Entera)</span>
        <span id="ped-current-font-label" class="text-[10px] text-slate-500 font-bold">100%</span>
      </div>
      <div class="grid grid-cols-3 gap-2">
        <button type="button" class="ped-font-btn py-2 px-3 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary font-bold text-center transition cursor-pointer" data-scale="0.90">
          A- <span class="text-[10px] text-slate-400 font-normal">(-10%)</span>
        </button>
        <button type="button" class="ped-font-btn py-2 px-3 rounded-lg border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer" data-scale="1.0">
          A <span class="text-[10px] font-normal">(Base)</span>
        </button>
        <button type="button" class="ped-font-btn py-2 px-3 rounded-lg border border-slate-200 bg-slate-50 hover:border-primary font-bold text-center transition cursor-pointer" data-scale="1.15">
          A+ <span class="text-[10px] text-slate-400 font-normal">(+15%)</span>
        </button>
      </div>
    </div>

    <!-- 4. PALETA DE COLOR B2B (AFECTA A TODA LA WEB) -->
    <div class="space-y-2.5 pt-3 border-t border-slate-200">
      <div class="flex items-center justify-between">
        <span class="font-extrabold uppercase tracking-wider text-[11px] text-slate-800">4. Paleta de Color (Toda la Web)</span>
        <span class="text-[10px] text-slate-400">En tiempo real</span>
      </div>
      <div class="grid grid-cols-3 gap-2">
        <button type="button" class="ped-color-btn p-2.5 rounded-lg border-2 border-primary bg-red-50 text-center transition cursor-pointer flex flex-col items-center gap-1.5" data-primary="#8a0018" data-container="#b50524" data-name="rojo">
          <span class="w-5 h-5 rounded-full shadow-xs border border-white" style="background-color: #b50524 !important;"></span><span class="text-[10px] font-bold text-slate-900 leading-tight">Rojo Pedregosa</span>
        </button>
        <button type="button" class="ped-color-btn p-2.5 rounded-lg border border-slate-200 bg-slate-50 text-center transition cursor-pointer flex flex-col items-center gap-1.5" data-primary="#0f2942" data-container="#0284c7" data-name="azul">
          <span class="w-5 h-5 rounded-full shadow-xs border border-white" style="background-color: #0284c7 !important;"></span><span class="text-[10px] font-bold text-slate-900 leading-tight">Azul Licitación</span>
        </button>
        <button type="button" class="ped-color-btn p-2.5 rounded-lg border border-slate-200 bg-slate-50 text-center transition cursor-pointer flex flex-col items-center gap-1.5" data-primary="#14532d" data-container="#16a34a" data-name="verde">
          <span class="w-5 h-5 rounded-full shadow-xs border border-white" style="background-color: #16a34a !important;"></span><span class="text-[10px] font-bold text-slate-900 leading-tight">Verde Eco</span>
        </button>
      </div>
    </div>

    <!-- 5. MODO NOCTURNO (AFECTA A TODA LA WEB) -->
    <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined text-[20px] text-amber-500">dark_mode</span>
        <div>
          <div class="font-extrabold uppercase tracking-wider text-[11px] text-slate-900">Modo Nocturno (Toda la Web)</div>
          <div class="text-[10px] text-slate-500">Aspecto oscuro ejecutivo en tiempo real</div>
        </div>
      </div>
      <button type="button" id="ped-dark-toggle" class="px-3.5 py-1.5 rounded-lg border border-slate-300 bg-slate-100 font-bold text-slate-800 text-xs flex items-center gap-1.5 cursor-pointer hover:bg-slate-200 transition">
        <span id="ped-dark-label">☀️ Modo Día</span>
      </button>
    </div>

    <!-- 6. HERRAMIENTAS DIRECTAS (CALCULADORA & DATOS FACE) -->
    <div class="space-y-2 pt-3 border-t border-slate-200">
      <span class="font-extrabold uppercase tracking-wider text-[11px] text-slate-800">6. Acciones &amp; Herramientas B2B</span>
      <div class="grid grid-cols-1 gap-2">
        <button type="button" id="ped-open-calculator-btn" class="w-full py-2.5 px-3 rounded-lg bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-xs transition cursor-pointer">
          <span class="material-symbols-outlined text-[16px]">calculate</span>
          <span>Calculadora Ahorro Coste por Copia</span>
        </button>
        <button type="button" id="ped-open-face-btn" class="w-full py-2.5 px-3 rounded-lg bg-sky-700 hover:bg-sky-800 text-white font-bold text-xs flex items-center justify-center gap-2 shadow-xs transition cursor-pointer">
          <span class="material-symbols-outlined text-[16px]">gavel</span>
          <span>Ficha Datos FACe / DIR3 Organismos</span>
        </button>
      </div>
    </div>

  </div>

  <!-- Pie del panel -->
  <div class="p-3 border-t border-slate-200 bg-slate-50 text-center text-[10px] text-slate-400">
    Pedregosa Corporativa 3.0 &bull; InfoPixel Technologies
  </div>

</aside>

<!-- =========================================================================
     WIDGET FLOTANTE DE WHATSAPP MULTIDEPARTAMENTO
     ========================================================================= -->
<div id="ped-whatsapp-widget" class="fixed bottom-6 right-6 z-40 flex flex-col items-end">
  
  <!-- Cuadro de diálogo emergente de WhatsApp -->
  <div id="ped-whatsapp-box" class="mb-3 w-80 sm:w-92 bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden transform scale-95 opacity-0 pointer-events-none transition-all duration-300 origin-bottom-right">
    
    <!-- Header WhatsApp -->
    <div class="bg-[#075e54] text-white p-4 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">
          <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.41 1.56 1.56 2.41 3.63 2.41 5.83s-.85 4.27-2.41 5.83a8.21 8.21 0 0 1-5.82 2.41c-1.5 0-2.97-.39-4.27-1.14l-.31-.18-3.12.82.83-3.04-.2-.32a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.53c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.01-1.24-.74-.66-1.24-1.48-1.39-1.73-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.87.85-.87 2.08 0 1.22.89 2.41 1.02 2.58.12.17 1.76 2.69 4.27 3.77.6.26 1.07.41 1.43.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.17-.48-.29Z"/></svg>
        </div>
        <div>
          <div class="font-bold text-sm leading-tight">Pedregosa S.L.</div>
          <div class="text-[11px] text-white/80">Atención Directa B2B &amp; Licitaciones</div>
        </div>
      </div>
      <button type="button" id="ped-whatsapp-close" class="text-white/80 hover:text-white transition cursor-pointer p-1">
        <span class="material-symbols-outlined text-[18px]">close</span>
      </button>
    </div>

        <!-- Cuerpo del selector de departamento -->
    <div class="p-4 bg-slate-50 space-y-3">
      <p class="text-xs text-slate-600 font-medium">
        ¿En qué podemos ayudarte? Selecciona el canal directo:
      </p>

      <!-- Rectángulo Destacado Principal: Contacto Directo WhatsApp B2B -->
      <a href="https://wa.me/34624825868?text=Hola,%20deseo%20contactar%20por%20WhatsApp%20con%20Pedregosa" target="_blank" rel="noopener" class="block p-3.5 rounded-xl bg-[#25D366] hover:bg-[#20ba5a] text-white shadow-md hover:shadow-lg transition-all group">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.41 1.56 1.56 2.41 3.63 2.41 5.83s-.85 4.27-2.41 5.83a8.21 8.21 0 0 1-5.82 2.41c-1.5 0-2.97-.39-4.27-1.14l-.31-.18-3.12.82.83-3.04-.2-.32a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.53c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.01-1.24-.74-.66-1.24-1.48-1.39-1.73-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.87.85-.87 2.08 0 1.22.89 2.41 1.02 2.58.12.17 1.76 2.69 4.27 3.77.6.26 1.07.41 1.43.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.17-.48-.29Z"/></svg>
            </div>
            <div>
              <div class="text-[10px] font-bold uppercase tracking-wider text-white/90">Escribir por WhatsApp</div>
              <div class="text-base font-extrabold text-white tracking-wide flex items-center gap-1.5 leading-tight">
                <span>+34 624 82 58 68</span>
                <span class="inline-block w-2 h-2 rounded-full bg-white animate-pulse"></span>
              </div>
              <div class="text-[10px] text-white/80">Atención directa para pedidos y consultas</div>
            </div>
          </div>
          <span class="material-symbols-outlined text-white text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </div>
      </a>

      <!-- Opción 1: Pedidos B2B y Empresas -->
      <a href="https://wa.me/34624825868?text=Hola,%20solicito%20presupuesto%20o%20informaci%C3%B3n%20para%20pedidos%20B2B" target="_blank" rel="noopener" class="block p-3 rounded-xl bg-white border border-slate-200 hover:border-[#25D366] hover:shadow-md transition group">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
            <span class="material-symbols-outlined text-[18px]">business_center</span>
          </div>
          <div class="flex-1">
            <div class="font-bold text-xs text-slate-900 group-hover:text-emerald-600 transition-colors">
              Pedidos y Presupuestos B2B
            </div>
            <div class="text-[11px] text-slate-500 mt-0.5">
              Empresas, centros educativos y suministros
            </div>
            <div class="text-[10px] text-primary font-bold mt-1 flex items-center gap-1">
              <span class="material-symbols-outlined text-[12px]">mail</span> pedidos@pedregosa.es
            </div>
          </div>
        </div>
      </a>

      <!-- Opción 2: Licitaciones y Concursos Públicos -->
      <a href="https://wa.me/34624825868?text=Hola,%20deseo%20informaci%C3%B3n%20sobre%20licitaci%C3%B3n,%20pliego%20o%20acuerdo%20marco" target="_blank" rel="noopener" class="block p-3 rounded-xl bg-white border border-slate-200 hover:border-sky-500 hover:shadow-md transition group">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-lg bg-sky-50 text-sky-600 flex items-center justify-center flex-shrink-0 mt-0.5">
            <span class="material-symbols-outlined text-[18px]">gavel</span>
          </div>
          <div class="flex-1">
            <div class="font-bold text-xs text-slate-900 group-hover:text-sky-600 transition-colors">
              Mesa de Licitaciones &amp; Concursos
            </div>
            <div class="text-[11px] text-slate-500 mt-0.5">
              Organismos públicos, pliegos y contratación
            </div>
            <div class="text-[10px] text-sky-600 font-bold mt-1 flex items-center gap-1">
              <span class="material-symbols-outlined text-[12px]">mail</span> concurso@pedregosa.es
            </div>
          </div>
        </div>
      </a>

      <!-- Teléfono directo & Horario Oficial -->
      <div class="pt-2.5 border-t border-slate-200 flex flex-col gap-1.5 text-[11px] text-slate-500">
        <div class="flex items-center justify-between">
          <a href="tel:954368011" class="flex items-center gap-1 font-bold text-slate-800 hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-[15px] text-primary">call</span>
            <span>Tel: 954 36 80 11</span>
          </a>
          <span class="text-[10px] text-slate-400">Sede Central Sevilla</span>
        </div>
        <div class="text-[10px] text-emerald-700 font-semibold flex items-center gap-1">
          <span class="material-symbols-outlined text-[13px]">schedule</span>
          <span>L-J: 8:30-14:30 / 15:30-17:30 &bull; V: 8:00-15:00</span>
        </div>
      </div>

    </div>
  </div>

  <!-- Botón Circular Flotante de WhatsApp -->
  <button type="button" id="ped-whatsapp-toggle" class="w-14 h-14 rounded-full bg-[#25D366] hover:bg-[#20ba59] text-white flex items-center justify-center shadow-2xl hover:scale-105 transition-all cursor-pointer relative group" aria-label="Abrir WhatsApp">
    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.41 1.56 1.56 2.41 3.63 2.41 5.83s-.85 4.27-2.41 5.83a8.21 8.21 0 0 1-5.82 2.41c-1.5 0-2.97-.39-4.27-1.14l-.31-.18-3.12.82.83-3.04-.2-.32a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.53c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.01-1.24-.74-.66-1.24-1.48-1.39-1.73-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.87.85-.87 2.08 0 1.22.89 2.41 1.02 2.58.12.17 1.76 2.69 4.27 3.77.6.26 1.07.41 1.43.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.17-.48-.29Z"/></svg>
    <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-red-500 rounded-full border-2 border-white animate-pulse"></span>
  </button>

</div>

<!-- =========================================================================
     MODAL DE DATOS FISCALES & FACTURACIÓN PÚBLICA (FACe / DIR3 / CIF)
     ========================================================================= -->
<div id="ped-face-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-xs opacity-0 pointer-events-none transition-opacity duration-300">
  <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden transform scale-95 transition-transform duration-300">
    
    <!-- Header Modal -->
    <div class="p-5 border-b border-slate-200 bg-slate-900 text-white flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <span class="material-symbols-outlined text-sky-400 text-2xl">account_balance</span>
        <div>
          <h3 class="font-extrabold text-sm leading-tight text-white">Datos de Facturación para Organismos Públicos</h3>
          <p class="text-[11px] text-slate-300">Tramitación Oficial FACe &bull; DIR3 &bull; Contratación</p>
        </div>
      </div>
      <button type="button" class="ped-close-face text-slate-400 hover:text-white transition cursor-pointer">
        <span class="material-symbols-outlined text-[20px]">close</span>
      </button>
    </div>

    <!-- Cuerpo con los datos copiables -->
    <div class="p-5 space-y-4 text-xs text-slate-700">
      
      <div class="grid grid-cols-2 gap-3">
        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
          <div class="text-[10px] font-bold uppercase text-slate-400">Razón Social</div>
          <div class="font-extrabold text-slate-900 text-sm mt-0.5" id="data-razon">Pedregosa S.L.U.</div>
        </div>
        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
          <div class="text-[10px] font-bold uppercase text-slate-400">NIF / CIF Oficial</div>
          <div class="font-extrabold text-primary text-sm mt-0.5" id="data-cif">B-41228227</div>
        </div>
      </div>

      <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
        <div class="text-[10px] font-bold uppercase text-slate-400">Sede Fiscal &bull; Oficina Comercial</div>
        <div class="font-semibold text-slate-900 text-xs mt-0.5" id="data-direccion">
          Polígono Store, Calle Gramil nº 8, 41008 Sevilla (España)
        </div>
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
          <div class="text-[10px] font-bold uppercase text-sky-600">Canal Concursos / Licitación</div>
          <div class="font-bold text-slate-900 mt-0.5" id="data-email-concurso">concurso@pedregosa.es</div>
        </div>
        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
          <div class="text-[10px] font-bold uppercase text-emerald-600">Pedidos B2B &bull; Facturación</div>
          <div class="font-bold text-slate-900 mt-0.5" id="data-email-pedidos">pedidos@pedregosa.es</div>
        </div>
      </div>

      <div class="p-3 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-between text-blue-900">
        <div>
          <div class="font-bold">Facturación Electrónica FACe</div>
          <div class="text-[11px] text-blue-700">Punto General de Entrada: face.gob.es</div>
        </div>
        <span class="material-symbols-outlined text-2xl text-blue-600">verified</span>
      </div>

    </div>

    <!-- Footer Modal con botón de copiar -->
    <div class="p-4 bg-slate-50 border-t border-slate-200 flex items-center justify-between">
      <span id="ped-copy-feedback" class="text-xs font-bold text-emerald-600 opacity-0 transition-opacity flex items-center gap-1">
        <span class="material-symbols-outlined text-[16px]">check_circle</span> ¡Datos copiados!
      </span>
      <div class="flex items-center gap-2">
        <button type="button" class="ped-close-face px-3.5 py-2 rounded-lg border border-slate-300 text-slate-700 font-bold text-xs hover:bg-slate-100 transition cursor-pointer">
          Cerrar
        </button>
        <button type="button" id="ped-copy-face-data" class="px-4 py-2 rounded-lg bg-primary hover:bg-primary-container text-white font-bold text-xs shadow-xs transition flex items-center gap-1.5 cursor-pointer">
          <span class="material-symbols-outlined text-[16px]">content_copy</span>
          <span>Copiar Ficha Completa</span>
        </button>
      </div>
    </div>

  </div>
</div>

<!-- =========================================================================
     MODAL DE CALCULADORA INTERACTIVA DE COSTE POR COPIA (HP & BROTHER)
     ========================================================================= -->
<div id="ped-calculator-modal" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 bg-slate-950/70 backdrop-blur-xs opacity-0 pointer-events-none transition-opacity duration-300">
  <div class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden transform scale-95 transition-transform duration-300 max-h-[92vh] flex flex-col">
    
    <!-- Header Calculadora -->
    <div class="p-4 sm:p-5 border-b border-slate-200 bg-[#8a0018] text-white flex items-center justify-between flex-shrink-0">
      <div class="flex items-center gap-2.5">
        <span class="material-symbols-outlined text-amber-300 text-2xl">calculate</span>
        <div>
          <h3 class="font-extrabold text-sm leading-tight text-white">Calculadora de Ahorro en Coste por Copia</h3>
          <p class="text-[11px] text-white/80">Flotas Gestionadas Oficiales HP &amp; Brother con Mantenimiento</p>
        </div>
      </div>
      <button type="button" class="ped-close-calc text-white/80 hover:text-white transition cursor-pointer p-1">
        <span class="material-symbols-outlined text-[20px]">close</span>
      </button>
    </div>

    <!-- Contenido desplazable de la Calculadora -->
    <div class="p-4 sm:p-5 overflow-y-auto space-y-4 text-xs text-slate-700 flex-1">
      
      <!-- 1. Formato de Papel Habitual (A4 vs A3) -->
      <div class="space-y-1.5">
        <div class="flex items-center justify-between">
          <label class="font-bold text-slate-900 text-xs">1. Formato de papel requerido:</label>
          <span id="calc-format-label" class="text-[10px] font-extrabold text-primary uppercase">Solo A4</span>
        </div>
        <div class="grid grid-cols-2 gap-2">
          <button type="button" class="ped-calc-format p-2 rounded-lg border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer flex items-center justify-center gap-1.5" data-format="a4">
            <span class="material-symbols-outlined text-[16px]">description</span>
            <span>Solo Formato A4</span>
          </button>
          <button type="button" class="ped-calc-format p-2 rounded-lg border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer flex items-center justify-center gap-1.5" data-format="a3">
            <span class="material-symbols-outlined text-[16px]">newspaper</span>
            <span>A4 + A3 Departamental</span>
          </button>
        </div>
      </div>

      <!-- 2. Selector de Volumen Mensual -->
      <div class="space-y-1.5">
        <div class="flex items-center justify-between">
          <label class="font-bold text-slate-900 text-xs">2. Volumen estimado de páginas al mes:</label>
          <span id="calc-volume-display" class="font-extrabold text-primary text-sm px-2.5 py-0.5 rounded bg-red-50">5.000 págs</span>
        </div>
        <input type="range" id="calc-volume-slider" min="1000" max="40000" step="1000" value="5000" class="w-full accent-primary cursor-pointer"/>
        <div class="flex justify-between text-[10px] text-slate-400">
          <span>1.000</span>
          <span>10.000</span>
          <span>20.000</span>
          <span>30.000</span>
          <span>40.000+</span>
        </div>
      </div>

      <!-- 3. Distribución de Color -->
      <div class="space-y-1.5">
        <label class="font-bold text-slate-900 text-xs">3. Tipo de impresión predominante:</label>
        <div class="grid grid-cols-3 gap-2">
          <button type="button" class="ped-calc-mode p-2 rounded-lg border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer text-[11px]" data-mode="bw">
            Predominio B/N (85%)
          </button>
          <button type="button" class="ped-calc-mode p-2 rounded-lg border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer text-[11px]" data-mode="mixed">
            Mixto Color (40%)
          </button>
          <button type="button" class="ped-calc-mode p-2 rounded-lg border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer text-[11px]" data-mode="color">
            Intensivo Color (70%)
          </button>
        </div>
      </div>

      <!-- Cuadro de Resultados Comparativos en Vivo -->
      <div class="p-3.5 sm:p-4 rounded-xl bg-slate-50 border border-slate-200 space-y-2.5">
        <div class="flex items-center justify-between text-xs">
          <span class="text-slate-500">Coste tradicional (compra tóner suelto + tambor + averías):</span>
          <span id="calc-traditional-cost" class="font-bold text-slate-700 line-through">155 €/mes</span>
        </div>
        <div class="flex items-center justify-between text-xs">
          <span class="text-slate-500">Coste en modalidad Pago por Copia HP/Brother:</span>
          <span id="calc-pedregosa-cost" class="font-bold text-emerald-600 text-sm">98 €/mes</span>
        </div>
        <div class="pt-2.5 border-t border-slate-200 flex items-center justify-between">
          <div>
            <div class="text-[11px] font-extrabold uppercase text-primary">Ahorro Anual Estimado (~32%)</div>
            <div class="text-[10px] text-slate-400">Cero costes imprevistos de piezas, mano de obra o tóner</div>
          </div>
          <div id="calc-annual-saving" class="text-xl font-black text-emerald-600">684 € / año</div>
        </div>
      </div>

      <!-- Nota Legal Obligatoria -->
      <div class="p-2.5 rounded-lg bg-slate-100 border border-slate-200 text-[10px] text-slate-500 leading-relaxed">
        <strong>Nota legal:</strong> Los cálculos mostrados son estimaciones orientativas calculadas sobre una cobertura estándar del 5% en monocromo y 20% en color según normativas ISO/IEC 19752 e ISO/IEC 19798. Los ahorros y costes definitivos pueden variar en función de la cobertura real de impresión, tipología de documentos, volumen auditado y modelo de equipo homologado seleccionado.
      </div>

      <!-- Formulario para Solicitar Propuesta Formal y Marcas Actuales -->
      <div class="pt-3 border-t border-slate-200 space-y-3">
        <div class="flex items-center justify-between">
          <span class="font-extrabold uppercase text-[11px] text-primary">Solicitar Auditoría y Propuesta Personalizada</span>
          <span class="text-[10px] text-slate-400">Respuesta comercial en 24h</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
          <div>
            <label class="block text-[10px] font-bold text-slate-700 mb-0.5">Nombre y Cargo *</label>
            <input type="text" id="calc-form-name" placeholder="Ej: Manuel García (Responsable Compras)" class="w-full px-2.5 py-1.5 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
          </div>
          <div>
            <label class="block text-[10px] font-bold text-slate-700 mb-0.5">Empresa u Organismo *</label>
            <input type="text" id="calc-form-company" placeholder="Ej: Despacho / Colegio / Organismo" class="w-full px-2.5 py-1.5 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
          <div>
            <label class="block text-[10px] font-bold text-slate-700 mb-0.5">Teléfono Directo *</label>
            <input type="tel" id="calc-form-phone" placeholder="954 36 80 11..." class="w-full px-2.5 py-1.5 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
          </div>
          <div>
            <label class="block text-[10px] font-bold text-slate-700 mb-0.5">Correo Electrónico *</label>
            <input type="email" id="calc-form-email" placeholder="correo@empresa.com" class="w-full px-2.5 py-1.5 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
          </div>
        </div>

        <!-- Campo clave: Marcas de impresoras actuales -->
        <div>
          <label class="block text-[10px] font-bold text-slate-700 mb-0.5">¿Qué marcas de impresoras o multifuncionales tienes actualmente? *</label>
          <input type="text" id="calc-form-brands" placeholder="Ej: HP LaserJet, Brother, Canon, Epson, Konica Minolta..." class="w-full px-2.5 py-1.5 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
          <div class="flex flex-wrap items-center gap-1.5 mt-1 text-[10px] text-slate-400">
            <span>Añadir rápido:</span>
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="HP">HP</button>&bull;
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="Brother">Brother</button>&bull;
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="Canon">Canon</button>&bull;
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="Epson">Epson</button>&bull;
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="Kyocera">Kyocera</button>&bull;
            <button type="button" class="ped-quick-brand hover:text-primary underline cursor-pointer" data-brand="Konica Minolta">Konica Minolta</button>
          </div>
        </div>

        <div id="calc-submit-feedback" class="hidden p-2 rounded-lg bg-emerald-50 text-emerald-800 text-[11px] font-bold flex items-center gap-1.5">
          <span class="material-symbols-outlined text-[16px]">check_circle</span>
          <span>¡Solicitud preparada! Redirigiendo a pedidos@pedregosa.es...</span>
        </div>

      </div>

    </div>

    <!-- Footer Modal -->
    <div class="p-3.5 sm:p-4 bg-slate-50 border-t border-slate-200 flex items-center justify-between flex-shrink-0">
      <button type="button" class="ped-close-calc px-3.5 py-2 rounded-lg border border-slate-300 text-slate-700 font-bold text-xs hover:bg-slate-100 transition cursor-pointer">
        Cerrar
      </button>
      <button type="button" id="ped-send-calc-request" class="px-4 py-2 rounded-lg bg-primary hover:bg-primary-container text-white font-bold text-xs shadow-xs transition flex items-center gap-1.5 cursor-pointer">
        <span class="material-symbols-outlined text-[16px]">send</span>
        <span>Enviar Solicitud a pedidos@pedregosa.es</span>
      </button>
    </div>

  </div>
</div>

<!-- =========================================================================
     JAVASCRIPT DEL PERSONALIZADOR, PALETA GLOBAL Y MODO NOCTURNO REAL
     ========================================================================= -->
<script>
(function() {
  // 1. DRAWER TOGGLE (ABRIR / CERRAR SIN FONDO NEGRO)
  const toggleBtn = document.getElementById('ped-customizer-toggle');
  const closeBtn = document.getElementById('ped-customizer-close');
  const drawer = document.getElementById('ped-customizer-drawer');

  let isDrawerOpen = false;

  function openDrawer() {
    isDrawerOpen = true;
    drawer.classList.remove('translate-x-full');
  }
  function closeDrawer() {
    isDrawerOpen = false;
    drawer.classList.add('translate-x-full');
  }

  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      if (isDrawerOpen) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

  // 2. TOGGLE DE MÓDULOS EN VIVO
  const moduleToggles = document.querySelectorAll('.ped-module-toggle');
  moduleToggles.forEach(chk => {
    chk.addEventListener('change', () => {
      const targetSel = chk.getAttribute('data-target');
      if (!targetSel) return;
      const elements = document.querySelectorAll(targetSel);
      elements.forEach(el => {
        if (chk.checked) {
          el.style.display = '';
        } else {
          el.style.display = 'none';
        }
      });
    });
  });

  // 3. TAMAÑO DE FUENTE EN TODA LA WEB
  const fontBtns = document.querySelectorAll('.ped-font-btn');
  const fontLabel = document.getElementById('ped-current-font-label');
  fontBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const scale = btn.getAttribute('data-scale');
      document.documentElement.style.fontSize = (parseFloat(scale) * 16) + 'px';
      if (fontLabel) fontLabel.innerText = Math.round(parseFloat(scale) * 100) + '%';
      fontBtns.forEach(b => {
        b.classList.remove('border-primary', 'bg-primary/10', 'text-primary', 'border-2');
        b.classList.add('border-slate-200');
      });
      btn.classList.remove('border-slate-200');
      btn.classList.add('border-primary', 'bg-primary/10', 'text-primary', 'border-2');
    });
  });

  // 4. PALETA DE COLORES GLOBAL (AFECTA A TODA LA WEB EN VIVO)
  const colorBtns = document.querySelectorAll('.ped-color-btn');
  
  function applyGlobalPalette(primary, container) {
    let styleTag = document.getElementById('ped-theme-override-styles');
    if (!styleTag) {
      styleTag = document.createElement('style');
      styleTag.id = 'ped-theme-override-styles';
      document.head.appendChild(styleTag);
    }
    styleTag.textContent = `
      /* Exclude drawer */
      #ped-customizer-drawer, #ped-customizer-drawer * {
        /* Keep neutral styles for drawer UI */
      }
      #ped-customizer-drawer .text-slate-800, #ped-customizer-drawer .text-slate-900 {
        color: #1e293b !important;
      }

      :root {
        --color-primary: ${primary} !important;
        --color-primary-container: ${container} !important;
      }
      .bg-primary, .bg-primary-container, .bg-crimson-deep, 
      [class*="bg-[#b50524]"], [class*="bg-[#8a0018]"], [class*="bg-[#8F031C]"] {
        background-color: ${container} !important;
      }
      .hover\\:bg-primary:hover, .hover\\:bg-primary-container:hover {
        background-color: ${primary} !important;
      }
      .text-primary, .text-primary-container,
      [class*="text-[#b50524]"], [class*="text-[#8a0018]"], [class*="text-[#8F031C]"] {
        color: ${container} !important;
      }
      .hover\\:text-primary:hover, .hover\\:text-primary-container:hover {
        color: ${primary} !important;
      }
      .border-primary, .border-primary-container,
      [class*="border-[#b50524]"], [class*="border-[#8a0018]"] {
        border-color: ${container} !important;
      }
      .hover\\:border-primary:hover, .hover\\:border-primary-container:hover {
        border-color: ${container} !important;
      }
      .accent-primary {
        accent-color: ${container} !important;
      }
      svg [fill="#b50524"], svg [fill="#8a0018"], svg [fill="#8F031C"] {
        fill: ${container} !important;
      }
      .selection\\:bg-primary-container::selection {
        background-color: ${container} !important;
      }
    `;
  }

  colorBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const primary = btn.getAttribute('data-primary');
      const container = btn.getAttribute('data-container');
      applyGlobalPalette(primary, container);

      colorBtns.forEach(b => {
        b.classList.remove('border-primary', 'border-2', 'bg-red-50', 'bg-sky-50', 'bg-emerald-50');
        b.classList.add('border-slate-200', 'bg-slate-50');
      });
      btn.classList.remove('border-slate-200', 'bg-slate-50');
      btn.classList.add('border-primary', 'border-2');
    });
  });

  // 5. MODO NOCTURNO REAL EN TODA LA WEB
  const darkBtn = document.getElementById('ped-dark-toggle');
  const darkLabel = document.getElementById('ped-dark-label');
  let isDarkMode = false;

  function toggleGlobalDarkMode() {
    isDarkMode = !isDarkMode;
    let darkStyle = document.getElementById('ped-darkmode-override-styles');
    
    if (isDarkMode) {
      if (!darkStyle) {
        darkStyle = document.createElement('style');
        darkStyle.id = 'ped-darkmode-override-styles';
        document.head.appendChild(darkStyle);
      }
      darkStyle.textContent = `
        html, body {
          background-color: #0b1120 !important;
          color: #f1f5f9 !important;
        }
        section.bg-white, section.bg-slate-50, section.bg-slate-100,
        main, div.bg-white, div.bg-slate-50, div.bg-slate-100 {
          background-color: #0b1120 !important;
          color: #f1f5f9 !important;
        }
        article, 
        .rounded-2xl.border, 
        .rounded-xl.border, 
        .rounded-lg.border, 
        .p-4.bg-white.border, 
        .p-5.bg-white.border, 
        .p-7.bg-white.border,
        .p-8.bg-slate-50.border {
          background-color: #1e293b !important;
          border-color: #334155 !important;
          color: #f8fafc !important;
        }
        .text-slate-900, .text-slate-950, .text-slate-800, h1, h2, h3, h4 {
          color: #ffffff !important;
        }
        .text-slate-600, .text-slate-700, .text-slate-500, p {
          color: #94a3b8 !important;
        }
        .border-slate-200, .border-slate-100, .border-slate-border, .border-b {
          border-color: #334155 !important;
        }
        footer {
          background-color: #020617 !important;
          border-color: #1e293b !important;
        }
        header, nav {
          background-color: #0f172a !important;
          border-color: #334155 !important;
        }
        /* El drawer se mantiene limpio y legible */
        #ped-customizer-drawer {
          background-color: #0f172a !important;
          border-color: #334155 !important;
          color: #f8fafc !important;
        }
        #ped-customizer-drawer .bg-white {
          background-color: #0f172a !important;
        }
        #ped-customizer-drawer .text-slate-900, 
        #ped-customizer-drawer .text-slate-800 {
          color: #ffffff !important;
        }
        #ped-customizer-drawer .bg-slate-50 {
          background-color: #1e293b !important;
          border-color: #334155 !important;
        }
      `;
      if (darkLabel) darkLabel.innerText = '🌙 Modo Noche';
      if (darkBtn) {
        darkBtn.classList.remove('bg-slate-100', 'text-slate-800');
        darkBtn.classList.add('bg-slate-800', 'text-amber-400', 'border-amber-500/50');
      }
    } else {
      if (darkStyle) darkStyle.remove();
      if (darkLabel) darkLabel.innerText = '☀️ Modo Día';
      if (darkBtn) {
        darkBtn.classList.remove('bg-slate-800', 'text-amber-400', 'border-amber-500/50');
        darkBtn.classList.add('bg-slate-100', 'text-slate-800');
      }
    }
  }

  if (darkBtn) darkBtn.addEventListener('click', toggleGlobalDarkMode);

  // 6. WHATSAPP WIDGET
  const waToggle = document.getElementById('ped-whatsapp-toggle');
  const waBox = document.getElementById('ped-whatsapp-box');
  const waClose = document.getElementById('ped-whatsapp-close');
  if (waToggle && waBox) {
    waToggle.addEventListener('click', () => {
      const isOpen = !waBox.classList.contains('pointer-events-none');
      if (isOpen) {
        waBox.classList.add('pointer-events-none', 'scale-95', 'opacity-0');
      } else {
        waBox.classList.remove('pointer-events-none', 'scale-95', 'opacity-0');
      }
    });
  }
  if (waClose && waBox) {
    waClose.addEventListener('click', () => {
      waBox.classList.add('pointer-events-none', 'scale-95', 'opacity-0');
    });
  }

  // 7. MODAL FACE / DIR3
  const openFaceBtn = document.getElementById('ped-open-face-btn');
  const faceModal = document.getElementById('ped-face-modal');
  const closeFaceBtns = document.querySelectorAll('.ped-close-face');
  const copyFaceBtn = document.getElementById('ped-copy-face-data');
  const copyFeedback = document.getElementById('ped-copy-feedback');

  function openFace() {
    closeDrawer();
    faceModal.classList.remove('pointer-events-none', 'opacity-0');
    faceModal.querySelector('.relative').classList.remove('scale-95');
  }
  function closeFace() {
    faceModal.classList.add('pointer-events-none', 'opacity-0');
    faceModal.querySelector('.relative').classList.add('scale-95');
  }

  if (openFaceBtn) openFaceBtn.addEventListener('click', openFace);
  closeFaceBtns.forEach(b => b.addEventListener('click', closeFace));

  if (copyFaceBtn) {
    copyFaceBtn.addEventListener('click', () => {
      const textToCopy = `FICHA DE FACTURACIÓN OFICIAL - PEDREGOSA S.L.U.
Razón Social: Pedregosa S.L.U.
NIF / CIF: B-41228227
Domicilio: Polígono Store, C/ Gramil nº 8, 41008 Sevilla
Plataforma: FACe (face.gob.es)
Email Concursos y Licitaciones: concurso@pedregosa.es
Email Pedidos B2B y Facturación: pedidos@pedregosa.es
Teléfono: 954 36 80 11`;

      navigator.clipboard.writeText(textToCopy).then(() => {
        if (copyFeedback) {
          copyFeedback.classList.remove('opacity-0');
          setTimeout(() => copyFeedback.classList.add('opacity-0'), 2500);
        }
      });
    });
  }

  // 8. CALCULADORA DE COSTE POR COPIA CON FÓRMULA REAL, A4/A3 Y FORMULARIO
  const openCalcBtn = document.getElementById("ped-open-calculator-btn");
  const calcModal = document.getElementById("ped-calculator-modal");
  const closeCalcBtns = document.querySelectorAll(".ped-close-calc");
  const volSlider = document.getElementById("calc-volume-slider");
  const volDisplay = document.getElementById("calc-volume-display");
  const formatLabel = document.getElementById("calc-format-label");
  const tradCostEl = document.getElementById("calc-traditional-cost");
  const pedCostEl = document.getElementById("calc-pedregosa-cost");
  const annualSavingEl = document.getElementById("calc-annual-saving");
  const calcModeBtns = document.querySelectorAll(".ped-calc-mode");
  const calcFormatBtns = document.querySelectorAll(".ped-calc-format");
  const quickBrandBtns = document.querySelectorAll(".ped-quick-brand");
  const brandsInput = document.getElementById("calc-form-brands");
  const sendRequestBtn = document.getElementById("ped-send-calc-request");
  const feedbackEl = document.getElementById("calc-submit-feedback");

  let currentMode = "bw";       // bw, mixed, color
  let currentFormat = "a4";     // a4, a3

  function openCalc() {
    closeDrawer();
    calcModal.classList.remove("pointer-events-none", "opacity-0");
    calcModal.querySelector(".relative").classList.remove("scale-95");
  }
  function closeCalc() {
    calcModal.classList.add("pointer-events-none", "opacity-0");
    calcModal.querySelector(".relative").classList.add("scale-95");
  }

  if (openCalcBtn) openCalcBtn.addEventListener("click", openCalc);

  // Escuchar cualquier botón "Auditar Coste por Copia" en la web
  document.querySelectorAll(".ped-open-calc-btn, [data-open-calc='true']").forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      openCalc();
    });
  });
  closeCalcBtns.forEach(b => b.addEventListener("click", closeCalc));

  // Cálculo basado en costes medios de mercado en España (HP & Brother B2B)
  function updateCalc() {
    if (!volSlider) return;
    const vol = parseInt(volSlider.value, 10);
    if (volDisplay) volDisplay.innerText = vol.toLocaleString("es-ES") + " págs";

    // Costes medios A4:
    // B/N: Tradicional ~0,028 €/pág vs MPS ~0,011 €/pág
    // Mixto: Tradicional ~0,065 €/pág vs MPS ~0,032 €/pág
    // Color: Tradicional ~0,110 €/pág vs MPS ~0,058 €/pág
    let tradRate = 0.028;
    let mpsRate = 0.011;

    if (currentMode === "mixed") {
      tradRate = 0.065;
      mpsRate = 0.032;
    } else if (currentMode === "color") {
      tradRate = 0.110;
      mpsRate = 0.058;
    }

    // Si imprime en A3, las copias A3 consumen el doble de tóner/superficie (~1.35x en entorno mixto)
    if (currentFormat === "a3") {
      tradRate *= 1.35;
      mpsRate *= 1.32;
    }

    const tradMonthly = Math.round(vol * tradRate);
    const pedMonthly = Math.round(vol * mpsRate);
    const annualSaving = Math.round((tradMonthly - pedMonthly) * 12);
    const savingPercent = Math.round(((tradMonthly - pedMonthly) / tradMonthly) * 100);

    if (tradCostEl) tradCostEl.innerText = tradMonthly.toLocaleString("es-ES") + " €/mes";
    if (pedCostEl) pedCostEl.innerText = pedMonthly.toLocaleString("es-ES") + " €/mes";
    if (annualSavingEl) annualSavingEl.innerText = annualSaving.toLocaleString("es-ES") + " € / año";
  }

  if (volSlider) volSlider.addEventListener("input", updateCalc);

  // Selector de Modo (Color / BN)
  calcModeBtns.forEach(b => {
    b.addEventListener("click", () => {
      currentMode = b.getAttribute("data-mode");
      calcModeBtns.forEach(x => {
        x.classList.remove("border-primary", "bg-primary/10", "text-primary", "border-2");
        x.classList.add("border-slate-200", "bg-slate-50", "text-slate-600");
      });
      b.classList.remove("border-slate-200", "bg-slate-50", "text-slate-600");
      b.classList.add("border-primary", "bg-primary/10", "text-primary", "border-2");
      updateCalc();
    });
  });

  // Selector de Formato (A4 vs A3)
  calcFormatBtns.forEach(b => {
    b.addEventListener("click", () => {
      currentFormat = b.getAttribute("data-format");
      if (formatLabel) {
        formatLabel.innerText = (currentFormat === "a3") ? "A4 + A3 Departamental" : "Solo A4";
      }
      calcFormatBtns.forEach(x => {
        x.classList.remove("border-primary", "bg-primary/10", "text-primary", "border-2");
        x.classList.add("border-slate-200", "bg-slate-50", "text-slate-600");
      });
      b.classList.remove("border-slate-200", "bg-slate-50", "text-slate-600");
      b.classList.add("border-primary", "bg-primary/10", "text-primary", "border-2");
      updateCalc();
    });
  });

  // Relleno rápido de marcas actuales
  quickBrandBtns.forEach(b => {
    b.addEventListener("click", () => {
      const brand = b.getAttribute("data-brand");
      if (!brandsInput) return;
      if (brandsInput.value.trim() === "") {
        brandsInput.value = brand;
      } else if (!brandsInput.value.includes(brand)) {
        brandsInput.value += ", " + brand;
      }
    });
  });

  // Envío del formulario
  if (sendRequestBtn) {
    sendRequestBtn.addEventListener("click", () => {
      const name = (document.getElementById("calc-form-name")?.value || "").trim();
      const company = (document.getElementById("calc-form-company")?.value || "").trim();
      const phone = (document.getElementById("calc-form-phone")?.value || "").trim();
      const email = (document.getElementById("calc-form-email")?.value || "").trim();
      const brands = (brandsInput?.value || "").trim();
      const vol = volSlider ? volSlider.value : "5000";
      const formatStr = (currentFormat === "a3") ? "A4 y A3 Departamental" : "Solo A4";
      const modeStr = (currentMode === "bw") ? "Predominio Blanco y Negro (85%)" : (currentMode === "color" ? "Intensivo Color (70%)" : "Mixto B/N y Color (40%)");
      const savingStr = annualSavingEl ? annualSavingEl.innerText : "";

      if (!name || !company || !email) {
        alert("Por favor, introduce al menos Nombre, Empresa y Correo Electrónico para que el departamento comercial pueda preparar la propuesta.");
        return;
      }

      if (feedbackEl) {
        feedbackEl.classList.remove("hidden");
      }

      const subject = encodeURIComponent(`Solicitud de Auditoría Coste por Copia - ${company}`);
      const body = encodeURIComponent(
`DATOS DE SOLICITUD DE COSTE POR COPIA (PEDREGOSA S.L.):

Contacto: ${name}
Empresa u Organismo: ${company}
Teléfono: ${phone}
Email: ${email}
Marcas de impresoras que tiene actualmente: ${brands || "No indicadas"}

PARÁMETROS AUDITADOS EN CALCULADORA:
- Volumen mensual estimado: ${vol} páginas/mes
- Formato de impresión: ${formatStr}
- Tipo de impresión: ${modeStr}
- Ahorro anual estimado por la herramienta: ${savingStr}

Por favor, envíenme una propuesta formal comparativa de flotas gestionadas HP / Brother.`);

      setTimeout(() => {
        window.location.href = `mailto:pedidos@pedregosa.es?subject=${subject}&body=${body}`;
      }, 700);
    });
  }

  updateCalc();
})();
</script>
