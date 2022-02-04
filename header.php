<?php
session_start();
?>
<!DOCTYPE html>
<html>

<!-- 
    using session attributes to control a multi-state
    application
	
    by:dao
    latest modified: 11/16/2017 12:20pm
	you can run this on the web by going to:
	http://nrs-projects.humboldt.edu/~tdy18/Pentechs-repo/code/index.php

	
-->
<head>  
    <title>VERTAAL</title>
    <meta charset="UTF-8" />
        <meta name="viewport"content="width=device-width,initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="normalize.css" />

    <?php
        /* these are bringing in PHP functions I am calling below */
    require_once("dbconn.php");
	require_once("trans_func.php");
    ?>	
    <!-- <link href="login.css" type="text/css" rel="stylesheet" />  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="translator.css" type="text/css" rel="stylesheet" />	
	<link href="http://users.humboldt.edu/smtuttle/styles/normalize.css" 
          type="text/css" rel="stylesheet" />    
	<link href="translator.css" type="text/css" rel="stylesheet"/>
	<link href="profiledesign.css" type="text/css" rel="stylesheet"/>

</head> 
<body>
<?php

$mysqli=getConnection();
?>
<div id="navbar">
        <div id="logo">
            <a href="index.php" >V E R T A A L</a>
        </div>
   
