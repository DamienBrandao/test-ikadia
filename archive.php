<!-- Page catégorie ? -->

<?php get_header(); ?>
<?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    /*elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }*/
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Actualités';
    }
?>
<h1><?php echo $title; ?></h1>
	<div class="site_blog">
    	<main class="site_content">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <article class="post">
                    <h2><?php the_title(); ?></h2>

                    <?php if ( has_post_thumbnail() ): ?>
                        <div class="post__thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <p class="post__meta">
                        Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                        par <?php the_author(); ?>
                    </p>

                    <?php the_excerpt(); ?>

                    <p>
                        <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                    </p>
                </article>

            <?php endwhile; endif; ?>
            <?php //posts_nav_link(); ?>
<!--
            <div class="site__navigation">
                <div class="site__navigation__prev">
                    <?php //previous_posts_link( 'Page Précédente' ); ?>
                </div>
                <div class="site__navigation__next">
                    <?php //next_posts_link( 'Page Suivante' ); ?> 
                </div>
            </div>
-->
            <?php the_posts_pagination(); ?>
        </main>

        <aside class="site_sidebar">
        	<ul>
            	<?php dynamic_sidebar( 'sidebar' ); ?>
            </ul>
        </aside>
	</div> 
<?php get_footer(); ?>