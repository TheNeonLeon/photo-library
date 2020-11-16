<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="heading">
    <h1>Welcome</h1>
        <h3>This is a Photo-album</h3>
    </header>
        <ul>
            <li>
            Pumpkin <br>first card
            <img class="pumpkin" src="<?php bloginfo('template_url');?> /pumpkin.jpg">
				<button>
					Click me
				</button>
            </li>
            <li>
            Leaf <br> second card
            <img class="autumn" src="<?php bloginfo('template_url');?> /autumn.jpg">
				<button>
					Click me
				</button>
            </li>
            <li>
            Ghosts <br> third card
			<img class="ghosts" src="<?php bloginfo('template_url');?> /ghosts.jpg">
				<button>
					Click me
				</button>
            </li>
        </ul>

</body>
</html>