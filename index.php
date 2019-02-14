<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конвертер валют</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="currency_converter.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container" >
    <form action="convert.php" id="form"  method="POST" >
        <div class="form-row mt-5">
            <div class="form-group col-md-2">
                <label >Меняю</label>
                <input type="number" name="amount" class="form-control" placeholder="0.00">

            </div>
            <div class="form-group col-md-2  mt-2">
                <label></label>
                <select name="from" class="form-control">
                    <option selected>USD</option>
                    <option>UAH</option>
                    <option>EUR</option>
                    <option>RUB</option>
                    <option>AUD</option>
                    <option>CAD</option>
                    <option>CNY</option>
                </select>
            </div>
            <div class="form-group col-md-2 border-bottom ">
               <label >Получаю</label> <br>
                <label id="results" class="mt-2"  ></label>
            </div>
            <div class="form-group col-md-2 mt-2">
                <label></label>
                <select name="to" class="form-control">
                    <option selected>UAH</option>
                    <option>USD</option>
                    <option>EUR</option>
                    <option>RUB</option>
                    <option>AUD</option>
                    <option>CAD</option>
                    <option>CNY</option>
                </select>
            </div>
            <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary center mt-4 ">Рассчитать</button>
            </div>
        </div>

    </form>
    <form action="history.php" id="histor" method="post">
            <div class="form-row">
                <div class="form-group mt-1">
                     <input type="number" name="his">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary  center ml-3 ">История запросов</button>
                </div>
            </div>
            <div class="form-row">
                 <label id="history"></label>
            </div>
    </form>

    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Доступные валюты для конвертации
    </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <ul class="list-group">
                <li class="list-group-item"> UAH украинская гривна </li>
                <li class="list-group-item">USD доллар США</li>
                <li class="list-group-item"> EUR евро</li>
                <li class="list-group-item">RUB российский рубль</li>
                <li class="list-group-item"> AUD австралийский доллар</li>
                <li class="list-group-item"> CAD канадский доллар</li>
                <li class="list-group-item"> CNY китайский юань</li>

            </ul>
        </div>
    </div>
</div>
</body>
</html>
