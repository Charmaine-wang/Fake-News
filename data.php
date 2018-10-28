<?php
declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.
$currentDate = date('l, F d, Y');


$authors = [

        ['id' => '01',
        'name' => ' Märta Göransson ',
        'article' => ['Måndag', 'Fredag']
        ],

        ['id' => '02' ,
        'name' => ' Karin Sten ',
        'article' => ['Tisdag', 'Lördag']
        ],

        ['id' => '03' ,
        'name' => ' Bert Karlsson ',
        'article' => ['Onsdag', 'Söndag']
        ],

        ['id' => '04' ,
        'name' => ' Kerstin Svenning ',
        'article' => ['Torsdag', 'Summer']
        ],
        ['id' => '05' ,
        'name' => ' Lars-Olof Gran ',
        'article' => ['Winter', 'Weekend']
      ]
    ];


$posts = [
 [
   'author' => '01',
   'title' => 'Måndag ',
   'content' => file_get_contents(__DIR__.'/text/mandag.txt'),
	'publishedDate' => '2018-01-01 ',
	'likeCount' => 12
 ],

 [
   'author' => '02',
   'title' => 'Tisdag ',
   'content' => file_get_contents(__DIR__.'/text/tisdag.txt'),
	'publishedDate' => '2018-02-16 ',
	'likeCount' => 78
 ],

 [
   'author' => '03',
   'title' => 'Onsdag ',
   'content' => file_get_contents(__DIR__.'/text/onsdag.txt'),
	'publishedDate' => '2018-03-17 ',
	'likeCount' => 56
 ],
 [
   'author' => '04',
   'title' => 'Torsdag ',
   'content' => file_get_contents(__DIR__.'/text/torsdag.txt'),
	'publishedDate' => '2018-04-23 ',
	'likeCount' => 238
 ],

 [
   'author' => '01',
	'title' => 'Fredag ',
   'content' => file_get_contents(__DIR__.'/text/fredag.txt'),
	'publishedDate' => '2018-06-17 ',
	'likeCount' => 678
 ],
 [
	'author' => '02',
	'title' => 'Lördag ',
	'content' => file_get_contents(__DIR__.'/text/lordag.txt'),
	'publishedDate' => '2018-07-23 ',
	'likeCount' => 90
 ],

 [
	'author' => '03',
	'title' => 'Söndag ',
	'content' => file_get_contents(__DIR__.'/text/sondag.txt'),
	'publishedDate' => '2018-08-17 ',
	'likeCount' => 23
 ],

 [
 'author' => '05',
 'title' => 'Winter',
 'content' => file_get_contents(__DIR__.'/text/winter.txt'),
 'publishedDate' => '2018-09-17 ',
 'likeCount' => 420
 ],
 [
 'author' => '04',
 'title' => 'Summer ',
 'content' => file_get_contents(__DIR__.'/text/summer.txt'),
 'publishedDate' => '2017-03-23 ',
 'likeCount' => 78
 ],

 [
 'author' => '05',
 'title' => 'Weekend ',
 'content' => file_get_contents(__DIR__.'/text/weekend.txt'),
 'publishedDate' => '2016-06-17 ',
 'likeCount' => 88
 ],

 ];
