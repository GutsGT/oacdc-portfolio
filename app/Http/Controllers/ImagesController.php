<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Image;

class ImagesController extends Controller {
    public function getPicture($fileName){
        return response()->file("/images/{$fileName}");
    }
}
