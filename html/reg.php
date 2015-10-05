<form  class="form-signin" action="save_user.php" method="post">
    <h2 class="form-signin-heading">Регистрация</h2>
    <p>
        <label for="logname" class="sr-only">Ваш логин:<br></label>
        <input id="logname" class="form-control" name="login" type="text" size="15" maxlength="15" />
    </p>
    <p>
        <label for="logpass" class="sr-only">Ваш пароль:<br></label>
        <input id="logpass" class="form-control" name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Зарегистрироваться">
    </p>
</form>