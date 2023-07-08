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
                                        <h2 class="mb-1 mb-sm-0">CURSO: PROGRAMACION ORIENTADA A OBJETOS</h2>
                                    </div>
                                    <div class="col-2 col-sm-2 col-xl-2 pl-0 text-center">
                                        <span>
                                            <a href="cursoseleccionado.php" class="btn btn-outline-light btn-rounded get-started-btn">Regresar a Curso</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <h3 style="text-align:center;">TIPOS DE DESAFIO</h3> <br>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIVEL :</label>
                            <div class="col-sm-9">
                            <select name="semana" class="form-control" id="exampleSelectGender" style="color:white; background-color:#red; border-radius:25px ;border:1px solid white;">
                                <option value="01"> Básico </option>
                                <option value="02"> Intermedio </option>
                                <option value="03"> Avanzado </option>
                                <option value="04"> Extremo </option>                                                        
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">SEMANA :</label>
                            <div class="col-sm-9">
                            <select name="semana" class="form-control" id="exampleSelectGender" style="color:white; background-color:#red; border-radius:25px ;border:1px solid white;">
                                <option value="01"> Semana 01 </option>
                                <option value="02"> Semana 02 </option>
                                <option value="03"> Semana 03 </option>
                                <option value="04"> Semana 04 </option>
                                <option value="05"> Semana 05 </option>
                                <option value="06"> Semana 06 </option>
                                <option value="07"> Semana 07 </option>
                                <option value="08"> Semana 08 </option>
                                <option value="09"> Semana 09 </option>
                                <option value="10"> Semana 10 </option>
                                <option value="11"> Semana 11 </option>
                                <option value="12"> Semana 12 </option>
                                <option value="13"> Semana 13 </option>
                                <option value="14"> Semana 14 </option>
                                <option value="15"> Semana 15 </option>
                                <option value="16"> Semana 16 </option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <a href="desafio1_preg1.php">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa1.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">Verdadero / Falso</h4>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <a href="">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa2.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">Completa la Palabra Correcta</h4>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <a href="">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa3.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">Adivinanza</h4>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <a href="">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa4.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">FlashCard</h4>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <a href="">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa5.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">Estudio de Caso</h4>
                                </div>
                            </div>                      
                            </div>
                        </div>
                        </div></a>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <a href="">
                        <div class="card" style="background-color: rgb(29, 215, 0); color:black; border-radius:20px; border: solid 5px; border-color:rgb(4, 9, 255);">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-6 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <img src="../assets/images/desafios/desa6.png" style="width:70px; margin-right:30px" alt="">
                                <h4 class="mb-0">Pensamiento Crítico</h4>
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