<!-- GITHUB: https://github.com/demexamen2105/demexamen98 -->

<?php
    $menu = "";
    if(isset($_SESSION['login'])){
        if($_SESSION['role'] == "Администратор"){
            $menu .= '<li class="nav-item">
                        <a class="nav-link" href="/admin/">Админ Панель</a>
                    </li>';
        }
        $menu .= '<li class="nav-item">
                <a class="nav-link" href="/profile/">Личный кабинет</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/controllers/logout.php">Выйти</a>
            </li>';
    }else{
        $menu = '<li class="nav-item">
                <a class="nav-link" href="/auth/">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register/">Регистрация</a>
            </li>';
    }
    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help!!!</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style/style.css">
</head>
<body>
    <main class="text-success-emphasis">
        <header class="bg-danger border-bottom border-success-emphasis">
            <div class="container-fluid d-flex align-items-center p-0">
                <nav class="navbar navbar-expand-lg w-100 p-3 navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">Help!!!</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="d-flex justify-content-center  align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?=$menu?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>