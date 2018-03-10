
<?PHP 
$popular_post=new ViewPost();
$data=$popular_post->view_post_latest();  
?><div class="single-widget-area popular-post-widget">
                            <div class="widget-title text-center">
                                <h6>Populer Post</h6>
                            </div>
                            <!-- Single Popular Post -->

                            <?php while ($row=mysqli_fetch_array($data)) {
                                
                             ?>
                            <div class="single-populer-post d-flex">
                                <a href="post_details?id=<?PHP echo $row['id'] ?>"> <img src="admin/upload_image/<?php echo $row['image'] ?>" alt="7unity" ></a>
                                <div class="post-content">
                                    <a href="post_details?id=<?PHP echo $row['id'] ?>">
                                        <h6><?php echo $row['title'] ?></h6>
                                    </a>
                                    <p><?php echo $row['date'] ?></p>
                                </div>
                            </div>
                            <?php  }?>


                         
<!--                             Single Popular Post 
                            <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/5.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Eating Out On A Budget In Oxford</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>-->

                        </div>