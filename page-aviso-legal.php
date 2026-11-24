<?php
/**
 * Template Name: Aviso Legal (Pedregosa Corporativa 3.0)
 * Diseñado y desarrollado por INFOPIXEL STUDIO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="flex-1 pt-32 pb-20">
  <div class="max-w-[1000px] mx-auto px-4 md:px-8 pt-6">
    
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors">Inicio</a>
      <span class="text-slate-300">/</span>
      <span class="text-primary font-bold">Aviso Legal</span>
    </nav>

    <div class="border-b border-slate-200 pb-6 mb-8">
      <span class="text-xs font-bold text-primary uppercase tracking-wider">Términos Legales &bull; LSSI-CE</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-1">Aviso Legal</h1>
      <p class="text-xs text-slate-500 mt-2">Última actualización conforme a normativa: Noviembre de 2026</p>
    </div>

    <!-- Contenido Legal Oficial Replicado -->
    <div class="space-y-8 text-xs sm:text-sm text-slate-700 leading-relaxed">
      
      <!-- 1. Responsable Legal -->
      <section class="space-y-3">
        <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
          <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">1</span>
          Responsable Legal de esta Web
        </h2>
        <p>
          En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico (LSSI-CE), a continuación se exponen los datos identificativos y fiscales de la entidad titular de este sitio web:
        </p>
        
        <div class="overflow-x-auto my-4">
          <table class="w-full text-left border border-slate-200 rounded-xl overflow-hidden">
            <tbody class="divide-y divide-slate-200 bg-slate-50/50">
              <tr>
                <td class="p-3 font-bold text-slate-900 w-1/3 bg-slate-100/60">Denominación Social:</td>
                <td class="p-3 text-slate-800 font-semibold">PEDREGOSA, S.L.U.</td>
              </tr>
              <tr>
                <td class="p-3 font-bold text-slate-900 bg-slate-100/60">NIF / CIF:</td>
                <td class="p-3 font-mono font-bold text-primary"><?php echo pedregosa_cif(); ?></td>
              </tr>
              <tr>
                <td class="p-3 font-bold text-slate-900 bg-slate-100/60">Domicilio Social y Fiscal:</td>
                <td class="p-3 text-slate-800"><?php echo pedregosa_address(); ?></td>
              </tr>
              <tr>
                <td class="p-3 font-bold text-slate-900 bg-slate-100/60">Teléfono de Contacto:</td>
                <td class="p-3 text-slate-800"><?php echo pedregosa_phone(); ?></td>
              </tr>
              <tr>
                <td class="p-3 font-bold text-slate-900 bg-slate-100/60">Correo Electrónico Oficial:</td>
                <td class="p-3 text-slate-800"><?php echo pedregosa_email(); ?></td>
              </tr>
              <tr>
                <td class="p-3 font-bold text-slate-900 bg-slate-100/60">Actividad Principal:</td>
                <td class="p-3 text-slate-800">Suministro integral de consumibles de impresión, equipamiento informático, mobiliario corporativo, material de oficina y contratación pública homologada.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- 2. Propiedad Intelectual -->
      <section class="space-y-3">
        <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
          <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">2</span>
          Propiedad Intelectual e Industrial
        </h2>
        <p>
          El usuario/a reconoce y acepta que el código fuente, los diseños gráficos, las imágenes, las fotografías, los logotipos, el software, los textos, así como la información y los contenidos que se recogen en este sitio web están protegidos por la legislación española y comunitaria sobre los derechos de propiedad intelectual e industrial a favor de <strong>PEDREGOSA, S.L.U.</strong> o de los legítimos titulares de las marcas distribuidas.
        </p>
        <p>
          No se permite la reproducción, distribución, difusión, modificación o descompilación total o parcial de este sitio web sin el consentimiento previo y por escrito de la titular.
        </p>
      </section>

      <!-- 3. Exclusión de Garantías y Responsabilidad -->
      <section class="space-y-3">
        <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
          <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">3</span>
          Exclusión de Garantías y Responsabilidad
        </h2>
        <p>El titular de este sitio web no se hace responsable de los daños y perjuicios derivados de:</p>
        <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
          <li>La utilización ilícita o fraudulenta por parte del usuario de los contenidos o funcionalidades del sitio web.</li>
          <li>La falta de disponibilidad o caídas temporales de red en servidores ajenos o plataformas conectadas.</li>
          <li>Ataques informáticos o software malicioso contra los que se han implementado todas las medidas de diligencia debida.</li>
        </ul>
      </section>

      <!-- 4. Ley Aplicable y Jurisdicción -->
      <section class="space-y-3">
        <h2 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-100 pb-1.5 flex items-center gap-2">
          <span class="w-6 h-6 rounded-full bg-red-100 text-primary flex items-center justify-center text-xs font-bold">4</span>
          Ley Aplicable y Jurisdicción
        </h2>
        <p>
          Para cualquier controversia o discrepancia en la interpretación de estas condiciones, las partes se someten a los <strong>Juzgados y Tribunales de la ciudad de Sevilla (España)</strong>.
        </p>
      </section>

    </div>

  </div>
</main>

<?php get_footer(); ?>
