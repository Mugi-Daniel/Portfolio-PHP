<?php
$title = "CONTACT LIST";
include_once 'includes/conn.php';
   include 'autoload.php';
   
   $admin = new AdminData();
   
   if(isset($_POST["title"]) && isset($_POST['details'])){
       $admin->title = mysqli_real_escape_string($conn, filter_input(INPUT_POST, "title"));
       $admin->details = mysqli_real_escape_string($conn,$_POST["details"]);
       $file = $_FILES["image"];
      
       
       $fileName = $_FILES["image"]["name"];
       $fileTmpName = $_FILES["image"]["tmp_name"];
       $fileSize = $_FILES["image"]["size"];
       $fileError = $_FILES["image"]["error"];
       $fileType = $_FILES["image"]["type"];
       
       
       $fileExt = explode('.', $fileName);
       $fileActualExt = strtolower(end($fileExt));
       
       $allowed = array('jpg', 'jpeg', 'png', 'pdf');
       if(in_array($fileActualExt, $allowed)){
           if($fileSize < 20000000){
                $admin->fileNameNew = md5(rand(1000,20000)).$fileName;
                $fileDestination = '../assets/img/blogimg/'.$admin->fileNameNew;
                if(move_uploaded_file($fileTmpName,$fileDestination)){
                    $admin->addBlog();
                } else {
                   echo '<script>alert("Something is not right");</script>'; 
                }


            }else{
                
                echo '<script>alert("File is too large");</script>';
            }
           
       }else{
           echo '<script>alert("invalid datatype");</script>';
       }
       
       
   }
?>
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-6">
            <h3>Add Post</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Blog</li>
            </ol>
          </div>
          <div class="col-6">
            <!-- Bookmark Start-->
            <div class="bookmark pull-right">
              <ul>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form" action="#" method="get">
                    <div class="form-group form-control-search">
                      <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                          <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                          <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                        </div>
                        <div class="Typeahead-menu"></div>
                        <script id="result-template" type="text/x-handlebars-template">
                          <div class="ProfileCard u-cf">                        
                          <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                          <div class="ProfileCard-details">
                          <div class="ProfileCard-realName">{{name}}</div>
                          </div>
                          </div>
                        </script>
                        <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Adding Blog</h5>
            </div>
            <div class="card-body add-post">
                <form class="row needs-validation" method="post" enctype="multipart/form-data" action="" name="blog-form" >
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="validationCustom01"> Blog Title:</label>
                    <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" required="" name="title">
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                    <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Enter some Details</label>
                      <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="details"></textarea>
                    </div>
                  </div>
                </div>

                    <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label>Select Image</label><br>
                        <input type="file" name="image" required="required">
                    </div>
                  </div>
                </div>     
              <div class="btn-showcase">
                <button class="btn btn-primary" type="submit" name="submit">Post</button>
                <input class="btn btn-light" type="reset" value="Discard" name="reset">
              </div>
            </div>
          </div>
         </form> 
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
