<!-- Page 404 -->

<?php get_header(); ?>

<section id="intro-content" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container-fluid">
        <h1>Oups... Page introuvable !</h1>
    </div>
</section>

<section id="page-content" class="content-area">
    <div class="container">
        <div class="row">
            <div id="primary" class="col-12 col-md-9 order-2">
                Rien de grave, nous vous remettons sur le bon chemin :
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>