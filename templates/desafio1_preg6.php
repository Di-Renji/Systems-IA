<!DOCTYPE html>
<html lang="es">
    <head>
        <?php 
            include("../components/head.php") 
        ?>
    </head>
    <body>
        <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php 
            include("../components/navegacion_es.php") 
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php 
                include("../components/cabecera_es.php") 
            ?>
            <!-- partial -->
            <div class="main-panel">
            <div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
            

                <div class="row" style="height: 145px;">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body py-3 px-2 px-sm-3" style="background-color:#041361; border:3px solid; border-radius:15px;">
                                <div class="row align-items-center" style="justify-content:center;">
                                    <div class="col-2 col-sm-3 col-xl-1" style=" justify-content:center;">
                                        <img src="../assets/images/ico-cursos/Imagen3.png" alt="" style="width:100%;">
                                    </div>
                                    <div class="col-8 col-sm-7 col-xl-9 p-0">
                                        <h2 class="mb-1 mb-sm-0">DESAFIO: Verdadero / Falso</h2>
                                    </div>
                                    <div class="col-2 col-sm-2 col-xl-2 pl-0 text-center">
                                        <span>
                                            <a href="" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Regresar a Curso</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <h5 style="text-align:center;">Lee detenidamente la expresion y escoge una de las 2 opciones... </h5> <br>
             
                <div class="row">
                    <div class="col-sm-12 grid-margin">
                        <a href="../templates/desafio1.html">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-12 col-xl-12 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <img src="../assets/images/desafios/desa1.png" style="width:70px; margin-right:30px" alt="">
                                    <h2 class="mb-0" style="text-align:center; color:black;">Expresión 06/10 : "La sobrecarga de métodos es una característica clave en la POO"</h2>
                                </div> <br><br><br>                                
                                <div class="col-sm-12" style="text-align:center">
                                    <a href="desafio1_preg7.php">
                                        <img src="../assets/images/verdadero.png" style="width:25%; height:100%; padding:10px; " alt="">
                                    </a> 
                                    <a href="desafio1_preg7.php">
                                        <img src="../assets/images/falso.png" style="width:25%; height:100%; padding:10px; " alt="">
                                    </a>                                     
                                </div><br><br>                                                                
                                <div class="progress" style="border-radius:20px:">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60 %</div>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>  
                </div>                            
                
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php 
                include("../components/footer.php") 
            ?>
            <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php 
            include("../components/scripts.php") 
        ?>
        <!-- End custom js for this page -->
    </body>
</html>