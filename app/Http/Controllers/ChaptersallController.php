<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ChaptersallController extends Controller
{
    public function Chaptersall($number)
    {
        return view('chapters.Chapter' .$number);
    }
}
 