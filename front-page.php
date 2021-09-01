<!-- Page accueil -->

<?php get_header(); ?>

<section id="about">
    <div class="container">
        <div class="title">
            <h2 class="wow zoomIn"><?php the_field('agency_title'); ?></h2>
            <span class="letter"><?php the_field('agency_letter'); ?></span>
        </div>
            <div class="row">           
            <div class="agency col-12 col-sm-6 col-lg-3">
                <div class="agency-icon wow fadeInUp"><?php the_field('agency_one_icon'); ?></div>
                <div class="agency-title wow fadeInUp"><?php the_field('agency_one_name'); ?></div>
                <div class="agency-text wow fadeInUp"><?php the_field('agency_one_text'); ?></div>
            </div>
            <div class="agency col-12 col-sm-6 col-lg-3">
                <div class="agency-icon wow fadeInUp"><?php the_field('agency_two_icon'); ?></div>
                <div class="agency-title wow fadeInUp"><?php the_field('agency_two_name'); ?></div>
                <div class="agency-text wow fadeInUp"><?php the_field('agency_two_text'); ?></div>
            </div>
            <div class="agency col-12 col-sm-6 col-lg-3">
                <div class="agency-icon wow fadeInUp"><?php the_field('agency_three_icon'); ?></div>
                <div class="agency-title wow fadeInUp"><?php the_field('agency_three_name'); ?></div>
                <div class="agency-text wow fadeInUp"><?php the_field('agency_three_text'); ?></div>
            </div>
            <div class="agency col-12 col-sm-6 col-lg-3">
                <div class="agency-icon wow fadeInUp"><?php the_field('agency_four_icon'); ?></div>
                <div class="agency-title wow fadeInUp"><?php the_field('agency_four_name'); ?></div>
                <div class="agency-text wow fadeInUp"><?php the_field('agency_four_text'); ?></div>
            </div>
        </div> 
    </div>
</section>

<section id="news">
    <div class="container-fluid">
		<h2 class="d-none">News</h2>
        <div class="row">      
            <?php if ( have_posts() ) :
                $i=1;
                query_posts('order=DESC&posts_per_page=2');
                while ( have_posts() ) : the_post(); 
                    $category = get_the_category();
                    if ($i % 2 == 0) :
            ?>
            
                    <div class="news-img left col-12 col-sm-4 col-lg-6 p-0">
                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        </a>
                    </div>
                    <div class="news-text right col-12 col-sm-8 col-lg-6">
                        <div class="news-tag wow fadeInRight"><?php echo get_the_date(); ?> | <?php echo $category[0]->cat_name; ?></div>
                        <div class="news-title wow fadeInRight"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="news-preview wow fadeInRight"><?php the_excerpt(); ?></div>    
                    </div>
            
            <?php else : ?>
              
                    <div class="news-text left col-12 col-sm-8 col-lg-6">
                        <div class="news-tag wow fadeInLeft"><?php echo get_the_date(); ?> | <?php echo $category[0]->cat_name; ?></div>
                        <div class="news-title wow fadeInLeft"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="news-preview wow fadeInLeft"><?php the_excerpt(); ?></div>    
                    </div>
                    <div class="news-img right col-12 col-sm-4 col-lg-6 p-0">
                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        </a>
                    </div>
            <?php 
                endif;
            $i++;
            endwhile; 
            endif; ?> 
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
    
<section id="actions">
    <div class="container">
		<h2 class="d-none">Actions</h2>
        <div class="row">
            <div class="action col-12 col-lg-6">
                <div class="action-icon wow fadeInUp"><?php the_field('action_one_icon'); ?></div>
                <div class="action-text wow fadeInUp"><?php the_field('action_one_text'); ?></div>
            </div>
            <div class="action col-12 col-lg-6">
                <div class="action-icon wow fadeInUp"><?php the_field('action_two_icon'); ?></div>
                <div class="action-text wow fadeInUp"><?php the_field('action_two_text'); ?></div>
            </div>
        </div>
    </div>
</section>
    
<section id="contact">
    <div class="container">
        <div class="title">
            <h2 class="wow zoomIn"><?php the_field('contact_title'); ?></h2>        
            <span class="letter"><?php the_field('contact_letter'); ?></span>
        </div>
        <div class="row">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire"]'); ?>
        </div>
            
    </div>
</section>



<?php get_footer(); ?>