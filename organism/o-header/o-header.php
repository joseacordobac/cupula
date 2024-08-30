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
            <?php template_part_atomic('molecules/m-hamburger/m-hamburger'); ?>
        </div>
        <div class="o-header-aside-nav">
            <?php template_part_atomic('molecules/m-main-nav/m-main-nav'); ?>
        </div>
    </div>
</header>
