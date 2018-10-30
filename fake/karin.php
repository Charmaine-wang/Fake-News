<?php
  declare(strict_types=1);

  require __DIR__.'/data.php';
  require __DIR__.'/functions.php';
  require __DIR__.'/header.php'; ?>
<?php foreach ($posts as $post): //Loops over each item in posts array?>
<?php $authorName = getName($post['author'],$authors); ?>
<?php if ($authorName === 'Karin Sten'): ?>
<article>
  <div class="content">
     <h2><?php echo $post['title']?></h2>
     <p><?php echo $post['content']?></p>
     <?php $authorName = getName($post['author'],$authors); ?>
     <h4><?php echo $authorName; ?></h4>
     <p><?php echo $post['publishedDate'];?></p>
     <div class="likeCount">
        <p><?php echo "Likes: ". $post['likeCount'];?></p>
     </div>
  </div>
</article>
<?php endif; ?>
<?php endforeach; ?>
<?php require __DIR__.'/footer.php'; ?>
