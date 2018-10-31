<?php
  declare(strict_types=1);
  // Function below sorts the posts in "data.php" by date.

  /**
   * sortDates Callback function that is used for uSort, sorts two dates at a time
   * @param  array $a The first $posts
   * @param  array $b The second posts
   * @return int    Returns the correct sort
   */
    function sortByDate ($a, $b) {
      return strtotime($a['publishedDate']) < strtotime($b['publishedDate']);

}

  /**
   * getUser Fetches a user's data array using a unique userId
   * @param  int $searchId, userId which is searched for
   * @param  array  $authors, List of all users and their information
   * @return string $author, Returns the user's data array
   */

   // a function to search for the authors name .
   function getName(string $searchId, array $authors): string {
   		foreach ($authors as $author) {
   				$id = $author ['name'];
   					if ($id == $searchId) {
   						return $author ['name'];
   					}
   		}

   };

function getPost(array $items, string $author): array{
  $items = array_filter($items, function($item) use($author){
    return $item['author'] === $author;
});
  return $items;
};
