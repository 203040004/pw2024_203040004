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
            width: 100px;
            height: 100px;
            background-color: #F9E8C9;
            border: 1px solid #000;
            text-align: center;
            line-height: 100px;
        }
        .line {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="line">
            <div class="square">1</div>
        </div>
        <div class="line">
            <div class="square">2</div>
            <div class="square">2</div>
        </div>
        <div class="line">
            <div class="square">3</div>
            <div class="square">3</div>
            <div class="square">3</div>
        </div>
        
    </div>
</body>
</html>
