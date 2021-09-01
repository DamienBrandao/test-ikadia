<!-- Article seul -->

<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
    <div class="site_navigation">
        <div class="site_navigation_prev">
            <?php previous_post_link( 'Article Précédent<br>%link' ); ?>
        </div>
        <div class="site_navigation_next">
            <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
        </div>
    </div>
<?php get_footer(); ?>