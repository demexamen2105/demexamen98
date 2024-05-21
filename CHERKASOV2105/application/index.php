<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: /auth/");
        exit;
    }
    include "../inc/header.php";
?>
<section class="page">
    <div class="container p-3">
        <h1 class="text-center mb-3 text-success-emphasis display-1">Подача заявки</h1>
        <form action="/admin/controllers/add_application.php" method="post" class="m-auto">
            <div class="mb-3">
                <label for="number" class="form-label fs-5">Отдел в котором вы работает</label>
                <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="number" name="number">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label fs-5">Описание проблемы</label>
                <textarea class="form-control shadow-sm  p-3 rounded-5" id="message" name="message" rows="5"></textarea>
            </div>
            <input type="submit" class="btn btn-danger mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill fw-bold" value="Подать заявление">
        </form>
    </div>
</section>
<?php
    include "../inc/footer.php";
?>