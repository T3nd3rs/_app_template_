<!-- Ce code sert à l'affichage de la page d'accueil/index -->


<!-- Recupére le header -->
<?php get_header(); ?>
  <main class="wrap">
    <section class="content-area content-thin">

<!-- Verifie la presence d'un(ou plusieurs) article(s) (selon la configuration) et affiche les articles (ou l'article) ainsi que le titre et l'auteur -->             
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
          <header>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            By: <?php the_author(); ?>
          </header>
        <?php the_excerpt(); ?>
      </article>
<!-- Si, il n'y a aucun article(s) la page affiche "Sorry, no posts was found!" --> 
    <?php endwhile; else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
    <?php endif; ?>
<!-- Recupére la sidebar -->    
    </section><?php get_sidebar(); ?>
  </main>

<!-- Recupére le footer --> 
<?php get_footer(); ?>