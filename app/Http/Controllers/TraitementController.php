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
public function start(){
  $lessemaines = semaines::All();
  $lesformations = formation::All();
/*  foreach ($lesformations as $formation) {
    foreach ($lessemaines as $semaine) {*/
    //  $source="http://edt.glpmr.info/diplomes/".$formation->idform.$semaine->num.".png";
      $destination="test.png";



     // Enregistrer l'image
     $url = "http://www.manuelphp.com/graphisme/logo.gif";
     // Ouvre un fichier pour lire un contenu existant

 $img = '/my/folder/flower.gif';
 file_put_contents($img, file_get_contents($url));
//  }

  return view("back.traitement.index");
}
}
