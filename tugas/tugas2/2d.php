<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        .chess-board {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
        }

        .white {
            background-color: #eee;
        }

        .black {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="chess-board">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        for ($col = 1; $col <= 8; $col++) {
            $isWhite = ($row + $col) % 2 == 0;
            $squareClass = $isWhite ? 'white' : 'black';
            echo "<div class='$squareClass'></div>";
        }
    }
    ?>
</div>

</body>
</html>