<?php
/**
 * Template Name: Política de Cookies (Pedregosa Corporativa 3.0)
 * Diseñado y desarrollado por INFOPIXEL STUDIO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="pt-[116px] pb-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Inicio</a>
        <span class="text-slate-300">/</span>
        <span class="text-primary font-bold">Política de Cookies</span>
      </nav>

      <div class="border-b border-slate-200 pb-6 mb-8">
        <span class="text-xs font-bold text-primary uppercase tracking-wider">Uso de Tecnologías de Almacenamiento &bull; Guía AEPD</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-1">Política de Cookies</h1>
        <p class="text-xs text-slate-500 mt-2">Transparencia sobre el uso de cookies propias y analíticas</p>
      </div>

      <!-- Contenido Legal Oficial Replicado -->
      <div class="space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed">
        
        <!-- Qué son las cookies -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">1</span>
            ¿Qué son las Cookies?
          </h2>
          <p>
            Una cookie es un pequeño archivo que se descarga en su dispositivo al acceder a determinadas páginas web. Permite almacenar y recuperar información sobre la navegación para mejorar la rapidez de carga, recordar preferencias (como tamaño de texto o sesión) y realizar mediciones estadísticas anónimas para optimizar el servicio.
          </p>
        </section>

        <!-- Tipos de cookies -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">2</span>
            Tipos de Cookies Utilizadas en este Sitio Web
          </h2>
          <ul class="list-disc pl-5 space-y-2 text-slate-600">
            <li><strong>Cookies técnicas (necesarias):</strong> Imprescindibles para la navegación básica, control de tráfico, identificación de sesión en tiendas online y seguridad. No requieren consentimiento previo.</li>
            <li><strong>Cookies de personalización o preferencias:</strong> Recuerdan parámetros como idioma, configuración de visualización o modo de tarifa B2B para que la experiencia sea fluida.</li>
            <li><strong>Cookies analíticas o de medición (Google Analytics 4):</strong> Permiten cuantificar el número de usuarios y realizar mediciones estadísticas del uso que hacen del portal, analizando qué catálogos o productos resultan más demandados con la finalidad de mejorar la oferta comercial.</li>
          </ul>
        </section>

        <!-- Tabla oficial de cookies -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">3</span>
            Listado Oficial de Cookies Empleadas
          </h2>
          
          <div class="overflow-x-auto my-4">
            <table class="w-full text-left border border-slate-200 rounded-xl overflow-hidden text-xs">
              <thead class="bg-slate-100 text-slate-900 font-bold border-b border-slate-200">
                <tr>
                  <th class="p-3">Nombre</th>
                  <th class="p-3">Dominio / Emisor</th>
                  <th class="p-3">Tipo</th>
                  <th class="p-3">Finalidad</th>
                  <th class="p-3">Duración</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-200 bg-white">
                <tr>
                  <td class="p-3 font-mono font-bold text-primary">_ga</td>
                  <td class="p-3 text-slate-600">pedregosa.es</td>
                  <td class="p-3">Analítica</td>
                  <td class="p-3 text-slate-600">Genera identificador de usuario único disociado para contabilizar visitas recurrentes en Google Analytics.</td>
                  <td class="p-3 font-medium">13 meses</td>
                </tr>
                <tr>
                  <td class="p-3 font-mono font-bold text-primary">_ga_BTLSE5PJP8</td>
                  <td class="p-3 text-slate-600">pedregosa.es</td>
                  <td class="p-3">Analítica</td>
                  <td class="p-3 text-slate-600">Mantiene el estado de sesión anónima en Google Analytics 4.</td>
                  <td class="p-3 font-medium">13 meses</td>
                </tr>
                <tr>
                  <td class="p-3 font-mono font-bold text-slate-900">PHPSESSID</td>
                  <td class="p-3 text-slate-600">pedregosa.es</td>
                  <td class="p-3">Técnica</td>
                  <td class="p-3 text-slate-600">Mantenimiento de sesión de servidor y funcionamiento de formularios.</td>
                  <td class="p-3 font-medium">Sesión</td>
                </tr>
                <tr>
                  <td class="p-3 font-mono font-bold text-slate-900">PrestaShop-*</td>
                  <td class="p-3 text-slate-600">tienda.pedregosa.es</td>
                  <td class="p-3">Técnica</td>
                  <td class="p-3 text-slate-600">Mantiene el carrito de la compra y la autenticación del cliente B2B registrado.</td>
                  <td class="p-3 font-medium">30 días</td>
                </tr>
                <tr>
                  <td class="p-3 font-mono font-bold text-slate-900">JSESSIONID</td>
                  <td class="p-3 text-slate-600">oficina.pedregosa.es</td>
                  <td class="p-3">Técnica</td>
                  <td class="p-3 text-slate-600">Sesión de compras en el portal de material de oficina.</td>
                  <td class="p-3 font-medium">Sesión</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Cómo desactivar cookies en navegadores -->
        <section class="space-y-3">
          <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">4</span>
            ¿Cómo Configurar o Desactivar las Cookies en su Navegador?
          </h2>
          <p>
            Usted puede permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador instalado en su ordenador o dispositivo móvil:
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs">
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
              <strong class="font-bold text-slate-900 block mb-1">Google Chrome:</strong>
              <span class="text-slate-600">Configuración &gt; Privacidad y seguridad &gt; Cookies y otros datos de sitios.</span>
            </div>
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
              <strong class="font-bold text-slate-900 block mb-1">Mozilla Firefox:</strong>
              <span class="text-slate-600">Ajustes &gt; Privacidad &amp; Seguridad &gt; Cookies y datos del sitio.</span>
            </div>
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
              <strong class="font-bold text-slate-900 block mb-1">Apple Safari:</strong>
              <span class="text-slate-600">Preferencias &gt; Privacidad &gt; Bloquear todas las cookies.</span>
            </div>
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
              <strong class="font-bold text-slate-900 block mb-1">Microsoft Edge:</strong>
              <span class="text-slate-600">Configuración &gt; Cookies y permisos del sitio &gt; Administrar cookies.</span>
            </div>
          </div>
        </section>

      </div>

    </div>
  </main>

<?php get_footer(); ?>