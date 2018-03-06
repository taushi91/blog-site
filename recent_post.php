<?PHP 
$recent_post=new ViewPost();
$data=$recent_post->view_all_post();  
?>

<section class="welcome-post-sliders owl-carousel">

    
    <?PHP  
         while($row= mysqli_fetch_array($data)){
    ?>
        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="admin/upload_image/<?PHP echo $row['image'] ?>" alt="" height="300px">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#"><?PHP echo $row['date'] ?></a>
                    <a href="#"></a>
                </div>
                <a href="post_details.php?id=<?PHP echo $row['id'] ?>">
                    <h5><?PHP echo $row['title'] ?></h5>
                </a>
            </div>
        </div>
         <?PHP } ?>

      

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="img/bg-img/slide-4.jpg" alt=""height="300px">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

    </section>