<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sk" xml:lang="sk">
	<head>
		<title>Milan Cák</title>
		<link rel="stylesheet" type="text/css" href="styles/common-styles.css">
		<link rel="stylesheet" type="text/css" href="styles/site-custom.css">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	</head>
	<body>
		<div class="header">
			<a class="logo floatLeft" href="index.php">Milan Cák</a>
			<div class="quote textBlock floatLeft">„Who wants to reach a distant target, has to take many small steps“</div>
			<div class="logo_dream floatRight"></div>
			<div class="language floatRight">
				<div class="en textBlock floatLeft">EN</div>
				<div class="separator floatLeft">|</div>	
				<div class="sk textBlock floatLeft">SK</div>			
			</div>
			
			<div class="menu floatClear">
				<a class="first floatLeft" href="index.php">About me</a>
				<a class="floatLeft" href="skills.php">Skills</a>
				<a class="floatLeft" href="references.php">References</a>
				<a class="floatLeft" href="projects.php">Projects</a>
				<a class="floatLeft" href="hobbies.php">Hobbies</a>
				<a class="floatLeft" href="contact.php">Contact</a>
			</div>
		</div>
		<div class="floatClear"></div>
		<div class="slider">
			<div class="slider_line_top"></div>
			<div class="slider_content">
			
				<?php
					
					require('slider.php');
					
				?>
				
			</div>
			<div class="slider_line_bottom"></div>
		</div>