<?php
include('conn.php');
   //the page you are currently in.
          if(isset($_GET['pg'])){
              $pg = $_GET['pg'];
              
          } else {
              $pg = 1;
          }
          //how many results you want per page.
          $results_per_page = 3;
          
           //determine the limit starting number.
          $this_page_first_result =($pg-1) * $results_per_page;
          
          //number of results in the database.
          $sql = "SELECT * FROM posts LIMIT". $this_page_first_result. ",". $results_per_page;
          $result = mysqli_query($conn, $sql);
          $number_of_results = mysqli_num_rows($result);
          
          while ($rows = mysqli_fetch_array($result)){
              echo $rows['id'];
          }
          
          //number of pages available.
          $number_of_pages = ceil($number_of_results/$results_per_page);
          
         
          
         
          //links of the pages.
          for($page=1;$page<=$number_of_pages;$page++){
              echo '<a href="blog.php?page=' . $pg . '">'. $pg. '</a>';
          }

