<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#478ac9">
    <title>chat GPT</title>
    <link rel="stylesheet" href="./stylesGPT.css">
</head>
<body>
    <img src="images/dialognew1.png" class="u-logo-image u-logo-image-1">
    <p><a href="http://localhost:8888/moodle401/question/bank/editquestion/question.php?courseid=1&sesskey=CW538Y9je4&qtype=coderunner&returnurl=%2Fquestion%2Fedit.php%3Fcourseid%3D1&courseid=1&category=10">Вернуться в Moodle</a></p> 
    <div>
        <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">Введите запрос:<span style="font-weight: 700;"></span>
    </div>
    <div>
        <form action="chatGPT.php" method="post">
            <div>
                <input class="inp" type="text" name="prompt" size="70" placeholder="Задание на 'Тема' на языке программирования 'Нужный язык программирования' " style="" />
            </div>
            <br>
            <div>
                <input class="sub" type="submit" value="Отправить запрос" />
                <input class="res" type="reset" value="Очистить поле ввода">
            </div>
        </form>
    </div>
</body>
</html>