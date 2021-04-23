<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<!-- Mirrored from html-demo.proteusthemes.com/webmarket/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2017 08:18:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>مصنع ليدر | الرئيسية</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ProteusThemes">



  <!--<link href="css/bootstrap.css" rel="stylesheet">-->
  <link href="<?= base_url() ?>site/css/bootstrap-rtl.css" rel="stylesheet">
  <link href="<?= base_url() ?>site/css/responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url() ?>site/js/rs-plugin/css/settings.css" type="text/css" />

  <link rel="stylesheet" href="<?= base_url() ?>site/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css" />

  <link rel="stylesheet" href="<?= base_url() ?>site/js/prettyphoto/css/prettyPhoto.css" type="text/css" />

  <link href="<?= base_url() ?>site/css/main.css" rel="stylesheet">

  <script src="<?= base_url() ?>site/js/modernizr.custom.56918.js"></script>
<script src="<?= base_url() ?>site/js/jquery.min.js"></script>

</head>

<body class="">
  <div class="master-wrapper">

    <header id="header">
      <div class="darker-row">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="higher-line">
                مرحباً ! برجاء
                <a href="#registerModal" role="button" data-toggle="modal">إنشاء حساب</a> أو
                <a href="#loginModal" role="button" data-toggle="modal">تسجيل دخول</a>
              </div>
            </div>
            <div class="span8">
              <div class="topmost-line">
                <div class="higher-line">
                  <a href="settings.html" class="gray-link">إعدادات الحساب</a> &nbsp; | &nbsp;
                  <a href="my-account.html" class="gray-link">طلباتى</a> &nbsp; | &nbsp;
                                              <?php  $num_fav = $this->db->get_where("favourite",array("id_client" => "4"))->num_rows();
 ?>
                  <a href="my-favourite.html" class="gray-link">قائمة المفضلات <span class="num-fav">(<?= $num_fav ?>)</span></a> &nbsp; | &nbsp;
                  <a href="checkout-step-1.html" class="gray-link">الدفع</a>
                </div>
                &nbsp;
                <div class="lang-currency">
                  <div class="dropdown js-selectable-dropdown">
                    <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">إختر اللغة</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">                     
                      <li><a href="#"><i class="famfamfam-flag-eg"></i>العربية</a></li>
                      <li><a href="#"><i class="famfamfam-flag-gb"></i>الانجليزية</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <div class="span7">
            <a class="brand" href="index.html">
              <img src="site/images/logo.png" alt="Webmarket Logo" width="100" height="100" />
              <span class="pacifico">مصنع ليدر </span>
              <span class="tagline">لإنتاج المياه الصحية و العصائر</span>
            </a>
          </div>

          <div class="span5">
            <div class="top-left">
              <div class="icons">
                <a href="#"><span class="zocial-facebook"></span></a>
                <a href="#"><span class="zocial-google"></span></a>
                <a href="#"><span class="zocial-twitter"></span></a>
                <a href="#"><span class="zocial-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


