<?php
/**
 * Template Name: Ventajas B2B
 * Template Post Type: page
 */
get_header();
?>
<main class="pt-[116px]">

    <!-- 1. HERO EDITORIAL VENTAJAS B2B -->
    <section class="relative py-12 md:py-16 bg-gradient-to-b from-slate-50 via-white to-slate-50/50 border-b border-slate-200 pattern-grid overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-6">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Inicio</a>
          <span class="text-slate-300">/</span>
          <span class="text-primary font-bold">Ventajas B2B &amp; Empresas</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
          <div class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-red-50 border border-red-100 text-xs font-bold uppercase tracking-widest text-primary shadow-xs">
              <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
              <span>Cuentas Corporativas B2B &bull; PYMES y Grandes Empresas</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.14]">
              Un único proveedor estratégico para <span class="text-primary-container">centralizar sus compras B2B</span>.
            </h1>

            <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
              Diseñado para departamentos de compras, gerencias y responsables de IT que buscan agilidad, precios netos competitivos y cero fricciones administrativas. Unifique informática, impresión gestionada, mobiliario y papelería bajo una sola cuenta profesional.
            </p>

            <div class="flex flex-wrap items-center gap-2 pt-1 text-xs font-bold text-slate-700">
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">trending_down</span>
                <span>Tarifas Netas por Volumen</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">support_agent</span>
                <span>Gestor Comercial Directo</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">credit_score</span>
                <span>Crédito Comercial (30/60 días)</span>
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 shadow-xs">
                <span class="material-symbols-outlined text-primary text-[17px]">local_shipping</span>
                <span>Entrega Express 24/48h</span>
              </span>
            </div>

            <div class="flex flex-wrap items-center gap-4 pt-2">
              <a href="#alta-b2b" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded bg-primary-container hover:bg-crimson-deep text-white font-bold text-sm shadow-sm transition-all">
                <span class="material-symbols-outlined text-[19px]">assignment_ind</span>
                <span>Solicitar Alta Cuenta B2B</span>
              </a>
              <a href="#portales-b2b" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm shadow-sm transition-all">
                <span class="material-symbols-outlined text-[19px]">storefront</span>
                <span>Explorar Portales de Compra</span>
              </a>
            </div>
          </div>

          <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-2xl bg-slate-900 aspect-[4/3] group">
              <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/fachada-gramil.jpg" alt="Sede Central Pedregosa S.L. en Polígono Store Sevilla"/>
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/20 to-transparent pointer-events-none"></div>
              <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md p-4 rounded-xl border border-white/15 text-white">
                <div class="text-[11px] font-bold text-emerald-400 uppercase tracking-wider mb-1 flex items-center gap-1.5">
                  <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                  <span>SOLVENCIA EMPRESARIAL DESDE 1987</span>
                </div>
                <div class="text-sm font-bold text-white">+30.000 Referencias con Stock Mayorista Conectado</div>
                <div class="text-xs text-slate-300 mt-1">Polígono Store, C/ Gramil nº 8, Sevilla &bull; Distribución a toda Iberia</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. 6 VENTAJAS COMPETITIVAS B2B -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
          <span class="text-xs font-extrabold uppercase tracking-widest text-primary">Por qué elegir Pedregosa como partner</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-950 mt-1 tracking-tight">
            6 ventajas clave para departamentos de compras y empresas
          </h2>
          <p class="text-slate-600 mt-2 text-sm leading-relaxed">
            Elimine la dispersión de facturas y proveedores pequeños. Centralizamos todo el equipamiento de su oficina con trato directo y condiciones de gran cuenta.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-red-50 text-primary flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">hub</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">1. Centralización Total en 1 Proveedor</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Informática IT, impresión Coste por Copia, mobiliario Emobok y papelería diaria unificados en una sola relación comercial y facturación ordenada.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">sell</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">2. Tarifas Netas y Escalados por Volumen</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Precios directos de mayorista y condiciones especiales pactadas para pedidos recurrentes, renovaciones de flotas y compras por lote.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-sky-50 text-sky-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">payments</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">3. Crédito Comercial y Pago Aplazado</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Línea de crédito corporativo con vencimientos a 30/60 días (previa aprobación financiera), transferencia bancaria o recibo domiciliado.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">local_shipping</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">4. Logística Ágil 24/48h Multisede</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Envíos directos desde almacén central a cada una de sus delegaciones en Península, con portes gratuitos a partir de 75 € en tienda online.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">engineering</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">5. Gestor Técnico y Presupuestos en 24h</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Trato directo con un asesor especializado (sin call-centers) para preparar ofertas comparativas, alternativas de stock y proyectos llave en mano.
            </p>
          </div>

          <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/50 hover:bg-white hover:shadow-md transition-all">
            <div class="w-11 h-11 rounded-xl bg-rose-50 text-rose-700 flex items-center justify-center mb-4">
              <span class="material-symbols-outlined">shopping_cart_checkout</span>
            </div>
            <h3 class="text-base font-extrabold text-slate-900">6. Portales B2B 24/7 con Listas de Habituales</h3>
            <p class="text-xs text-slate-600 mt-2 leading-relaxed">
              Acceso online con visualización neta sin IVA, pedido rápido por referencia SKU y botón de repetición de consumibles habituales en 1 clic.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. SOLUCIONES POR PERFIL DE COMPRADOR (BUYER PERSONAS B2B) -->
    <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
          <span class="text-xs font-extrabold uppercase tracking-widest text-primary">Aportamos valor a cada área de su empresa</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-950 mt-1 tracking-tight">
            ¿Cómo ayudamos a cada responsable en su organización?
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-xs space-y-4">
            <div class="text-xs font-extrabold uppercase tracking-wider text-primary">Compras &amp; Administración</div>
            <h3 class="text-lg font-extrabold text-slate-900">Control de gasto y cero burocracia</h3>
            <ul class="space-y-2.5 text-xs text-slate-600">
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Presupuestos formales detallados en menos de 24h hábiles.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Facturación electrónica desglosada y consolidación de pedidos.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Un único interlocutor para hardware, consumibles y oficina.</span></li>
            </ul>
          </div>

          <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-xs space-y-4">
            <div class="text-xs font-extrabold uppercase tracking-wider text-sky-700">Dirección de IT &amp; Sistemas</div>
            <h3 class="text-lg font-extrabold text-slate-900">Equipos listos para producir desde el día 1</h3>
            <ul class="space-y-2.5 text-xs text-slate-600">
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Preparación previa, etiquetado de inventario y serigrafía opcional.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Flotas ACER, ASUS, LG, HP y Lenovo con garantía oficial ampliada.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Despliegue de salas de videoconferencia Teams/Zoom y pantallas 4K.</span></li>
            </ul>
          </div>

          <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-xs space-y-4">
            <div class="text-xs font-extrabold uppercase tracking-wider text-emerald-700">Gerencia, RRHH &amp; Facilities</div>
            <h3 class="text-lg font-extrabold text-slate-900">Espacios eficientes y ahorro operativo</h3>
            <ul class="space-y-2.5 text-xs text-slate-600">
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Ahorro medio del 30% en impresión con contratos <a href="<?php echo esc_url(home_url('/coste-por-copia/')); ?>" class="text-primary underline font-bold">Coste por Copia</a>.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Diseño gratuito en 2D/3D y montaje propio de <a href="<?php echo esc_url(home_url('/mobiliario-de-oficina/')); ?>" class="text-primary underline font-bold">Mobiliario Emobok</a>.</span></li>
              <li class="flex items-start gap-2"><span class="material-symbols-outlined text-emerald-600 text-base">check_circle</span><span>Ergonomía certificada y salud postural para puestos de trabajo.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. PORTALES DE COMPRA ONLINE B2B -->
    <section class="py-16 bg-white border-b border-slate-200" id="portales-b2b">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="p-8 rounded-2xl border border-slate-200 bg-slate-50 flex flex-col justify-between gap-6">
            <div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-sky-700">Portal Transaccional IT</span>
              <h3 class="text-xl font-extrabold text-slate-950 mt-1">Tienda Informática &amp; Hardware</h3>
              <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                Catálogo en tiempo real con más de 15.000 referencias en portátiles, PCs corporativos, monitores, redes, almacenamiento y periféricos profesionales.
              </p>
            </div>
            <a href="https://tienda.pedregosa.es" target="_blank" rel="noopener" class="inline-flex items-center justify-between px-5 py-3 rounded-xl bg-primary-container hover:bg-crimson-deep text-white font-bold text-xs transition shadow-xs">
              <span>Acceder a tienda.pedregosa.es</span>
              <span class="material-symbols-outlined text-base">open_in_new</span>
            </a>
          </div>

          <div class="p-8 rounded-2xl border border-slate-200 bg-slate-50 flex flex-col justify-between gap-6">
            <div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-amber-700">Portal Suministro Diario</span>
              <h3 class="text-xl font-extrabold text-slate-950 mt-1">Tienda Material de Oficina &amp; Tóner</h3>
              <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                Más de 20.000 referencias en papel, archivo, destructora, ergonomía y consumibles originales con entrega urgente 24/48h en sus oficinas.
              </p>
            </div>
            <a href="https://oficina.pedregosa.es" target="_blank" rel="noopener" class="inline-flex items-center justify-between px-5 py-3 rounded-xl bg-primary-container hover:bg-crimson-deep text-white font-bold text-xs transition shadow-xs">
              <span>Acceder a oficina.pedregosa.es</span>
              <span class="material-symbols-outlined text-base">open_in_new</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. FORMULARIO DE ALTA CUENTA B2B -->
    <section class="py-16 sm:py-20 bg-slate-900 text-white" id="alta-b2b">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
          <span class="text-xs font-extrabold uppercase tracking-widest text-emerald-400">Alta Rápida de Empresa</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-1">Solicite su Tarifa Corporativa o Cuenta B2B</h2>
          <p class="text-slate-300 text-sm mt-2">
            Déjenos los datos de su empresa y un asesor comercial contactará en menos de 24h con su propuesta personalizada.
          </p>
        </div>

        <form id="b2b-lead-form" class="bg-white text-slate-900 p-6 sm:p-8 rounded-2xl shadow-2xl space-y-4 text-xs">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block font-bold text-slate-700 mb-1">Nombre y Apellidos *</label>
              <input type="text" id="b2b-name" required placeholder="Ej: Laura Martínez (Compras)" class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"/>
            </div>
            <div>
              <label class="block font-bold text-slate-700 mb-1">Empresa / Razón Social *</label>
              <input type="text" id="b2b-company" required placeholder="Ej: Grupo Empresarial S.L." class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"/>
            </div>
            <div>
              <label class="block font-bold text-slate-700 mb-1">CIF (Opcional)</label>
              <input type="text" id="b2b-cif" placeholder="B-41000000" class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"/>
            </div>
            <div>
              <label class="block font-bold text-slate-700 mb-1">Teléfono Directo *</label>
              <input type="tel" id="b2b-phone" required placeholder="954 36 80 11" class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"/>
            </div>
            <div>
              <label class="block font-bold text-slate-700 mb-1">Correo Corporativo *</label>
              <input type="email" id="b2b-email" required placeholder="compras@empresa.com" class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"/>
            </div>
            <div>
              <label class="block font-bold text-slate-700 mb-1">Área de Interés Principal</label>
              <select id="b2b-area" class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary">
                <option value="Centralización Global B2B">Centralización Global (IT + Oficina + Impresión)</option>
                <option value="Flotas IT y Portátiles">Renovación Parque IT / Portátiles / Servidores</option>
                <option value="Coste por Copia (MPS)">Impresión Gestionada / Coste por Copia</option>
                <option value="Mobiliario Emobok 2D/3D">Mobiliario de Oficina y Proyectos 2D/3D</option>
                <option value="Papelería y Suministro Diario">Papelería y Material de Oficina Recurrente</option>
              </select>
            </div>
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Comentarios o Necesidades</label>
            <textarea id="b2b-notes" rows="3" placeholder="Indíquenos número aproximado de puestos, sedes o si requiere condiciones de crédito comercial..." class="w-full px-3 py-2.5 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-primary"></textarea>
          </div>
          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            <span class="text-[11px] text-slate-500">Atención comercial directa: <strong>954 36 80 11</strong> &bull; pedidos@pedregosa.es</span>
            <button type="submit" class="w-full sm:w-auto px-7 py-3 rounded-xl bg-primary-container hover:bg-crimson-deep text-white font-bold text-xs shadow-sm transition flex items-center justify-center gap-2 cursor-pointer">
              <span class="material-symbols-outlined text-[18px]">send</span>
              <span>Solicitar Alta / Presupuesto B2B</span>
            </button>
          </div>
        </form>
      </div>
    </section>

  </main>
<script>
    const mobileBtn = document.getElementById('ped-mobile-menu-btn');
    const mobileMenu = document.getElementById('ped-mobile-menu');
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    }

    const b2bForm = document.getElementById('b2b-lead-form');
    if (b2bForm) {
      b2bForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('b2b-name').value.trim();
        const company = document.getElementById('b2b-company').value.trim();
        const cif = document.getElementById('b2b-cif').value.trim();
        const phone = document.getElementById('b2b-phone').value.trim();
        const email = document.getElementById('b2b-email').value.trim();
        const area = document.getElementById('b2b-area').value;
        const notes = document.getElementById('b2b-notes').value.trim();

        const subject = encodeURIComponent(`Solicitud Alta Cuenta B2B - ${company}`);
        const body = encodeURIComponent(
`SOLICITUD DE ALTA / TARIFA CORPORATIVA B2B (PEDREGOSA S.L.):

Contacto: ${name}
Empresa: ${company}
CIF: ${cif || 'No indicado'}
Teléfono: ${phone}
Email: ${email}
Área de Interés: ${area}

Comentarios / Necesidades:
${notes || 'Sin comentarios adicionales'}`);

        window.location.href = `mailto:pedidos@pedregosa.es?subject=${subject}&body=${body}`;
      });
    }
  </script>
<?php get_footer(); ?>
