<?php
echo '<div id="wrapper" class="col-md-10">';
    /*
        ֆունկցիան ճանաչելի է, քանի որ այս ֆայլը կանչվում է all_articles.php-ում, որտեղ ամենասկզբում start.php -ի միջոցով հասանելի է դառնում lib/functions.php - բոլոր ֆունկցիաները պարունակով ֆայլը: P.S. եթե div#wrapper-ը մտցնել $art-փոփոխականի մեջ, այն կկրկնօրինակվի ցիկլի մեջ, որը սխալ է, այն պետք է 1- ը լինի՝ ամենը ընդգրկող: 
    */

    $a_all = getAllArticles();
    //  var_dump($a_all);
    foreach($a_all as $k => $prop) {
        foreach($prop as $i => $value) {
            $id = $prop['id'];
            $title = $prop['title'] ;
            $intro_text = $prop['intro_text'];
            $intro_img_name = $prop['intro_img_name'];
            $intro_img_caption = $prop['intro_img_caption'];
            
        }
$art=<<<arm
	<div id="content">	
		<h2 class="h2 col-md-12">
		   $id $title
        </h2>		
		<div class="col-md-8 articles">
            $intro_text            	
			 <a href="article_1.php?id= $id" class="btn btn-primary" style="margin-bottom:48px"> REVIEW... </a>
		</div>		
		<div class="col-md-4 thumbnail">
			<img src="./images/$intro_img_name" alt="$title">
			<div class="caption">
			    $intro_img_caption			
			</div>
		</div>		
	</div>
arm;
    echo $art;
    }

echo '</div>';
?>