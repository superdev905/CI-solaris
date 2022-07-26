<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Test Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
<style>
body {
	font-family: 'Montserrat', sans-serif;
	text-align: center;
}
.testcontainer {
	width: 100%;
	float: left;
}
.testcontent {
	width: 700px;
	margin: 0 auto;
	border: 1px solid #ccc;
	padding-bottom: 25px;
	margin-top: 100px;
}
h1 {
	background-color: #CCCCFF;
	padding: 20px;
	margin-top: 0px;
}
h5 {
	color: #6C0;
	font-size: 16px;
}
span {
	text-decoration: underline;
	color: #000;
}
.addpadding {
	padding-top: 10px;
}
</style>
</head>
<body>
<div class="testcontainer">
  <div class="testcontent">
    <h1>This is test page : Welcome</h1>
    <h5 class="addpadding">This file is uploded here for testing purpose only.</h5>
    <?php
echo "<p><strong>PHP version is <span>".phpversion(). "</span></strong></p>";
?>
  </div>
</div>
</body>
</html>