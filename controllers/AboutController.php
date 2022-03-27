<?php

/**

 */

namespace app\controllers;


use rhinophp\rhinophp\Controller;

/**
 * Class AboutController
 *
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}