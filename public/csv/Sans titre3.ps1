
Set-Location "C:\Users\payetd\Desktop\scriptphp"

$csvImport = Import-Csv "value.csv"
$counter = 0
$counter2 = 13
$number = 0

ForEach ($item in $csvImport)

{

$counter ++

$item

Switch ($counter)
    {
    
    1{$number = 1
    $counter2 = $counter2 - 1
    }

    2{$number = 2}

    3{$number = 4}

    4{$number = 8
      $counter = 0
      }

    }

    $counter3 = $counter2
    if ($counter2 -ne 0){
       Do{
       $number = '0'+$number
       $counter3 = $counter3 - 1
       }Until($counter3 -eq 0)
       $val = 12 - $counter2 - 1
       For($i=0 ;$i -le $val  ;$i++) 
        { 
          $number = $number + '0'
        }
      $line =    "   DB::table('semaines')->insert([
        'nom'=> '"+$name+"',
        'num'=> '"+$number+ "',
        'numsem'=>'$num',
        'debut'=>'$debut',
        'fin'=>'$fin',
      ]);"
    }else {
    
      $line =    "   DB::table('semaines')->insert([
        'nom'=> '"+$name+"',
        'num'=> '"+$number+ "00000000000',
        'numsem'=>'$num',
        'debut'=>'$debut',
        'fin'=>'$fin',
      ]);"
        
    }
   ADD-content -path "seederdb.txt" -value $line 
}