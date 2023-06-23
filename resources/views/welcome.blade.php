<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ministerio de salud</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/docxd.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Dra.Ana Lopez</h6>
                           <p><span class="online_animation"></span> En línea</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components"> 
                     <li class="active">
                        <li><a href="{{route('hospitals.index')}}"><i class="fa fa-hospital-o white_color"></i> <span>Hospital</span></a></li>

                     </li>
                     <li><a href="{{route('services.index')}}"><i class="fa fa-diamond white_color"></i> <span>Servicios</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bed white_color"></i> <span>Dato de Salas</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{route('rooms.index')}}">> <span>Salas</span></a></li>
                           <li><a href="{{route('bedrooms.index')}}">> <span>Habitaciones</span></a></li>
                           <li><a href="{{route('beds.index')}}">> <span>Camas disponibles</span></a></li>        
                        </ul>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users white_color"></i> <span>Personal y pacientes</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="{{route('doctors.index')}}">> <span>Doctores</span></a></li>
                           <li><a href="{{route('records.index')}}">> <span>Pacientes</span></a></li>
                        </ul>      
                     <li><a href="{{route('quotes.index')}}"><i class="fa fa-calendar white_color"></i> <span>Citas</span></a></li>
                     <li><a href="{{route('visits.index')}}"><i class="fa fa-list white_color"></i> <span>Visitas</span></a></li>
                     <li><a href="{{route('tools.index')}}"><i class="fa fa-briefcase white_color"></i> <span>Herramientas de trabajo</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars white_color "></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/docxd.png" alt="#" /><span class="name_user">Dra. Ana Lopez</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="{{route('login')}}">Iniciar Sesión</a>                       
                                       <a class="dropdown-item" href="#"><span>Cerrar Sesión</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Datos generales del hospital</h2>
                           </div>
                        </div>
                     </div>
                     
                        
                     
                     <div class="row column3">
                        <!-- testimonial -->
                        <div class="col-md-6">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Directores</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <div class="img-box"><img src="images/doc3.png" alt=""></div>
                                                   <p class="testimonial">Hospital San Marcos.</p>
                                                   <p class="overview"><b>Dr.Angel Moreno</b>Director</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/doc2.png" alt=""></div>
                                                   <p class="testimonial">Hospital La Villa.</p>
                                                   <p class="overview"><b>Dr.Michael Stuart</b>Director</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/doc4.png" alt=""></div>
                                                   <p class="testimonial">Hospital Lomas.</p>
                                                   <p class="overview"><b>Dra.Ana Lopez</b>Director</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6"><img src="../images/LIMA.png" style="width: 600px" alt=""></div>
                        <!-- end testimonial -->
                        <!-- progress bar -->
                       
                        <!-- end progress bar -->
                     </div>
                     <div class="row column4 graph">
                        <div class="col-md-6 margin_bottom_30">
                           <div class="dash_blog">
                              <div class="dash_blog_inner">
                                 <div class="dash_head">
                                    <h3><span><i class="fa fa-box"></i> Datos generales</span><span> 
                                 </div>
                                 <div class="list_cont">
                                    <p>Hospital Las Lomas</p>
                                 </div>
                                 <div class="task_list_main">
                                    <ul class="task_list">
                                       <li><a href="#">Horario de atención</a><br><strong>24/7</strong></li>
                                       <li><a href="#">Dirección</a><br><strong>Salida sur, 24km</strong></li>
                                       <li><a href="#">Encargado</a><br><strong>Dra.Ana Lopez</strong></li>
                                       <li><a href="#">Número de teléfono</a><br><strong>27139154</strong></li>
                                       <li><a href="#">contactanos</a><br><strong>laslomas1@correo.com</strong></li>
                                    </ul>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6"><img src="../images/hospi.png" style="width: 600px"  alt=""></div>


                       
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Cadena de Hospitales. Todos los derechos reservados.<br><br>
                           Distribuido por: <p>Desarrolladores Hpnx
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>