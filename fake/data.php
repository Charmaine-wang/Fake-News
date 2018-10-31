<?php
declare(strict_types=1);
require __DIR__.'/functions.php';
  // Data array containing authors names and user IDs
$authors = [

  [
  'id' => 1,
  'name' => 'Märta Göransson',
  'article' => ['Måndag', 'Fredag']
  ],

  [
  'id' => 2 ,
  'name' => 'Karin Sten',
  'article' => ['Tisdag', 'Lördag']
  ],

  [
  'id' => 3 ,
  'name' => 'Bert Karlsson',
  'article' => ['Onsdag', 'Söndag']
  ],

  [
  'id' => 4 ,
  'name' => 'Kerstin Svenning',
  'article' => ['Torsdag', 'Summer']
  ],

  [
  'id' => 5 ,
  'name' => 'Lars-Olof Gran',
  'article' => ['Winter', 'Weekend']
      ]
    ];

  // Data array containing information and content
$posts = [
 [
  'author' => $authors[0]['name'],
  'title' => 'Måndag ',
  'content' => file_get_contents(__DIR__.'/text/mandag.txt'),
	'publishedDate' => '2018-01-01 ',
	'likeCount' => 12
 ],

 [
  'author' => $authors[1]['name'],
  'title' => 'Tisdag ',
  'content' => file_get_contents(__DIR__.'/text/tisdag.txt'),
	'publishedDate' => '2018-02-16 ',
	'likeCount' => 78
 ],

 [
  'author' => $authors[2]['name'],
  'title' => 'Onsdag ',
  'content' => file_get_contents(__DIR__.'/text/onsdag.txt'),
	'publishedDate' => '2018-03-17 ',
	'likeCount' => 56
 ],
 [
  'author' => $authors[3]['name'],
  'title' => 'Torsdag ',
  'content' => file_get_contents(__DIR__.'/text/torsdag.txt'),
	'publishedDate' => '2018-04-23 ',
	'likeCount' => 238
 ],

 [
  'author' => $authors[0]['name'],
	'title' => 'Fredag ',
  'content' => file_get_contents(__DIR__.'/text/fredag.txt'),
	'publishedDate' => '2018-06-17 ',
	'likeCount' => 678
 ],
 [
	'author' => $authors[1]['name'],
	'title' => 'Lördag ',
	'content' => file_get_contents(__DIR__.'/text/lordag.txt'),
	'publishedDate' => '2018-07-23 ',
	'likeCount' => 90
 ],

 [
	'author' => $authors[2]['name'],
	'title' => 'Söndag ',
	'content' => file_get_contents(__DIR__.'/text/sondag.txt'),
	'publishedDate' => '2018-08-17 ',
	'likeCount' => 23
 ],

 [
 'author' => $authors[4]['name'],
 'title' => 'Winter',
 'content' => file_get_contents(__DIR__.'/text/winter.txt'),
 'publishedDate' => '2018-09-17 ',
 'likeCount' => 420
 ],
 [
 'author' => $authors[3]['name'],
 'title' => 'Summer ',
 'content' => file_get_contents(__DIR__.'/text/summer.txt'),
 'publishedDate' => '2017-03-23 ',
 'likeCount' => 78
 ],

 [
 'author' => $authors[4]['name'],
 'title' => 'Weekend ',
 'content' => file_get_contents(__DIR__.'/text/weekend.txt'),
 'publishedDate' => '2016-06-17 ',
 'likeCount' => 88
 ],

 ];
  usort($posts, 'sortByDate');

if (isset($_GET['author'])){
  $sortOut = $_GET['author'];
  $posts = getPost($posts, $sortOut);
}
