<?php
/**
 * Template Name: Contact us
 *
 */
get_header();
global $data;
?>
<div class="clearfix inner-page"></div>
<div  class="container" id="mov-top">
    <div  class="inner-contents ">
        <div  id="content-main" style="padding-top: 30px;">
            <div id="inner-contact">
                <div class="span4 contact-page">
                    <?php echo do_shortcode('[cForm]'); ?>
                </div>
            </div>
                <?php if ($data['phone1']) { ?>
                    <p><i class="icon-phone icon-large" style="color:#444 "></i> <?php echo $data['phone1'] ?></p>
                <?php } if ($data['phone2']) { ?>
                    <p><i class="icon-phone icon-large" style="color:#444 "></i> <?php echo $data['phone2'] ?></p>
                <?php } if ($data['address1']) { ?>
                    <p><i class="icon-location-arrow icon-large" style="color:#444 "></i> <?php echo $data['address1'] ?></p>
                <?php } ?>
                    
            <div class="full-width"><?php echo do_shortcode('[map address="'.$data['address1'].'" width="100%" height="300" traffic="yes" style="full" zoom="16" marker="yes" infowindow="'.$data['address1'].'" infowindowdefault="yes" maptype="ROADMAP" hidecontrols="false" map_id="map23"]'); ?></div>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article><!-- #post -->
            <?php endwhile; ?>
        </div>
        <?php get_sidebar('inner'); ?>
    </div>
    <?php /* The loop */ ?>

</div><!-- .inner-contents -->
</div><!-- .container -->
<?php get_footer(); ?>