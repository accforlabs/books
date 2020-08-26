<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $link = mysqli_connect("localhost", "root", "") or die("Невозможно подключиться к серверу");
    mysqli_select_db($link, "library1") or die("Нет такой БД");
    $query = "UPDATE books SET name='".$_GET['name']."', title='".$_GET['title']."' WHERE id=".$_GET['id'];
    $rows = mysqli_query($link, $query);
    if (mysqli_affected_rows($link) > 0)
    {
        echo "Изменено<br>\n";
    }
    else
    {
        echo "Ошибка изменения<br>\n";
    }
?>
    <a href="index.php">Вернуться к списку книг</a>
</body>
</html>