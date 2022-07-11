
          

          <div class="middlecolumn">
           
    <?php
    include('includes/database.php');

    $get_posts = "select * from posts";

    $run_posts = mysqli_query($conn,$get_posts);
      
    
        
    while($row_posts=mysqli_fetch_array($run_posts)){

        $post_id = $row_posts['post_id'];
        $post_title = $row_posts['post_title'];
        $post_date = $row_posts['post_date'];
        $post_author = $row_posts['post_author'];
        $post_image = $row_posts['post_image'];
        $post_content = $row_posts['post_content'];

        
        echo "  
            <div class='card'>
                <h2>$post_title</h2>
                 <h5>$post_author</h5>
                <h5>$post_date</h5>
                
                <div><img src='admin/fresh_images/$post_image'></div>
               
                <p>$post_content</p>
                
            </div>";
    
    }
    ?>
            
        </div>