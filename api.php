<?php

include("db_config.php");


$sql_posts="SELECT * From `post`";
$sql_listar = mysqli_query($con, $sql_posts );


if(isset($_POST["novo_post"])) {
    
    $titulo_post = $_POST['titulo_post'];
    $texto_post = $_POST['texto_post'];

   
    $sql_create = "INSERT INTO `post`(`titulo_post`, `texto_post`, `data_post`) 
    VALUES ('titulo_post', '$texto_post', NOW())";

   
    $result_create = mysqli_query($con, $sql_create);

    
    if($result_create) {
        // echo "Post created successfully!";

        header("Location: index.php?info=add");

        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    
}
?>
