<?php
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
require __DIR__.'/header.php'; ?>

<?php foreach ($posts as $post): //Loops over each item in posts array?>

  <article>
    <div class="content">
      <h2><?php echo $post['title']?></h2>
      <p><?php echo $post['content']?></p>
       <?php foreach ($authors as $author) : //Loops over each item authors array ?>
        <?php if ($post['author'] === $author['id']): //if author and id is the same echo authors name ?>
      <h4><?php echo 'Author: '. $author['name']; ?></h4>
        <?php endif; ?>
       <?php endforeach; ?>
      <p><?php echo $post['publishedDate'];?></p>
        <div class="likeCount">
          <p><?php echo "Likes: ". $post['likeCount'];?></p>
        </div>
    </div>
  </article>

<?php endforeach; ?>

<?php require __DIR__.'/footer.php'; ?>
