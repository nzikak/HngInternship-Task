
<!DOCTYPE html>
<html lang="en">
<head>
<title> Hng Internship 4.0</title>
<meta charset="Utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background: url(http://res.cloudinary.com/brainiac/image/upload/v1524356663/server-background-7_c1xvdd.jpg);
	height: 100%;
}

#head {
	font-size: 32px;
	color: #fff;
	font-weight: bold;
}

#time {
	font-size: 40px;
	color: #fff;
	font-weight: bold;
}

#date, #location {
	font-size: 24px;
	color: #fff;
}

#container {
	margin: 20px;
	margin-left: 40px;
	position: absolute;
	top: 70%;
	bottom: 0;
}
</style>
</head>

<body>
<div id="container">
<div id="head">Hng InternShip 4.0</div>
<div id="time"><?php echo date('g:iA'); ?></div>
<div id="date"><?php echo date('l, dS F Y'); ?></div>
<div id="location">Lagos, Nigeria</div>
</div>
</body>
</html>
