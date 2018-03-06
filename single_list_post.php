
<?PHP 

include './custom_assets/classes/format.php';
$formateText=new Format();
$single_post=new ViewPost();
$data=$single_post->view_post_lates_next();
while ($row= mysqli_fetch_array($data)){
?>
<!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="admin/upload_image/<?PHP echo $row['image']; ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#"><?PHP echo $row['name']; ?></a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#"><?PHP echo $row['date']; ?></a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <!-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a> -->
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
                                        <h4 class="post-headline"><?PHP echo $row['title']; ?></h4>
                                    </a>
                                    <p><?PHP echo $formateText->textShorten($row['description'],250) ?></p>
                                    <a href="post_details.php?id=<?PHP echo $row['id'] ?>" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

<?PHP } ?>

                        
