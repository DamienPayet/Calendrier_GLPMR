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
  public function seedergene(Request $request){
    function CSV(){
      $counter = 0;
      $counter2 = 13;
      $counter5 = 0;
      $number = 0;

      if (($handle = fopen("csv/value.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);

          $counter5++;
          if ($counter5 > 1) {
            $counter++;
            switch ($counter) {
              case 1:
              $number = "1";
              $counter2 = $counter2 - 1;
              break;
              case 2:
              $number =  "2";
              break;
              case 3:
              $number =  "4";
              break;
              case 4:
              $number = "8";
              $counter = 0;
              break;
            }
            $counter3 = $counter2;
            if ($counter2 > 0) {
              do {
                $number = "0" . $number;
                $counter3 = $counter3 - 1 ;
              } while ($counter3 != 0);
              $val = 13 - $counter2 -1 ;
              for ($i=0; $i < $val ; $i++) {
                $number =  $number . "0";
              }

            }else{
              $number = $number . "000000000000";
            }
            $line ="   DB::table('semaines')->insert([ " ."\r\n";
            $line .=" 'nom'=> '". $number."', "."\r\n";
            $line .= "'num'=> '".$number . "',"."\r\n";
            $line .= "'numsem'=>'".$number."',"."\r\n";
            $line .= "'debut'=>'".$number."',"."\r\n";
            $line .= "'fin'=>'".$number."',"."\r\n";
            $line .= "]);"."\r\n";
            echo $line;
          }
        }
        fclose($handle);
      }
    }
    //Pour le CSV
    $rand = "fsffds";
    $CSV_upload = $request->file('file');

    if($CSV_upload != NULL){
      // Définition du chemin de stockage
      // Nommage du fichier
      $CSV_nommage = $CSV_upload->getClientOriginalName();
      // On indique le chemin du fichier pour la base de donnée
      $CSV_get = 'CSV\\' . $CSV_nommage;
      // Si il y a bien un fichier, on le déplace dans le répertoire et on stock le chemin dans la base de donnée
      if ($CSV_upload) {
        if ($CSV_upload->move('csv', $CSV_nommage)) {
          CSV();
        }
      } else {
        // ENVOYER UNE ERREUR
      }
    }else {
      //envoyer yne erreur
    }
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
