<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>CollaBty - Collaboration community and platform </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="author" content="OmarSabet.net">
        <meta name="description" content="CollaBty is a collaboration platform for all kinds of skills, matching users together to create  something beautiful">
        <meta name="keywords" content="social media, social network, collab, projects, platform, sharing, skills, interests">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700&subset=all" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
       <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css">
       <!--  <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME LAYOUT STYLES -->
       <!--   <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
               <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" /> -->

                <!-- ==== Plugins Bundle ==== -->
                <link rel="stylesheet" href="css/plugins.min.css">
                <!-- ==== Main Stylesheet ==== -->
                <link rel="stylesheet" href="css/style.css">
                <!-- ==== Responsive Stylesheet ==== -->
                <link rel="stylesheet" href="css/responsive-style.css">
                <!-- ==== Color Scheme Stylesheet ==== -->
                <link rel="stylesheet" href="css/colors/color-7.css">
                <!-- ==== Custom Stylesheet ==== -->
                <link rel="stylesheet" href="css/custom.css">
                <link rel="stylesheet" href="css/chameleon.css">

                <link rel="shortcut icon" href="favicon.ico" />
                <link rel="icon" href="favicon.png" type="image/png" />
                <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md page-header-top-fixed">
           <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <?php
                    include'inc/header.php';
                      ?>
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <div class="page-content">
                                 <!-- BEGIN PAGE CONTENT BODY -->
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
     <section class="page--wrapper pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                <div class="main--content col-md-12 pb--60">

                    <div class="" >
                        <div class="main--content-inner">

                           <div class="filter--nav pt--20 pb--20 clearfix">
                                <div class="gallery--title float--left">
                                    <h3 class="h3 fw--500 text-default">Explore</h3>
                                </div>
                                   <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="activityfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="everything" selected="">— Everything —</option>
                                            <option value="most-viewed">Most Viewed</option>
                                            <option value="recent">Recent</option>
                                        </select>
                                    </label>
                                </div>
                                 <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Interests:</span>

                                        <select name="interestfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="everything" selected="">— Everything —</option>
                                            <option value="fine-arts">Fine Arts</option>
                                            <option value="design">Design</option>
                                             <option value="weddingplanner">Wedding Planner</option>
                                            <option value="photography">Photography</option>
                                             <option value="graphic-design">Graphic Design</option>
                                            <option value="illustration">Illustration</option>
                                             <option value="fashion-design">Fashion Design</option>
                                            <option value="makeup">Makeup</option>
                                            <option value="Jewellery">Jewellery</option>
                                             <option value="graphic">Graphic</option>
                                            <option value="makeup">Makeup</option>
                                            <option value="Architecture">Architecture</option>
                                             <option value="sarcastic-art">Sarcastic Art</option>
                                            <option value="advertising">Advertising</option>
                                            <option value="music">Music</option>
                                             <option value="creative-writing">Creative Writing</option>
                                        </select>
                                    </label>
                                </div>

                            </div>

                          <!--   NEED TO MAKE gallery--item image dynamic to open each image to #mediaImgModal

                           -->
                            <div class="gallery--items">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-05.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-06.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--video">
                                            <a href="#mediaVideoModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-07.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-08.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-09.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-10.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-11.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="col-sm-3 col-xs-4 col-xxs-6 pt--15">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--audio">
                                            <a href="#mediaAudioModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/no-thumb.png" alt="">
                                                <p class="duration bg-primary">3:20</p>
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>
                                </div>
                            </div>



                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>of 2,500</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                </div>
                    <!-- Main Content End -->


                </div>
            </div>
        </section>

                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT Wrapper -->
                </div>
                 <!-- END CONTAINER -->
            </div>
           <!-- END Wrapper Middle -->
        </div>  <!-- END Pagerow full height -->

             <?php
                    include'inc/footer.php';
                   ?>

<div class="media--modal type--img modal tito pos-absolute w--100 ml--0 center-div fade in" id="mediaImgModal">
  <div>
    <a id="inspire" class="inspire" href="#">
        <i class="fs--24 text-darker mr--6 fa fa-lightbulb-o"></i>
    </a>
  </div>
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-12">
                    <!-- Media Image Start -->
                    <figure class="media--img text-align bg-darker">
                        <img src="img/gallery-img/thumb-01.jpg" alt="" id="js-steal-color" >
                        <!-- <div class="chmln-demo__colors"></div> -->
                    </figure>
                    <!-- Media Image End -->
                </div>

                <div class="col-md-12">
                    <!-- Media Details Start -->
                    <div class="media--details center-div overflow--scroll max-height-media-comment">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 inline-block fw--700 text-darker">Eileen K. Ruiz</p>
                                <p class="date float--right">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                                <p class="figcaption fs--14 bg-lighter pl--10 pr--5 border-radius--6 fw--700 text-darkest">Lazy Fishing (Image Caption or ALT title)</p>
                            </div>
                        </div>
                        <div class="color--meta bg-lighter">
                        <i class="fa fa-eyedropper _O_G-S"></i><div class="chmln-demo__colors"></div>
                      </div>
                        <!-- Media Author End -->

                        <!-- Media Meta Start -->
                        <div class="media--meta">
                            <ul class="nav">
                                 <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-eye"></i>
                                        <span>1,256k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class=" mr--6 fa fa-thumbs-up"></i>
                                        <span>5k</span>
                                    </a>
                                </li>

                              <li>
                                   <a href="#">
                                       <i class="mr--6 fa fa-share-alt"></i>
                                       <span>Share</span>
                                   </a>
                               </li>
                                  </ul>
                        </div>
                        <!-- start send comment bar -->
                        <div class="textarea w--100 pt--25">
                          <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>

                          <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                            <a href="#" class="btn bg-lighter border-radius--10" id="Replyshowarea"><i class="fa fa-send"></i></a>
                          </div>
                        </div>
                        <div class="border-bottom mb--0 mt--20"></div>
                        <!-- end send comment bar -->

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <!-- <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-02.jpg" alt="">
                                    </div> -->

                                    <!-- <div class="media--author-info ov--h">
                                        <p class="name inline-block"><a href="#" class="btn-link">Samantha B. Beatty</a></p>
                                        <p class="date float--right"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p> -->

                                        <!-- Media Comment Content Start -->
                                        <!-- <div class="inline-block border-radius--6 pl--10 pr--10 bg-lighter">
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div> -->
                                        <!-- Media Comment Content End -->
                                    <!-- </div>
                                </div> -->
                                <!-- Media Author End -->

                            <!-- Media Comment End -->
                            <div class="acomment--item no-padding--top clearfix">

                              <div class="acomment--avatar no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-04.jpg" alt="">
                                </a>
                              </div>

                              <div class="acomment--info">
                                <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                  <p class="no-margin pl--10 pr--10 name"><a href="#">Leticia J. Espinosa</a></p>
                                  <p class="pl--10 pr--10">I also like Pets..... <span style="color: #ec407a;">&hearts; &hearts; &hearts;</span></p>
                                </div>

                                <div class="activity--toolbar display-table">
                                  <ul class="nav navbar-nav">
                                    <li><a class="padding--6" href="#">Like</a></li>
                                    <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                    <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                              <!-- *end* -comment- -->
                              <!-- *Start* send reply comment bar -->
                              <div class="textarea w--100 ml--20 active-reply-bar">
                              <div class="acomment--avatar mr--6 no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-05.jpg" alt="">
                                </a>
                              </div>
                                <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                  <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                </div>
                              </div>
                              <!-- *End* send reply comment bar -->
                            <!-- *End* comment -->


                              <!-- Media Comments Start -->
                              <div class="media--comments">
                                  <!-- Media Comment Start -->
                                  <div class="media--comment">

                                  <!-- Media Comment End -->
                                  <div class="acomment--item no-padding--top clearfix">

                                    <div class="acomment--avatar no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>

                                    <div class="acomment--info">
                                      <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                        <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                        <p class="pl--10 pr--10">Eshtaaa</p>
                                      </div>

                                      <div class="activity--toolbar display-table">
                                        <ul class="nav navbar-nav">
                                          <li><a class="padding--6" href="#">Like</a></li>
                                          <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                          <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    <!-- *end* -comment- -->
                                    <!-- *Start* send reply comment bar -->
                                    <div class="textarea w--100 ml--20 active-reply-bar">
                                    <div class="acomment--avatar mr--6 no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>
                                      <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                      <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                        <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                      </div>
                                    </div>
                                    <!-- *End* send reply comment bar -->
                                <!-- *End* comment -->

                                <!-- Media Comments Start -->
                                <div class="media--comments">
                                    <!-- Media Comment Start -->
                                    <div class="media--comment">

                                    <!-- Media Comment End -->
                                    <div class="acomment--item no-padding--top clearfix">

                                      <div class="acomment--avatar no-padding">
                                        <a href="member-activity-personal.html">
                                          <img src="img/activity-img/avatar-05.jpg" alt="">
                                        </a>
                                      </div>

                                      <div class="acomment--info">
                                        <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                          <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                          <p class="pl--10 pr--10">Eshtaaa</p>
                                        </div>

                                        <div class="activity--toolbar display-table">
                                          <ul class="nav navbar-nav">
                                            <li><a class="padding--6" href="#">Like</a></li>
                                            <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                            <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      <!-- *end* -comment- -->
                                      <!-- *Start* send reply comment bar -->
                                      <div class="textarea w--100 ml--20 active-reply-bar">
                                      <div class="acomment--avatar mr--6 no-padding">
                                        <a href="member-activity-personal.html">
                                          <img src="img/activity-img/avatar-05.jpg" alt="">
                                        </a>
                                      </div>
                                        <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                        <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                          <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                        </div>
                                      </div>
                                      <!-- *End* send reply comment bar -->
                                  <!-- *End* comment -->
                                  <!-- Media Comments Start -->
                                  <div class="media--comments">
                                      <!-- Media Comment Start -->
                                      <div class="media--comment">

                                      <!-- Media Comment End -->
                                      <div class="acomment--item no-padding--top clearfix">

                                        <div class="acomment--avatar no-padding">
                                          <a href="member-activity-personal.html">
                                            <img src="img/activity-img/avatar-05.jpg" alt="">
                                          </a>
                                        </div>

                                        <div class="acomment--info">
                                          <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                            <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                            <p class="pl--10 pr--10">Eshtaaa</p>
                                          </div>

                                          <div class="activity--toolbar display-table">
                                            <ul class="nav navbar-nav">
                                              <li><a class="padding--6" href="#">Like</a></li>
                                              <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                              <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                        <!-- *end* -comment- -->
                                        <!-- *Start* send reply comment bar -->
                                        <div class="textarea w--100 ml--20 active-reply-bar">
                                        <div class="acomment--avatar mr--6 no-padding">
                                          <a href="member-activity-personal.html">
                                            <img src="img/activity-img/avatar-05.jpg" alt="">
                                          </a>
                                        </div>
                                          <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                          <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                            <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                          </div>
                                        </div>
                                        <!-- *End* send reply comment bar -->
                                    <!-- *End* comment -->
                                    <!-- Media Comments Start -->
                                    <div class="media--comments">
                                        <!-- Media Comment Start -->
                                        <div class="media--comment">

                                        <!-- Media Comment End -->
                                        <div class="acomment--item no-padding--top clearfix">

                                          <div class="acomment--avatar no-padding">
                                            <a href="member-activity-personal.html">
                                              <img src="img/activity-img/avatar-05.jpg" alt="">
                                            </a>
                                          </div>

                                          <div class="acomment--info">
                                            <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                              <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                              <p class="pl--10 pr--10">Eshtaaa</p>
                                            </div>

                                            <div class="activity--toolbar display-table">
                                              <ul class="nav navbar-nav">
                                                <li><a class="padding--6" href="#">Like</a></li>
                                                <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                                <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                          <!-- *end* -comment- -->
                                          <!-- *Start* send reply comment bar -->
                                          <div class="textarea w--100 ml--20 active-reply-bar">
                                          <div class="acomment--avatar mr--6 no-padding">
                                            <a href="member-activity-personal.html">
                                              <img src="img/activity-img/avatar-05.jpg" alt="">
                                            </a>
                                          </div>
                                            <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                            <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                              <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                            </div>
                                          </div>
                                          <!-- *End* send reply comment bar -->
                                      <!-- *End* comment -->
                                      <!-- Media Comments Start -->
                                      <div class="media--comments">
                                          <!-- Media Comment Start -->
                                          <div class="media--comment">

                                          <!-- Media Comment End -->
                                          <div class="acomment--item no-padding--top clearfix">

                                            <div class="acomment--avatar no-padding">
                                              <a href="member-activity-personal.html">
                                                <img src="img/activity-img/avatar-05.jpg" alt="">
                                              </a>
                                            </div>

                                            <div class="acomment--info">
                                              <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                                <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                                <p class="pl--10 pr--10">Eshtaaa</p>
                                              </div>

                                              <div class="activity--toolbar display-table">
                                                <ul class="nav navbar-nav">
                                                  <li><a class="padding--6" href="#">Like</a></li>
                                                  <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                                  <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                            <!-- *end* -comment- -->
                                            <!-- *Start* send reply comment bar -->
                                            <div class="textarea w--100 ml--20 active-reply-bar">
                                            <div class="acomment--avatar mr--6 no-padding">
                                              <a href="member-activity-personal.html">
                                                <img src="img/activity-img/avatar-05.jpg" alt="">
                                              </a>
                                            </div>
                                              <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                              <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                                <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                              </div>
                                            </div>
                                            <!-- *End* send reply comment bar -->
                                        <!-- *End* comment -->



                        <!-- Media All Comments Start -->
                        <div class="media--all-comments text-center">
                            <a href="#" class="btn-link">Show all comments</a>
                        </div>
                        <!-- Media All Comments End -->
                    </div>
                    <!-- Media Details End -->
                </div>
            </div>
        </div>
</div>

<div class="media--modal tito type--video modal pos-absolute modal-lg fade" id="mediaVideoModal">
  <div>
    <a id="inspire" class="inspire" href="#">
        <i class="fs--24 text-darker mr--6 fa fa-lightbulb-o"></i>
    </a>
  </div>
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-12">
                    <!-- Media Video Start -->
                    <div class="media--video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/e3FkeMlGrB0"></iframe>
                    </div>
                    <!-- Media Video End -->
                </div>

                <div class="col-md-12">
                    <!-- Media Details Start -->
                    <div class="media--details center-div min-width--80 overflow--scroll max-height-media-comment">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 inline-block fw--700 text-darkest">Eileen K. Ruiz</p>
                                <p class="date float--right">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                                <p class="figcaption fs--14 bg-lighter pl--10 pr--5 border-radius--6 fw--700 text-darkest">Big Buck Bunny</p>
                            </div>
                        </div>
                        <!-- Media Author End -->

                        <!-- Media Meta Start -->
                        <div class="media--meta">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-hand-o-right"></i>
                                        <span>5k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-comment-o"></i>
                                        <span>Show All 26 Comments</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Media Meta End -->

                        <!-- start send comment bar -->
                        <div class="textarea w--100 pt--25">
                          <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>

                          <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                            <a href="#" class="btn bg-lighter border-radius--10" id="Replyshowarea"><i class="fa fa-send"></i></a>
                          </div>
                        </div>
                        <div class="border-bottom mb--0 mt--20"></div>
                        <!-- end send comment bar -->

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                            <div class="acomment--item no-padding--top clearfix">

                              <div class="acomment--avatar no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-04.jpg" alt="">
                                </a>
                              </div>

                              <div class="acomment--info">
                                <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                  <p class="no-margin pl--10 pr--10 name"><a href="#">Leticia J. Espinosa</a></p>
                                  <p class="pl--10 pr--10">I also like Pets..... <span style="color: #ec407a;">&hearts; &hearts; &hearts;</span></p>
                                </div>

                                <div class="activity--toolbar display-table">
                                  <ul class="nav navbar-nav">
                                    <li><a class="padding--6" href="#">Like</a></li>
                                    <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                    <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                              <!-- *end* -comment- -->
                              <!-- *Start* send reply comment bar -->
                              <div class="textarea w--100 ml--20 active-reply-bar">
                              <div class="acomment--avatar mr--6 no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-05.jpg" alt="">
                                </a>
                              </div>
                                <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                  <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                </div>
                              </div>
                              <!-- *End* send reply comment bar -->
                            <!-- *End* comment -->


                              <!-- Media Comments Start -->
                              <div class="media--comments">
                                  <!-- Media Comment Start -->
                                  <div class="media--comment">

                                  <!-- Media Comment End -->
                                  <div class="acomment--item no-padding--top clearfix">

                                    <div class="acomment--avatar no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>

                                    <div class="acomment--info">
                                      <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                        <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                        <p class="pl--10 pr--10">Eshtaaa</p>
                                      </div>

                                      <div class="activity--toolbar display-table">
                                        <ul class="nav navbar-nav">
                                          <li><a class="padding--6" href="#">Like</a></li>
                                          <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                          <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    <!-- *end* -comment- -->
                                    <!-- *Start* send reply comment bar -->
                                    <div class="textarea w--100 ml--20 active-reply-bar">
                                    <div class="acomment--avatar mr--6 no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>
                                      <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                      <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                        <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                      </div>
                                    </div>
                                    <!-- *End* send reply comment bar -->
                                <!-- *End* comment -->

                        <!-- Media All Comments Start -->
                        <div class="media--all-comments text-center">
                            <a href="#" class="btn-link">Show all comments</a>
                        </div>
                        <!-- Media All Comments End -->
                    </div>
                    <!-- Media Details End -->
                </div>
            </div>
        </div>
</div>

<div class="media--modal tito type--audio modal w--10 modal-lg fade" id="mediaAudioModal">
  <div>
    <a id="inspire" class="inspire" href="#">
        <i class="fs--24 text-darker mr--6 fa fa-lightbulb-o"></i>
    </a>
  </div>
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-12">
                    <!-- Media Audio Start -->
                    <div class="media--audio text-align">
                        <audio src="#" controls=""></audio>
                    </div>
                    <!-- Media Audio End -->
                </div>

                <div class="col-md-12">
                    <!-- Media Details Start -->
                    <div class="media--details min-width--80 center-div overflow--scroll max-height-media-comment">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 inline-block fw--700 text-darker">Eileen K. Ruiz</p>
                                <p class="date float--right">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                                <p class="figcaption fs--14 bg-lighter pl--10 pr--5 border-radius--6 fw--700 text-darkest">Big Buck Bunny</p>
                            </div>
                        </div>
                        <!-- Media Author End -->

                        <!-- Media Meta Start -->
                        <div class="media--meta">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-hand-o-right"></i>
                                        <span>5k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-comment-o"></i>
                                        <span>Show All 26 Comments</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Media Meta End -->

                        <!-- start send comment bar -->
                        <div class="textarea w--100 pt--25">
                          <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>

                          <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                            <a href="#" class="btn bg-lighter border-radius--10" id="Replyshowarea"><i class="fa fa-send"></i></a>
                          </div>
                        </div>
                        <div class="border-bottom mb--0 mt--20"></div>
                        <!-- end send comment bar -->

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                            <div class="acomment--item no-padding--top clearfix">

                              <div class="acomment--avatar no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-04.jpg" alt="">
                                </a>
                              </div>

                              <div class="acomment--info">
                                <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                  <p class="no-margin pl--10 pr--10 name"><a href="#">Leticia J. Espinosa</a></p>
                                  <p class="pl--10 pr--10">I also like Pets..... <span style="color: #ec407a;">&hearts; &hearts; &hearts;</span></p>
                                </div>

                                <div class="activity--toolbar display-table">
                                  <ul class="nav navbar-nav">
                                    <li><a class="padding--6" href="#">Like</a></li>
                                    <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                    <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                              <!-- *end* -comment- -->
                              <!-- *Start* send reply comment bar -->
                              <div class="textarea w--100 ml--20 active-reply-bar">
                              <div class="acomment--avatar mr--6 no-padding">
                                <a href="member-activity-personal.html">
                                  <img src="img/activity-img/avatar-05.jpg" alt="">
                                </a>
                              </div>
                                <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                  <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                </div>
                              </div>
                              <!-- *End* send reply comment bar -->
                            <!-- *End* comment -->


                              <!-- Media Comments Start -->
                              <div class="media--comments">
                                  <!-- Media Comment Start -->
                                  <div class="media--comment">

                                  <!-- Media Comment End -->
                                  <div class="acomment--item no-padding--top clearfix">

                                    <div class="acomment--avatar no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>

                                    <div class="acomment--info">
                                      <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                        <p class="no-margin pl--10 pr--10 name"><a href="#">Ali Alaa</a></p>
                                        <p class="pl--10 pr--10">Eshtaaa</p>
                                      </div>

                                      <div class="activity--toolbar display-table">
                                        <ul class="nav navbar-nav">
                                          <li><a class="padding--6" href="#">Like</a></li>
                                          <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                          <li><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    <!-- *end* -comment- -->
                                    <!-- *Start* send reply comment bar -->
                                    <div class="textarea w--100 ml--20 active-reply-bar">
                                    <div class="acomment--avatar mr--6 no-padding">
                                      <a href="member-activity-personal.html">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                      </a>
                                    </div>
                                      <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                      <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                        <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                      </div>
                                    </div>
                                    <!-- *End* send reply comment bar -->
                                <!-- *End* comment -->

                        <!-- Media All Comments Start -->
                        <div class="media--all-comments text-center">
                            <a href="#" class="btn-link">Show all comments</a>
                        </div>
                        <!-- Media All Comments End -->
                    </div>
                    <!-- Media Details End -->
                </div>
            </div>
        </div>
</div>


        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
         <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
         <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
       <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
       <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
       <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!--END CORE PLUGINS  -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
         <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="js/plugins.min.js" type="text/javascript"></script>
       <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
       <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>

        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/jquery.chameleon.js"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
           <script type="text/javascript">
                        $(document).ready(function() {
                           $("#js-steal-color").chameleon("getImageColors", {
                              "sort_type": "disabled",
                              "color_format": "hex",
                              "img_src": "#js-steal-color",
                              "color_alpha": 200,
                              "color_difference": 120,
                              "canvas_side": 250,
                              "debug": false,
                  "onGetColorsSuccess": function (colors, $container, s) {
                    var $colors = jQuery.fn.chameleon('wrapColor', colors, s.color_format);
                    jQuery('.chmln-demo__colors').html($colors);
                    $container.removeClass('_loading').addClass('_done').siblings().removeClass('_done');
                  },
                  "onGetColorsError": function (colors, $container, s, img_src) {
                    jQuery('.chmln-demo__colors').html('No Image to generate colors');
                    console.error('No Image to generate colors', img_src);
                  }
                });
                  });
        </script>


    </body>

</html>