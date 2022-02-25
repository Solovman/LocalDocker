<?php

/* Laboratory work 3: Regular expressions and file manipulation */ 

//1.Regular expressions

/* a) Напишите регулярку, которая найдет строки 'abba', 'adca','abea' по шаблону:буква'a',два
 любыхсимвола,буква'b'.Пример строки:$str='ahb acb aeb aeeb adcb axeb'; */
echo '1.Regular expressions<br>';
echo "<br>";
$regular_expressions = '/a.{2}b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regular_expressions, $str, $matches);
print_r($matches);
echo "<br>";
echo "<br>";


/* b) Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так,
 чтобы вместо этих чисел стояли их кубы. */
$regular_expressions = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($regular_expressions, fn($matches) => intval($matches[0]) ** 3, $str);
echo "<br>";
echo "<br>";


// 2. The form. Sessions and Cookies

/* a) Дан текстареа и кнопка. В текстареа вводится текст.
По нажатию на кнопку выведите количество слов и количествосимволов в тексте. */
echo "2.The form. Sessions and Cookies<br>";
?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="US-ASCII">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laboratory work 3: Regular expressions and file manipulation</title>
    </head>
    <body>
    <form method="POST">
        <label>
<textarea name="textToParse"
          placeholder="Введите текст:"
          rows="10" cols="30"></textarea><br>
        </label>
        <input type="submit" name="getWordsAndSyms" value="Обработать текст">
    </form>
    </body>
    </html>
<?php
if ($_POST['getWordsAndSyms'])
{
    if ($_POST['textToParse'])
    {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя') . ' слов.<br>';
        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' символов.<br>';
    } else
    {
        $_SESSION['textInfo'] = 'Текст отсутствует';
    }
}
echo $_SESSION['textInfo'];

/* b.На одной странице с помощью формы спросите упользователя фамилию, имя и возраст.
Запишите эти данныев сессию. При заходе на другую страницу выведите этиданные на экран. */
?>
<body>
<form method="POST">
    <label>
        NAME<input type="text" name="name" required><br>
        SURNAME<input type="text" name="surname" required><br>
        AGE<input type="number" name="age" required><br>
        <input type="submit" value="Записать в сессию" name="sendToSession">
    </label>
</form>
<a href="/UserInformation.php">User Information</a>
</body>
<?php
if ($_POST['sendToSession']) {
    if ($_POST['name'] && $_POST['surname'] && $_POST['age']) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];
    }
}
?>

