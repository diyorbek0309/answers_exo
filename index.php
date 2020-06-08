<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>World Bank</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <style>
    <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="logo m-3">
                    <img src="earth-grid-symbol.png">
                    <h2 class="ml-3">WORLD BANK Publications</h2>
                </div>
            </div>
            <div class="col-8">
                <h2 class="mx-3" align="right" style="color:#f73b57;">8-800-100-5005</h2>
                <h2 class="mx-3" align="right" style="color:#f73b57;">+7(3452)555-000</h2>
            </div>
        </div>
        <div class="row">
        	<div class="col">
        		<nav class="navbar-expand-md navbar-dark bg-dark">
        			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="menu">
        				<ul class="navbar-nav">
            				<li class="nav-item"><a href="#" class="nav-link">Кредитные карты</a></li>
            				<li class="nav-item"><a href="#" class="nav-link active">Вклады</a></li>
            				<li class="nav-item"><a href="#" class="nav-link">Дебетовая карта</a></li>
            				<li class="nav-item"><a href="#" class="nav-link">Страхование</a></li>
            				<li class="nav-item"><a href="#" class="nav-link">Друзья</a></li>
            				<li class="nav-item"><a href="#" class="nav-link">Интернет-банк</a></li>
                        </ul>
        			</div>
        		</nav>
        	</div>
        </div> 	
    </div>



    <main id="main">
        <p class="m-3"><a href="#">Главная</a>-<a href="#">Вклады</a>-<a href="#">Калькулятор</a></p>

        <div class="container-fluid">
            <div class="row ml-3">
                <div class="col-lg-8 col-md-12" style="background-color: #ddd">
                    <form method="POST" class="form validation" id="form" validate>
                        <div class="row">
                            <div class="col">
                                <h2 class="my-4">Калькулятор</h2>
                                <div class="row mb-3" align="right">
                                    <div class="col-7">
                                        <p>Дата оформления вклада:</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date" name="date" default="дд/мм/гггг">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-7">
                                        <p>Сумма вклада:</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <input class="form-control" name="money1" id="example-value" type="number" max="3000000" min="1000" value="1000" step="1000" source="[name=example1]" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-7">
                                        <p>Срок вклада:</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <select class="form-control" id="sel" name="year">
                                                <option>1</option>
                                                <option>3</option>
                                                <option>5</option>
                                                <option>7</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-7">
                                        <p>Пополнение вклада:</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" name="radio" value="Net" checked>
                                            <label for="radio" class="mr-5">Нет</label>
                                            <input type="radio" class="form-check-input" name="radio" value="Da">
                                            <label for="radio">Да</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-7">
                                        <p>Сумма пополнения вклада:</p>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <input class="form-control" id="example-value" name="money2" type="number" max="3000000" min="1000" value="1000" step="1000" source="[name=example2]" required>
                                        </div>
                                    </div>
                                </div>
                                <button id="submit" class="btn btn-success ml-3 mb-4">Рассчитать</button>
                                <h5 class="d-inline ml-5 align-items-center">Результат: <span id="result"></span></h5>

                                <?php include 'calc.php'; ?>

                            </div>
                            <div class="col mr-4">
                                <div class="wrap">
                                    <input name="example1" type="range" min="1000" max="3000000" value="10000" class="slider" id="range1">
                                    <span>1000 рубл</span>
                                    <span>3000000</span>
                                </div>
                                <div class="wrap">
                                    <input name="example2" type="range" min="1000" max="3000000" value="10000" class="slider" id="range2">
                                    <span>1000 рубл</span>
                                    <span>3000000</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>





    <footer class=" navbar fixed-bottom bg-dark" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="nav ml-5">
                      <li class="nav-item"><a href="#" class="nav-link">Кредитные карты</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Вклады</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Дебетовая карта</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Страхование</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Друзья</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Интернет-банк</a></li>
                    </ul>
                </div>             
            </div>
        </div>
    </footer>




</body>
    <script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/src/popover.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
    <?php include 'script.js' ?>
    </script>
</html>