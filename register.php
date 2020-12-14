<?php include('process.php'); ?>
<html>
<head>
    <title>Register</title>
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main-w3layouts wrapper">
    <h1>SignUp Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form id="register_form">
                <div id="error_msg"></div>
                <div>
                    <input id="username" type="text" name="username" placeholder="Username">
                    <span></span>
                </div>
                <div>
                    <input id="email" type="email" name="email" placeholder="Email">
                    <span></span>
                </div>
                <div>
                    <input id="password" type="password" name="password" placeholder="Password">
                </div>
                <div class="wthree-text">
                    <div class="clear"> </div>
                </div>
                <input type="submit" name="register" value="SIGNUP">
            </form>
        </div>
    </div>
    <div class="colorlibcopy-agile">
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
</body>
</html>
<!-- scripts -->
<script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>