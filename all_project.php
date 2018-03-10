
<?PHP include('top_header.php'); ?>

<body>
   <?PHP //include('header.php'); ?>
    <!-- ****** Header Area End ****** -->
 <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/catagory-img/sw.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Software Project</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> হোম</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a>Software Project</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->
 <!-- ****** Categories Area Start ****** -->
    <?PHP //include('category_progarmming.php') 
    include('./custom_assets/classes/view_programming_post.php');

    $programming_post=new Project();
    $data=$programming_post->project_view();


    ?>
    <!-- ****** Categories Area End ****** -->
  
 <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <hr>
                                <h1 style="font-family: verdana;color: green;text-align: center">P R O J E C T</h1>
                                <hr>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            
                                            <!-- Post Date -->
                                            
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
<!--                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>
                                             Post Comments 
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>
                                             Post Share 
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>-->
                                        </div>
                                    </div>
                                    <?PHP while ($row= mysqli_fetch_array($data)){ ?>
                                    <div class="">
                                    <a href="#">
                                        <h2 class="post-headline card-title" style="font-family: verdana;font-size: 26px"><?PHP echo $row['name'] ?></h2>
                                    </a>
                                    <div class="post-author">
                                        <a href="http://facebook.com/zahid.cse07" style="font-family: verdana" target="blank">By Zahid Hasan</a>
                                            </div>
                                   
                                        <p class="card-text" style="font-family: verdana"><?PHP echo $row['description'] ?></p>
                                   </div>
                                    <br>
                                    
                                    <?PHP } ?>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                
                

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                       
                        

                        <!-- Single Widget Area -->
                        <?PHP include './programming_category_list.php'; ?>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget text-center">
                            
                        </div>

                        <!-- Single Widget Area -->
<!--                        <div class="single-widget-area newsletter-widget">
                            <div class="widget-title text-center">
                                <h6>Newsletter</h6>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                    <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?PHP include './footer_slider.php'; ?>
    <!-- ****** Footer Social Icon Area Start ****** -->
    <?PHP include('footer.php') ?>

    <!-- ****** Footer Menu Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>
