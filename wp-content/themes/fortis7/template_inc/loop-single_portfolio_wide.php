<?php
global $themeple_config;
do_action('themeple_excecute_query_var_action','loop-single_portfolio_wide');
//$metas = themeple_portfolio_custom_field(get_the_ID());
$metas = themeple_post_meta(get_the_ID());
$output = '';
?>

            <div class="container">
                <div class="row-fluid single_content bottom">
                    <?php if(is_object(get_next_post())): ?>
                        <a class="next" href="<?php echo get_permalink(get_next_post()->ID); ?>"><?php _e('Next Post', 'themeple'); ?></a>
                    <?php endif; ?>
                    <?php if(is_object(get_previous_post())): ?>
                        <a class="prev" href="<?php echo get_permalink(get_previous_post()->ID); ?>"><?php _e('Previous Post', 'themeple'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
    
            <div class="wide_slider">
                
            <?php $slider = new themeple_slideshow(get_the_ID(), 'flexslider');
                       
                                      if($slider && $slider->slide_number > 0){
						                    $slider->img_size = 'portfolio_bottom';
                                            $sliderHtml = $slider->render_slideshow();
                                            echo $sliderHtml;
                                      }
                       

             ?>
               
            </div>
            <div class="container">
                <div class="single_content bottom">
                    <div class="row-fluid row-dynamic-el">
                        <div class="span6 about_project">
                            <h5><?php _e("About Project", 'themeple') ?></h5><p class="content"><?php echo get_the_content() ?></p>
                           
                        </div>
        		     
                        
                        <div class="span6">
                        	<h5><?php _e('Project Details', 'themeple') ?></h5>
                            <div class="accordion style_1" id="project_details">
                                <?php   $op_metas = themeple_get_option('portfolio-meta');
                                
                                    $nr_metas = count($op_metas);
                                        
                                for($i = 0; $i < $nr_metas; $i++): ?>
                                <div class="accordion-group">
                                    <div class="accordion-heading <?php if($i == 0) echo 'in_head' ?>">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#project_details" href="#project<?php echo ($i+5000) ?>"><?php echo $op_metas[$i]['meta'] ?></a>
                                    </div>
                                    <div id="project<?php echo ($i+5000) ?>" class="accordion-body <?php if($i == 0) echo 'in' ?> collapse ">
                                        <?php if(isset($metas['meta_'.($i+1)])) { ?>
                                        <div class="accordion-inner"><?php echo do_shortcode($metas['meta_'.($i+1)]) ?></div><?php } ?>
                                    </div>
                                </div>
                                 <?php endfor; ?>
                                
                            </div>
                                   
                            
        			
                        </div>
                        
                    </div>
                </div>
            </div>