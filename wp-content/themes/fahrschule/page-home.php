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
        $args = array( 'post_type' => 'product','orderby' => 'date','posts_per_page' => 6);
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          	<div class="col-sm-6 col-md-4">
                    <div class="voucher-card">
                        <div class="voucher-card-top">
                            <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
                            <span class="voucher">voucher</span>
                            <?php if(!empty($product->get_image_id())){ ?>
                                <img class="content-img" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
                            <?php }else{ ?>
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/inc/img/no.png" alt="">
                            <?php } ?>
                            
                            <div class="code-caption text-end">
                                <?php echo $product->get_price_html();?>
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