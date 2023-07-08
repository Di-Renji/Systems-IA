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

                
                <h3 style="text-align:center;">RESULTADOS DEL DESAFIO</h3> <br>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">80 %</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium"># 8</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-up-bold icon-item"></span>
                                </div>
                            </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Respuestas Correctas</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">20 %</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium"># 2</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-down-bold icon-item"></span>
                                </div>
                            </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Respuestas Incorrectas</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">2 min 36 seg</h3>
                                <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                <span class="mdi mdi-av-timer icon-item"></span>
                                </div>
                            </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Tiempo Transcurrido</h6>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0"># 04</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-info ">
                                <span class="mdi mdi-checkbox-multiple-marked icon-item"></span>
                                </div>
                            </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Número de Intentos</h6>
                        </div>
                        </div>
                    </div>
                </div>
             
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">RESUMEN: Desafio 1 - Semana 01 - Nivel Básico</h4>
                        <div class="table-responsive">
                        <table class="table" style="color:white;">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Pregunta </th>
                                    <th> Respuesta Correcta </th>
                                    <th> Respuesta Marcada</th>
                                    <th> Evaluacion </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 01 </td>
                                    <td> La herencia múltiple es una característica común en la POO </td>
                                    <td> Falso </td>
                                    <td> Falso </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 02 </td>
                                    <td> El encapsulamiento permite ocultar los detalles internos de un objeto </td>
                                    <td> Verdadero </td>
                                    <td> Falso </td>
                                    <td> <label class="badge badge-danger"> Incorrecto </label> </td>
                                </tr>
                                <tr>
                                    <td> 03 </td>
                                    <td> El polimorfismo permite que un objeto pueda ser referenciado por múltiples tipos </td>
                                    <td> Verdadero </td>
                                    <td> Verdadero </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 04 </td>
                                    <td> Los objetos son instancias de una clase </td>
                                    <td> Verdadero </td>
                                    <td> Verdadero </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 05 </td>
                                    <td> La abstracción en la POO permite modelar conceptos del mundo real </td>
                                    <td> Verdadero </td>
                                    <td> Verdadero </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 06 </td>
                                    <td> La sobrecarga de métodos es una característica clave en la POO </td>
                                    <td> Verdadero </td>
                                    <td> Falsa </td>
                                    <td> <label class="badge badge-danger"> Incorrecto </label> </td>
                                </tr>
                                <tr>
                                    <td> 07 </td>
                                    <td> El acoplamiento es deseable en el diseño de software orientado a objetos </td>
                                    <td> Falsa </td>
                                    <td> Falsa </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 08 </td>
                                    <td> La POO se basa en el uso de estructuras de datos primitivas </td>
                                    <td> Falsa </td>
                                    <td> Falsa </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 09 </td>
                                    <td> Los métodos estáticos pueden acceder directamente a los miembros de instancia </td>
                                    <td> Falsa </td>
                                    <td> Falsa </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                                <tr>
                                    <td> 10 </td>
                                    <td> La herencia en la POO se basa en la composición de objetos </td>
                                    <td> Falsa </td>
                                    <td> Falsa </td>
                                    <td> <label class="badge badge-success"> Correcto </label> </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
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