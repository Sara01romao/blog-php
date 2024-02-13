<?php
include("api.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Editar Post</title>
</head>
<body>

  
    <div class="container mt-5">
       
        <?php foreach($result_view  as $view) { ?>

        <form method="POST">
            
            <input type="text" name="id_post" hidden value="<?php echo $view['id_post'];?>">

            <input type="text" name="titulo_post" value="<?php echo $view['titulo_post'];?>" placeholder="Títudo do Blog" class="form-control bg-dark textwhite my-3">

            <textarea  name="texto_post"  class="form-control bg-dark text-white my-3"  cols="30" rows="10"><?php echo $view['texto_post'];?></textarea>

            <button name="editar_post" class="btn btn-dark">Editar Post</button>

        </form>
    
        <?php }?>

       
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>