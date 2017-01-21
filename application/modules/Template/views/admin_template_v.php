
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon_1.ico">

        <title>Legi.com</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url(); ?>assets/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url(); ?>assets/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>/assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url(); ?>dashboard/" class="logo"><i class="md md-terrain"></i> <span>Legi.com </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Tuliskan sesuatu disini...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>assets/images/avatar-0.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>profil/lihat_profil"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="<?php echo base_url(); ?>login/loguot"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url(); ?>/assets/images/users/avatar-0.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Abduel<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>profil/lihat_profil"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="<?php echo base_url(); ?>login/loguot"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>dashboard/" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>siswa/" class="waves-effect "><i class="md md-list"></i><span> Data </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>siswa">Siswa</a></li>
                                    <li><a href="<?php echo base_url(); ?>">Akun</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>profil/" class="waves-effect"><i class="md md-account-circle"></i><span> Profil </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>profil/lihat_profil">Lihat Profil</a></li>
                                    <li><a href="<?php echo base_url(); ?>profil/edit_profil">Edit Profil</a></li>
                                    <li><a href="<?php echo base_url(); ?>profil/reset">Reset Password</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>iklan/" class="waves-effect"><i class="md md-assignment"></i><span> Iklan Saya </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>iklan/pasang_iklan"> Pasang Iklan </a></li>
                                    <li><a href="<?php echo base_url(); ?>iklan/lihat_iklan"> Lihat Iklan Saya </a></li>
                                    <li><a href="<?php echo base_url(); ?>iklan/kelola_iklan"> Kelola Iklan Saya </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>formulir/" class="waves-effect "><i class="md md-pages"></i><span> Form </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>formulir/daftar">Daftar</a></li>
                                    <li><a href="<?php echo base_url(); ?>">Masuk</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>info/" class="waves-effect"><i class="md md-event"></i><span> Info Pasar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url(); ?>bantuan/" class="waves-effect"><i class="md  md-help"></i><span> Bantuan </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>bantuan/cara_pasang_iklan"> Cara Pasang Iklan </a></li>
                                    <li><a href="<?php echo base_url(); ?>bantuan/cara_kelola_iklan"> Cara Kelola Ikan </a></li>
                                    <li><a href="<?php echo base_url(); ?>bantuan/tips_trik"> Tips & Trik </a></li>
                                </ul>
                            </li> 

                            <li>
                                <a href="<?php echo base_url(); ?>login/loguot" class="waves-effect"><i class="md ion-log-out"></i><span> Logout </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <section class="content-header">
                        <h1>
                        <?php echo $page_header; ?>
                        <small><?php echo $description; ?></small>
                        </h1>

                        <!-- Content view -->
                        <?php $this->load->view($content_view); ?>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>/assets/images/users/avatar-0.jpg" alt="">
                                </div>
                                <span class="name">Admin</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>/assets/images/users/avatar-11.jpg" alt="">
                                </div>
                                <span class="name">Abduel</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>/assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Andi</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>/assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>/assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>/assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery.app.js"></script>
  
  </body>
</html>