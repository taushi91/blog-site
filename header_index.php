<?PHP
    include './custom_assets/classes/view_post.php';
    
    $category=new ViewPost();
    
    $data=$category->category_view();

?> 


<!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    
   

    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        
                        
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                <a href="register.html">Sing in</a>
                            </div>
                            <div class="register">
                                <a href="register.html">Sing up</a>
                            </div>
                        </div>
                        <!-- Search Button Area -->
                        <!-- <div class="search_button">
                            <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div> -->
                        <!-- Search Form -->
                        <!-- <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
                                <input type="submit" value="" class="d-none">
                                <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.php" class="yummy-logo"> Blog</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">হোম <span class="sr-only">(current)</span></a>
                                </li>
                                
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ক্যাটাগরি</a>
                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                        
                                        <?PHP 
                                        while ($row= mysqli_fetch_array($data)){  
                                            
                                        ?>
                                        <a class="dropdown-item" href="category_post_list.php?id=<?PHP echo $row['cat_id']?>&&cat_name=<?PHP echo $row['cat_name'] ?>"><?PHP echo $row['cat_name'] ?></a>
                                        <?PHP  }
                                        $category->db_close();
                                        ?>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="all_post.php">সকল পোস্ট</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">আমাদের সম্পর্কে</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">যোগাযোগ করুন</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://7unity.com/tv/">লাইভ টিভি</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>