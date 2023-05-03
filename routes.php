<?php

    $router->define([
        '' => 'view\home.php',
        'about' => 'view\about.php',
        'contact' => 'view\contact.php',
        'laplaceview' => 'view\function\laplace.view.php',
        // for controllers
        'laplacefunction' =>'controller\lapalace_transform.controller.php'
    ]);