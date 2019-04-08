<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-08
     * Time: 16:45
     */
    
    require '../vendor/autoload.php';
    
    $products = ['it\'s', 'a', 'blue', 'da', 'bu', 'di', 'da', 'bu', 'da'];
    
    
    $loader = new Twig_Loader_Filesystem(__DIR__.'/../src/View');
    $twig = new Twig_Environment($loader);
    echo $twig->render("index.html.twig", [ 'products' => $products]);