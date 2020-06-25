<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\semaines;
use App\formation;

class TraitementController extends Controller
{
  public function index(){
    return view("back.traitement.index");
  }
  public function seedergen(){
    return view("back.traitement.index");
  }
  public function traitementimages(){
    function setTransparency($new_image,$image_source)
    {

      $transparencyIndex = imagecolortransparent($image_source);
      $transparencyColor = array('red' => 255, 'green' => 255, 'blue' => 255);

      if ($transparencyIndex >= 0) {
        $transparencyColor    = imagecolorsforindex($image_source, $transparencyIndex);
      }

      $transparencyIndex    = imagecolorallocate($new_image, $transparencyColor['red'], $transparencyColor['green'], $transparencyColor['blue']);
      imagefill($new_image, 0, 0, $transparencyIndex);
      imagecolortransparent($new_image, $transparencyIndex);

    }
    $lessemaines = semaines::All();
    $lesformations = formation::All();
    foreach ($lesformations as $formation) {
      foreach ($lessemaines as $semaine) {
        $image_source = imagecreatefrompng("http://edt.glpmr.info/diplomes/".$formation->idform.$semaine->num.".png");
        $new_image = imagecreatetruecolor(1026, 769);
        setTransparency($new_image,$image_source);
        imagecopyresampled($new_image, $image_source, 0, 0, 0, 0, 1026, 769, 1026, 769);
        imagepng($new_image, './img/' . $formation->idform . $semaine->num . '.png');
        imagedestroy($new_image);
      }
    }
    return view("back.traitement.index");
  }

}
