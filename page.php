<?php
/**
 * Plantilla genérica para páginas estándar - Pedregosa Corporativa 3.0
 * Desarrollado por CHRISTOPHE PALMIERO (www.infopixel.es - info@infopixel.es)
 */
if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="flex-1 py-16 bg-surface">
  <div class="max-w-[1000px] mx-auto px-4 md:px-8">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-8 md:p-12 rounded-2xl border border-slate-border shadow-xs'); ?>>
        <header class="mb-8 pb-6 border-b border-slate-100">
          <h1 class="text-3xl sm:text-4xl font-extrabold text-on-surface tracking-tight">
            <?php the_title(); ?>
          </h1>
        </header>

        <div class="prose max-w-none text-slate-700 leading-relaxed text-sm sm:text-base">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
