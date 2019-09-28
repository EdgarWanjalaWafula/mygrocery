<?php
?>

<section class="mygroceries-slider">
    <div class="container-fluid no-gutters p-0">
        <div class="row">
            
            <!-- Static slider text -->
            <div class="col-md-5 offset-1 static-landing-text">
               <div class="">
                    <?php 

                        // vars 
                        $static_slider_text = get_field('slider_static_text'); 

                        if( $static_slider_text ):
                            ?>
                                <span class="text-uppercase animated fadeInUp" ><?php echo $static_slider_text['static_text_tagline']; ?></span>
                                <h1 class="heading-text"><?php echo $static_slider_text['static_text_heading_']; ?></h1>
                                <p><?php echo $static_slider_text['static_text_description']; ?></p>
                            <?php 
                        endif; 
                    ?>
               </div>
            </div>

            <div class="col-md-6 position-relative">
                <!-- Slider Items  -->
                <div class="owl-carousel owl-theme landing-page-slider">
                    <?php  
                        $slider = array(
                            'post_type' => 'home_slider', 
                            'orderby'   =>  'date', 
                            'order'     =>  'asc'
                        );

                        $loop = new WP_QUERY($slider);
                        
                        while($loop->have_posts()): $loop->the_post(); 
                            the_post_thumbnail( 'post-thumbnail', array(
                                'alt' => the_title_attribute( array(
                                    'echo' => false,
                                ) ),
                                'class' => 'slider-image'
                            ) );
                        endwhile; 

                        wp_reset_postdata();
                    ?>
                </div>
                <div class="slider-custom-control">
                    <span class="icon ion-ios-arrow-round-back" title="Previous Item"></span><span class="icon ion-ios-arrow-round-forward" title="Next Item"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start  -->
<section class="value-chains bg-light">
    <div class="container">
        <div class="row">
            <?php 

                if(have_rows('value_chains')){

                $i = 0; 

                    ?>
                       <div class="col-md-4 primary-mygroceries-bgcolor">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                    while(have_rows('value_chains')):the_row(); 
                                        $i++; 
                                        ?>
                                            <a class="nav-link" id="v-pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i; ?>" role="tab" aria-controls="v-pills-<?php echo $i; ?>" aria-selected="true">
                                                <span class="<?php echo the_sub_field('icon'); ?>"></span>
                                                <?php echo the_sub_field('title_'); ?>
                                            </a>
                                        <?php
                                    endwhile; 
                                ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                            </div>
                        </div>
                    <?php 
                }
            ?>
        </div>
    </div>
</section>
 
<section class="mg-value-chain parralax-window position-relative h-100" data-parallax="scroll" data-image-src="<?php echo the_field('background_image_who_are_involved'); ?>" style="background-image: url();">
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            if(have_rows('who_are_involved')){
                                while(have_rows('who_are_involved')):the_row(); 
                                    ?>
                                        <div class="card rounded-0 border-0">
                                            <h4 class="primary-mygroceries-color"><?php echo the_sub_field('chain_title'); ?></h4>
                                            <p class="m-0"><?php echo the_sub_field('chain_content'); ?></p>
                                        </div>
                                    <?php 
                                endwhile;
                            } else {
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits  -->
<section class="mg-benefits position-relative d-block">
    <div class="container-fluid p-0">
        <?php 
            // vars
            $benefits = get_field('benefits'); 

            ?>
                <div class="row">
                    <div class="col-md-5 offset-1 mg-padding">
                        <div class="accordion border-0" id="accordionExample">
                        <?php _e('<h3>MyGrocery Benefits:</h3>', 'mygroceries'); ?>

                        <?php 
                            $i = 0; 
                            if(have_rows('benefits_accordion_')){
                                while(have_rows('benefits_accordion_')): the_row(); 
                                    $i++; 
                                    ?>
                                    <div class="card rounded-0 border-0">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0 position-relative"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php echo the_sub_field('accordion_title'); ?></button></h2>
                                        </div>

                                        <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                        <div class="card-body rounded-0 border-0">
                                            <?php echo the_sub_field('accordion_content'); ?>
                                        </div>
                                        </div>
                                    </div>
                                    <?php 
                            endwhile;
                            }
                        ?></div>
                    </div>
                    <div class="col-md-6 benefits-bg" style="background-image:url('<?php echo the_field('benefits_image'); ?>')">
                    </div>
                </div>
            <?php 
        ?>
    </div>
</section>