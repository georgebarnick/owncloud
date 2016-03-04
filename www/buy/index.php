<?php
if($_GET["auth"] != "paypal") {
//      header('Location: ..');
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Buy Cloud Storage</title>
<link rel="shortcut icon" type="image/png" href="../owncloud/core/img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#1d2d44">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="alphanum.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<style type="text/css">
* {
        padding: 0;
        margin: 0;
}

html {
        height: 100%;
}

body {
        background: #1d2d44;
        background: -moz-linear-gradient(top, #35537a 0%, #1d2d44 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#35537a), color-stop(100%,#1d2d44));
        background: -webkit-linear-gradient(top, #35537a 0%,#1d2d44 100%);
        background: -o-linear-gradient(top, #35537a 0%,#1d2d44 100%);
        background: -ms-linear-gradient(top, #35537a 0%,#1d2d44 100%);
        background: linear-gradient(top, #35537a 0%,#1d2d44 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#35537a', endColorstr='#1d2d44',GradientType=0 );
        height: 100%;
        text-align: center;
        background-attachment: fixed;
        font-family: 'Lato', sans-serif;
}

#content {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
}

h1 {
        color: #fff;
        font-size: 2.5em;
}

span {
        color: #fff;
        font-size: 18px;
}

form {
        margin-top: 2em;
}

input[type="text"],
input[type="password"] {
        width: 250px;
        background-color: #f9f9f9;
        border: 1px solid #eaeaea;
        padding: 11px 10px 9px;
        font-size: 18px;
        font-family: "Lato", sans-serif;
}

input[type="text"] {
        border-top-right-radius: 4px;
        border-top-left-radius: 4px;
}

input[type="password"] {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
        margin-top: -1px;
}

#submitButton {
        background-image: url(../owncloud/core/img/actions/confirm.svg);
        background-repeat: no-repeat;
        background-position: center center;
        background-color: transparent;
        opacity: .3;
        width: 40px;
        height: 40px;
        border: 0;
        position: relative;
        top: -42px;
        left: 118px;
        cursor: pointer;
}

#submitButton:hover {
        opacity: .7;
}
</style>

<script type="text/javascript">
// Prevent forbidden characters in usernames
$(document).ready(function() {
        $('input[type="text"]').alphanum({
                allow:"-_@.",
                allowSpace:true
        });
});

// Loading icon after submit
document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById("submitButton").addEventListener("click", function() {
                this.style.opacity = "0.7";
                this.style.backgroundImage = "url('../owncloud/core/img/loading-small.gif')";
        });
});
</script>
</head>
<body>
<div id="content">
        <h1>Thanks for buying!</h1>
        <span>Set your username and password to get started</span>
        <form action="adduser.php" method="post">
                <input type="text" name="ocUsername" placeholder="Username"><br />
                <input type="password" name="ocPassword" placeholder="Password"><br />
                <input type="submit" title="Create user" id="submitButton" value>
        </form>
</div>
</body>
</html>
