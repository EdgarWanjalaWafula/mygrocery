<section class="page-title d-flex align-items-end position-relative parralax-window" data-parallax="scroll" data-image-src="<?php echo the_post_thumbnail_url(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-uppercase text-white text-center">
                <div class="title-content">
                    <h1 class="animated fadeInUp delay-1s"><?php echo the_title(); ?></h1>
                    <span class="animated fadeIn slower delay-2s"><?php echo the_field('page_tag'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>