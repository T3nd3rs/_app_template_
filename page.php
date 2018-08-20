<!-- Ce code sert à l'affichage d'une simple page -->

<!-- Récupére le header -->
<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">

<!-- Verifie la presence d'une page et affiche l'article ainsi que le titre et l'auteur -->        
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
        <?php the_content(); ?>
      </article>
<!-- Si, il n'y a aucun article la page affiche "Sorry, no post was found!" -->
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no page was found!</p>
      </article>
<?php endif; ?>
<!-- Récupére la "sidebar" -->
  </section><?php get_sidebar(); ?>
</main>

<!-- Récupére le footer -->
<?php get_footer(); ?>