<?php
/**
 * Created by PhpStorm.
 * User: Ecomitize15
 * Date: 12/4/2015
 * Time: 3:47 PM
 */

    //session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    if (isset($_POST['project_name'])) { $proName = $_POST['project_name']; if ($proName == '') { unset($proName);} } //заносим введенный пользователем логин в переменную $proName, если он пустой, то уничтожаем переменную
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $proName = stripslashes($proName);
    $proName = htmlspecialchars($proName);
    //удаляем лишние пробелы
    $proName = trim($proName);
    // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
    // проверка на существование проекта с таким же названием
    $result = mysqli_query($connect, "SELECT id FROM projects WHERE proname='$proName'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit ("Извините, проект ".$proName." уже зарегистрирован. Введите другое название.");
    } else {
        echo ("Проекта ".$proName." еще не существует.");
    }
    $id = mysqli_insert_id();
    // если такого нет, то сохраняем данные
    $result2 = "INSERT INTO projects (proname) VALUE ('$proName')";
    /*$result2 = mysqli_query($connect, "INSERT INTO projects (proname) VALUES ($proName)");*/
    // Проверяем, есть ли ошибки

if (mysqli_query($connect, $result2)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $result2 . "<br>" . mysqli_error($connect);
}

    echo "Debug information:";
    echo $myrow['id'];
    echo $proName;
    echo "--------------------";
    echo $connect;
    echo $result2;

    if ($result2=='TRUE'): ?>
        Проект <?php echo $proName; ?> Успешно создан!
    <?php else: ?>
        Ошибка! Не удалось создать проект <?php echo $proName; ?>.
    <?php endif; ?>