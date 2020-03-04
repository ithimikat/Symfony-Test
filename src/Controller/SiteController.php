<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    public function index()
    {
        echo "hello i'm index";
    }

    public function show()
    {
        echo "hello i'm show";
    }
}