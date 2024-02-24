<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid of squares</title>
    <style>
        .container {
            display: grid;
        }
        .square {
            width: 50px;
            height: 50px;
            background-color: #F9E8C9;
            border: 1px solid #000;
            text-align: center;
            line-height: 50px;
        }
        .line {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
for ($i = 10; $i >= 1; $i--) {
    echo '<div class="line">';
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="square">' . $j . '</div>';
    }
    echo '</div>';
}
?>
       
    </div>  

</body>
</html>
