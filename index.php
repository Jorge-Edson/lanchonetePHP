<!-- PHP -->
<?php

if(isset($_POST))
{
    //Declaração de variáveis para quantidade de lanches.
    $x_salada = intval($_POST['xsalada']);
    $x_egg = intval($_POST['xegg']);
    $x_bacon = intval($_POST['xbacon']);
    $hot_dog = intval($_POST['hotdog']);
    $pastel = intval($_POST['pastel']);

    //Declaração de variáveis para quantidade de bebidas.
    $refri_lata = intval($_POST['refri_lata']);
    $refri_pet = intval($_POST['refri_pet']);
    $suco_lata = intval($_POST['suco_lata']);
    $suco_natural = intval($_POST['suco_natural']);
    $agua = intval($_POST['agua']);

    //Declaração de variáveis para quantidade de sobremesas.
    $brigadeiro = intval($_POST['brigadeiro']);
    $bolo = intval($_POST['bolo']);
    $sorvete = intval($_POST['sorvete']);

}

?>

<!-- HTML -->
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

    <title>L1EX2 - Pedido</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron" id="MainTitle">
                <h2 id="Welcome">Faça seu pedido!</h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="jumbotron" id="Form">
        <div class="container">
            <form class="form-horizontal" action="page2.php" method="POST">
                <!-- Lanches -->
                <legend>Lanches</legend>

                <div class="form-group">
                    <label class="control-label col-sm-4">X-Salada:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="xsalada" name="xsalada" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">X-Egg:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="xegg" name="xegg" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">X-Bacon:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="xbacon" name="xbacon" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Hot-dog:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="hotdog" name="hotdog" placeholder="Quantidade">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-4">Pastel:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="pastel" name="pastel" placeholder="Quantidade">
                    </div>
                </div>

                <!-- Bebidas -->
                <legend>Bebidas</legend>

                <div class="form-group">
                    <label class="control-label col-sm-4">Refrigerante em Lata (350ml):</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="refri_sabor" name="refri_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Coca</option>
                            <option value="3">Fanta</option>
                            <option value="4">Guaraná</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="refri_lata" name="refri_lata" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Refrigerante Pet (2l):</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="pet_sabor" name="pet_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Coca</option>
                            <option value="3">Fanta</option>
                            <option value="4">Guaraná</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="refri_pet" name="refri_pet" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Suco em Lata (265ml):</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="suco_sabor" name="suco_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Uva</option>
                            <option value="3">Pêssego</option>
                            <option value="4">Manga</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="suco_lata" name="suco_lata" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Suco Natural (350ml):</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="natural_sabor" name="natural_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Laranja</option>
                            <option value="3">Limão</option>
                            <option value="4">Abacaxi</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="suco_natural" name="suco_natural" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Garrafa de Água (500ml):</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="agua" name="agua" placeholder="Quantidade">
                    </div>
                </div>

                <!-- Sobremesas -->
                <legend>Sobremesas</legend>

                <div class="form-group">
                    <label class="control-label col-sm-4">Brigadeiro:</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="brigadeiro" name="brigadeiro" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Bolo de Pote:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="bolo_sabor" name="bolo_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Doce de Leite</option>
                            <option value="3">Floresta Negra</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="bolo" name="bolo" placeholder="Quantidade">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Sorvete Picolé:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="sorvete_sabor" name="sorvete_sabor">
                            <option value="1" disabled selected>Sabor...</option>
                            <option value="2">Coco</option>
                            <option value="3">Chocolate</option>
                            <option value="4">Morango</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="sorvete" name="sorvete" placeholder="Quantidade">
                    </div>
                </div>

                <!--Submit -->
                <div class="col-sm-4">
                    <i class="fas fa-hamburger" id="hamburger"></i>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-block" id="Submit">
                        Finalizar pedido!
                    </button>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-hamburger" id="hamburger-right"></i>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<!-- CSS -->
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
    float: left;
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

