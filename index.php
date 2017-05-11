<meta charset="utf-8">
<title>Калькулятор PHP</title>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<form method="post" action="index.php">
    <div class="container">
        <h1 class="text-center">Калькулятор</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <label for="username">Число №1<br></label>
                <input type="text" name="count1" style="background-color: silver"><br>
            </div>
            <div class="col-md-1 text-center">
                <select name="count3">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select><br><br></div>
            <div class="col-md-3">
                <label for="username">Чило №2<br></label>
                <input type="text" name="count2" style="background-color: silver"><br>
            </div>
            <div class="col-md-1 text-center">
                <input type="submit" value="=">
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</form>
</body>

<?php
echo '<h1 align="center">',"Результат{$count}", '</h1>';
$count = " ";

$count1 = $_POST['count1'];
$count2 = $_POST['count2'];
$count3 = $_POST['count3'];

switch ($count3) {
    case '+':
        echo '<h1 align="center">',$count1 + $count2, '</h1>';
        break;
    case '-':
        echo '<h1 align="center">',$count1 - $count2, '</h1>';
        break;
    case '*':
        echo '<h1 align="center">',$count1 * $count2, '</h1>';
        break;
    case '/':
        echo '<h1 align="center">',$count1 / $count2, '</h1>';
        break;
}
?>

