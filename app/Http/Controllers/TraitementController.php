<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\semaines;
use App\formation;
use Response;
use Assert\Assertion;
use Assert\AssertionFailedException;

class TraitementController extends Controller
{
  public function index(){
    return view("back.traitement.index");
  }
  public function seedergene(Request $request){
    function CSV($csv_name){
      //vidange fichier
      file_put_contents('txt/seeder.txt', '');
      $counter = 0;
      $counter2 = 13;
      $counter5 = 0;
      $number = 0;

        if (($handle = fopen("csv/" . $csv_name, "r")) !== FALSE) {
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

              $line = "DB::table('semaines')->insert([ " ."\r\n";
              $line .= "'nom'=> '". $data[0]."', "."\r\n";
              $line .= "'num'=> '".$number . "',"."\r\n";
              $line .= "'numsem'=>'".$data[1]."',"."\r\n";
              $line .= "'debut'=>'".$data[2]."',"."\r\n";
              $line .= "'fin'=>'".$data[3]."',"."\r\n";
              $line .= "]);"."\r\n";
              //ecriture dans le fichier
              $texte = file_get_contents('txt/seeder.txt');
              $texte .= "\n" . $line;
              file_put_contents('txt/seeder.txt', $texte);
            }
          }

          fclose($handle);
          unlink(public_path("csv/" . $csv_name));
        }

    }
    //Pour le CSV
    $rand = "fsffds";
    $CSV_upload = $request->file('file');


    if($CSV_upload != NULL){
      if(pathinfo($CSV_upload->getClientOriginalName(), PATHINFO_EXTENSION) != "csv"){
        return view("back.traitement.index")->with('error', "Erreur, Le fichier transmis n'est pas un CSV !");
      }
      // Définition du chemin de stockage
      // Nommage du fichier
      $CSV_nommage = $CSV_upload->getClientOriginalName();
      // On indique le chemin du fichier pour la base de donnée
      $CSV_get = 'CSV/' . $CSV_nommage;
      // Si il y a bien un fichier, on le déplace dans le répertoire et on stock le chemin dans la base de donnée
      if ($CSV_upload) {
        if ($CSV_upload->move('csv', $CSV_nommage)) {
          CSV($CSV_nommage);
        }
      } else {
        return view("back.traitement.index")->with('error', "Erreur l'or de l'envoie du CSV");
      }
    }else {
      return view("back.traitement.index")->with('error', 'Erreur, Aucun CSV transmis');
    }
    return view("back.traitement.index")->with('ok', 'true');
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
  public function getDownload(){
    $file="./txt/seeder.txt";
    return Response::download($file);
  }
    public function set_data(Request $request)
    {

        function CSV($csv_name)
        {
            //vidange fichier
            $counter = 0;
            $counter2 = 13;
            $counter5 = 0;
            $number = 0;
            if (($handle = fopen("csv/" . $csv_name, "r")) !== FALSE) {
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
                                $number = "2";
                                break;
                            case 3:
                                $number = "4";
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
                                $counter3 = $counter3 - 1;
                            } while ($counter3 != 0);
                            $val = 13 - $counter2 - 1;
                            for ($i = 0; $i < $val; $i++) {
                                $number = $number . "0";
                            }
                        } else {
                            $number = $number . "000000000000";
                        }
                        $semaine = new semaines;
                        $semaine->nom = $data[0];
                        $semaine->num = $number;
                        $semaine->numsem = $data[1];
                        $semaine->debut = $data[2];
                        $semaine->fin = $data[3];
                        $semaine->save();
                    }
                }

                fclose($handle);
                unlink(public_path("csv/" . $csv_name));
            }

        }

        //Pour le CSV
        $CSV_upload = $request->file('file');


        if ($CSV_upload != NULL) {
            if (pathinfo($CSV_upload->getClientOriginalName(), PATHINFO_EXTENSION) != "csv") {
                return view("back.traitement.index")->with('error', "Erreur, Le fichier transmis n'est pas un CSV !");
            }
            // Définition du chemin de stockage
            // Nommage du fichier
            $CSV_nommage = $CSV_upload->getClientOriginalName();
            // On indique le chemin du fichier pour la base de donnée
            $CSV_get = 'CSV/' . $CSV_nommage;
            // Si il y a bien un fichier, on le déplace dans le répertoire et on stock le chemin dans la base de donnée
            if ($CSV_upload) {
                if ($CSV_upload->move('csv', $CSV_nommage)) {
                    CSV($CSV_nommage);
                }
            } else {
                return view("back.traitement.index")->with('error', "Erreur l'or de l'envoie du CSV");
            }
        } else {
            return view("back.traitement.index")->with('error', 'Erreur, Aucun CSV transmis');
        }
        return view("back.traitement.index")->with('ok', 'true');
    }



}
