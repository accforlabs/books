<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    move_uploaded_file($_FILES['preview']['tmp_name'], "preview/".basename($_FILES['preview']['name']));
    move_uploaded_file($_FILES['book']['tmp_name'], "books/".basename($_FILES['book']['name']));
    // echo $_FILES['preview']['tmp_name']."<br>";
    // echo $_FILES['preview']['name']."<br>";
    // echo basename("boks/".$_FILES['preview']['name']);
    $link = mysqli_connect("localhost", "root", "") or die("Невозможно подключиться к серверу");
    mysqli_select_db($link, "library1") or die("Нет такой БД");
    // $query = "INSERT INTO books SET name='".$_POST['name']."', title='".$_POST['title']."', name_preview='".$_FILES['preview']['name']."'";
    $query = "INSERT INTO books SET name='".$_POST['name']."', title='".$_POST['title']."', name_preview='".$_FILES['preview']['name']."', name_book='".$_FILES['book']['name']."'";
    $rows = mysqli_query($link, $query);
    if (mysqli_affected_rows($link) > 0)
    {
        echo "Сохранено<br>\n";
    }
    else
    {
        echo "Ошибка сохранения<br>\n";
    }
    ?>
    <a href="index.php">Вернуться к списку книг</a>
</body>
</html>