<?php
setcookie("cookie", "guest_user","","","","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
    if($_COOKIE["cookie"] == "admin_user_1") {
        echo '<title>Welcome admin</title>';
    }
    else {
        echo '<title>Welcome guest</title>';
    }
    ?>
</head>
<body>
    <?php
    if($_COOKIE["cookie"] == "admin_user_1") {
        echo '<nav>
        <h2>Welcome Admin</h2>
    </nav>
    <br>
    <center>
    <div class="container">
        <img src="https://i.pinimg.com/originals/8a/2e/22/8a2e22ee850f5b6ce80223c3dda78273.gif" style="width:200px;height: 300px;">
        <h3>[ADMIN]</h3>
        <p>@cookiechl@beginner</p>
    </div>
   </center>';
    }
    else {
        echo '<nav>
        <h2>Welcome Guest</h2>
    </nav>
    <br>
    <center>
    <div class="container">
        <img src="https://64.media.tumblr.com/72ff5d77aef396b47932186e4bee2d7b/4bc0dc97bfd82b26-1b/s540x810/c601f9c981626c801df18695718d51ddd8d570ae.gifv" style="width:200px;height: 300px;">
        <h3>Guest User</h3>
        <p>Pls change admin account & get flag</p>
    </div>
   </center>';
    }
    ?>
</body>
</html>