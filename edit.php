<html>
<head>
    <meta charset="UTF-8">
    <title>Редактирование книги</title>
</head>
<body>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die("Невозможно подключиться к серверу");
    mysqli_select_db($link, "library1") or die("Нет такой БД");
    $rows = mysqli_query($link, "SELECT name, title, name_preview, name_book FROM books WHERE id=".$_GET['id']);
    while ($str = mysqli_fetch_array($rows)) {
        $id = $_GET['id'];
        $name = $str['name'];
        $title = $str['title'];
    }
    ?>
    <form action="save_edit.php" method="get">
        Автор <input name="name" value="<?php echo $name?>"><br>
        Название <input name="title" value="<?php echo $title?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>"><br>
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>