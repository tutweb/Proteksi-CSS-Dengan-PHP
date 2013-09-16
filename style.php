<?php
session_start();
header("Content-type: text/css"); 
if($_SESSION['NameSession'] != "Key" ){ die("CSS PROTECTED"); }
$_SESSION['NameSession'] = "AnotherKey";
?>
*{
	margin:0; padding:0;
}
body{
	background: #EB984F;
	color: #34495E;
	line-height:1.5em;
}
a{
	color: #505F6E;
}
.container{
	width: 800px;
	margin:30px auto;
	background: #F4D03F;
}

header{
	padding: 30px;
	margin:10px;
}

section{
	padding: 30px;
	margin:10px;
}