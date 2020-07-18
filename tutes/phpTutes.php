<?php

  // Constants
  // define('NAME','Dinushi');

  // Strings
  //$name = 'Dinushi';
  // $stringOne = 'my email is';
  // $stringTwo = 'jkdrj02@gmail.com';
  // echo $stringOne." ".$stringTwo;
  // $name = 'Dinushi';
  // echo 'Hey, my name is '.$name;
  // echo "Hey, my name is $name";
  // echo 'Hey, my name is $name';
  // echo "the ninja screamed \"whaaaa\"";
  // echo 'the ninjas screamed "whaaaa"';
  // echo $name[0];
  // echo strlen($name);
  // echo strtoupper($name);
  // echo strtolower($name);
  // echo str_replace('i', 'a', $name);

  // Numbers
  // $radius = 25;
  // $pi = 3.14;
  // echo 2 * (4 + 9) / 3;
  // echo $radius++;
  // echo $radius;
  // $age = 20;
  // $age += 10;
  // echo $age;
  // echo floor($pi);
  // echo ceil($pi);
  // echo pi();

  // Indexed Arrays
  // $peopleOne = ['shaun', 'crystal', 'ryu'];
  // echo $peopleOne[0];
  // $peopleTwo = array('ken', 'chun-li');
  // echo $peopleTwo[1];
  // $ages = [20, 30, 40, 50];
  // print_r($ages);
  // $ages[1] = 25;
  // print_r($ages);
  // $ages[] = 60;
  // print_r($ages);
  // array_push($ages, 70);
  // print_r($ages);
  // echo count($ages);
  // $peopleThree = array_merge($peopleOne, $peopleTwo);
  // print_r($peopleThree);

  // Associative Arrays
  // $ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
  // echo $ninjasOne['mario'];
  // print_r($ninjasOne);
  // $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
  // print_r($ninjasTwo);
  // $ninjasTwo['toad'] = 'pink';
  // print_r($ninjasTwo);
  // $ninjasTwo['peach'] = 'red';
  // print_r($ninjasTwo);
  // echo count($ninjasOne);
  // $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
  // print_r($ninjasThree);

  // Multi-Dimensional Arrays
  // $blogs = [
  //   ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
  //   ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
  //   ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
  // ];
  // print_r($blogs);
  // echo $blogs[1]['author'];
  // echo count($blogs);
  // $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
  // print_r($blogs);
  // $popped = array_pop($blogs);
  // print_r($popped);

  // Loops
  // $ninjas = ['shaun', 'ryu', 'yoshi'];
  // for($i = 0; $i < count($ninjas); $i++){
  //   echo $ninjas[$i].'<br />';
  // }
  // foreach ($ninjas as $ninja) {
  //   echo $ninja.'<br />';
  // }
  $blogs = [
    ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
    ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
    ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
  ];
  // foreach ($blogs as $blog) {
  //   echo $blog['title'].' - '.$blog['author'].'<br />';
  // }
  // $i = 0;
  // while ($i < count($blogs)) {
  //   echo $blogs[$i]['title'];
  //   echo '<br />';
  //   $i++;
  // }

  // Booleans and Comparisons
  // echo true;
  // echo 5 < 10;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Tutorials</title>
  </head>
  <body>
    <h1>Strings</h1>
    <h1>Numbers</h1>
    <br>
    <h1>Arrays</h1>
    <h2>Indexed Arrays</h2>
    <h2>Associative Arrays</h2>
    <h2>Multi-Dimensional Arrays</h2>
    <br>
    <h1>Loops</h1>
    <h2>Blogs</h2>
    <ul>
      <?php
        foreach ($blogs as $blog) {
       ?>
       <h3>
         <?php
         echo $blog['title'];
         ?>
       </h3>
       <p>
         <?php
         echo $blog['likes'];
         ?>
       </p>
       <?php
        }
       ?>
    </ul>
  </body>
</html>
