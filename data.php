<?php
declare(strict_types=1);
require __DIR__.'/functions.php';
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [

        ['id' => 'Märta',
        'name' => ' Märta Göransson ',
        'article' => ['Måndag', 'Fredag']
        ],

        ['id' => 'Karin' ,
        'name' => ' Karin Sten ',
        'article' => ['Tisdag', 'Lördag']
        ],

        ['id' => 'Bert' ,
        'name' => ' Bert Karlsson ',
        'article' => ['Onsdag', 'Söndag']
        ],

        ['id' => 'Kerstin' ,
        'name' => ' Kerstin Svenning ',
        'article' => ['Torsdag', 'Summer']
        ],
        ['id' => 'Lars' ,
        'name' => ' Lars-Olof Gran ',
        'article' => ['Winter', 'Weekend']
      ]
    ];


$posts = [
 [
   'author' => 'Märta',
   'title' => 'Måndag ',
   'content' => file_get_contents(__DIR__.'/text/mandag.txt'),
	'publishedDate' => '2018-01-01 ',
	'likeCount' => 12
 ],

 [
   'author' => 'Karin',
   'title' => 'Tisdag ',
   'content' => file_get_contents(__DIR__.'/text/tisdag.txt'),
	'publishedDate' => '2018-02-16 ',
	'likeCount' => 78
 ],

 [
   'author' => 'Bert',
   'title' => 'Onsdag ',
   'content' => file_get_contents(__DIR__.'/text/onsdag.txt'),
	'publishedDate' => '2018-02-17 ',
	'likeCount' => 56
 ],
 [
   'author' => 'Kerstin',
   'title' => 'Torsdag ',
   'content' => file_get_contents(__DIR__.'/text/torsdag.txt'),
	'publishedDate' => '2018-05-23 ',
	'likeCount' => 238
 ],

 [
   'author' => 'Märta',
	'title' => 'Fredag ',
   'content' => file_get_contents(__DIR__.'/text/fredag.txt'),
	'publishedDate' => '2018-05-17 ',
	'likeCount' => 678
 ],
 [
	'author' => 'Karin',
	'title' => 'Lördag ',
	'content' => file_get_contents(__DIR__.'/text/lordag.txt'),
	'publishedDate' => '2018-03-23 ',
	'likeCount' => 90
 ],

 [
	'author' => 'Bert',
	'title' => 'Söndag ',
	'content' => file_get_contents(__DIR__.'/text/sondag.txt'),
	'publishedDate' => '2018-06-17 ',
	'likeCount' => 23
 ],

 [
 'author' => 'Lars',
 'title' => 'Winter',
 'content' => file_get_contents(__DIR__.'/text/winter.txt'),
 'publishedDate' => '2018-05-17 ',
 'likeCount' => 420
 ],
 [
 'author' => 'Kerstin',
 'title' => 'Summer ',
 'content' => file_get_contents(__DIR__.'/text/summer.txt'),
 'publishedDate' => '2018-03-23 ',
 'likeCount' => 78
 ],

 [
 'author' => 'Lars',
 'title' => 'Weekend ',
 'content' => file_get_contents(__DIR__.'/text/weekend.txt'),
 'publishedDate' => '2018-06-17 ',
 'likeCount' => 88
 ],

 ];
