<?php

    /** Organism: Header */
    wp_enqueue_style('o-header');
    wp_enqueue_script('o-header');
?>

<header class="o-header" id="o-header">
    <div class="g-content-regular o-header__content">
        <div class="o-header__logo-content"> 
            <?php template_part_atomic('atoms/a-logo/a-logo'); ?>
        </div>
        <div class="o-header__nav-content">
            <?php template_part_atomic('molecules/m-nav-btn/m-nav-btn'); ?>
            <div class="o-header__mobile-content">
                <div class="o-header__mobile">
                    <span class="o-header__mobile-line"></span>
                    <span class="o-header__mobile-line o-header__mobile-line--center"></span>
                    <span class="o-header__mobile-line o-header__mobile-line--bottom"></span>
                </div>
            </div>
        </div>
        <div class="o-header-aside-nav">
            <?php template_part_atomic('molecules/m-main-nav/m-main-nav'); ?>
        </div>
    </div>
</header>
