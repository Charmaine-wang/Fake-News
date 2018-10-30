<?php
declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__.'/header.php';?>

<?php foreach ($posts as $post):?>
  <article>
    <div class="content">
      <h2><?php echo $post['title']?></h2>
      <p><?php echo $post['content']?></p>
       <?php foreach ($authors as $author) :?>
        <?php if ($post['author'] === $author['id']): ?>
      <h4><?php echo 'Author: '. $author['name']; ?></h4>
        <?php endif; ?>
       <?php endforeach; ?>
      <p><?php echo $post['publishedDate'];?></p>
        <div class="likeCount">
          <p><?php echo "Likes: " . $post['likeCount'];?></p>
        </div>
    </div>
  </article>

<?php endforeach; ?>

<?php require __DIR__.'/footer.php';
