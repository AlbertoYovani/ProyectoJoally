<!DOCTYPE html>

<?=include'./include/header.php';?>

<div class="content-central">
    <!-- Shadow Semiboxed -->
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <!-- End Shadow Semiboxed -->

    <!-- End content info - page Fill with -->
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container">

                <hr class="tall"> <!--Para mostrar uuna rayita -->

                <div class="row">
                    <div class="col-md-12">
                        <h2>Horario de servicio</h2><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Dia de la semana
                                    </th>
                                    <th>
                                        Horarios
                                    </th>
                                    <th>
                                        Vendedor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Lunes
                                    </td>
                                    <td>
                                        9:00 a.m. - 01:00 p.m.
                                    </td>
                                    <td>
                                        Otto
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Martes
                                    </td>
                                    <td>
                                        9:00 a.m. - 01:00 p.m.
                                    </td>
                                    <td>
                                        Thornton
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Miercoles
                                    </td>
                                    <td>
                                        9:00 a.m. - 01:00 p.m.
                                    </td>
                                    <td>
                                        the Bird
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jueves
                                    </td>
                                    <td>
                                        9:00 a.m. - 01:00 p.m.
                                    </td>
                                    <td>
                                        the Bird
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Viernes
                                    </td>
                                    <td>
                                        9:00 a.m. - 01:00 p.m.
                                    </td>
                                    <td>
                                        the Bird
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sabado
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        the Bird
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
                <hr class="tall"> <!--Para mostrar uuna rayita -->
                
            <div class="container">
                <h2>Contactos</h2>
                <br>
                <div class="row">
                    <!-- Sidebars -->
                    <div class="col-md-4">
                        <aside>
                            <address>
                                <strong>Joally Arreglos Frutales</strong><br>
                              <i class="fa fa-map-marker"></i><strong>Dirección: </strong> fa795 Folsom Ave, Suite 600<br>
                              <i class="fa fa-plane"></i><strong>Ciudad: </strong>San Francisco, CA 94107<br>
                              <i class="fa fa-phone"></i> <strong title="Phone">Tel: 919 1232346</strong>
                            </address>

                            <address>
                              <strong>Joally Emails</strong><br>
                              <i class="fa fa-envelope"></i><strong>Email:</strong><a> jaolly@hotmail.com</a><br>
                            </address>
                        </aside>
                    </div>
                    <!-- End Sidebars -->

                    <div class="col-md-8">
                        <p class="lead">
                            Para poder  saber tus dudas, sugerencias o peticiones, mandanos un mensaje a nuestro correo electronico, para poder brindarte un mejor servicio.
                                    
                        </p>
                        <form id="form-contact" class="form-theme" action="php/send-mail.php">
                            <input type="text" placeholder="Nombre Completo" name="Nombre" required="">
                            <input type="email" placeholder="Email" name="Email" required="">
                            <input type="number" placeholder="Telefono" name="telefono" required="">
                            <textarea placeholder="Tu Mensaje" name="mensaje" required=""></textarea>
                            <input type="submit" name="Submit" value="Enviar Mensaje" class="btn btn-primary">
                        </form> 
                        <div id="result"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- End content info - page Fill with  --> 
</div>

<?=include'./include/footer.php';?>
        