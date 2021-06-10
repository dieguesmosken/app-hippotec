<?php 
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width">
    <title>Doença A</title>
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/mobileui/style.css" />

</head>

<body style="background-color: PaleTurquoise">

    <div class="container">
        <div class="app">

            <ul class="menubar">
                <li><a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"
                            style="color: Teal;"></i></a></li>
                <li><a href="index.php"><i class="fas fa-h-square"></i></li>
                <button type="button" class="button btn-primary btn-sm"><a href="login.php">LOGIN</button>

            </ul>
            <!-- Menu Lateral-->
            <div class="sidenav" id="sidenav">
                <div class="sidenavshape"></div>
                <div class="profile">
                    <?php
                     if(!empty($_SESSION['id'])){
                        echo "<br><img src='../img/User/img_user".$_SESSION['id'].".png'  width='50%' height='50%' alt='img_user".$_SESSION['id'].".png'>";
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

                    <li><a href="#"><?php if (!empty($_SESSION['nome'])) {
                         echo $_SESSION['nome'];
                    }else{
                       echo  "Usuario Não Identificado";
                    }?></a></li>



                    <?php if (!empty($_SESSION['nome'])) {
                        if($_SESSION['tipousr'] == 1){
                            echo "<li><a href='administrativo.php'>Painel Administrativo</a></li>";
                        }
                        else{

                        }
                    }else{
                       echo  "<li><a href='login.php'>Faça o login</a></li>";
                    }?>


                    <li><a href="profile.php"> PERFIL </a></li>
                    <li><a href="#"> DOENÇAS </a></li>
                    <li><a href="sobre.php"> SOBRE </a></li>
                    <li><a href="Termos/politica.php"> Termos </a></li>
                    <li><a href="index.php" onclick="href='sair.php'"><i class="fas fa-sign-out-alt"></i>
                            Sair</a></li>
                </ul>
            </div>
            <div class="news">
           
                    <div style="border: 1px solid" onclick="location.href='acne.html'">
                    <img class="left square avatar" width="50px" height="50px" src="img/letter/letterA.png">
                        <br><h2 class="text-strong">CNE</h2>
                        <p class="opacity-60">A Acne nada mais é que uma lesão causada pelo aumento da produção de sebo
                            vinda das glândulas sebáceas.
                            Esse excesso de oleosidade deixa os poros obstruídos e aumenta a proliferação de bactérias,
                            resultando nos comedões,
                            que chamamos mais comumente de cravos. Quando ocorre a inflamação, chamamos de espinha.</p>
                    </div>
                   
                    <div style="border: 1px solid">
                        <img class="left square avatar" width="50px" height="50px" src="img/letter/letterA.png"><br>
                        <p class="text-strong">LZHEIMER</p>
                        <p class="opacity-60">O Alzheimer um grupo de distúrbios cerebrais que causam a perda de
                            habilidades intelectuais e sociais.
                            Na doença de Alzheimer,
                            as células cerebrais degeneram e morrem, causando um declínio constante na memória e na
                            função mental.</p>
                    </div>
                </div>
                <li><a href="index.php"><i class="fas fa-sign-out-alt"></i>
                        Voltar</a></li>
            </div>
        </div>
</body>
<script src="../js/jquery.min.js"></script>
<script>
function openNav() {
    document.getElementById("sidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
}
</script>

</html>