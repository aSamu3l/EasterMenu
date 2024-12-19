<?php
$menu_file = 'menu.json';
$menu_content = file_get_contents($menu_file);
$menu = json_decode($menu_content, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🕊 Easter Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffebcc, #ffcc99) no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            overflow-x: hidden;
        }
        .menu-section {
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .menu-title {
            color: #a632fa;
            text-align: center;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .menu-item {
            font-size: 1.1rem;
            color: #495057;
        }
        .egg {
            position: fixed;
            position: fixed;
            top: -10px;
            color: #ffffff;
            font-size: 1.5rem;
            animation: fall 10s linear infinite;
        }
        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center text-info my-4">🕊 Easter Menu 🕊</h1>

    <?php foreach ($menu as $section => $items): ?>
        <div class="menu-section">
            <h2 class="menu-title"> <?= htmlspecialchars(ucfirst($section)) ?> </h2>
            <ul class="list-group">
                <?php foreach ($items as $item): ?>
                    <li class="list-group-item menu-item"> <?= htmlspecialchars($item) ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<!-- Easter Egg Effect -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: -1;">
<?php for ($i = 0; $i < 50; $i++): ?>
    <div class="egg" style="left: <?= rand(0, 100) ?>%; animation-duration: <?= rand(5, 15) ?>s; font-size: <?= rand(10, 20) ?>px;">🐣</div>
<?php endfor; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>