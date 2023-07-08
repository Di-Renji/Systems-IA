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
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card" style="background-color: rgb(0, 0, 0); margin-top:-35px;">
                        <div class="card-body">                                            
                            <div class="cssFont_1" style="font-family: 'Oswald', sans-serif; font-size: 80px;
                                letter-spacing: 4px; word-spacing: 4px; color: #ffffff; font-weight: bold;
                                text-decoration: none;  font-style: normal; font-variant: normal; text-transform: none;">Systems IA
                            </div>  <br>   
                        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3" style="background-color: rgb(0, 0, 0);">
                            <div class="text-md-center text-xl-left">                          
                            <p class="text-muted mb-0" style="font-size: 20px;">
                                Tu App de Aprendizaje Autónomo para la carrera de Ingeniería de Computación y Sistemas.
                            </p> <br>
                            <p class="text-muted mb-0" style="font-size: 20px;">
                                Pon a prueba tus conocimientos y aptitudes en los diveros cursos y sumérjete en el mundo de la Tecnología.
                            </p>
                            </div>                        
                        </div>                        
                        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3" style="background-color: rgb(0, 0, 0);">
                            <div class="text-md-center text-xl-left">
                            <h3>¿Aceptas el reto?</h3>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                <div class="card" style="background-color: rgb(0, 0, 0);">
                    <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <img src="../assets/images/developer.png" alt="" style="width: 80%;">                       
                    </div>                      
                    </div>
                </div>
                </div>                
            </div>
            <div class="text-center">
                <a href="cursos.php">
                    <button type="submit" class="btn btn-success btn-block enter-btn" style="color:black;font-weight: bold; border-radius: 50px; height: 50px;">V A M O S  !!!</button>
                </a>                
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