<?php
	$quality = [70, 75, 80, 90, 100];

	$files = [
		'Spicy Team - View  (1)_800x800.png',
		'Spicy CF 7.9 - View (1)_800x800.jpg',
		'Pulsium 3.0 Hero_2048x2048.png',
	];

	function img($path) {
?>
	<div>
	<figure>
		<img src="<?= $path ?>">
		<figcaption><?= strtoupper(preg_replace("/.*\.([^\.]+)$/", '$1', $path)) ?> - (<?= round(filesize($path) / 1024, 2) ?> Kb)</figcaption>
	</figure>
	<figure>
		<img src="<?= $path.'.webp' ?>">
		<figcaption>WEBP - (<?= round(filesize($path.'.webp') / 1024, 2) ?> Kb)</figcaption>
	</figure>
	</div>
<?php
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Webp</title>
	<style>
		figure {
			display: inline-block;
		}
	</style>
</head>
<body>
	<?php foreach($quality as $q):  ?>
		<h1><?= $q ?></h1>
		<?php foreach($files as $f):  ?>
			<?= img($q . '/' . $f) ?>
		<?php endforeach ?>		
	<?php endforeach ?>

</body>
</html>
