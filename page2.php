<?php

//Definindo data e hora do sistema.
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y H:i');

//Vetores usados para o armazenamento de dados dos lanches.
$lanches = array(
    "xs" => intval($_POST['xsalada']),
    "xe" => intval($_POST['xegg']),
    "xb" => intval($_POST['xbacon']),
    "hd" => intval($_POST['hotdog']), 
    "pt" => intval($_POST['pastel'])
);

$vl_lanches = array(10.00, 8.00, 12.00, 5.00, 7.00);

$total_lanches = array(
    "xs" => $lanches["xs"] * $vl_lanches[0],
    "xe" => $lanches["xe"] * $vl_lanches[1],
    "xb" => $lanches["xb"] * $vl_lanches[2],
    "hd" => $lanches["hd"] * $vl_lanches[3],
    "pt" => $lanches["pt"] * $vl_lanches[4],
);

//Vetores usados para o armazenamento de dados das bebidas.
$bebidas = array(
    "rl" => intval($_POST['refri_lata']),
    "rp" => intval($_POST['refri_pet']),
    "sl" => intval($_POST['suco_lata']),
    "sn" => intval($_POST['suco_natural']),
    "ag" => intval($_POST['agua'])
);

$sabor_bebidas = array(
    "rl" => $_POST['refri_sabor'],
    "rp" => $_POST['pet_sabor'],
    "sl" => $_POST['suco_sabor'],
    "sn" => $_POST['natural_sabor'],
    "ag" => "Água (500ml)"
);

$vl_bebidas = array(5.00, 12.00, 4.50, 6.00, 3.00);

$total_bebidas = array(
    "rl" => $bebidas["rl"] * $vl_bebidas[0],
    "rp" => $bebidas["rp"] * $vl_bebidas[1],
    "sl" => $bebidas["sl"] * $vl_bebidas[2],
    "sn" => $bebidas["sn"] * $vl_bebidas[3],
    "ag" => $bebidas["ag"] * $vl_bebidas[4]
);

//Vetores usado para armazenamento de dados das sobremesas.
$sobremesas = array(
    "bg" => intval($_POST['brigadeiro']),
    "bl" => intval($_POST['bolo']),
    "sv" => intval($_POST['sorvete'])
);

$vl_sobremesas = array(2.50, 6.00, 4.00);

$sabor_sobremesas = array(
    "bg" => "Brigadeiro:",
    "bl" => $_POST['bolo_sabor'],
    "sv" => $_POST['sorvete_sabor']
);

$total_sobremesas = array(
    "bg" => $sobremesas["bg"] * $vl_sobremesas[0],
    "bl" => $sobremesas["bg"] * $vl_sobremesas[1],
    "sv" => $sobremesas["sv"] * $vl_sobremesas[2]
);

//Conversão de valores dos inputs para os sabores correspondentes.
switch ($sabor_bebidas["rl"])
{
    case 1: break;
    case 2: $sabor_bebidas["rl"] = "Coca-Cola (350ml):"; break;
    case 3: $sabor_bebidas["rl"] = "Fanta (350ml):"; break;
    case 4: $sabor_bebidas["rl"] = "Guaraná (350ml):"; break;
}

switch ($sabor_bebidas["rp"])
{
    case 1: break;
    case 2: $sabor_bebidas["rp"] = "Coca-Cola (2l):"; break;
    case 3: $sabor_bebidas["rp"] = "Fanta (2l):"; break;
    case 4: $sabor_bebidas["rp"] = "Guaraná (2l):"; break;
}

switch ($sabor_bebidas["sl"])
{
    case 1: break;
    case 2: $sabor_bebidas["sl"] = "Suco de Uva (265ml):"; break;
    case 3: $sabor_bebidas["sl"] = "Suco de Pêssego (265ml):"; break;
    case 4: $sabor_bebidas["sl"] = "Suco de Manga (265ml):"; break;
}

switch ($sabor_bebidas["sn"])
{
    case 1: break;
    case 2: $sabor_bebidas["sn"] = "Suco Natural de Uva (350ml):"; break;
    case 3: $sabor_bebidas["sn"] = "Suco Natural de Pêssego (350ml):"; break;
    case 4: $sabor_bebidas["sn"] = "Suco Natural de Manga (350ml):"; break;
}

switch ($sabor_sobremesas["bl"])
{
    case 1: break;
    case 2: $sabor_sobremesas["bl"] = "Bolo de Doce de Leite:"; break;
    case 3: $sabor_sobremesas["bl"] = "Bolo Floresta Negra:"; break;
}

switch ($sabor_sobremesas["sv"])
{
    case 1: break;
    case 2: $sabor_sobremesas["sv"] = "Sorvete de Coco:"; break;
    case 3: $sabor_sobremesas["sv"] = "Sorvete de Chocolate:"; break;
    case 4: $sabor_sobremesas["sv"] = "Sorvete de Morango:"; break;
}

$total = array_sum($total_lanches) + array_sum($total_bebidas) + array_sum($total_sobremesas);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts Awesome -->
    <script src="https://kit.fontawesome.com/d03cf73df0.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>L1EX2 - Nota</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron" id="MainTitle">
                <h2>Nota do Pedido</h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="jumbotron" id="Form">
        <div class="container">
            <form class="form-horizontal" action="page2.php" method="POST">
                <!-- Lanches -->

                <div class="form-group">
                    <legend class="col-sm-3">Produtos</legend>
                    <legend class="col-sm-3">Valor (R$)</legend>
                    <legend class="col-sm-3">Quantidade</legend>
                    <legend class="col-sm-3">Total (R$)</legend>
                </div>

                <?php
                if($lanches["xs"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">X-Salada:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_lanches[0], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$lanches["xs"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_lanches["xs"], 2).'>
                            </div>
                        </div>';
                }
                
                if($lanches["xe"] > 0)
                {
                    echo'<div class="form-group">
                            <label class="control-label col-sm-3">X-Egg:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_lanches[1], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$lanches["xe"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_lanches["xe"], 2).'>
                            </div>
                        </div>';
                }
                
                if($lanches["xb"] > 0)
                {
                    echo'<div class="form-group">
                            <label class="control-label col-sm-3">X-Bacon:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_lanches[2], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$lanches["xb"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_lanches["xb"], 2).'>
                            </div>
                        </div>';
                }

                if($lanches["hd"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">Hot-dog:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_lanches[3], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$lanches["hd"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_lanches["hd"], 2).'>
                            </div>
                        </div>';
                }

                if($lanches["pt"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">Pastel:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_lanches[4], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$lanches["pt"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_lanches["pt"], 2).'>
                            </div>
                        </div>';
                }   

                if($bebidas["rl"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_bebidas["rl"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_bebidas[0], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$bebidas["rl"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_bebidas["rl"], 2).'>
                            </div>
                        </div>';
                }

                if($bebidas["rp"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_bebidas["rp"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_bebidas[1], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$bebidas["rp"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_bebidas["rp"], 2).'>
                            </div>
                        </div>';
                }

                if($bebidas["sl"])
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_bebidas["sl"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_bebidas[2], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$bebidas["sl"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_bebidas["sl"], 2).'>
                            </div>
                        </div>';
                }

                if($bebidas["sn"])
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_bebidas["sn"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_bebidas[3], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$bebidas["sn"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_bebidas["sn"], 2).'>
                            </div>
                        </div>';
                }

                if($bebidas["ag"])
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_bebidas["ag"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_bebidas[4], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$bebidas["ag"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_bebidas["ag"], 2).'>
                            </div>
                        </div>';
                }

                if($sobremesas["bg"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_sobremesas["bg"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_sobremesas[0], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$sobremesas["bg"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_sobremesas["bg"], 2).'>
                            </div>
                        </div>';
                }

                if($sobremesas["bl"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_sobremesas["bl"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_sobremesas[1], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$sobremesas["bl"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_sobremesas["bl"], 2).'>
                            </div>
                        </div>';
                }

                if($sobremesas["sv"] > 0)
                {
                    echo '<div class="form-group">
                            <label class="control-label col-sm-3">'.$sabor_sobremesas["sv"].'</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($vl_sobremesas[2], 2).'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.$sobremesas["sv"].'>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" readonly value='.number_format($total_sobremesas["sv"], 2).'>
                            </div>
                        </div>';
                }

                echo '<legend>Total da Compra (R$)</legend>
                    <div class="col-sm-4">
                        <i class="fas fa-hamburger" id="hamburger"></i>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" readonly value='.number_format($total ,2).'>
                    </div>
                    <div class="col-sm-4">
                        <i class="fas fa-hamburger" id="hamburger-right"></i>
                    </div>';

                echo '<div class="row">
                        <div class="col-sm-12" style="text-align: right;">
                            <hr>
                            <small>Compra realizada em '.$data.'</small>
                        </div>
                    </div>';
                ?>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<style>

body
{
    background-color: lightyellow;
    font-family: Times New Roman;
}

#MainTitle
{
    margin-left: 30vh;
    margin-right: 30vh;
    text-align: center;
    border: 25px solid;
    border-image-slice: 1;
    border-image-source: conic-gradient(
        hsl(100 100% 60%),
        hsl(200 100% 60%),
        hsl(100 100% 60%)
    );
    color: white;
    background: linear-gradient(to bottom right,
        hsl(100 100% 80%),
        hsl(200 100% 80%),
        hsl(100 100% 80%)
    );
}


#Form
{
    margin-left: 30vh;
    margin-right: 30vh;
    border: 25px solid;
    border-image-slice: 1;
    border-image-source: conic-gradient(
        hsl(100 100% 60%),
        hsl(200 100% 60%),
        hsl(100 100% 60%)
    );
    background: linear-gradient(to bottom right,
        hsl(100 100% 80%),
        hsl(200 100% 80%),
        hsl(100 100% 80%)
    );
}

legend
{
    color: white;
    text-align: center;
    margin-top: 10px;
}

.fas
{
	padding: 5px;
	text-align: center;
	text-decoration: none;
	margin: 5px, 2px;
	border-radius: 30%;
}

#hamburger
{
	font-size: 30px;
    background: aquamarine;
    position: relative;
    animation-name: hamburger;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

#hamburger-right
{
    float: right;
    font-size: 30px;
    background: aquamarine;
    position: relative;
    animation-name: hamburger-right;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

#Submit
{
    color: white;
    background: aquamarine;
    animation-name: Submit;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

@keyframes Submit
{
    0% {background-color: hsl(150, 100%, 50%);}
    25% {background-color: hsl(200, 100%, 50%);}
    50% {background-color: hsl(250, 100%, 50%);}
    75% {background-color: hsl(200, 100%, 50%);}
    100% {background-color: hsl(150, 100%, 50%);}
}

@keyframes hamburger 
{
    0% {background-color: hsl(150, 100%, 50%); left: 0px; transform: rotate(-20deg);}
    25% {background-color: hsl(200, 100%, 50%); left: 90px; transform: rotate(0deg);}
    50% {background-color: hsl(250, 100%, 50%); left: 180px; transform: rotate(20deg);}
    75% {background-color: hsl(200, 100%, 50%); left: 90px; transform: rotate(0deg);}
    100% {background-color: hsl(150, 100%, 50%); left: 0px; transform: rotate(-20deg);}
}

@keyframes hamburger-right
{
    0% {background-color: hsl(150, 100%, 50%); right: 0px; transform: rotate(20deg);}
    25% {background-color: hsl(200, 100%, 50%); right: 90px; transform: rotate(0deg);}
    50% {background-color: hsl(250, 100%, 50%); right: 180px; transform: rotate(-20deg);}
    75% {background-color: hsl(200, 100%, 50%); right: 90px; transform: rotate(0deg);}
    100% {background-color: hsl(150, 100%, 50%); right: 0px; transform: rotate(20deg);}
}
</style>