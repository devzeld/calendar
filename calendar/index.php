<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <title>HomePage</title>
</head>
<body>
<div class="calendar border">
    <div class="calendar-header border">
        <p>November 2023</p>
    </div>
    <div class="icons">
        <span class="material-symbols-outlined border">chevron_left</span>
        <span class="material-symbols-outlined border">chevron_right</span>
    </div>
    <ul class="calendar-days">
        <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
        getDays($days);
        ?>
    </ul>
</div>
</body>
</html>
<?php
function getDays($days): void
{
    for ($i = 0; $i < 7; $i++) {
        echo "<li>$days[$i]&nbsp;</li>";
    }
}

?>
