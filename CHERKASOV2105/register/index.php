<!-- GITHUB: https://github.com/demexamen2105/demexamen98 -->

<?php
    session_start();

    if(isset($_SESSION['login'])){
        header("Location: /profile/");
        exit;
    }
    include "../inc/header.php";
?>
<section class="page">
    <div class="container p-3">
        <h1 class="text-center mb-3 text-success-emphasis display-1">Регистрация</h1>
        <form action="/admin/controllers/registration.php" method="post" class="m-auto">
            <div class="mb-3">
                <label for="surname" class="form-label fs-5">Фамилия</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="surname" name="surname">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label fs-5">Имя</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label fs-5">Отчество</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="patronymic" name="patronymic">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label fs-5">Логин</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fs-5">Адрес электронной почты</label>
                <input type="email" class="form-control shadow-sm  p-3 rounded-pill" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fs-5">Телефон</label>
                <input type="tel" class="form-control shadow-sm  p-3 rounded-pill" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5">Пароль</label>
                <input type="password" minlength="5" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password-repeat" class="form-label fs-5">Повторите пароль</label>
                <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password-repeat" name="password-repeat">
            </div>
            <input type="submit" class="btn btn-danger mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill fw-bold" value="Зарегистрироваться">
        </form>
    </div>
</section>
<?php
    include "../inc/footer.php";
?>