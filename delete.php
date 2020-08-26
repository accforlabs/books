<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $link = mysqli_connect("localhost", "root", "") or die("Невозможно подключиться к серверу");
    mysqli_select_db($link, "library1") or die("Нет такой БД");
    $query = "DELETE FROM books WHERE id=".$_GET['id'];
    $rows = mysqli_query($link, $query);
    header('Location: index.php');
?>
</body>
</html>