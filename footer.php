<?php
/**
 * Footer corporativo unificado - Pedregosa Corporativa 3.0
 * Diseñado y desarrollado por INFOPIXEL STUDIO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;
?>
  <!-- ==========================================
       FOOTER CORPORATIVO OFICIAL
       ========================================== -->
  <footer class="w-full bg-surface-container-low text-on-surface pt-16 pb-8 border-t border-slate-border">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
      
      <!-- Columna 1: Identidad y Certificaciones -->
      <div class="flex flex-col gap-4">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img class="h-9 w-auto object-contain mb-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcEnboILhk3Zf9NN_H5a0mL0u_lLrAANPEMxZTdJawbR6tAK20qM_41PaWvzqGTRcbkb_sZqD5Vw7X_6f9aeZdtpc06dN4bfHgkIFLaOkhPqurncWfwMKqEe2RoCQYXfah4Pv35FBbxXUp31wzBZzK4vbztrwUh9PjZ-bLi4UwDTLL2-MA63XMfVp4JHjY3adtA4ERNlHfxpB7E450wQ88c5NiaB5s4BCdRryWqfdIMk-WIAODdtK9sA" alt="Pedregosa S.L."/>
        </a>
        <p class="text-xs text-slate-600 leading-relaxed">
          Líder en suministro integral de oficina, informática y tecnología en Andalucía desde 1987. Especialistas en aprovisionamiento corporativo y contratación pública homologada.
        </p>
        
        <!-- Sellos ISO Oficiales Adok Certificación -->
        <div class="flex flex-wrap items-center gap-3 pt-2">
          <div class="inline-flex items-center rounded-lg border border-slate-border bg-white shadow-xs p-1.5 hover:shadow-md transition-shadow">
            <img class="h-10 w-auto object-contain block" src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso9001-120.jpg" alt="Adok Certificación ISO 9001 Calidad" title="Certificación de Calidad ISO 9001"/>
          </div>
          <div class="inline-flex items-center rounded-lg border border-slate-border bg-white shadow-xs p-1.5 hover:shadow-md transition-shadow">
            <img class="h-10 w-auto object-contain block" src="<?php echo get_template_directory_uri(); ?>/assets/img/adok-iso14001-120.jpg" alt="Adok Certificación ISO 14001 Medio Ambiente" title="Certificación Medioambiental ISO 14001"/>
          </div>
        </div>
      </div>

      <!-- Columna 2: Servicios y Soluciones -->
      <div class="flex flex-col gap-3">
        <span class="font-bold text-sm text-slate-900 uppercase tracking-wider">Soluciones y Servicios</span>
        <ul class="flex flex-col gap-2 text-xs text-slate-600">
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/consumibles-e-impresoras/')); ?>">Consumibles de Impresión y Tóner</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/coste-por-copia/')); ?>">Sistemas de Impresión y Coste por Copia</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/informatica/')); ?>">Informática y Servidores IT</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/audiovisuales/')); ?>">Audiovisuales e Integración</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/mobiliario-de-oficina/')); ?>">Mobiliario de Oficina y Mesas</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/mobiliario-e-instalaciones-de-oficina/')); ?>">Instalaciones y Proyectos</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/equipos-educat/')); ?>">Tecnología Educativa</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/acuerdos-licitaciones/')); ?>">Acuerdos y Licitaciones</a></li>
        </ul>
      </div>

      <!-- Columna 3: Tiendas y Catálogos -->
      <div class="flex flex-col gap-3">
        <span class="font-bold text-sm text-slate-900 uppercase tracking-wider">Tiendas y Catálogos</span>
        <ul class="flex flex-col gap-2 text-xs text-slate-600">
          <li><a class="hover:text-primary transition-colors font-semibold flex items-center gap-1 text-primary" href="<?php echo pedregosa_shop_url(); ?>" target="_blank"><span class="material-symbols-outlined text-xs">shopping_bag</span> Tienda Informática Online</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/catalogos/')); ?>">Catálogo General 30.000 Ref.</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/catalogos/')); ?>">Fichas Técnicas y Homologaciones</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo pedregosa_shop_url(); ?>login" target="_blank">Portal de Compras B2B</a></li>
          <li><a class="hover:text-primary transition-colors" href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Sede y Modelo Logístico</a></li>
        </ul>
      </div>

      <!-- Columna 4: Sede Única y Contacto Directo -->
      <div class="flex flex-col gap-3">
        <span class="font-bold text-sm text-slate-900 uppercase tracking-wider">Sede Central y Gestión</span>
        <p class="text-xs text-slate-600 leading-relaxed">
          <?php echo pedregosa_address(); ?><br/>
          Sevilla (España)
        </p>
        <div class="flex flex-col gap-1.5 text-xs text-slate-600 pt-1">
          <a class="flex items-center gap-1.5 font-bold text-slate-900 hover:text-primary transition-colors" href="<?php echo pedregosa_phone_link(); ?>">
            <span class="material-symbols-outlined text-primary text-[15px]">call</span>
            <span>Tel: <?php echo pedregosa_phone(); ?></span>
          </a>
          <a class="flex items-center gap-1.5 hover:text-primary transition-colors" href="mailto:<?php echo pedregosa_email(); ?>">
            <span class="material-symbols-outlined text-primary text-[15px]">mail</span>
            <span><?php echo pedregosa_email(); ?></span>
          </a>
          <span class="text-emerald-700 font-semibold text-[11px] pt-1">
            <?php echo pedregosa_schedule(); ?>
          </span>
        </div>
      </div>

    </div>

    <!-- Barra Inferior: Copyright y Créditos de Autor -->
    <div class="max-w-[1440px] mx-auto px-4 md:px-8 mt-12 pt-6 border-t border-slate-border flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
      <p>&copy; <?php echo date('Y'); ?> Pedregosa S.L.U. &bull; Todos los derechos reservados.</p>
      
      <div class="flex flex-wrap items-center gap-4 md:pr-24 relative z-10">
        <a class="hover:text-slate-800 transition-colors" href="<?php echo esc_url(home_url('/aviso-legal/')); ?>">Aviso Legal</a>
        <a class="hover:text-slate-800 transition-colors" href="<?php echo esc_url(home_url('/politica-privacidad/')); ?>">Política de Privacidad</a>
        <a class="hover:text-slate-800 transition-colors" href="<?php echo esc_url(home_url('/politica-de-cookies/')); ?>">Cookies</a>
        <a class="hover:text-slate-800 transition-colors" href="<?php echo esc_url(home_url('/politica-de-calidad/')); ?>">Calidad y Medio Ambiente</a>
      </div>

      <!-- Plantilla creada por INFOPIXEL STUDIO (Créditos técnicos integrados en metadatos y código) -->
    </div>
  </footer>

<?php
// Barra de configuración rápida en vivo, demos y widget multicanal (Sólo administradores identificados y conectados)
if (is_user_logged_in() && current_user_can('manage_options') && file_exists(get_template_directory() . '/inc/live-customizer.php')) {
    include get_template_directory() . '/inc/live-customizer.php';
}
?>

<!-- DataLayer B2B Pedregosa: Embudo, Eventos Clave y Cross-Domain -->
<script>
(function() {
  window.dataLayer = window.dataLayer || [];
  function pushEvent(eventName, params) {
    window.dataLayer.push(Object.assign({ 'event': eventName }, params || {}));
  }

  document.addEventListener('DOMContentLoaded', function() {
    // 1. Clics hacia Tiendas Online (Paso crítico del Funnel: Web -> PrestaShop)
    document.querySelectorAll('a[href*="tienda.pedregosa.es"], a[href*="oficina.pedregosa.es"]').forEach(function(el) {
      el.addEventListener('click', function() {
        var url = el.href || '';
        pushEvent('clic_ir_a_tienda', {
          tienda_destino: url.indexOf('oficina') !== -1 ? 'Tienda_Oficina' : 'Tienda_Informatica',
          enlace_texto: (el.innerText || '').trim().substring(0, 60),
          target_url: url
        });
      });
    });

    // 2. Descargas de Catálogos PDF
    document.querySelectorAll('a[href$=".pdf"], a[href*="catalogos"]').forEach(function(el) {
      el.addEventListener('click', function() {
        pushEvent('descarga_catalogo', {
          documento: (el.innerText || el.getAttribute('href') || '').trim().substring(0, 80),
          target_url: el.href || ''
        });
      });
    });

    // 3. Uso de Calculadora Coste por Copia & Envío de Auditoría
    var calcSlider = document.getElementById('calc-volume-slider');
    if (calcSlider) {
      calcSlider.addEventListener('change', function() {
        pushEvent('uso_calculadora_cpc', { volumen_mensual: calcSlider.value });
      });
    }
    var sendCalc = document.getElementById('ped-send-calc-request');
    if (sendCalc) {
      sendCalc.addEventListener('click', function() {
        pushEvent('envio_auditoria_cpc', {
          volumen_mensual: calcSlider ? calcSlider.value : '5000',
          lead_tipo: 'Calculadora_MPS'
        });
      });
    }

    // 4. Envío de Formularios B2B / Mobiliario
    document.querySelectorAll('form').forEach(function(form) {
      form.addEventListener('submit', function() {
        pushEvent('generate_lead', {
          form_id: form.id || 'formulario_corporativo',
          page_path: window.location.pathname
        });
      });
    });

    // 5. Clics en Teléfono, Email y WhatsApp
    document.querySelectorAll('a[href^="tel:"]').forEach(function(el) {
      el.addEventListener('click', function() {
        pushEvent('llamada_telefono', { telefono: el.getAttribute('href') });
      });
    });
    document.querySelectorAll('a[href*="wa.me"]').forEach(function(el) {
      el.addEventListener('click', function() {
        pushEvent('clic_whatsapp', { origen: window.location.pathname });
      });
    });
  });
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
