<?php
/*
*
* Template Name: Produits
*
*/

function clf_wp_args($slug){
    return array(
        'post_type' => 'produit',
        'tax_query' => array(
            array(
                'taxonomy' => 'categorie',
                'field' => 'slug',
                'terms' => $slug
            )));
}
?>
<?php get_header(); ?>

<!-- content
            ================================================== -->
<div id="content">

    <!-- page-banner-section
        ================================================== -->
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <section class="page-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><span><?php echo get_field('titre_de_la_page');?></span>&nbsp; <?php echo get_field('texte_orange');?></h2>
                </div>
                <div class="col-md-6">
                    <ul class="page-pagin">
                        <li><a href="<?php home_url();?>">Accueil</a></li>
                        <li><a href="<?php echo get_permalink($post->post_parent);?>"><?php echo get_the_title($post->post_parent);?></a></li>
                        <li><em><?php the_title();?></em></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- single-project
        ================================================== -->
        <section class="single-project-section">
        <div class="container">
            <div class="col-md-4 col-md-push-8">
                <div class="title-project">
                    <h1><?php echo get_field('titre_de_la_page');?> <span><?php echo get_field('texte_orange');?></span></h1>
                </div>
                <div class="project-content">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo the_content();?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-pull-4">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php
                        $terms = get_the_terms($post->ID, 'categorie');
                        $category_slug = empty($terms) ? '' :  $terms[0]->slug;
                        ?>
                        <?php
                        $args = clf_wp_args($category_slug);
                        $slides = new WP_Query($args); ?>
                        <?php if ($slides->have_posts()): ?>
                            <?php $i = 0;?>
                            <?php while ($slides->have_posts()): $slides->the_post(); ?>
                                <?php $active = ($i == 0) ? ' active' : '';?>
                                    <div class="item<?php echo $active;?>">
                                        <img src="<?php echo the_post_thumbnail_url();?>" alt="image">
                                        <div class="carousel-caption"><?php the_title();?></div>
                                    </div>
                                <?php $i++;?>
                            <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel"
                       data-slide="prev"></a>
                    <a class="carousel-control right" href="#myCarousel"
                       data-slide="next"></a>
                </div>
            </div>
            <div class="col-md-8 thumbnails">
                <?php
                $terms = get_the_terms($post->ID, 'categorie');
                $category_slug = empty($terms) ? '' :  $terms[0]->slug;
                ?>
                <?php
                $args = clf_wp_args($category_slug);
                $slides = new WP_Query($args); ?>
                <?php if ($slides->have_posts()): ?>
                    <?php $i = 0;?>
                    <?php while ($slides->have_posts()): $slides->the_post(); ?>
                        <?php $active = ($i == 0) ? ' class="active"' : '';?>
                        <span data-target="#myCarousel" data-toggle="tooltip" title="Titre" data-slide-to="<?php echo $i;?>" <?php echo $active;?>>
                            <img src="<?php echo the_post_thumbnail_url();?>" class="img-responsive" alt="<?php the_title();?>">
                        </span>
                        <?php $i++;?>
                    <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>
            </div>
        </div>
    </section>
    <!-- End single-project -->
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- End content -->

<!-- End footer -->
<?php get_footer(); ?>
