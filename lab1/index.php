<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Мамонова Ксения лабораторная 1</title>
</head>
<body>
    <header>
        <a href="../mainPage.html">
            <img src="../logo.svg" style="filter: brightness(0)" width=200px alt="logo_polytech">
        </a>
        <p>2.1.Домашняя работа: Hello, World!</p>
    </header>
    <main>
        <p><?php echo "Hello, world!"?></p>
    </main>
    <footer>
        <p> <?php
            $cssFile = "style.css";
            $css = file_get_contents($cssFile);
            if ($css === FALSE) {
                die("Непрапвильно указан путь к CSS-файлу");
            }
            $propertyCount = strlen($css);
            echo "Количество символов в файле CSS: $propertyCount";
            ?> 
        </p>
    </footer>
</body>