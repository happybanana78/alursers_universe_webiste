<?php

namespace App\Http\Controllers;

use App\libraries\Slider;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index() {
        $slider = new Slider();
        $slider->setPath("images/bloobs/*");
        return view("main", [
            "files" => $slider->getFiles()
        ]);
    }
}
