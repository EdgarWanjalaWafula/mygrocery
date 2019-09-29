<?php
?>

<section class="mygroceries-slider">
    <div class="container-fluid no-gutters mg-padding-0">
        <div class="row">
            
            <!-- Static slider text -->
            <div class="col-md-5 offset-1 static-landing-text">
               <div class="">
                    <?php 

                        // vars 
                        $static_slider_text = get_field('slider_static_text'); 

                        if( $static_slider_text ):
                            ?>
                                <span class="text-uppercase animated fadeInUp delay-1s slow d-block" ><?php echo $static_slider_text['static_text_tagline']; ?></span>
                                <h1 class="heading-text animated fadeInUp delay-2s slow"><?php echo $static_slider_text['static_text_heading_']; ?></h1>
                                <p class="animated fadeInUp delay-3s slow"><?php echo $static_slider_text['static_text_description']; ?></p>
                                <a class="animated fadeInUp delay-4s slow" href="<?php echo home_url('contact-us'); ?>">Get in touch <i class="icon ion-ios-send"></i></a>
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
        <div class="row" data-scrollax-parent="true">
            <?php 

                if(have_rows('value_chains')){

                $i = 0; 
                $j = 0; 

                    ?>
                       <div class="col-md-4 primary-mygroceries-bgcolor" data-scrollax=" properties: { translateY: '-50%'}" >
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                    while(have_rows('value_chains')):the_row(); 
                                        $i++; 
                                        ?>
                                            <a class="nav-link position-relative" id="v-pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i; ?>" role="tab" aria-controls="v-pills-<?php echo $i; ?>" aria-selected="true">
                                                <span class="<?php //echo the_sub_field('icon'); ?>"></span>
                                                <?php echo the_sub_field('title_'); ?>
                                            </a>
                                        <?php
                                    endwhile; 
                                ?>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php 

                                    _e("<h3>Simple steps for:</h3>"); 

                                    while(have_rows('value_chains')):the_row(); 
                                    
                                    $j++; 

                                    $active_show = ""; 

                                    if($j == 1){
                                        $active_show = "show active"; 
                                    }
                                
                                ?>
                                <div class="tab-pane fade <?php echo  $active_show; ?>" id="v-pills-<?php echo $j; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $j; ?>-tab">
                                
                                        <h4 class="primary-mygroceries-color"><?php _e(the_sub_field('title_')); ?></h4>

                                        <?php 
                                         
                                            if(have_rows('content')){

                                                
                                                
                                                echo "<ul class='list-unstyled m-0'>";
                                                
                                                while(have_rows('content')): the_row();
                                                    ?>
                                                        <li><span class="icon ion-ios-arrow-forward" title="Previous Item"></span><?php echo the_sub_field('content_sub_item'); ?></li>
                                                    <?php 
                                                endwhile; 
                                                
                                                echo "</ul>"; 
                                            }
                                        ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php 
                }
            ?>
        </div>
    </div>
</section>
 
<section class="mg-value-chain parralax-window position-relative h-100 d-block" data-parallax="scroll" data-image-src="<?php //echo the_field('background_image_who_are_involved'); ?>" style="background-image: url('<?php echo the_field('background_image_who_are_involved'); ?>');">
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $i = 0; 
                            if(have_rows('who_are_involved')){
                                while(have_rows('who_are_involved')):the_row(); 
                                    $i++; 
                                    ?>
                                        <div class="card rounded-0 border-0" data-aos="fade-left" data-aos-delay="<?php echo $i / 3; ?>00">
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
    <div class="container-fluid mg-padding-0">
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

                                    if($i == 1){
                                        $toggle_state = "not-collapsed"; 
                                    } else {
                                        $toggle_state = "collapsed"; 
                                    }
                                    ?>
                                    <div class="card rounded-0 border-0" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00"> 
                                        <div class="card-header" id="headingOne">
                                            <h2 class="btn btn-link mb-0 collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="" aria-controls="collapse<?php echo $i; ?>"><?php echo the_sub_field('accordion_title'); ?><span class="icon ion-ios-add d-none" title="Previous Item"></span> </h2>
                                        </div>

                                        <div id="collapse<?php echo $i; ?>" class="collapse mg-benefit-content" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                        <div class="card-body rounded-0 border-0">
                                            <?php 
                                            
                                                if(have_rows('accordion_content')){
                                                    echo "<ul class='list-unstyled m-0'>";
                                                
                                                    while(have_rows('accordion_content')): the_row();
                                                        ?>
                                                            <li><span class="icon ion-ios-arrow-forward" title="Previous Item"></span><?php echo the_sub_field('benefits_content'); ?></li>
                                                        <?php 
                                                    endwhile; 
                                                    
                                                    echo "</ul>"; 
                                                }
                                            
                                            ?>
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