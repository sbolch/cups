<!doctype html>
<?php
    require_once 'vendor/autoload.php';
    use d3vy\Cups\Cups;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Cups</title>
    <script src="https://kit.fontawesome.com/ce91d86b01.js"></script>
    <style>
        body { font: 16px sans-serif; }
    </style>
</head>
<body>
    <h1>Cups</h1>
    <p>
        This project was made with only <?= Cups::calculate('2019-07-18', '2019-07-18', 3, 33) ?> <i class="fas fa-coffee"></i>,
        but my big old project was made with <?= Cups::calculate('2011-09-11', 'today', 3, 10) ?> <i class="fas fa-coffee"></i>.
    </p>
</body>
</html>