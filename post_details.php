<?PHP include('top_header.php'); ?>

<body>
   <?PHP include('header.php'); ?>
    <!-- ****** Header Area End ****** -->



    <!-- ****** Categories Area Start ****** -->
    <?PHP //include('category_post.php') ?>
    <!-- ****** Categories Area End ****** -->

    
    <?PHP 
        
     $post_details=new ViewPost();
     $data=$post_details->view_by_post_id($_GET['id']);
     $row= mysqli_fetch_array($data);
    
    ?>
    
    
    
    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="admin/upload_image/<?PHP echo $row['image'] ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By <?PHP echo $row['name'] ?></a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#"><?PHP echo $row['date'] ?></a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h2 class="post-headline"><?PHP echo $row['title'] ?></h2>
                                    </a>
                                    <p><?PHP echo $row['description'] ?></p>

                                    <hr>
                                    <h3>Comments</h3>

                                    <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message" required="" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn contact-btn">submit</button>
                                   
                                </div>
                            </div>
                        </div>



                       <?PHP //include('single_post.php') ?>

                        <!-- ******* List Blog Area Start ******* -->

                       <?PHP //include('single_list_post.php') ?>





                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area about-me-widget text-center">
                            <div class="widget-title">
                                <h6>About Writer</h6>
                            </div>
                            <div class="about-me-widget-thumb">
                                <img src="writer_image/<?PHP echo $row['writer_image'] ?>" alt="">
                            </div>
                            <h4 class="font-shadow-into-light"><?PHP echo $row['name'] ?></h4>
                            <p>details  about u</p>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area subscribe_widget text-center">
                            <div class="widget-title">
                                <h6>Subscribe &amp; Follow</h6>
                            </div>
                            <div class="subscribe-link">
                                <a href="<?PHP echo $row['facebook'] ?>" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?PHP //echo $row[''] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?PHP echo $row['instagram'] ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <?PHP include './popular_post.php'; ?>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget text-center">
                            <div class="add-widget-area">
                                <img src="img/sidebar-img/6.jpg" alt="">
                                <div class="add-text">
                                    <div class="yummy-table">
                                        <div class="yummy-table-cell">
                                            <h2>Cooking Book</h2>
                                            <p>Buy Book Online Now!</p>
                                            <a href="#" class="add-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area newsletter-widget">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->

    <!-- ****** Instagram Area Start ****** -->
   <?php include './footer_slider.php'; ?>
    <!-- ****** Our Creative Portfolio Area End ****** -->

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
