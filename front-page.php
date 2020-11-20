<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url');?>/heading.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<?php
    get_header();
?>
        <ul class="cards">
            <li class="card">
            Pumpkin <br>first card
            <img class="pumpkin" src="<?php bloginfo('template_url');?> /pumpkin.jpg">
            </li>
            <li class="card">
            Leaf <br> second card
            <img class="autumn" src="<?php bloginfo('template_url');?> /autumn.jpg">
            </li>
            <li class="card">
            Hello <br> third card
            <img class="ghosts" src="<?php bloginfo('template_url');?> /ghosts.jpg">
            </li>
        </ul>
        
</body>
</html>