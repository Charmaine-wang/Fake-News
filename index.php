<?php
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
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
        <a class ="nav-link" href="http://www.w3schools.com/css/css_navbar.asp">Märta Göransson</a>
        <a class ="nav-link" href="https://www.google.se/?gws_rd=cr&ei=z0DuV4-zNIOrswGio4LYBQ">Karin Sten</a>
        <a class ="nav-link" href="http://www.aftonbladet.se/">Bert Karlsson</a>
        <a class ="nav-link" href="http://www.gp.se/">Kerstin Svenning</a>
        <a class ="nav-link" href="http://www.gp.se/">Lars-Olof Gran</a>
        </nav>


      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div> <!---navbar-collapse -->
  </nav> <!--navbar-->


     <?php
      foreach ($posts as $post):?>




      <article>
        <div class="content">
        <h2><?php echo $post['title']?></h2>
          <p><?php echo $post['content']?></p>
          <?php foreach ($authors as $author) :?>
          <h4><?php if ($post['author'] === $author['id']) {
                echo $author['name'];
          }
        endforeach; ?></h4>

        <p><?php echo $post['publishedDate'];?></p>

            <div class="likeCount">
              <p><?php echo "Likes: " . $post['likeCount'];?></p>
            </div>
          </div>
        </article>

    <?php endforeach; ?>

    </body>
</html>
