<html>
<head>
    <title>Управление книгами</title>
</head>

<body>
    <h1>Список книг</h1><a href="new.html">Добавить книгу</a>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Автор</td>
            <td>Название</td>
            <td>Редактировать</td>
            <td>Уничтожить</td>
			<td>Книга</td>
            <td>Превью</td>
        </tr><?php
        $link = mysqli_connect("localhost", "root", "") or die("Невозможно подключиться к серверу");
        mysqli_select_db($link, "library1") or die("Нет такой БД");
        $rows = mysqli_query($link, "SELECT id, name, title, name_preview, name_book FROM books");
        while ($str = mysqli_fetch_array($rows)) {
            echo "<tr>\n";
            echo "<td>".$str['id']."</td>\n";
            echo "<td>".$str['name']."</td>\n";
            echo "<td>".$str['title']."</td>\n";
            echo "<td><a href='edit.php?id=".$str['id']."'>Редактировать</a></td>\n";
            echo "<td><a href='delete.php?id=".$str['id']."'>Удалить</a></td>\n";
            echo "<td><a href='books/".$str['name_book']."'>Ссылка на книгу</a></td>\n";
            echo "<td><a href='preview/".$str['name_preview']."'><img src='preview/".$str['name_preview']."'></a></td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>

</body>
</html>