<?php
include("api.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Blog</title>

</head>
<body>
    
 
    <div class="container mt-5">

       <?php if(isset($_REQUEST['info'])) {?>
            <?php if($_REQUEST['info'] == "add") {?>
                
                <div class="alert alert-success" role="alert">
                    Post Adicionado com sucesso

                </div>
    
            <?php } ?>
 
       <?php } ?>
        
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">Cria Novo Post</a>

        </div>


        <div class="row">

        <?php foreach($sql_listar as $item_post) { ?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width:18rem;">

                            <h4><?php echo $item_post['titulo_post'];?></h4>
                            <p><?php echo $item_post['texto_post'];?></p>
                        </div>

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