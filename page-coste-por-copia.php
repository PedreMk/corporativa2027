<?php
/**
 * Template Name: Coste por Copia (MPS)
 * Template Post Type: page
 */
get_header();
?>
<main class="pt-[116px]">

    <!-- 1. HERO EDITORIAL COSTE POR COPIA -->
    <section class="relative py-12 md:py-16 bg-gradient-to-b from-slate-50 via-white to-slate-50/50 border-b border-slate-200 pattern-grid overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-6">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Inicio</a>
          <span class="text-slate-300">/</span>
          <span class="text-slate-600">Productos</span>
          <span class="text-slate-300">/</span>
          <span class="text-primary font-bold">Coste por Copia (MPS)</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
          <div class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-xs font-bold uppercase tracking-widest text-primary shadow-xs">
              <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
              <span>División Técnica MPS &bull; Pago por Página Impresa</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.14]">
              Impresión empresarial sin sorpresas: el sistema <span class="text-primary-container">Coste por Copia</span>.
            </h1>

            <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
              Reduzca hasta un 30% el gasto documental de su empresa, centro educativo u organismo público. Olvídese de comprar tóner suelto, tambores o asumir facturas imprevistas de reparación: pague únicamente por lo que imprime con mantenimiento integral in situ.
            </p>

            <div class="flex flex-wrap items-center gap-2 pt-1 text-xs font-bold text-slate-700">
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">savings</span>
                <span>Ahorro Directo hasta 30%</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">autorenew</span>
                <span>Tóner Automático</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">build_circle</span>
                <span>Piezas y Mano de Obra 100%</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">verified_user</span>
                <span>Servicio Técnico Propio</span>
              </span>
            </div>

            <div class="flex flex-wrap items-center gap-4 pt-2">
              <a href="#calculadora-cpc" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm shadow-sm transition-all">
                <span class="material-symbols-outlined text-[19px]">calculate</span>
                <span>Calcular mi Ahorro Ahora</span>
              </a>
              <a href="#ventajas-cpc" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm shadow-sm transition-all">
                <span class="material-symbols-outlined text-[19px]">checklist</span>
                <span>Ver Ventajas y Comparativa</span>
              </a>
            </div>
          </div>

          <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-2xl bg-slate-900 aspect-[4/3] group">
              <img class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tecnico-impresora-encuadrado.jpg" alt="Servicio técnico directo de equipos multifunción en Coste por Copia"/>
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 via-transparent to-transparent pointer-events-none"></div>
              <div class="absolute top-4 left-4 bg-slate-900/85 backdrop-blur-md px-3.5 py-2.5 rounded-xl border border-white/15 text-white shadow-lg max-w-[280px]">
                <div class="text-[11px] font-bold text-emerald-400 uppercase tracking-wider flex items-center gap-1.5">
                  <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                  <span>AUDITORÍA SIN COSTE &bull; FLOTAS MPS</span>
                </div>
                <div class="text-xs font-bold text-white mt-0.5">Parque de Multifuncionales Profesionales</div>
                <div class="text-[10px] text-slate-300 mt-0.5">Mantenimiento in situ directo con piezas y tóner</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. VENTAJAS DEL SISTEMA COSTE POR COPIA -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200" id="ventajas-cpc">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
          <span class="text-xs font-extrabold uppercase tracking-widest text-primary">Por qué cambiar al modelo gestionado</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-950 mt-1 tracking-tight">
            6 ventajas clave del sistema Coste por Copia frente a la compra tradicional
          </h2>
          <p class="text-slate-600 mt-2 text-sm leading-relaxed">
            Transforme un gasto imprevisible de hardware y consumibles en una tarifa plana controlada por página real impresa.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-red-50 text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">savings</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">1. Ahorro directo de hasta el 30%</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Elimina el sobrecoste de comprar cartuchos individuales de baja capacidad. Acceso a tarifas corporativas de consumible de alto rendimiento.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">autorenew</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">2. Reposición automática de tóner</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Nuestros sistemas monitorizan el nivel de cada color y envían el consumible de repuesto automáticamente antes de que el equipo se detenga.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-sky-50 text-sky-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">engineering</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">3. Mantenimiento integral in situ</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Incluye al 100% piezas de desgaste, tambores, fusores, desplazamientos y mano de obra de nuestros técnicos certificados sin facturas sorpresa.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">account_balance_wallet</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">4. Cero inversión inicial y 100% deducible</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Renueve su parque de equipos A4 y A3 sin descapitalizar la empresa mediante modalidad de renting tecnológico con cuota fiscalmente deducible.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">analytics</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">5. Control y lectura telemática exacta</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Facturación clara basada exclusivamente en los contadores reales de impresión monocromo y color, con informes por sede o departamento.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">eco</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">6. Sostenibilidad ISO 14001</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Equipos eficientes de bajo consumo energético y gestión oficial de retirada y reciclaje de cartuchos usados bajo normativa medioambiental.
            </p>
          </div>
        </div>

        <!-- Comparativa Rápida -->
        <div class="mt-12 rounded-2xl border border-slate-200 overflow-hidden bg-white shadow-sm">
          <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-200">
            <div class="p-7 bg-slate-50/70">
              <div class="text-xs font-extrabold uppercase tracking-wider text-slate-500 mb-3">Modelo Tradicional (Compra libre)</div>
              <ul class="space-y-2.5 text-xs text-slate-600">
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-red-500 text-base">cancel</span><span>Desembolso elevado en compra de equipos y obsolescencia rápida.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-red-500 text-base">cancel</span><span>Stock inmovilizado de cartuchos y riesgo de quedarse sin tóner.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-red-500 text-base">cancel</span><span>Facturas imprevistas por averías, fusores, tambores y desplazamientos.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-red-500 text-base">cancel</span><span>Sin visibilidad real del coste por página impresa por departamento.</span></li>
              </ul>
            </div>
            <div class="p-7 bg-white">
              <div class="text-xs font-extrabold uppercase tracking-wider text-emerald-700 mb-3">Sistema Coste por Copia Pedregosa (MPS)</div>
              <ul class="space-y-2.5 text-xs text-slate-800 font-medium">
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Equipos multifunción profesionales A4/A3 siempre actualizados.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Reposición automática y gratuita de tóner antes de agotarse.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>100% piezas, mano de obra y desplazamientos incluidos en el contrato.</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Factura única mensual transparente con ahorro medio del 30%.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. CALCULADORA INTERACTIVA INTEGRADA EN PÁGINA -->
    <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200" id="calculadora-cpc">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10">
          <span class="text-xs font-extrabold uppercase tracking-widest text-primary">Simulador Interactivo en Vivo</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-950 mt-1 tracking-tight">
            Calcule su ahorro anual en Coste por Copia
          </h2>
          <p class="text-slate-600 mt-2 text-sm">
            Ajuste su volumen mensual y formato habitual para obtener una estimación orientativa inmediata y solicitar su auditoría gratuita.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
          <div class="p-5 sm:p-6 bg-[#8a0018] text-white flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="material-symbols-outlined text-amber-300 text-3xl">calculate</span>
              <div>
                <h3 class="font-extrabold text-base leading-tight text-white">Calculadora de Ahorro en Coste por Copia</h3>
                <p class="text-xs text-white/80">Flotas Profesionales de Impresión Gestionada con Mantenimiento Integral</p>
              </div>
            </div>
          </div>

          <div class="p-6 sm:p-8 space-y-6 text-xs text-slate-700">
            <!-- 1. Formato -->
            <div class="space-y-2">
              <div class="flex items-center justify-between">
                <label class="font-bold text-slate-900 text-sm">1. Formato de papel requerido:</label>
                <span id="calc-format-label" class="text-xs font-extrabold text-primary uppercase">Solo A4</span>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <button type="button" class="ped-calc-format p-3 rounded-xl border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer flex items-center justify-center gap-2 text-xs" data-format="a4">
                  <span class="material-symbols-outlined text-[18px]">description</span>
                  <span>Solo Formato A4</span>
                </button>
                <button type="button" class="ped-calc-format p-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer flex items-center justify-center gap-2 text-xs" data-format="a3">
                  <span class="material-symbols-outlined text-[18px]">newspaper</span>
                  <span>A4 + A3 Departamental</span>
                </button>
              </div>
            </div>

            <!-- 2. Volumen -->
            <div class="space-y-2">
              <div class="flex items-center justify-between">
                <label class="font-bold text-slate-900 text-sm">2. Volumen estimado de páginas al mes:</label>
                <span id="calc-volume-display" class="font-extrabold text-primary text-base px-3 py-1 rounded-lg bg-red-50">5.000 págs</span>
              </div>
              <input type="range" id="calc-volume-slider" min="1000" max="40000" step="1000" value="5000" class="w-full accent-primary cursor-pointer"/>
              <div class="flex justify-between text-[11px] text-slate-400 font-medium">
                <span>1.000</span>
                <span>10.000</span>
                <span>20.000</span>
                <span>30.000</span>
                <span>40.000+</span>
              </div>
            </div>

            <!-- 3. Modo Color -->
            <div class="space-y-2">
              <label class="font-bold text-slate-900 text-sm block">3. Tipo de impresión predominante:</label>
              <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                <button type="button" class="ped-calc-mode p-3 rounded-xl border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer text-xs" data-mode="bw">
                  Predominio B/N (85%)
                </button>
                <button type="button" class="ped-calc-mode p-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer text-xs" data-mode="mixed">
                  Mixto Color (40%)
                </button>
                <button type="button" class="ped-calc-mode p-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-600 font-bold text-center transition cursor-pointer text-xs" data-mode="color">
                  Intensivo Color (70%)
                </button>
              </div>
            </div>

            <!-- 4. Termómetro de Ahorro (Bajo / Medio / Alto) -->
            <div class="space-y-2.5 p-4 rounded-xl bg-slate-50/80 border border-slate-200">
              <div class="flex items-center justify-between gap-2">
                <label class="font-bold text-slate-900 text-sm flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[18px] text-primary">thermostat</span>
                  <span>4. Nivel de ahorro estimado:</span>
                </label>
                <span id="calc-temp-badge" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-emerald-100 text-emerald-800">
                  Medio (~32%)
                </span>
              </div>

              <div class="pt-1">
                <div class="h-2.5 w-full rounded-full bg-gradient-to-r from-sky-400 via-amber-400 to-emerald-600 p-0.5 mb-1.5"></div>
                <input type="range" id="calc-saving-slider" min="1" max="3" step="1" value="2" class="w-full accent-primary cursor-pointer"/>
              </div>

              <div class="grid grid-cols-3 gap-2">
                <button type="button" class="ped-calc-temp p-2 rounded-lg border border-slate-200 bg-white text-slate-600 font-bold text-center transition cursor-pointer text-[11px]" data-level="1">
                  Bajo &middot; ~20%
                </button>
                <button type="button" class="ped-calc-temp p-2 rounded-lg border-2 border-primary bg-primary/10 text-primary font-bold text-center transition cursor-pointer text-[11px]" data-level="2">
                  Medio &middot; ~32%
                </button>
                <button type="button" class="ped-calc-temp p-2 rounded-lg border border-slate-200 bg-white text-slate-600 font-bold text-center transition cursor-pointer text-[11px]" data-level="3">
                  Alto &middot; ~45%
                </button>
              </div>
            </div>

            <!-- Resultados -->
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
              <div class="flex items-center justify-between text-sm">
                <span class="text-slate-600">Coste tradicional (compra tóner suelto + tambor + averías):</span>
                <span id="calc-traditional-cost" class="font-bold text-slate-700 line-through">155 €/mes</span>
              </div>
              <div class="flex items-center justify-between text-sm">
                <span class="text-slate-600">Coste en modalidad Pago por Copia Homologado:</span>
                <span id="calc-pedregosa-cost" class="font-bold text-emerald-600 text-base">98 €/mes</span>
              </div>
              <div class="pt-3 border-t border-slate-200 flex items-center justify-between">
                <div>
                  <div id="calc-saving-label" class="text-xs font-extrabold uppercase text-primary">Ahorro Anual Estimado (~32%)</div>
                  <div class="text-[11px] text-slate-500">Cero costes imprevistos de piezas, mano de obra o tóner</div>
                </div>
                <div id="calc-annual-saving" class="text-2xl sm:text-3xl font-black text-emerald-600">684 € / año</div>
              </div>
            </div>

            <!-- Nota Legal -->
            <div class="p-3 rounded-xl bg-slate-100 border border-slate-200 text-[11px] text-slate-500 leading-relaxed">
              <strong>Nota legal:</strong> Los cálculos mostrados son estimaciones orientativas calculadas sobre una cobertura estándar del 5% en monocromo y 20% en color según normativas ISO/IEC 19752 e ISO/IEC 19798. Los ahorros y costes definitivos pueden variar en función de la cobertura real de impresión, tipología de documentos, volumen auditado y modelo de equipo homologado seleccionado.
            </div>

            <!-- Formulario de Auditoría -->
            <div class="pt-4 border-t border-slate-200 space-y-4" id="solicitud-auditoria">
              <div class="flex items-center justify-between">
                <span class="font-extrabold uppercase text-xs text-primary">Solicitar Auditoría y Propuesta Personalizada</span>
                <span class="text-[11px] text-slate-400">Respuesta comercial en 24h</span>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                  <label class="block text-[11px] font-bold text-slate-700 mb-1">Nombre y Cargo *</label>
                  <input type="text" id="calc-form-name" placeholder="Ej: Manuel García (Responsable Compras)" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
                </div>
                <div>
                  <label class="block text-[11px] font-bold text-slate-700 mb-1">Empresa u Organismo *</label>
                  <input type="text" id="calc-form-company" placeholder="Ej: Despacho / Colegio / Organismo" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
                </div>
                <div>
                  <label class="block text-[11px] font-bold text-slate-700 mb-1">Teléfono Directo *</label>
                  <input type="tel" id="calc-form-phone" placeholder="954 36 80 11..." class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
                </div>
                <div>
                  <label class="block text-[11px] font-bold text-slate-700 mb-1">Correo Electrónico *</label>
                  <input type="email" id="calc-form-email" placeholder="correo@empresa.com" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
                </div>
              </div>

              <div>
                <label class="block text-[11px] font-bold text-slate-700 mb-1">¿Qué equipos o marcas tiene actualmente?</label>
                <input type="text" id="calc-form-brands" placeholder="Ej: Multifunción A3, impresoras departamentales..." class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs bg-white text-slate-900 focus:outline-none focus:border-primary"/>
              </div>

              <div id="calc-submit-feedback" class="hidden p-3 rounded-lg bg-emerald-50 text-emerald-800 text-xs font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                <span>¡Solicitud preparada! Redirigiendo a pedidos@pedregosa.es...</span>
              </div>

              <div class="flex justify-end">
                <button type="button" id="ped-send-calc-request" class="px-6 py-3 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-xs shadow-sm transition flex items-center gap-2 cursor-pointer">
                  <span class="material-symbols-outlined text-[18px]">send</span>
                  <span>Enviar Solicitud a pedidos@pedregosa.es</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<script>
    // Mobile menu
    const mobileBtn = document.getElementById('ped-mobile-menu-btn');
    const mobileMenu = document.getElementById('ped-mobile-menu');
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    }

    // Calculadora Coste por Copia
    (function() {
      const volSlider = document.getElementById("calc-volume-slider");
      const volDisplay = document.getElementById("calc-volume-display");
      const tradCostEl = document.getElementById("calc-traditional-cost");
      const pedCostEl = document.getElementById("calc-pedregosa-cost");
      const savingEl = document.getElementById("calc-annual-saving");
      const formatLabelEl = document.getElementById("calc-format-label");
      const savingSlider = document.getElementById("calc-saving-slider");
      const tempBadgeEl = document.getElementById("calc-temp-badge");
      const savingLabelEl = document.getElementById("calc-saving-label");
      const tempBtns = document.querySelectorAll(".ped-calc-temp");
      const modeBtns = document.querySelectorAll(".ped-calc-mode");
      const formatBtns = document.querySelectorAll(".ped-calc-format");
      const sendRequestBtn = document.getElementById("ped-send-calc-request");
      const feedbackEl = document.getElementById("calc-submit-feedback");

      let currentMode = "bw";
      let currentFormat = "a4";
      let savingLevel = 2;

      const tempConfig = {
        1: { pct: 0.20, label: "Bajo (~20%)", cls: "inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-sky-100 text-sky-800" },
        2: { pct: 0.32, label: "Medio (~32%)", cls: "inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-emerald-100 text-emerald-800" },
        3: { pct: 0.45, label: "Alto (~45%)", cls: "inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-emerald-600 text-white" }
      };

      function syncTempUI() {
        if (savingSlider) savingSlider.value = String(savingLevel);
        const cfg = tempConfig[savingLevel] || tempConfig[2];
        if (tempBadgeEl) {
          tempBadgeEl.textContent = cfg.label;
          tempBadgeEl.className = cfg.cls;
        }
        if (savingLabelEl) {
          savingLabelEl.textContent = "Ahorro Anual Estimado (~" + Math.round(cfg.pct * 100) + "%)";
        }
        tempBtns.forEach(b => {
          const lvl = parseInt(b.getAttribute("data-level"), 10);
          if (lvl === savingLevel) {
            b.classList.add("border-2", "border-primary", "bg-primary/10", "text-primary");
            b.classList.remove("border", "border-slate-200", "bg-white", "text-slate-600");
          } else {
            b.classList.remove("border-2", "border-primary", "bg-primary/10", "text-primary");
            b.classList.add("border", "border-slate-200", "bg-white", "text-slate-600");
          }
        });
      }

      function updateCalc() {
        if (!volSlider) return;
        const vol = parseInt(volSlider.value, 10);
        if (volDisplay) volDisplay.textContent = vol.toLocaleString("es-ES") + " págs";

        let tradRate = 0.028;
        if (currentMode === "mixed") { tradRate = 0.052; }
        else if (currentMode === "color") { tradRate = 0.088; }

        if (currentFormat === "a3") {
          tradRate *= 1.18;
          if (formatLabelEl) formatLabelEl.textContent = "A4 + A3 Departamental";
        } else {
          if (formatLabelEl) formatLabelEl.textContent = "Solo A4";
        }

        const cfg = tempConfig[savingLevel] || tempConfig[2];
        const tradMonthly = Math.round(vol * tradRate);
        const pedMonthly = Math.max(10, Math.round(tradMonthly * (1 - cfg.pct)));
        const annualSaving = Math.max(120, (tradMonthly - pedMonthly) * 12);

        if (tradCostEl) tradCostEl.textContent = tradMonthly.toLocaleString("es-ES") + " €/mes";
        if (pedCostEl) pedCostEl.textContent = pedMonthly.toLocaleString("es-ES") + " €/mes";
        if (savingEl) savingEl.textContent = annualSaving.toLocaleString("es-ES") + " € / año";
      }

      if (savingSlider) {
        savingSlider.addEventListener("input", () => {
          savingLevel = parseInt(savingSlider.value, 10) || 2;
          syncTempUI();
          updateCalc();
        });
      }
      tempBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          savingLevel = parseInt(btn.getAttribute("data-level"), 10) || 2;
          syncTempUI();
          updateCalc();
        });
      });
      syncTempUI();

      if (volSlider) volSlider.addEventListener("input", updateCalc);

      modeBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          modeBtns.forEach(b => {
            b.classList.remove("border-2", "border-primary", "bg-primary/10", "text-primary");
            b.classList.add("border", "border-slate-200", "bg-slate-50", "text-slate-600");
          });
          btn.classList.add("border-2", "border-primary", "bg-primary/10", "text-primary");
          btn.classList.remove("border", "border-slate-200", "bg-slate-50", "text-slate-600");
          currentMode = btn.getAttribute("data-mode");
          updateCalc();
        });
      });

      formatBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          formatBtns.forEach(b => {
            b.classList.remove("border-2", "border-primary", "bg-primary/10", "text-primary");
            b.classList.add("border", "border-slate-200", "bg-slate-50", "text-slate-600");
          });
          btn.classList.add("border-2", "border-primary", "bg-primary/10", "text-primary");
          btn.classList.remove("border", "border-slate-200", "bg-slate-50", "text-slate-600");
          currentFormat = btn.getAttribute("data-format");
          updateCalc();
        });
      });

      if (sendRequestBtn) {
        sendRequestBtn.addEventListener("click", () => {
          const name = document.getElementById("calc-form-name")?.value.trim();
          const company = document.getElementById("calc-form-company")?.value.trim();
          const phone = document.getElementById("calc-form-phone")?.value.trim();
          const email = document.getElementById("calc-form-email")?.value.trim();
          const brands = document.getElementById("calc-form-brands")?.value.trim();

          if (!name || !company || !phone || !email) {
            alert("Por favor, rellena los campos obligatorios (Nombre, Empresa, Teléfono y Correo) para recibir tu estudio de Coste por Copia.");
            return;
          }

          const vol = volSlider ? volSlider.value : "5000";
          const modeStr = currentMode === "bw" ? "Predominio B/N (85%)" : (currentMode === "mixed" ? "Mixto Color (40%)" : "Intensivo Color (70%)");
          const formatStr = currentFormat === "a3" ? "A4 + A3 Departamental" : "Solo A4";
          const savingStr = savingEl ? savingEl.textContent : "";

          if (feedbackEl) feedbackEl.classList.remove("hidden");

          const subject = encodeURIComponent(`Solicitud de Auditoría Coste por Copia - ${company}`);
          const body = encodeURIComponent(
`DATOS DE SOLICITUD DE COSTE POR COPIA (PEDREGOSA S.L.):

Contacto: ${name}
Empresa u Organismo: ${company}
Teléfono: ${phone}
Email: ${email}
Equipos actuales: ${brands || "No indicados"}

PARÁMETROS AUDITADOS EN CALCULADORA:
- Volumen mensual estimado: ${vol} páginas/mes
- Formato de impresión: ${formatStr}
- Tipo de impresión: ${modeStr}
- Nivel de ahorro estimado: ${(tempConfig[savingLevel] || tempConfig[2]).label}
- Ahorro anual estimado: ${savingStr}

Por favor, envíenme una propuesta formal comparativa de flotas y servicios gestionados de impresión.`);

          setTimeout(() => {
            window.location.href = `mailto:pedidos@pedregosa.es?subject=${subject}&body=${body}`;
          }, 600);
        });
      }

      updateCalc();
    })();
  </script>
<?php get_footer(); ?>
