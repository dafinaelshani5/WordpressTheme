<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafina Theme</title>
    <?php wp_head(); ?>
</head>
<?php if (is_front_page()):
  $dafina_classes = ["dafina-class", "my-class"];
else:
  $dafina_classes = ["no-dafina-class"];
endif; ?>

<body <?php body_class($dafina_classes); ?>>

<div class="container">
<div class="nav">
    <?php wp_nav_menu(["theme_location" => "primary"]); ?> 
</div>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()
  ->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>