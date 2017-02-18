<?php

$mysqli = false;
function connectDB(){
    global $mysqli;
    $mysqli = new mysqli("localhost", "jim","mypasswd", "dynamic.site");
    $q_set = "SET NAMES 'utf-8'";
    $r_set = $mysqli->query($q_set);
}

function getAllArticles(){    
    global $mysqli;
    connectDB();
    
    $q_all = "SELECT * FROM articles";
    $r_all = $mysqli->query($q_all);
    if(!$r_all) die($mysqli->error);
    $num_rows = $r_all->num_rows;
    
    /* դեպի-> all_articles_list.php , չնայած start.php-ի միձոցով գլոբալ հասանելիա,
    բայց կօգտագործվի նշվածում: */
    return $r_all;
    
    closeDB();
}

function getArticleById($id){
    global $mysqli;
    connectDB();
    $q_one = "SELECT * FROM `articles` WHERE `id` = '$id' ";
    $r_one = $mysqli->query($q_one);
    
    while(($row_one = $r_one->fetch_assoc()) != false) {
        return $row_one;
    }
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

?>