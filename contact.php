<!DOCTYPE html>
<?php require_once("admin/bootstrap.php");?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Queensway</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/2ef40bac-2033-477b-9201-686168684c39.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="https://maps.googleapis.com/maps/api/js"></script>
  </head>
  <body>
  <!-- ///////////////////// Navigation ///////////////////// -->
    <nav class="navbar navbar-inverse  custom-nav navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img/qwlogo-sm.png" alt="Queensway Logo" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">หน้าหลัก</a></li>
                    <li ><a href="treatment.php">ทรีทเม้นท์</a></li>
                    <li><a href="promotion.php">โปรโมชั่น</a></li>
                    <li ><a href="about.php">เกี่ยวกับเรา</a></li>

                    <li  class="active"><a href="contact.php">ติดต่อ</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>Contact</h3>
                </div>
                <div class="col-md-4">
                    <form>
                        <div class="form-group">
                            <div class="col-md-10">
                                <select class="form-control">
                                    <option>Central Rama 9</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  <div class="map" id="map-canvas">

  </div>
  <section id="call-to-action" class="grey-section">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-sm-6 grey-box text-center" style="height: 215px;">
              <div class="row">
              <div class="inner-box">
                  <h3>ติดต่อ/ สอบถาม ทางอีเมล ได้ที่</h3><br>

                      <div class="form-group">
                          <div class="col-md-push-1 col-md-10">
                                  <input type="email" name="form[email]" class="form-control center-block text-center" id="email" placeholder="" value="queenway99@gmail.com" required readonly="true">
                          </div>
                      </div>
                      <!-- <div class="row"><button type="submit" class="btn brown-btn">Submit</button></div> -->

              </div>
              </div>
          </div>
          <div class="col-md-4 col-sm-6">
              <div class="pink-box text-center" style="height: 215px;">
                  <img src="assets/img/phone.png">
                  <p class="contact-action">ติดต่อ/ สอบถาม<br/>นัดหมายแพทย์</p>
                      <strong><span class="phone-number">RM9 : 02-004-8212</span></strong><br/>
                      <strong><span class="phone-number">PDP : 02-746-0755</span></strong><br/>
                  <!-- <span>email: info@queensway.co.th</span> -->
              </div>
          </div>
      </div>
  </div>
  </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="pull-left">COPYRIGHT © 2015 , QUEENSWAY CO.,LTD ALL RIGHTS RESERVED.</div>
                <div class="pull-right"><a href="">ติดต่อเรา</a>  |  <a href="">สมัครงาน</a>  |  <a href="">แผนผังเว็บไซต์</a> </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="assets/js/script.js"></script>
  <script>
      function initialize() {
          var mapOptions = {
              zoom: 15,
              center: new google.maps.LatLng(13.7584181,100.5662411),
              draggable: false,
              streetViewControl: false,
              mapTypeControl: false,
              styles: [{"featureType": "all", "elementType": "all", "stylers": [{"saturation": -100}, {"gamma": 0.7}]}]
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);

          var myLatLng = new google.maps.LatLng(13.7584181,100.5662411);
          var beachMarker = new google.maps.Marker({
              position: myLatLng,
              map: map,
          });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66147781-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
