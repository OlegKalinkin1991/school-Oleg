<meta charset="utf-8">
<title>Калькулятор PHP</title>
<body>

<form method="post" action="index.php">

    <label for="username">Число №1<br></label><input type="text" name="count1"><br>

    <select name="count3">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br><br>
    <label for="username">Чило №2<br></label><input type="text" name="count2"><br>
    <input type="submit" value="посчитать">
</form>
</body>


<?php
echo "Результат {$count}";
$count = " ";

$count1 = $_POST['count1'];
$count2 = $_POST['count2'];
$count3 = $_POST['count3'];



echo '=';

switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
    case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
    case '/':
        echo $count1 / $count2;
        break;
}
?>

