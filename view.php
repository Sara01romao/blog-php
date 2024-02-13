<?php
include("api.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Blog View</title>

</head>
<body>
    
 
    <div class="container mt-5">

      


        <div class="row">

            <?php foreach($result_view  as $view) { ?>
                    <div class=" d-flex justify-content-center align-items-center">

                    <a  class="btn btn-success" href="editar.php?id=<?php echo $view['id_post'];?>">Editar</a>
                    
                    <form  action="api.php" method="POST">
                        <input type="text" hidden name="id" value="<?php echo $view['id_post']; ?>">

                        <button type="submit" class="btn btn-danger ml-5" name="deletar">Remover</button >
                    </form>
                    


                       <div>
                        <h1><?php echo $view['titulo_post'];?></h1>

                        <p><?php echo $view['texto_post'];?></p>
                       </div>
                        
                        
                    </div>

            <?php }?>

       </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>