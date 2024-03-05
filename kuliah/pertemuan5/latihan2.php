<?php 

$binatang = ["🐹", "🐂", "🦍", "🐊", "🐴"];
$makanan = ["🍕", "🍔", "🌭", "🥚", "🍞"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
<h3>Daftar Makanan</h3>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php for ($i = 0; $i < count($makanan); $i++) { ?>
        <li><?php echo $makanan[$i]; ?></li>
        <?php } ?>
    </ul>

    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach($binatang as $b) { ?>
        <li><?php echo $b; ?></li>
        <?php } echo "<hr>" ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ol>
        <?php foreach($makanan as $m) { ?>
        <li><?php echo $m; ?></li>
        <?php } echo "<hr>" ?>
    </ol>

</body>
</html>