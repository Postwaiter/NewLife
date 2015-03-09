<html>
<head>
	<title>Test me</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

	<h1>New Savch</h1>

	<h2>Memcached</h2>
	<?php
	$memcache = new Memcache;
	$memcache->connect('127.0.0.1', 11211);
	echo 'Memcached ver: ' . $memcache->getVersion();
	?>


</body>
</html>




