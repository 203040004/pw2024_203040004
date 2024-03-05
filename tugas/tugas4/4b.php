<?php
$perangkat = ["Motherboard", "Processor", "HardDisk", "PC Coller", "VGA Card", "SSD"];
$perangkatBaru = $perangkat;
array_push($perangkatBaru, "Card Reader", "Modem");
sort($perangkatBaru);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h3>Macam-macan Perangkat Keras Komputer</h3>
    <ol>
        <?php foreach ($perangkat as $p) { ?>
            <li><?php echo $p; ?></li>
        <?php } ?>
    </ol>

    <h3>Macam-macan Perangkat Keras Komputer Baru</h3>
    <ol>
        <?php foreach ($perangkatBaru as $pS) { ?>
            <li><?php echo $pS; ?></li>
        <?php } ?>
    </ol>
</body>
</html>
