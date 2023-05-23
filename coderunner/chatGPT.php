<?php 

require __DIR__.'/vendor1/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '_Ваш_ключ_';
$open_ai = new OpenAi($open_ai_key);



$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Ты работаешь в сфере программирования больше 20 лет. Придумай мне задание по программированию. Напиши мне код к этому заданию, где чтение тестовых данных будет из стандартного потока и вывод результата будет в стандартный поток. И напиши мне к этому заданию 5 тестов, которые будут читаться из стандартного потока, и содержать ожидаемый результат. Тема задания: ' . $prompt,
    'temperature' => 0.9,
    'max_tokens' => 1000,
    'top_p' => 1,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,
]);

$response = json_decode($complete, true);
$result = $response["choices"][0]["text"];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат запроса</title>
    <link rel="stylesheet" href="./stylesGPT.css">
</head>
<body>
    <button id="history-button">Вернуться назад</button>
    <p><a href="http://localhost:8888/moodle401/question/bank/editquestion/question.php?courseid=1&sesskey=CW538Y9je4&qtype=coderunner&returnurl=%2Fquestion%2Fedit.php%3Fcourseid%3D1&courseid=1&category=10">Вернуться в Moodle</a></p> 
    <h1>Результат вашего запроса</h1>
    <div class="output-text">
        <?= $result?>
    </div>
    <script>
        document.getElementById('history-button').addEventListener('click', () => {
        history.back();
        });
    </script>
</body>
</html>