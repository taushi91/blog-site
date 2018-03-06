<?PHP include("header.php");
?>
  <!-- END HEADER -->



  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?PHP include("left_sidebar.php") ?>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      
      
      <?PHP 
      include './php/classes/Admin.php';
      $insert_info=new Admin();
      
      
      
       
         if($_SERVER['REQUEST_METHOD']=='POST'){
             extract($_POST);
              extract($_FILES);
             print_r($_POST);
             
             $target_dir = "upload_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
                  
                                                    // Check if file already exists
                      if (file_exists($target_file)) {
                          echo "Sorry, file already exists.";
                          $uploadOk = 0;
                      }
                      // Check file size
                      if ($_FILES["image"]["size"] > 800000) {
                          echo "Sorry, your file is too large.";
                          $uploadOk = 0;
                      }
                      // Allow certain file formats
                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                      && $imageFileType != "gif" ) {
                          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                          $uploadOk = 0;
                      }
                      // Check if $uploadOk is set to 0 by an error
                      if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                      // if everything is ok, try to upload file
                      } else {
                          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                              echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                             $fileName= basename( $_FILES["image"]["name"]);
                              $insert=$insert_info->add_post($_POST, date("Y-m-d"),$fileName);
                          if($insert){
                             echo "SUccessFully";
                            }
                          } else {
                              echo "Sorry, there was an error uploading your file.";
                          }
                      }
                   
                           

}
         
      ?>
      
      
      
      <?PHP 
      
          //include("../custom_assets/classes/view_post.php");
          $category=new Admin();
          $category_data=$category->category_view();
          $writer_data=$category->get_writer();
      ?>
          <div id="basic-form" class="section">

              <div class="row">
                <div class="l2"></div>
                <div class="col s6 m6 l8">
                  <div class="card-panel">
                    <h3 class="header2" style="text-align: center;border: 2px solid green">Add Post</h3>
                    <div class="row">
                      <form class="col s12" method="post" id="formValidate" enctype="multipart/form-data">
                        <div class="row">
                         

                        <div class="col s12 m12 l12">
                  <label>Select Category</label>
                  <select class="browser-default" required="" name="cat_id">
                    <option value="" disabled selected>Choose your option</option>
                    
                    <?PHP while ($category_row= mysqli_fetch_array($category_data)){ ?>
                    <option value="<?PHP echo $category_row['cat_id'] ?>"><?PHP echo $category_row['cat_name'] ?></option>
                    <?PHP } ?>
                  </select>
                </div>


                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input name="title" id="title" type="text" required="">
                            <label for="title">Title</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <label for="description">Description</label>
                            <textarea required="" name="description" id="description"></textarea>
                            
                          </div>
                        </div>
                        

                        <div class="row section">
              
              <div class="col s12 m12 l9">
                  <input name="image" type="file" id="input-file-events" class="dropify-event"   />
              </div>
            </div>


            <!-- <div class="row">
                          <div class="input-field col s12">
                              <input id="Writer" name="writer_name" type="text" required="">
                            <label for="Writer">Writer Name</label>
                          </div>
                        </div> -->

                        <div class="col s12 m12 l12">
                  <label>Select Category</label>
                  <select class="browser-default" required="" name="cat_id">
                    <option value="" disabled selected>Choose your option</option>
                    
                    <?PHP while ($writer_row= mysqli_fetch_array($writer_data)){ ?>
                    <option value="<?PHP echo $writer_row['id'] ?>"><?PHP echo $writer_row['name'] ?></option>
                    <?PHP } ?>
                  </select>
                </div>



                        <div class="row">
                          
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Form with placeholder -->
                
              </div>
            </div>

    
      <!-- END CONTENT -->

  
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <?PHP include("footer.php") ?>>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

  <!--ck editor--> 
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>

    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description' );
            </script>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>


<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
</script>

<script type="text/javascript">
$("#formValidate").validate({
        rules: {
            title: {
                required: true,
                
            },
            cemail: {
                required: true,
                email:true
            },
            password: {
        required: true,
        minlength: 5
      },
      cpassword: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      },
      curl: {
                required: true,
                url:true
            },
            crole:"required",
            ccomment: {
        required: true,
        minlength: 15
            },
            cgender:"required",
      cagree:"required",
        },
        //For custom messages
        messages: {
            uname:{
                required: "Enter a username",
                minlength: "Enter at least 5 characters"
            },
            curl: "Enter your website",
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });



      </script>     
    
</body>

</html>