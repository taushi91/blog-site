 <!-- Single Post -->

                         <?PHP 
                          $single_post=new ViewPost();
                          $data=$single_post->view_post_latest();

                          while ($row=mysqli_fetch_array($data)) {
                             
                          
                         ?>
                        <div class="col-12 col-md-6">
                            <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="post_details.php?id=<?PHP echo $row['id'] ?>"><img src="admin/upload_image/<?PHP echo $row['image'] ?>" alt="" height="200px"></a>
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
                                               <!--  <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a> -->
                                            </div>
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                               <!--  <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a> -->
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="post_details.php?id=<?PHP echo $row['id'] ?>">
                                        <h4 class="post-headline"><?PHP echo $row['title'] ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?PHP } ?>

                        