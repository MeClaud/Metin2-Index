<?php
require 'inc/core.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $config->{'svname'} ?> | <?= $config->{'svslogan'} ?></title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" href="img/favicon.png" />
</head>
<body>
<div class="container">
	<div class="logo">
		<img src="img/logo.png" />
	</div>
	<div class="main">
		<iframe style="padding: 20px;" src="https://www.youtube.com/embed/<?= $config->{'ytembedcode'} ?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="nav">
		<ul class="nav-menu">
			<li><a href="<?= $config->{'homepage-url'}?>" class="homepage"><img src="img/btn_homepage.png"></a></li>
			<li><a href="<?= $config->{'forum-url'}?>" class="forum"><img src="img/btn_forum.png"></a></li>
		</ul>
	</div>
	<div class="nav">
		<div class="nav-status">
			<span style="position: relative; left: 21px; top: 21px;"><img src="img/<?= ($status[0] == 1) ? 'on' : 'off' ?>.png"></span>
			<span style="position: relative; left: 138px; top: 21px;"><img src="img/<?= ($status[1] == 1) ? 'on' : 'off' ?>.png"></span>
			<span style="position: relative; left: 250px; top: 21px;"><img src="img/<?= ($status[2] == 1) ? 'on' : 'off' ?>.png"></span>
			<span style="position: relative; left: 380px; top: 21px;"><img src="img/<?= ($status[3] == 1) ? 'on' : 'off' ?>.png"></span>
		</div>
	</div>
	<div class="nav">
		<div class="copyright">
			Copyright &copy; <?= date('Y') ?> <?= $config->{'svname'} ?>. All rights reserved.<br />
			Designed by <a href="http://flying-men.de">Flying Men</a>. Coded by <a href="http://meclaud.github.io">MeClaud</a>.
		</div>
	</div>
</div>
</body>
</html>