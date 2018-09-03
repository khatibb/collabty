
<!DOCTYPE html>

<?php

include 'function.php';

if(!isset($_SESSION['user']))
{
    header('Location: signup.php');
}
else{
    $user_id = $_SESSION['user'];
    $user_data = get_user_data($user_id);
    $data = $user_data->fetch_assoc();











   
    $user_profile = get_profile_data($user_id);
    if ($user_profile != "NO") 
    {
        
        $profile = $user_profile->fetch_assoc();
        $profile_pic = $profile['profile_pic'];
        $cover_pic =  $profile['cover_pic'];
        $user_brief = $profile['brief'];
        $facebook=$profile['facebook'];
        $instagram=$profile['instagram'];
        $twitter=$profile['twitter'];
        $pintrest=$profile['pintrest'];
        $dribble=$profile['dribble'];
        $linkedin=$profile['linkedin'];
        $soundcloud=$profile['soundcloud'];
        $behance=$profile['behance'];
        $youtube=$profile['youtube'];

        $array=Array();




       
      

    }




}
?>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Collabty - Collaboration community and platform </title>
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
        <!-- END GLOBAL MANDATORY STYLES -->

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
    <link rel="stylesheet" href="css/like-btn.css">
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/color-7.css">
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

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
                        <div class="page-content-wrapper bg--java">
                            <!-- BEGIN CONTENT BODY -->
                            <?php include 'inc/profile-header.php'; ?>
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
                            <div class="content--nav pb--20">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li class="active"><a href="index.php">Feed</a></li>
                                    <li><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->

                     <?php
                    include'inc/feed-post.php';
                      ?>
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--20 clearfix">
                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show by :</span>

                                        <select name="activityfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="everything" selected>— Everything —</option>
                                            <option value="media">Media</option>
                                            <option value="collaborations">Collaborations</option>
                                            <option value="blogposts">Blogs</option>
                                            <option value="events">Events</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Activity List Start -->
                            <div class="activity--list">
                                <!-- Activity Items Start -->
                                <ul class="activity--items nav">

                                  <li class="padding--2 border-radius--10 activeLi">
                                    <!-- Activity Item Start -->
                                    <div class="activity--item bg-lighter border-radius--10 padding--6">
                                      <div class="activity--avatar">
                                        <a href="member-activity-personal.html">
                                          <img src="img/activity-img/avatar-06.jpg" alt="">
                                        </a>
                                      </div>

                                      <div class="activity--info fs--14">
                                        <div class="activity--header">
                                          <p><a href="member-activity-personal.html">Bonnie P. Rock</a> posted an update</p>
                                        </div>

                                        <div class="activity--meta _mt--2 fs--12">
                                          <p><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                        </div>

                                        <!-- <button class="btn btn-default pull-right" id="Replytextarea-ok" name="ok" type="button" value="X">CLOSE</button> -->

                                        <div class="activity--content">
                                          <p class="bg-white inline-block padding--4 pl--10 pr--10 border-radius--10 text-darker">Hello friends!</p>
                                        </div>

                                        <!-- start send comment bar -->
                                        <div class="border-bottom mb--30 mt--20"></div>
                                        <div class="textarea w--100">
                                          <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                          <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                            <a href="#" class="btn bg-lighter border-radius--10" id="Replyshowarea"><i class="fa fa-send"></i></a>
                                          </div>
                                        </div>
                                        <div class="border-bottom mb--0 mt--20"></div>
                                        <!-- end send comment bar -->
                                      </div>
                                    </div>
                                    <!-- *Start* like/comment/share bar -->
                                    <div class="activity--toolbar pos-absolute center-div bg-lighter inline-block mt--2 pl--10 pr--10 border-radius--10">
                                       <ul class="nav navbar-nav fnts--12">
                                         <!-- <ul id="main" class="nav navbar-nav fnts--10 border-right like-btn-height">
                                           <span class="showie">
                                           <li id="like--btn" class="pl--9"><a href="#">Like</a></li>
                                           <div class="drpdwn-menu">
                                             <a href="#" class="animate loveS">😍</a>
                                             <a href="#" class="animate hehe">🤣</a>
                                             <a href="#" class="animate eff">🤧</a>
                                             <a href="#" class="animate wow">😱</a>
                                           </div>
                                        </span>
                                         </ul> -->
                                           <li class="border-right"><a href="#">Like</a></li>
                                           <li><a href="#">comment</a></li>
                                           <li class="border-left"><a href="#">share</a></li>
                                       </ul>
                                    </div>
                                    <!-- *End* like/comment/share bar -->
                                    <!-- Activity Item End -->
                                  </li>

                                    
                                    <li class="new-post padding--2 border-radius--10 activeLi">
                                      <!-- Activity Item Start -->
                                      <div class="activity--item bg-lighter border-radius--10 padding--6">
                                        <div class="activity--avatar">
                                          <a href="member-activity-personal.html">
                                            <img src="img/activity-img/avatar-03.jpg" alt="">
                                          </a>
                                        </div>

                                        <div class="activity--info fs--14">
                                          <div class="activity--header">
                                            <p><a href="member-activity-personal.html">Denise R. Sherman</a> posted an update in the group <a href="group-home.html">Pet Care</a></p>
                                          </div>

                                          <div class="activity--meta _mt--2 fs--12">
                                            <p><i class="fa fa-clock-o"></i>Yeasterday at 08:20 am</p>
                                          </div>

                                          <div class="activity--content">
                                            <p class="bg-white inline-block padding--4 pl--10 pr--10 border-radius--10 text-darker">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                                          </div>

                                          <!-- start send comment bar -->
                                          <div class="border-bottom mb--30 mt--20"></div>
                                          <div class="textarea w--100">
                                            <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>

                                            <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
                                              <a href="#" class="btn bg-lighter border-radius--10" id="Replyshowarea"><i class="fa fa-send"></i></a>
                                            </div>
                                          </div>
                                          <div class="border-bottom mb--0 mt--20"></div>
                                          <!-- end send comment bar -->
                                        </div>
                                          <!-- start comments on post -->
                                          <div class="activity--comments fs--12 border-radius--10">
                                            <ul class="acomment--items nav bg-white border-bottom-radius--10 padding--4 pl--10 pr--10">

                                              <li class="padding--6 border-radius--10">
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
                                                    <!-- *Start* -Reply on comment- -->
                                                    <div class="acomment--avatar no-padding">
                                                      <a href="member-activity-personal.html">
                                                        <img src="img/activity-img/avatar-01.jpg" alt="">
                                                      </a>
                                                    </div>

                                                    <div class="acomment--info">
                                                      <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                                        <p class="no-margin pl--10 pr--10"><a href="#">Heba safi eldin</a></p>
                                                        <p class="pl--10 pr--10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                      </div>

                                                      <div class="activity--toolbar display-table">
                                                        <ul class="nav navbar-nav">
                                                          <li><a class="padding--6" href="#">Like</a></li>
                                                          <li><a class="padding--6 reply-on-reply-btn" href="#">Reply .</a></li>
                                                          <li><i class="fa fa-clock-o"></i>Yesterday 1:00 pm</li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                    <!-- *End* -Reply on comment- -->
                                                    <!-- *Start* -Reply on comment- -->
                                                    <div class="acomment--avatar no-padding">
                                                      <a href="member-activity-personal.html">
                                                        <img src="img/activity-img/avatar-03.jpg" alt="">
                                                      </a>
                                                    </div>

                                                    <div class="acomment--info">
                                                      <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                                        <p class="no-margin pl--10 pr--10"><a href="#">Denise R. Sherman</a></p>
                                                        <p class="pl--10 pr--10">Hahahahahahaahahahah eshta</p>
                                                      </div>

                                                      <div class="activity--toolbar display-table">
                                                        <ul class="nav navbar-nav">
                                                          <li><a class="padding--6" href="#">Like</a></li>
                                                          <li><a class="padding--6 reply-on-reply-btn" href="#">Reply .</a></li>
                                                          <li><i class="fa fa-clock-o"></i> 12:00 am</li>
                                                        </ul>
                                                      </div>

                                                    </div>

                                                    <!-- *Start* send reply comment bar -->
                                                    <div class="textarea w--100 active-reply-bar">
                                                    <div class="acomment--avatar mr--6 no-padding">
                                                      <a href="member-activity-personal.html">
                                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                                      </a>
                                                    </div>
                                                      <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                                      <div class="reply text-darker border-radius--10 bottom--14 inline-block pos-absolute" >
                                                        <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                                      </div>
                                                    </div>
                                                    <!-- *End* send reply comment bar -->
                                                    <!-- *End* -Reply on comment- -->
                                                  </div>
                                                </div>
                                              </li>

                                              <!-- *start* second comment -->
                                              <li class="padding--6 border-radius--10">
                                                <div class="acomment--item no-padding--top clearfix">

                                                  <div class="acomment--avatar no-padding">
                                                    <a href="member-activity-personal.html">
                                                      <img src="img/activity-img/avatar-02.jpg" alt="">
                                                    </a>
                                                  </div>

                                                  <div class="acomment--info">
                                                    <div class="bg-lighter border-radius--10 pb--8 inline-block acomment--header">
                                                      <p class="no-margin pl--10 pr--10"><a href="#">Karim mohsen</a></p>
                                                      <p class="pl--10 pr--10">I hate cats :)</p>
                                                    </div>


                                                    <div class="activity--toolbar display-table">
                                                      <ul class="nav navbar-nav">
                                                        <li><a class="padding--6" href="#">Like</a></li>
                                                        <li><a class="padding--6 reply-btn" href="#">Reply .</a></li>
                                                        <li><i class="fa fa-clock-o"></i>Today at 10:00 am</li>
                                                      </ul>
                                                    </div>
                                                    <!-- *Start* send reply comment bar -->
                                                    <div class="textarea w--100 active-reply-bar inline-block main-reply-comment">
                                                    <div class="acomment--avatar mr--6 no-padding">
                                                      <a href="member-activity-personal.html">
                                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                                      </a>
                                                    </div>
                                                      <textarea class="resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea" placeholder="Write your comment" name="reply"></textarea>
                                                      <div class="reply text-darker border-radius--10 bottom--14 inline-block pos-absolute" >
                                                        <a href="#" class="btn bg-lighter border-radius--10 active-reply-bar">Reply</a>
                                                      </div>
                                                    </div>
                                                    <!-- *End* send reply comment bar -->
                                                  </div>

                                                </div>

                                              </li>
                                              <!-- *End* second comment -->
                                            </ul>
                                          </div>
                                      </div>
                                      <!-- *Start* like/comment/share bar -->
                                      <div class="activity--toolbar center-div pos-absolute bg-lighter inline-block mt--2 pl--10 pr--10 border-radius--10">
                                         <ul class="nav navbar-nav fnts--12">
                                           <!-- <ul id="main" class="nav navbar-nav fnts--10 border-right like-btn-height">
                                             <span class="showie">
                                             <li id="like--btn" class="pl--9"><a href="#">Like</a></li>
                                             <div class="drpdwn-menu">
                                               <a href="#" class="animate loveS">😍</a>
                                               <a href="#" class="animate hehe">🤣</a>
                                               <a href="#" class="animate eff">🤧</a>
                                               <a href="#" class="animate wow">😱</a>
                                             </div>
                                          </span>
                                           </ul> -->
                                           <li class="border-right"><a href="#">Like</a></li>
                                           <li><a href="#">comment</a></li>
                                           <li class="border-left"><a href="#">share</a></li>
                                         </ul>
                                      </div>
                                      <!-- *End* like/comment/share bar -->
                                      <!-- Activity Item End -->
                                    </li>



                                    <!--   share video   -->
                                                                   </ul>
                                <!-- Activity Items End -->
                            </div>
                            <!-- Activity List End -->
                        </div>

                        <!-- Load More Button Start -->
                        <div class="load-more--btn no-bg pt--30 text-center">
                            <a href="#" class="btn btn-animate">
                                <span>See More Activities<i class="fa ml--10 fa-caret-right"></i></span>
                            </a>
                        </div>
                        <!-- Load More Button End -->
                    </div>
                    <!-- Main Content End -->
                    <?php
                    include'inc/sidebar-server.php';
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
     </div>

               <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

        <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>

        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
          <!-- ==== Main Script ==== -->
        <script src="js/plugins.min.js"></script>
        <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
    </body>

</html>