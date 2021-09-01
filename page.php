<!-- Page contenu type -->
<?
/*
  Template Name: Sidebar Left
*/
?>

<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        

            <section id="page-content" class="content-area">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <div class="row">
                        <div id="primary" class="col-12 col-md-9 order-2">
                            <?php the_content(); ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>