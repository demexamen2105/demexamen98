<?php
    session_start();
    include "inc/header.php";
?>
<body class="bg-danger">

<div class="container p-3 text-center">
    <h1 class="mt-3 mb-4 text-white display-1">Help!!!</h1>
    <p class="p-1 pt-4 display-6 text-light">Сервис для автоматизации процессов техподдержки «Help!!!» представляет собой информационную систему для фиксации технических проблем в компании.</p>
</div>
<div class="container p-2 mb-5 text-center">
    <a href="/auth/" class="btn btn-success text-success-emphasis bg-light w-75 p-3 fs-2 rounded-pill fw-bold shadow-lg">Подать заявление в техподдержку</a>
</div>
<?php
    include "inc/footer.php";
?>

<!-- GITHUB: https://github.com/demexamen2105/demexamen98 -->