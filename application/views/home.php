<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Mahasiswa</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php base_url()?>assets2/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php base_url()?>assets2/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php base_url()?>assets2/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
   <link href="<?php base_url()?>assets2/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php base_url()?>assets2/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php base_url()?>assets2/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sistem Informasi Monitoring TA</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <!--<ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>-->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> USER <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Teko')?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Teko/profile')?>" class=""><i class="fa fa-dashboard fa-fw"></i> Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Teko/jadwal')?>" class=""><i class="fa fa-dashboard fa-fw"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href=<?php echo site_url('Teko/timeline')?>"  class=""><i class="fa fa-dashboard fa-fw"></i> Timeline</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Teko/pesan')?>"  class=""><i class="fa fa-dashboard fa-fw"></i> Pesan</a>
                    </li>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HOME</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <?php   foreach ($data as $value) {
       echo 'NRP : '.$value->NRP.'<br>';
       echo 'NIP : '.$value->NIP.'<br>';
       echo 'Nama Mahasiswa : '.$value->NAMAM.'<br>';
       echo 'Alamat Mahasiswa : '.$value->ALAMAT.'<br>';
       echo '<h3> Judul TA : '.$value->judul_TA.'</h3>';
       echo '<h3>'.'Progress TA'.'</h3><br>';
       echo '<div class="progress progress-striped">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
            <span class="sr-only">40% Complete</span>
            </div>
        </div>';
}

    echo form_open_multipart('Upload/aksi_upload');
 ?>
<!--Progress Bar Bergaris-->
        

        <h3>Upload File TA Anda</h3><br>
    <input type="file" name="berkas" />
 
    <br /><br />
 
    <input type="submit" value="upload" />

        </div>
    </div>

</div>
        

<!-- jQuery -->
<script src="<?php base_url(); ?>assets2/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php base_url(); ?>assets2/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php base_url(); ?>assets2/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php base_url(); ?>assets2/js/startmin.js"></script>

</body>
</html>
