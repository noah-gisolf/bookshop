<html>
        <head>
                <title><?php echo $title; ?></title>
        </head>
        <body>

            	<h1><?php echo $title; ?></h1>

            	<?php foreach ($menu as $menuitem): ?>
				<a href="<?php echo $menuitem['url']; ?>"><?php echo $menuitem['title']; ?></a>
				<?php endforeach; ?>