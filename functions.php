<?php
  declare(strict_types=1);
  // Function below sorts the posts in "data.php" by date.
  require __DIR__.'/data.php';

  function sortByDate ($a, $b) {
      return strtotime($a['publishedDate']) < strtotime($b['publishedDate']);
  }
  usort($posts, 'sortByDate');
