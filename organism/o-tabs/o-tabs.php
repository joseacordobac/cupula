<?php 
    /**
     * @param array $args
     * O-tabs
     */

    wp_enqueue_style('o-tabs');
    wp_enqueue_script('o-tabs'); 

    $repeater = isset($args['repeater']) ? $args['repeater'] : null;
    $custom_css = isset($args['custom-css']) ? $args['custom-css'] : null;
    $is_menu_activated = wp_is_mobile() ? '0' : 'o-tabs__item--active';

?>

<div class="o-tabs <?php echo $custom_css; ?>">
  <div class="o-tabs__nav">
    <?php
    $count = 0;
      while( have_rows($repeater) ) : the_row(); ?>
        <span class="o-tabs__item <?php if($count == 0) echo $is_menu_activated; ?>" data-tab="tab-<?php echo $count; ?>">
          <?php the_sub_field('hability_title'); ?>
        </span>

        <?php  if(wp_is_mobile()): ?>
          <div class="o-tabs__body <?php if($count == 0) ?>" id="tab-<?php echo $count; ?>">

              <h4 class="o-tabs_habilites"><?php the_sub_field('description_total'); ?></h4>

              <div class="habilities-description">
                <div class="o-tab-habilites-description__colummn">
                  <?php if(get_sub_field('description')): ?>
                    <p class="o-tabs__description"><?php the_sub_field('description'); ?></p>
                  <?php endif; ?>
                </div>

                <div class="o-tab-habilites-description__column">
                  <?php if(get_sub_field('description_right')): ?>
                    <p class="o-tabs__description"><?php the_sub_field('description_right'); ?></p>
                  <?php endif; ?>
                </div>

              </div>

              <div class="o-tab-habilites__tech-hum">
                <?php if(get_sub_field('titulo_tecnologias') || have_rows('habilities_list')): ?>
                  <div class="o-tab-habilites__column">
                    <h4 class="habilitites__title"><?php the_sub_field('titulo_tecnologias'); ?></h4>
                    <div class="habilities-logos">
                      <?php while( have_rows('habilities_list') ) : the_row(); ?>
                          <?php 
                            if(get_sub_field('logo')):
                            get_template_part('/atoms/a-img/a-img', null,
                                array(
                                    'image_id' => get_sub_field('logo'),
                                    'image_size' => 'medium',
                                    'alt' => 'betek',
                                    'class' => 'tools-img',
                                ));
                            endif;
                          ?>
              
                          <?php if(get_sub_field('hability_name_tool')): ?>
                          <p class="o-tabs__text"><?php the_sub_field('hability_name_tool'); ?></p>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>
                  
                <?php if(get_sub_field('title_perfil') || have_rows('profile')): ?>
                  <div class="o-tab-habilites__column">     
                    <h4 class="habilitites__title"><?php the_sub_field('title_perfil'); ?></h4>
                    <div class="habilities-skills">
                      <?php while(have_rows('profile')): the_row(); ?>
                        <p class="o-tabs__text"><?php the_sub_field('skill'); ?></p>
                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

          </div>
        <?php endif; ?>
      <?php  $count++; endwhile; ?>

    </div>

    <?php 
    if(wp_is_mobile() === false):

      $count = 0;
      while( have_rows($repeater) ) : the_row(); ?>
        <div class="o-tabs__body <?php if($count == 0) echo 'o-tabs__body--active'; ?>" id="tab-<?php echo $count; ?>">

          <h4 class="o-tabs_habilites"><?php the_sub_field('description_total'); ?></h4>

          <div class="habilities-description">
            <div class="o-tab-habilites-description__colummn">
              <?php if(get_sub_field('description')): ?>
                <p class="o-tabs__description"><?php the_sub_field('description'); ?></p>
              <?php endif; ?>
            </div>

            <div class="o-tab-habilites-description__column">
              <?php if(get_sub_field('description_right')): ?>
                <p class="o-tabs__description"><?php the_sub_field('description_right'); ?></p>
              <?php endif; ?>
            </div>

          </div>

          <div class="o-tab-habilites__tech-hum">

            <?php if(get_sub_field('titulo_tecnologias') || have_rows('habilities_list')): ?>
              <div class="o-tab-habilites__column">
                <h4 class="habilitites__title"><?php the_sub_field('titulo_tecnologias'); ?></h4>
                <div class="habilities-logos">
                  <?php while( have_rows('habilities_list') ) : the_row(); ?>
                      <?php 
                        if(get_sub_field('logo')):
                        get_template_part('/atoms/a-img/a-img', null,
                            array(
                                'image_id' => get_sub_field('logo'),
                                'image_size' => 'medium',
                                'alt' => 'betek',
                                'class' => 'tools-img',
                            ));
                        endif;
                      ?>
          
                      <?php if(get_sub_field('hability_name_tool')): ?>
                      <p class="o-tabs__text"><?php the_sub_field('hability_name_tool'); ?></p>
                    <?php endif; ?>
                  <?php endwhile; ?>
          
                </div>
              </div>
            <?php endif; ?>
              
            <?php if(get_sub_field('title_perfil') || have_rows('profile')): ?>
              <div class="o-tab-habilites__column">     
                <h4 class="habilitites__title"><?php the_sub_field('title_perfil'); ?></h4>
                <div class="habilities-skills">
                  <?php while(have_rows('profile')): the_row(); ?>
                    <p class="o-tabs__text"><?php the_sub_field('skill'); ?></p>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endif; ?>

          </div>
          
        </div>

      <?php $count++; endwhile; 
    endif; ?>

  </div>
</div>