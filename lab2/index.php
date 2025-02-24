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
        <img src="logo.svg" style="filter: brightness(0)" width=200px alt="logo_polytech">
        <p>4.1.Домашняя работа: Hello, World!</p>
    </header>
    <main>
        <form action="https://httpbin.org/post" method="post">
            <label for="name">Имя пользователя</label>
            <input type="text" id="name" value="Ksenia"/>
            <br/>
            <label for="email">Email</label>
            <input type="email" id="email" value="Ksenia@gmail.com"/>
            <br/>
            <fieldset>
                <legend>Тип обращения</legend>

                <input type="radio" id="claim"/>
                <label for="claim">Жалоба</lable>
                <br/>

                <input type="radio" id="proposal"/>
                <label for="proposal">Предложение</lable>
                <br/>
                
                <input type="radio" id="gratitude"/>
                <label for="gratitude">Благодарность</lable>
            </fieldset>
            <br/>
            <label for="text">Текст обращения</label>
            <input type="textarea" id="text"/>
            <br/>
            <fieldset>
                <legend>Вариант ответа</legend>

                <input type="checkbox" id="sms"/>
                <label for="sms">SMS</lable>
                <br/>

                <input type="checkbox" id="e-mail"/>
                <label for="e-mail">e-mail</lable>
            </fieldset>
            <br/>
            <button type="submit">Отправить</button>
            <a href="response.php">Перейти на страницу 2</a>
        </form>
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
</html>