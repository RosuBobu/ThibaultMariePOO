<html>
<head>
    <?php
        include 'parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Modify a recipe => <?php echo $raviole->getTitle();?></h1> 

    <a href="../ThibaultMariePOO/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">back to dashboard</button>
    </a>

    <form method="post" action="index.php?controller=raviole&action=updateRaviole&id=<?php echo $raviole->getId()?>">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $raviole->getTitle()?>">
        <label>Main ingredient of recipe</label>
        <input type="text" name="main_ingredient" class="form-control" value="<?php echo $raviole->getMainIngredient()?>">
        <label>How it's done : </label>
        <textarea name="recipe" class="form-control" value="<?php echo $raviole->getRecipe()?>"></textarea>
        <label>New image of recipe</label>
        <input type="file">
        <input class="btn btn-primary" type="submit" value="SEND RECIPE !">
    </form>
</div>
<?php
include 'parts/scripts.html'
?>
</body>
</html>