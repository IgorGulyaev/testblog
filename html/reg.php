<h2>Регистрация</h2>
<form action="save_user.php" method="post">
    <p>
        <label for="logname">Ваш логин:<br></label>
        <input id="logname" name="login" type="text" size="15" maxlength="15" />
    </p>
    <p>
        <label for="logpass">Ваш пароль:<br></label>
        <input id="logpass" name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
</form>