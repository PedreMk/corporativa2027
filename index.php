<?php
/**
 * Fallback principal - Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="flex-1 py-16 bg-surface">
  <div class="max-w-[1000px] mx-auto px-4 md:px-8">
    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 gap-6">
        <?php while (have_posts()) : the_post(); ?>
          <article class="bg-white p-6 rounded-2xl border border-slate-border shadow-xs">
            <h2 class="text-xl font-bold text-slate-900 mb-2">
              <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors"><?php the_title(); ?></a>
            </h2>
            <div class="text-xs text-slate-500 mb-4"><?php echo get_the_date(); ?></div>
            <div class="text-sm text-slate-600 leading-relaxed mb-4">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="text-xs font-bold text-primary hover:underline">Leer más &rarr;</a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <div class="bg-white p-8 rounded-2xl border border-slate-border text-center">
        <h2 class="text-lg font-bold text-slate-900 mb-2">No se encontraron contenidos</h2>
        <p class="text-sm text-slate-500">Utilice el menú superior para navegar a las secciones corporativas.</p>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
