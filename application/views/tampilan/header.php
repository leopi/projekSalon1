<?php

if (!isset($_SESSION['prov'])) {
            $_SESSION['prov'] = 0;
            $_SESSION['kab'] = 0;
            $_SESSION['jenis_layanan'] = 0;
            $_SESSION['jenis_kelamin'] = 2;
            $_SESSION['jenis_layanan1'] = 0;
        }

$this->load->model('home_model');
$provinsi = $this->home_model->namaProvinsi();
$kab = $this->home_model->namaKab($_SESSION['prov']);
$jenislayanan = $this->home_model->jenisLayanan();
$jeniskelamin = $this->home_model->jenisKelamin();
$jenislayanan1 = $this->home_model->jenisLayanan1();
?>


<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font-awesome.min.css" />
        <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css" />
        <script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css" />
        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>engine1/style.css" />
        <script type="text/javascript" src="<?php echo base_url() ?>engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>asset/dist/css/materialize.min.css"/>
        <script src="<?php echo base_url() ?>asset/dist/js/materialize.js"></script>

    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".provinsi").change(function () {
                    var idProv = $(".provinsi").val();
                    $(".kab").load("<?php echo base_url() ?>index.php/home/ajaxKab?idProv=" + idProv);
                });
            });</script> 
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" style="background-color: #FFF8E1" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        Menu
                    </button>
                    <a class="navbar-brand" href="#" style="color: #ff5722; font-size:x-large ;">Ruang Salon</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="" style=""><a style="color: #fff; font-size: large" href="#">Blog</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-top: 10px;">
                                    Daftar
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="background-color: #FFF8E1" aria-labelledby="dropdownMenu1">
                                    <li><a href="<?php echo base_url(); ?>index.php/sign_up/user">User</a></li>
                                    <li><a href="#">Salon</a></li>
                                    
                                </ul>
                            </div> 
                        </li>
                        
<?php if (!isset($_SESSION['nama'])){?>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-top: 10px;">
                                    Masuk
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" style="padding: 15px; width: 250px; background-color: #FFF8E1" aria-labelledby="dropdownMenu1">
                                    
                                    <form class="form" method="POST" action="<?php echo base_url() ?>index.php/login/validasi">
                                        <input name="email" placeholder="Email" type="email" class="form-control mb10 email" width="">
                                        <input name="pass" placeholder="Password" type="password" class="form-control mb10 pass">
                                        <div class="infoLogin"></div>
                                        <select name="status" class="status" placeholder="Sebagai" type="text" class="form-control mb10" width="">
                                            <option value="user">User</option>
                                            <option value="salon">Salon</option>
                                        </select>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="tetapLogin" value="tetapLogin"> Ingat Saya</label>
                                        </div>
                                        <button type="input" name="login" value="Login" class="btn btn-default right tombolKirim" >Login</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </li>
                        
<?php } else { ?>
                      <li>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-top: 10px;">
                                    <?php echo $_SESSION['nama'] ?>
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" style="padding: 15px; width: 250px; background-color: #FFF8E1" aria-labelledby="dropdownMenu1">
                                    <a class="btn btn-default btn-hover" href="<?php echo base_url() ?>index.php/login/logout">logout</a>
                                </div>
                            </div>
                        </li>  
<?php } ?>                  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <nav id="sub-navbar" class="subheader">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="color: #fff; font-size: x-large">Search</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-left" role="search" action="<?php echo base_url() ?>index.php/home/salonlist" method="post">
                        <div class="form-group">
                            <table class="search">
                                <tr>
                                    <td>
                                        <select class="form-control" name="jenis_layanan">
                                            <option value=0 selected="">--LIHAT SEMUA--</option>
                                            <?php foreach ($jenislayanan as $x => $y) { ?>
                                            <?php if ($_SESSION['jenislayanan'] == $jenislayanan ) { ?>
                                                <option value="<?php echo $x ?>" selected><?php echo $y ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $x ?>"><?php echo $y ?></option>
                                            <?php } } ?>    
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control provinsi" style="max-width: 200px" name="provinsi">
                                            <option value=0 selected="">--SEMUA PROVINSI--</option>
                                            <?php foreach ($provinsi as $x => $y) { ?>
                                                <?php if ($_SESSION['prov'] == $x) { ?>
                                                    <option value="<?php echo $x ?>" selected><?php echo $y ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $x ?>"><?php echo $y ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control kab" style="max-width: 200px" name='kab'>
                                            <option value=0 selected="">--SEMUA KAB--</option>
                                            <?php foreach ($kab as $x => $y) { ?>
                                                <?php if ($_SESSION['kab'] == $x) { ?>
                                                    <option value="<?php echo $x ?>" selected><?php echo $y ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $x ?>"><?php echo $y ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" style="max-width: 150px;" name="jenis_kelamin">
                                            <?php foreach ($jeniskelamin as $x => $y) { ?>
                                                <?php if ($_SESSION['jenis_kelamin'] == $x) { ?>
                                                    <option value="<?php echo $x ?>" selected><?php echo $y ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $x ?>"><?php echo $y ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" style="max-width: 250px;" name="jenis_layanan1">
                                            <?php foreach ($jenislayanan1 as $x => $y) { ?>
                                                <?php if ($_SESSION['jenis_layanan1'] == $x) { ?>
                                                    <option value="<?php echo $x ?>" selected><?php echo $y ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $x ?>"><?php echo $y ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="btn btn-hover" type="submit" value="lihat"/>
                                    </td>
                                </tr>
                            </table>
                            <!--<button type="submit" class="btn btn-default" style="margin-left: 20px">Submit</button>-->
                    </form>

                </div>
            </div>
        </div><!-- /.navbar-collapse -->
    </nav>

