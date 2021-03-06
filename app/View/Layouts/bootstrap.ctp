<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap'); ?>
	<style>
	body {
		padding-top: 60px;
		/* 60px to make the container go all the way to the bottom of the topbar */
	}
	</style>
	<?php echo $this->Html->css('bootstrap-responsive'); ?>
	<?php echo $this->Html->css('mystyle'); ?>
	<?php echo $this->Html->css('sticky_footer_navbar'); ?>


	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
-->
<?php
echo $this->fetch ( 'meta' );
echo $this->fetch ( 'css' );
?>
<link
href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css"
rel="stylesheet">
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!--
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		-->
		<!--  <a class="brand" href="/hiwiki">HI Wiki</a> -->
		<a class="brand" href="/cakephp">HI Wiki</a>
		<!--
		<div class="nav-collapse">
		<ul class="nav">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#about">research</a></li>
		<li><a href="#contact">modified</a></li>
	</ul>
</div>
-->
</div>
</div>
</div>

<div class="container">

<!--	<?php echo $this->Session->flash(); ?>   -->

	<?php echo $this->fetch('content'); ?>

	<footer class="footer">
		<p>
			all right researved.
		</p>
	</footer>
</div>
<!-- /container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->fetch('script'); ?>

</body>
</html>
