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
    <title>Calendar HomePage</title>
</head>
<body>
<div class="container">
    <div class="left">
        <div class="calendar">
            <div class="month">
                <span class="material-symbols-outlined">chevron_left</span>
                <div class="date">November 2023</div>
                <span class="material-symbols-outlined">chevron_right</span>
            </div>
            <div class="weekdays">
                <div>mon</div>
                <div>tue</div>
                <div>wed</div>
                <div>thu</div>
                <div>fri</div>
                <div>sat</div>
                <div>sun</div>
            </div>
            <div class="days">
                <?php
                for ($i = -30; $i <= 30; $i++) {
                    if ($i == 15) {
                        echo "<div class='day active selected'>$i</div>";
                    }
                    echo "<div class='day'>$i</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>