<html>
    <head>
        <?php include 'parts/stylesheets.html'; ?>
    </head>
    <body>
        <div class="container">
            <h1>Add a Raviole Recipe !</h1>
            <a href="../ThibaultMariePOO/index.php?controller=default&action=home">
                <button style="margin-bottom:10px;" class="btn btn-primary">back to dashboard</button>
            </a>

            <form method="POST" action="index.php?controller=raviole&action=addRaviole" enctype="multipart/form-data"> 
                <label>Title</label>
                <input required type="text" name="title" class="form-control">
                <label>Main ingredient of recipe</label>
                <input required type="text" name="main_ingredient" class="form-control">
                <label>How it's done : </label>
                <textarea name="recipe" class="form-control" placeholder="describe the process"></textarea>
                <label>image of your work !</label>
                <input type="file" class="form-control" name="url" accept="image/png, image/jpeg"><br>
                <input class="btn btn-primary" type="submit" value="SEND RECIPE !">
            </form>
        </div>
        <?php
            include 'parts/scripts.html';
        ?>
    </body>
</html>