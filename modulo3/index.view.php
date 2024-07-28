<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Document</title>
</head>
<body>

    <h1><?php echo $greeting ?></h1>
    <h1><?= $greeting; ?></h1>
    <h2>Completas</h2>
    <ul>
        <?php
            // foreach ($completedTasks as $task) {
            //     echo "<li>" . $task->title . " ✔️ </li>";
            // }
        ?>
        <?php foreach ($completedTasks as $task) : ?>
            <li style="color:<?= $task->color ?>;"> <?= $task->title ?></li>
        <?php endforeach ?>
    </ul>
    <h2>Pendientes</h2>
    <ul>
        <?php foreach($pendingTasks as $task): ?>
        <li style="color:<?= $task->color ?>;"> <?= $task->title ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>