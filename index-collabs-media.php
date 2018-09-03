
<!DOCTYPE html>
<?php
include'functions.php';
$collab_id = $_GET['id'];
$collab_details = get_collab_details($collab_id);
$details = $collab_details->fetch_assoc();

$no_of_comments = count_comments($collab_id,1);
?>
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

        <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css">
        <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css">
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME LAYOUT STYLES -->
    
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
 <div class="cover--header text-center bg--img" data-overlay="0.75" data-overlay-color="white" data-rjs="2" style="background-image: url('img/cover-header-img/bg-01.jpg');">
            <div class="container">
                <a href="network.php" class="profile-counter following-counter tooltips" data-original-title="Following" data-toggle="tooltip" data-placement="bottom">
                                                <div class="circle" >300</div>
                 </a>
                <div class="cover--avatar online" data-overlay="0.5" data-overlay-color="#EFF3F8">
                    <img src="img/cover-header-img/avatar-03.jpg" alt="">
                </div>
                <a href="network.php" class="profile-counter followed-counter tooltips"  data-original-title="Follows" data-toggle="tooltip" data-placement="bottom">
                                                <div class="circle">253</div>
                                                
                 </a>

                <div class="cover--user-name">
                    <h2 class="h2 fw--600">Ali Alaa</h2>
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">Graphic Designer / Branding / Animator</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
                
            <div class="btn-group btn-group-circle cover--user-desc">
                        <button type="button" class="btn btn-default dark-purple" onclick="location.href='edit-profile.php';">
                            <i class="fa fa-user"></i> Edit Profile</button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-envelope"></i> Message</button>
                        <!-- <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-bullhorn"></i> Follow</button> -->
                            <button type="button" class="btn btn-default red btn-circle-right">
                                <i class="fa fa-money"></i> Start Collab </button>
              </div>
              <div class="btn-group btn-group-circle cover--user-desc">
                        <button type="button" class="btn btn-default dark-purple hire-button">
                            <i class="fa fa-money"></i> Hire </button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-envelope"></i> Message</button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-bullhorn"></i> Follow</button>
                            <button type="button" class="btn btn-default red btn-circle-right">
                                <i class="fa fa-money"></i> Invite to Collab </button>
              </div>
             <div class="socicons cover--user-social">
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-twitter tooltips" data-original-title="Twitter"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-facebook tooltips" data-original-title="Facebook"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-google tooltips" data-original-title="Google"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-youtube tooltips" data-original-title="Youtube"></a>
<!--                                 <a href="#" class="socicon-btn socicon-btn-circle socicon-vimeo tooltips" data-original-title="Vimeo"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-flickr tooltips" data-original-title="Flickr"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-500px tooltips" data-original-title="500px"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-instagram tooltips" data-original-title="Instagram"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-tumblr tooltips" data-original-title="Tumblr"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-blogger tooltips" data-original-title="Blogger"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-reddit tooltips" data-original-title="Reddit"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-dribbble tooltips" data-original-title="Dribbble"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-digg tooltips" data-original-title="Digg"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-envato tooltips" data-original-title="Envato"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-behance tooltips" data-original-title="Behance"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-deviantart tooltips" data-original-title="Deviantart"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-github tooltips" data-original-title="Github"></a> 
<a href="#" class="socicon-btn socicon-btn-circle socicon-goodreads tooltips" data-original-title="Goodreads"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-mail tooltips" data-original-title="Mail"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-patreon tooltips" data-original-title="Patreon"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-paypal tooltips" data-original-title="Paypal"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a> -->
                </div>
            </div>
        </div>
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
     
      <section class="page--wrapper pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-9 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index.php">Feed</a></li>
                                    <li class="active"><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul>
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index-collabs-feed.php">Project Home</a></li>
                                    <li class="active"><a href="index-collabs-media.php">Project Media</a></li>
                                    <li><a href="index-collabs-about.php">About Project</a></li>

                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                           
                        <div class="gallery--header pb--15 clearfix">
                                <div class="gallery--title float--left">
                                    <h3 class="h3 fw--500 text-default">Project Media</h3>
                                </div>
                                

                                <div class="gallery--upload-btn ff--primary float--right">
                                    <a href="javascript:void(0);" onclick="performClick('theFile');" class="btn btn-sm btn-default"><i class="mr--10 fa fa-cloud-upload"></i>Upload</a>
                                    <input type="file" id="theFile" class="hidden" />
                                </div>
                            </div>

                            <div class="gallery--items">
                                <div class="MasonryRow" >
                                    <div class="mb--02" >
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-01.jpg" alt="" >
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02" >
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-05.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-06.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--video">
                                            <a href="#mediaVideoModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-07.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-08.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-09.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-10.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-11.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>

                                    <div class="mb--02">
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-12.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                    </div>


                                </div>
                            </div>
                        </div>

                       
                    </div>
                    <!-- Main Content End -->
              <?php
                    include'inc/sidebar-collabs.php';
                      ?>
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
                        <!-- END CONTENT -->
                    <!-- END CONTAINER -->
                </div>
            </div>

        </div>  <!-- END Pagerow full height -->
                   <?php
                    include'inc/footer.php';
                   ?>
<div class="media--modal type--img modal fade in" id="mediaImgModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Image Start -->
                    <figure class="media--img">
                        <img src="img/gallery-img/full-01.jpg" alt="" id="js-steal-color" >

                        <p class="figcaption fs--14 fw--700 text-white">Lazy Fishing (Image Caption or ALT title)</p>
                        <div class="chmln-demo__colors"></div>
                    </figure>
                    <!-- Media Image End -->
                </div>

                <div class="col-md-4">
                    <!-- Media Details Start -->
                    <div class="media--details">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 fw--700 text-darkest">Eileen K. Ruiz</p>
                                <p class="date">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                            </div>
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
                        <!-- Media Meta End -->
                 <!--        <div class="c-swatches" id="js-palette-list">
                     <i class="mr--6 fs--16 fa fa-eyedropper"></i>
                   <div class="c-swatches__item  c-swatches__item--first"></div>
                   <div class="c-swatches__item  c-swatches__item--second"></div>
                   <div class="c-swatches__item  c-swatches__item--third"></div>
                   <div class="c-swatches__item  c-swatches__item--fourth"></div>
                   <div class="c-swatches__item  c-swatches__item--fifth"></div>
                   <div class="c-swatches__item  c-swatches__item--sixth"></div>
                   <div class="c-swatches__item  c-swatches__item--seventh"></div>
                   <div class="c-swatches__item  c-swatches__item--eighth"></div>
                 </div> -->

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-02.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Samantha B. Beatty</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-03.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Barbara E. Weiss</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Beautiful Photo...</p>
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Jeannette J. White</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>So cute</p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->
                        </div>
                        <!-- Media Comments End -->

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

<div class="media--modal type--video modal fade" id="mediaVideoModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Video Start -->
                    <div class="media--video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"></iframe>

                        <p class="figcaption fs--14 fw--700 text-white">Big Buck Bunny</p>
                    </div>
                    <!-- Media Video End -->
                </div>

                <div class="col-md-4">
                    <!-- Media Details Start -->
                    <div class="media--details">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 fw--700 text-darkest">Eileen K. Ruiz</p>
                                <p class="date">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
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

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-02.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Samantha B. Beatty</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-03.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Barbara E. Weiss</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Beautiful Photo...</p>
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Jeannette J. White</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>So cute</p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->
                        </div>
                        <!-- Media Comments End -->

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

<div class="media--modal type--audio modal fade" id="mediaAudioModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Audio Start -->
                    <div class="media--audio">
                        <audio src="media/audio.mp3" controls=""></audio>

                        <p class="figcaption fs--14 fw--700 text-white">Big Buck Bunny</p>
                    </div>
                    <!-- Media Audio End -->
                </div>

                <div class="col-md-4">
                    <!-- Media Details Start -->
                    <div class="media--details">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 fw--700 text-darkest">Eileen K. Ruiz</p>
                                <p class="date">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
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

                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-02.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Samantha B. Beatty</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-03.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Barbara E. Weiss</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Beautiful Photo...</p>
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Jeannette J. White</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>So cute</p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->
                        </div>
                        <!-- Media Comments End -->

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


        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>


        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
       <!--  <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script> -->
        <script src="js/jquery.chameleon.js"></script>
        <script src="js/main.js"></script>

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
                    jQuery('.chmln-demo__colors').html('Error occurred on getImageColors!'); 
                    console.error('Error occurred on getImageColors!', img_src); 
                  }
                });
                  });    
        </script>
<!--         <script type="text/javascript">
function performClick(elemId) {
   var elem = document.getElementById(elemId);
   if(elem && document.createEvent) {
      var evt = document.createEvent("MouseEvents");
      evt.initEvent("click", true, false);
      elem.dispatchEvent(evt);
   }
}
</script> -->
 
    </body>

</html>