<?php
// Include database configuration file
include("db_config.php");

// Check if a new post form is submitted
if(isset($_POST["novo_post"])) {
    // Retrieve and sanitize post title and text
    $titulo_post = $_POST['titulo_post'];
    $texto_post = $_POST['texto_post'];

   
    $sql_post = "INSERT INTO `post`(`titulo_post`, `texto_post`, `data_post`) 
    VALUES ('titulo_post', '$texto_post', NOW())";

   
    $result_create = mysqli_query($con, $sql_post);

    
    if($result_create) {
        // echo "Post created successfully!";

        header("Location: index.php?info=add");

        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    
}
?>
