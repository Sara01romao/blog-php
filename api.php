<?php

include("db_config.php");


$sql_posts="SELECT * From `post`";
$sql_listar = mysqli_query($con, $sql_posts );


if(isset($_POST["novo_post"])) {
    
    $titulo_post = $_POST['titulo_post'];
    $texto_post = $_POST['texto_post'];

   
    $sql_create = "INSERT INTO `post`(`titulo_post`, `texto_post`, `data_post`) 
    VALUES ('$titulo_post', '$texto_post', NOW())";

   
    $result_create = mysqli_query($con, $sql_create);

    
    if($result_create) {
        // echo "Post created successfully!";

        header("Location: index.php?info=add");

        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    
}


if(isset($_REQUEST["id"])) {
    $id=$_REQUEST["id"];

    $sql_view="SELECT * From `post` WHERE  `id_post` = $id ";
    $result_view = mysqli_query($con, $sql_view );
}


if(isset($_POST["editar_post"])) {

    $id_post=$_POST["id_post"];
    $titulo_post = $_POST['titulo_post'];
    $texto_post = $_POST['texto_post'];

    $sql_editar="UPDATE `post` SET `titulo_post`= '$titulo_post', `texto_post` = '$texto_post', `data_post`= NOW() WHERE `id_post` = $id ";
     $result_editar = mysqli_query($con, $sql_editar );

    
}

?>
