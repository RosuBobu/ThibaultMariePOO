<html>
    <head>
        <?php include 'parts/stylesheets.html'; ?>
    </head>
    <body>
        <div class="container">

            <h1>&diams;&diams;&diams;Welcome to the Raviole Kingdom ! &diams;&diams;&diams;</h1>

            <a href="../ThibaultMariePOO/index.php?controller=raviole&action=addForm">
                <button style="margin-bottom: 10px;" class="btn btn-primary">Add a raviole recipe !</button>
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
                    <?php 
                   
                        foreach($ravioles as $raviole){
                        
                    ?>
                        <tr>
                            <td><?php echo($raviole->getId());?></td>
                            <td>&#147;<?php echo($raviole->getTitle());?>&#148;</td>
                            <td><?php echo($raviole->getMainIngredient());?></td>
                            <td>
                                <a href="../ThibaultMariePOO/index.php?controller=raviole&action=delete&id=<?php echo($raviole->getId())?>">delete</a>
                                <a href="../ThibaultMariePOO/index.php?controller=raviole&action=updateForm&id=<?php echo($raviole->getId())?>">edit</a>
                            </td>
                        </tr>   
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            include 'parts/scripts.html';
        ?>
    </body>
</html>