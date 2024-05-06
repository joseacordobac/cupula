<?php

$title = get_the_title();
$excerpt = get_the_excerpt();
$image_url = get_the_post_thumbnail_url();

$title = esc_attr($title);
$excerpt = esc_attr($excerpt);
$image_url = esc_url($image_url);

echo '<meta property="og:title" content="' . $title . '">';
echo '<meta property="og:description" content="' . $excerpt . '">';
echo '<meta property="og:image" content="' . $image_url . '">';
?>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $excerpt; ?>">
<meta name="twitter:image" content="<?php echo $image_url; ?>">

<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
<meta property="og:type" content="website">