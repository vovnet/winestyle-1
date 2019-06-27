<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title><?=SITE_NAME?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	</head>
	<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="<?=SITE_ROOT?>">Главная</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=SITE_ROOT?>main/getemployees">Показать сотрудников</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=SITE_ROOT?>main/addemployees">Добавить сотрудника</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Курс доллара</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Выдать премию</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">


    <?php
    include 'application/views/'.$content_view;
    ?>
    </div>
    <div class="text-center footer-bottom">
        Footer
    </div>


	</body>
</html>