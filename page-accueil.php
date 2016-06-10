<?php
/*
*
* Template Name: Accueil
*
*/
?>
<?php get_header(); ?>
    <!-- home-section
        ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" id="welcome-message">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                    <?php echo the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12" style="margin-bottom: 50px">
                <div id="homeCarousel" class="carousel slide carousel-fade">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#homeCarousel" data-slide-to="1"></li>
                        <li data-target="#homeCarousel" data-slide-to="2"></li>
                        <li data-target="#homeCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php
                        $args = array('post_type' => 'slide');
                        $slides = new WP_Query($args);
                        ?>
                        <?php if ($slides->have_posts()): ?>
                            <?php $i = 0;?>
                            <?php while ($slides->have_posts()): $slides->the_post(); ?>
                                <?php $active = ($i == 0) ? " active" : '';?>
                                <div class="item<?php echo $active;?>">
                                    <img src="<?php echo the_post_thumbnail_url();?>" class="img-responsive" alt="image">
                                </div>
                                <?php $i++;;?>
                            <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                        <!--<div class="item active">
                            <img src="img/slide/slide-1.jpg" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="img/slide/slide-3.jpg" alt="Third slide">
                        </div>
                        <div class="item">
                            <img src="img/slide/slide-4.jpg" alt="Third slide">
                        </div>-->
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#homeCarousel"
                       data-slide="prev"><i class="fa fa-angle-left fa-lg"></i></a>
                    <a class="carousel-control right" href="#homeCarousel"
                       data-slide="next"><i class="fa fa-angle-right fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- End footer -->
<?php get_footer(); ?>
