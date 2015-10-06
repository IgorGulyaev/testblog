<form id="login_form" class="form-signin" action="testreg.php" method="post">
    <h2 class="form-signin-heading">Вход</h2>
    <p>
        <label for="login_name" class="sr-only">Ваш логин:<br></label>
        <input id="login_name" class="form-control" name="login" type="text" size="15" maxlength="15">
    </p>
    <p>
        <label for="login_pass" class="sr-only">Ваш пароль:<br></label>
        <input id="login_pass" class="form-control" name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Войти">
    </p>
</form>