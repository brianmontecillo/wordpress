<?php

/**
 * Template Name: bbPress - User Lost Password
 *
 * @package bbPress
 * @subpackage Theme
 */

// No logged in users
bbp_logged_in_redirect();

// Begin Template
get_header(); ?>

<?php
global $themeple_config;
    
    do_action( 'themeple_routing_template' , 'page' );
    $themeple_config['current_view'] = 'page';
    $meta = themeple_post_meta(themeple_get_post_id());
    if(isset($meta['layout']))
        $themeple_config['current_sidebar'] = $meta['layout'];
    $spancontent = 12;
    if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    elseif(isset($themeple_config['current_sidebar']) && ($themeple_config['current_sidebar'] == 'sidebar_left' || $themeple_config['current_sidebar'] == 'sidebar_right'))
        $spancontent = 9;
    get_header();
    
    
    ?>
    
        <?php
            
            $title = get_the_title();
            $page_parents = page_parents();
            $subtitle = themeple_post_meta(themeple_get_post_id(), 'page_header_desc');
        ?>

    <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'yes'): 
            $extra_class = '';
            $extra_style = '';
            if(themeple_post_meta(themeple_get_post_id(), 'header_type') == 'image'){
                $extra_style .= 'background:url('.themeple_post_meta(themeple_get_post_id(), 'background_image').') center no-repeat;';
                $extra_class .= ' background_image';
            }else if(themeple_post_meta(themeple_get_post_id(), 'header_type') == 'color'){
                $extra_class .= ' colored_bg';
                $extra_style .= ' background:'.themeple_post_meta(themeple_get_post_id(), 'color_pick').';';
            }
    ?>
    <!-- Page Head -->
    <?php  ?>
   <div class="header_page <?php echo $extra_class ?>" style="<?php echo $extra_style ?>">
             <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h2><?php echo $title ?></h2>
                    </div>
                    <div class="breadcrumbss">
                        
                        <ul class="page_parents pull-right">
                            <li><a href="<?php echo home_url() ?>">Home</a></li>
                            
                            <?php for($i = count($page_parents) - 1; $i >= 0; $i-- ){ ?>

                            <li><a href="<?php echo get_permalink($page_parents[$i]) ?>"><?php echo get_the_title($page_parents[$i]) ?> </a></li>

                            <?php }  ?>
                            <li class="active"><a href="<?php echo get_permalink() ?>"><?php echo $title ?></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            
    </div> 
   
    
    <?php endif; ?>

 <section id="content"  <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'no'): echo 'style=""'; endif; ?> >
        <div class="container" id="blog">
            <div class="row">
    <?php if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">

	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="bbp-lost-pass" class="bbp-lost-pass">
		
			<div class="entry-content">

				<?php the_content(); ?>

				<div id="bbpress-forums">

					<?php bbp_breadcrumb(); ?>

					<?php bbp_get_template_part( 'form', 'user-lost-pass' ); ?>

				</div>
			</div>
		</div><!-- #bbp-lost-pass -->

	<?php endwhile; ?>

	<?php do_action( 'bbp_after_main_content' ); ?>
</div>	

   <?php if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();
?>

            </div>
        </div>

</section>

<?php get_footer(); ?>
