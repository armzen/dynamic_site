<?php

$id = $_GET['id'];
$r_one = getArticleById($id);

$title = $r_one['title'];
$full_text = $r_one['full_text'];
$full_img_name=$r_one['full_img_name'];
//echo '<pre>';
//print_r($r_one);
//echo '<pre>';


$one_art=<<<arm
<div id="wrapper" class="col-md-10">
<div id="content">

    <h2 class="h2 col-md-12">$id. $title. PRODUCT HIGHLIGHTS</h2>        
        <div class="col-md-7 articles_full_i">
            $full_text
		</div>
    <div class="col-md-5 thumbnail">
        <img src="./images/$full_img_name" alt="$title">
    </div>
</div>
</div>
arm;
echo $one_art;
?>