<?php
include_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		<?php
$scss = new Leafo\ScssPhp\Compiler();
//$scss->setFormatter('Leafo\ScssPhp\Formatter\Crunched');
echo $scss->compile(file_get_contents('magazine.scss'));?>
	</style>
</head>
<body>
<div class="magazine modo2">
	<input name="mag_option" class="mag_back" type="radio" id="mag_option_back" checked>

	<div class="mag_title_back_wrap"><label for="mag_option_back" class="mag_title_back">Back</label></div>
	<div class="mag_title_main_wrap"><span class="mag_title_main">Opciones</span></div>
	<input name="mag_option" class="mag_option" type="radio" id="mag_option_1">

	<div class="mag_title_wrap" data-mag-order="1"><label for="mag_option_1" class="mag_title">Titulo 1</label></div>
	<div class="mag_content_wrap">
		<div class="mag_content">
			Este es el contenido del cuadro 1
		</div>
	</div>
	<input name="mag_option" class="mag_option" type="radio" id="mag_option_2">

	<div class="mag_title_wrap" data-mag-order="2"><label for="mag_option_2" class="mag_title">Titulo 2</label></div>
	<div class="mag_content_wrap">
		<div class="mag_content">
			Este es el contenido del cuadro 2
		</div>
	</div>
</div>
</body>
</html>
