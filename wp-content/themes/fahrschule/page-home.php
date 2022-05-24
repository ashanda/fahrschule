<?php
/*
Template Name: Home
*/
 get_header();  ?>

<div class="body-content container">
            <div class="header text-center">
                <h2>Voucher</h2>
                <span class="caption">We Learn to Drive Easy</span>
            </div>
            <div class="row my-5">
       <?php
        $args = array( 'post_type' => 'product');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          	<div class="col-sm-6 col-md-4">
                    <div class="voucher-card">
                        <div class="voucher-card-top">
                            <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
                            <span class="voucher">voucher</span>
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/inc/img/single content.png" alt="">
                            <div class="code-caption text-end">
                                <span class="price"><?php echo $product->get_price_html();?></span>
                                <span class="code">code : <?php the_title();?></span>
                                
                            </div>
                        </div>
                        <div class="voucher-card-bottom">
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div>
                    </div>
                </div>
    	<?php endwhile;
    	wp_reset_query(); 
        ?>

            </div>
        </div>
        <!-- body-cotent -->

    </div>


<?php get_footer(); ?>