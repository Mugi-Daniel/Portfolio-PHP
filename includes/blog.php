<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Posts</h1>
              <span class="color-text-a">Grid News</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  News Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">
            <?php
            include("admin/autoload.php");
            $admin = new AdminData();
            $admin->selectBlog();
            foreach ($admin->data as $post):?>
                
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                    <img src="assets/img/blogimg/<?php echo $post['image'];?>" alt="" class="img-b img-fluid"  style="width:100%; height:350px; object-fit: cover; object-position: center;">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                        <a href="?page=myprofile&username=<?php echo $post['id'];?>" class="category-b"><?php echo $post['id'];?></a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                          <a href="?page=myprofile&username=<?php echo $post['id'];?>"><?php echo $post['title'];?>
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2022</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
          
          <?php
          
            //include_once 'includes/pagination.php';
            
          
          ?>
      </div>
    </section>