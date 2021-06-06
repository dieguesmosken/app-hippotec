<?php
session_start();

	
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/ionic.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/mobileui/style.css" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Profile</title>

</head>

<body style="background-color: PaleTurquoise">

    <!-- Botões MenuShape Menu Superior  -->
    <div class="container">
        <div class="app">

            <ul class="menubar">
                <li><a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"
                            style="color: Teal;"></i></a></li>
                <li><a href="index.php"><i class="fas fa-h-square"></i></li>



            </ul>
            <!-- Menu Lateral-->
            <div class="sidenav" id="sidenav">
                <div class="sidenavshape"></div>
                <div class="profile">
                    <?php
                     if(!empty($_SESSION['id'])){
						echo "<br><img src='../img/User/img_user".$_SESSION['id'].".png' class='img_personal1' width='50%' height='50%' alt='mg_user".$_SESSION['id'].".png'>";
					}else{
						echo "<br><img src='../img/User/img_user0.png' width='50%' height='50%' alt='User_Empty'>";
					}
			   
                    ?>
                    <h3 style="color:white;">Menu</h3>
                </div>
                <!-- Itens do Menu Lateral  -->
                <div class="clearfix"></div>
                <ul>
                    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i
                                class="fas fa-times"></i></a></li>
                    <li><a href="#"><?php echo $_SESSION['nome'];?></a></li>

                    <?php if (!empty($_SESSION['nome'])) {
                        if($_SESSION['tipousr'] == 1){
                            echo "<li><a href='administrativo.php'>Painel Administrativo</a></li>";
                        }
                        else{

                        }
                    }else{
                       echo  "<li><a href='login.php'>Faça o login</a></li>";
                    }?>

                    <li><a href="Termos/politica.php"> Termos </a></li>
                    <li><a href="#"> DOENÇAS </a></li>

                    <li><a href="index.php"> INICIO </a></li>
                    <li><a onclick="href='sair.php'"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
                </ul>
            </div>
            <div class="news">

                <h2 class='h5 underline highlight' style='text-align: center;'>Hippotec 2021 &copy;</h2>

                <br>
                <div class="news">

                    <div class="personal1">



                        <img src='../img/icon_v2_preview.png' width='50%' height='50%' alt='User_Empty'>
                        



                    </div>
                    
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h1><i class="fas fa-h-square" style="color: Teal;"></i> Hippotec versão 1.2</h1>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                <h1><i class="fas fa-h-square" style="color: Teal;"></i> Mudanças na versão</h1>
                                <ol>
                                    <li> > Correção nos links de alguns botões</li>
                                    <li> > item 2</li>
                                </ol>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                   <h1></h1>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                <h1></h1>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1><a href="https://linkei.com.br/dieguesmosken" target="_blank">@dieguesmosken</a></h1>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-info"><a href="index.php.php">Home</button>
                                </div>

                            </div>

                        </div>
                    





                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script>
    function openNav() {
        document.getElementById("sidenav").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("sidenav").style.width = "0";
    }
    </script>
</body>

</html>