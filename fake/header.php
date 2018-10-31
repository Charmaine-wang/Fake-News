<?php
   require __DIR__.'/data.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Fake-News</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <!---navbar-->
      <nav class="nav-item">
         <form>
            <a class ="nav-link" href="index.php">Fake-News</a>
            <?php foreach ($authors as $author):?>
            <button type="submit" name="author" value="<?php echo $author['name'];?>"><?php echo $author['name'];?></button>
            <?php endforeach;?>
         </form>
      </nav>
      </div> <!---navbar-collapse -->
