<?php

$images = get_field('my-gallery');

if ($images): ?>
	
	<?php foreach ($images as $image): ?>
        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>
	<?php endforeach; ?>

<?php endif; ?>
