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
  </head>
  <body>
  <!-- ///////////////////// Navigation ///////////////////// -->
    <nav class="navbar navbar-inverse navbar-fixed-top custom-nav" role="navigation">
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
                    <li class="active"><a href="treatment.php">ทรีทเม้นท์</a></li>
                    <li><a href="promotion.php">โปรโมชั่น</a></li>
                    <li ><a href="about.php">เกี่ยวกับเรา</a></li>

                    <li ><a href="contact.php">ติดต่อ</a></li>
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
                        <li><a href="treatment.php">Treatments</a></li>
                        <li class="active">Human Placenta Extract for women rejuvenation</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="treatment">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel-group sidebar-panel" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Lifting
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Soft thermage</a></li>
                                        <li><a href="">Soothing eyes</a></li>
                                    </ul>
                                </div>
                             </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Advanced Courses
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Melasma clear</a></li>
                                        <li><a href="">Meso plecenta extract</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Body
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Melasma clear</a></li>
                                        <li><a href="">Meso plecenta extract</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Miracle Blood
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Melasma clear</a></li>
                                        <li><a href="">Meso plecenta extract</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h5 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Health & Anti-aging
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Melasma clear</a></li>
                                        <li><a href="">Meso plecenta extract</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 treatment-detail">
                    <h3>Human Placenta Extract for women rejuvenation</h3>
                    <p><strong>รายละเอียดของ </strong><strong>Human placenta</strong></p>
                    <p>เนื่องจาก idea ที่ว่า placenta เป็นอวัยวะชั่วคราวของมนุษย์ ที่เลี้ยงดูตัวอ่อนจากไข่ จนเป็นทารกจึงนำสารสกัดจาก placenta มาใช้เพื่อประโยชน์ต่างๆ ในการรักษา</p>
                    <p><strong>ขั้นตอนการสกัดสารจากรก</strong></p>
                    <p>เริ่มจากการซักประวัติและตรวจห้องปฏิบัติการคัดกรองโรคติดต่อต่างๆในมารดาผู้ให้รกเช่น HIV , heppatitis B C หลังได้สารสกัดจากรก นำสารสกัดนั้นมาผ่านขั้นตอน sterilized อีกครั้ง</p>
                    <p><strong>ส่วนประกอบที่ผสมอยู่ใน </strong><strong>Placenta Extract</strong></p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cytokine</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; hepatocyte growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nerve growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vsscular endothelial growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; placenta growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; epidermal growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fibroblast growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; transforming growth factor</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nucleic acid substance : uracil , adenine , guanine , thymine , lysine , alamine , asparagic acid , leucine , glutamic acid , glycine , valine , serine , tyrosine , phenylalanine , threonine , Arginine , Proline , Cystine , Methionine , histamine , mineral , sodium , potassium , magnesium , phosphorus , iron</p>
                    <p><strong>การใช้ </strong><strong>Placenta Extract ในเกาหลีญี่ปุ่น</strong></p>
                    <p>FDA ญี่ปุ่น อนุญาตให้ใช้ Placenta เพื่อช่วยการทำงานของตับในโรคตับเรื้อรัง FDA เกาหลี อนุญาตให้ใช้ในการ ช่วยการของตับในโรคตับเรื้อรังและ อาการอ่อนเพลียในวัยหมดประจำเดือน</p>
                    <p>นอกเหนือจากการใช้ตามข้อบ่งใช้ ในประเทศเกาหลีญี่ปุ่นยังมีการใช้เพื่อประโยชน์ต่างๆ ในการรักษา</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ช่วยการทำงานของตับ</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ลดอาการของวัยหมดประจำเดือน</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประจำเดือนมาไม่ปกติ ปวดประจำเดือน</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; มีบุตรยาก</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หอบหืด</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ความจำเสื่อม</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ปวดศรีษะ</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ปวดหลัง</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ไหล่ติด</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ภูมิแพ้ผิวหนัง</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผมร่วง</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ด่างขาว</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ลดการอักเสบ</p>
                    <p style="margin-left:15.75pt;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ลดการเสื่อมของจอประสาทตา</p>
                    <p>&nbsp;</p>
                    <p><strong>Queensways course Human Placenta Extract&nbsp; for women rejuvenation</strong></p>
                    <p><strong>10 session /course</strong></p>
                    <p><strong>1-4 weeks booster doses</strong></p>
                    <p><strong>6-10 weeks maintenance doses</strong></p>
                    <p><strong>1.แพทย์ซักประวัติตรวจร่างกาย</strong></p>
                    <p><strong>2. Skin test ทดสอบอาการแพ้ในการฉีดครั้งแรก 20นาที</strong></p>
                    <p><strong>3. ฉีดสารสกัดจากรกบริเวณกล้ามเนื้อสะโพก</strong></p>
                    <p><strong>4.คนไข้นอนพักสังเกตอาการ 5-10นาที</strong></p>
                    <p><strong>5.งดดื่มalcohol ใน24ชมแรกหลังฉีด</strong></p>


                </div>
            </div>
        </div>
    </section>
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66147781-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
