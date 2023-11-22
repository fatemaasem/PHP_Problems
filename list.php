<?php 
    $userData = [
        'name' => 'Ahmed',
        'job' => 'backend',
        'language' => 'php',
        'framework' => 'laravel',
    ];
    list('framework'=>$framework,'name'=>$name,'job'=>$job,'language'=>$language) = $userData;
    echo $name."<br>";      // Output: Ahmed
    echo $job."<br>";       // Output: backend
    echo $language."<br>";  // Output: php
    echo $framework."<br>"; // Output: laravel
?>