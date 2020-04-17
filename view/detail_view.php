<html>
    <head>
        <?php include 'parts/stylesheets.html'; ?>
    </head>
    <body>
        <div class="container">

            <h1>&diams;The Recipe : <?php echo $raviole->getTitle();?> &diams; </h1>
            <a href="../ThibaultMariePOO/index.php?controller=default&action=home">
                <button style="margin-bottom:10px;" class="btn btn-primary">back to dashboard</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Raviole Recipe</th>
                    <th scope="col">Main Ingredient</th>
                    <th scope="col">administration</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><?php echo($raviole->getId());?></td>
                            <td>&#147;<?php echo($raviole->getTitle());?>&#148;</td>
                            <td><?php echo($raviole->getMainIngredient());?></td>
                            <td>
                                <a href="../ThibaultMariePOO/index.php?controller=raviole&action=delete&id=<?php echo($raviole->getId())?>">delete</a>
                                <a href="../ThibaultMariePOO/index.php?controller=raviole&action=updateForm&id=<?php echo($raviole->getId())?>">edit</a>
                            </td>
                        </tr>   
                </tbody>
            </table>
            <div class="container text-center">
                <h3><?php echo($raviole->getTitle());?></h3>
                <u>how it's made :</u>
                <p><?php echo($raviole->getRecipe());?></p>
                <hr>
               <img src="..\ThibaultMariePOO\view\assets\uploads\<?php echo($raviole->getUrl())?>" height="200px" alt="No Image Found">
           
          
          
            </div>

        </div>
        <?php
            include 'parts/scripts.html';
        ?>
    </body>
</html>