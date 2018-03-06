<?PHP include('header.php') ?>
  <!-- END HEADER -->

<?PHP 
    include './php/classes/Admin.php';
    $post=new Admin();
    $data=$post->view_all_post();
?>

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?PHP include('left_sidebar.php') ?>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Basic Tables</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="#">Manage Post</a></li>
                   
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <h5 class="header">Manage Post</h5>
            <div class="divider" style="text-align: center;"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
      
              <div class="row">
                
                <div class="col s12 m12 l12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Writer Name</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Publication</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>Writer Name</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Publication</th>                            
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        
                        <?PHP 
                        while ($row= mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?PHP echo $row['name'] ?></td>
                            <td><?PHP echo $row['title'] ?></td>
                            <td><?PHP echo $row['date'] ?></td>
                            <td>
                                <?PHP  if($row['status']==0){
                                    ?>
                                   <a href="update_publication_status.php?id=<?PHP echo $row['id'] ?>&& status=<?PHP echo $row['status'] ?>"><button class="btn btn-large waves-effect waves-light red darken-4 ">Unpublished</button> </a> 
                                <?PHP }
                                   else{
                                       ?>
                                    <a href="update_publication_status.php?id=<?PHP echo $row['id'] ?>&& status=<?PHP echo $row['status'] ?>"><button class="btn btn-large waves-effect waves-light light-green darken-4 ">published</button> </a> 
                                    <?PHP 
                                } ?>
                                </td>                           
                            <td><a href=""><button class="btn waves-effect waves-light ">Edit</button> </a>
                                 
                                <a href="delete_post.php?id=<?PHP echo $row['id'] ?>&&image=<?PHP echo $row['image'] ?>" ><button class="btn waves-effect waves-light " onclick="return confirm('Are you sure you want to delete this item?');">Delete</button> </a>

                            </td>
                        </tr>
                        
                        <?PHP } ?>
                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
           


           
          </div>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
 
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->


  <!-- START FOOTER -->
  <?PHP include './footer.php'; ?>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });
        });
    </script>
</body>

</html>