 <div id="wrapper" class="col-md-10">
  <div id="content ">
   
    <h2 class="h2 col-md-12">Add new Comment</h2>
    <div class="col-md-12 articles guest_back">
       
        <form action="" method="post" class="form-inline">
            <fieldset>               
                <label for="guest_name">
                    <input type="text" name="guest_name" class="form-control" placeholder="name">
                </label>          
                <label for="comment">
                    <input type="text" name="comment" class=" form-control" size="100%" placeholder="Your comment here...">
                </label>
				 <button type="submit" name="simon" value="ok" class="btn btn-primary btn-guest">
						add comment
				 </button>
            </fieldset>
        </form>
        
        <div style="background-color:white" class="guest_div">
           
        <?php            
            if(!empty($_POST['simon'])) {
				if(!empty($_POST['guest_name']) && !empty($_POST['comment'])){
					$name = fix_all($_POST['guest_name']);
					$comment = fix_all($_POST['comment']);
					
					if(strlen($name) < 3 || strlen($comment) < 3) {
						$success = false;
						$alert = "Warnign: Your name or comment is incorrect.";
						require_once "block/alert.php";	
					}else {
						$success = addCommentToDB($name, $comment);
						$name = null;
						$comment = null;
					}
				}else{
					$alert = "'name' or 'comment' fields is empty.";
					require_once "block/alert.php";	
				}               
            }
            
            
            $comms = getAllComents();
            foreach($comms as $k => $c) {				
				$c_name = $c['name'];
                $c_comm = $c['comment'];
                echo"
                    <ul>
                        <li>
                        <strong>$c_name:</strong> 
                        <em>$c_comm </em>
                        </li>
                    </ul>
                ";
            }
        ?>
        </div>        
    </div>
</div>
</div>
