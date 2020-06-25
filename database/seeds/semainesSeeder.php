<?php

use Illuminate\Database\Seeder;

class semainesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('semaines')->insert([
       'nom'=> 'du 19 au 24 ao?t 2019',
       'num'=> '0000000000001',
       'numsem'=>'semaine 34',
       'debut'=>'19/08/2019',
       'fin'=>'25/08/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 26 au 31 ao?t 2019',
       'num'=> '0000000000002',
       'numsem'=>'semaine 35',
       'debut'=>'26/08/2019',
       'fin'=>'01/09/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 2 au 7 septembre 2019',
       'num'=> '0000000000004',
       'numsem'=>'semaine 36',
       'debut'=>'02/09/2019',
       'fin'=>'08/09/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 9 au 14 septembre 2019',
       'num'=> '0000000000008',
       'numsem'=>'semaine 37',
       'debut'=>'09/09/2019',
       'fin'=>'15/09/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 16 au 21 septembre 2019',
       'num'=> '0000000000010',
       'numsem'=>'semaine 38',
       'debut'=>'16/09/2019',
       'fin'=>'22/09/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 23 au 28 septembre 2019',
       'num'=> '0000000000020',
       'numsem'=>'semaine 39',
       'debut'=>'23/09/2019',
       'fin'=>'29/09/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 30 septembre au 5 octobre 2019',
       'num'=> '0000000000040',
       'numsem'=>'semaine 40',
       'debut'=>'30/09/2019',
       'fin'=>'06/10/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 7 au 12 octobre 2019',
       'num'=> '0000000000080',
       'numsem'=>'semaine 41',
       'debut'=>'07/10/2019',
       'fin'=>'13/10/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 14 au 19 octobre 2019',
       'num'=> '0000000000100',
       'numsem'=>'semaine 42',
       'debut'=>'14/10/2019',
       'fin'=>'20/10/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 21 au 26 octobre 2019',
       'num'=> '0000000000200',
       'numsem'=>'semaine 43',
       'debut'=>'21/10/2019',
       'fin'=>'27/10/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 28 octobre au 2 novembre 2019',
       'num'=> '0000000000400',
       'numsem'=>'semaine 44',
       'debut'=>'28/10/2019',
       'fin'=>'03/11/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 4 au 9 novembre 2019',
       'num'=> '0000000000800',
       'numsem'=>'semaine 45',
       'debut'=>'04/11/2019',
       'fin'=>'10/11/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 11 au 16 novembre 2019',
       'num'=> '0000000001000',
       'numsem'=>'semaine 46',
       'debut'=>'11/11/2019',
       'fin'=>'17/11/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 18 au 23 novembre 2019',
       'num'=> '0000000002000',
       'numsem'=>'semaine 47',
       'debut'=>'18/11/2019',
       'fin'=>'24/11/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 25 au 30 novembre 2019',
       'num'=> '0000000004000',
       'numsem'=>'semaine 48',
       'debut'=>'25/11/2019',
       'fin'=>'01/12/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 2 au 7 d?cembre 2019',
       'num'=> '0000000008000',
       'numsem'=>'semaine 49',
       'debut'=>'02/12/2019',
       'fin'=>'08/12/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 9 au 14 d?cembre 2019',
       'num'=> '0000000010000',
       'numsem'=>'semaine 50',
       'debut'=>'09/12/2019',
       'fin'=>'15/12/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 16 au 21 d?cembre 2019',
       'num'=> '0000000020000',
       'numsem'=>'semaine 51',
       'debut'=>'16/12/2019',
       'fin'=>'22/12/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 23 au 28 d?cembre 2019',
       'num'=> '0000000040000',
       'numsem'=>'semaine 52',
       'debut'=>'23/12/2019',
       'fin'=>'29/12/2019',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 30 d?cembre 2019 au 4 janvier 2020',
       'num'=> '0000000080000',
       'numsem'=>'semaine 01',
       'debut'=>'30/12/2019',
       'fin'=>'05-janv-20',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 6 au 11 janvier 2020',
       'num'=> '0000000100000',
       'numsem'=>'semaine 02',
       'debut'=>'06/01/2020',
       'fin'=>'12/01/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 13 au 18 janvier 2020',
       'num'=> '0000000200000',
       'numsem'=>'semaine 03',
       'debut'=>'13/01/2020',
       'fin'=>'19/01/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 20 au 25 janvier 2020',
       'num'=> '0000000400000',
       'numsem'=>'semaine 04',
       'debut'=>'20/01/2020',
       'fin'=>'26/01/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 27 janvier au 1 f&eacutevrier 2020',
       'num'=> '0000000800000',
       'numsem'=>'semaine 05',
       'debut'=>'27/01/2020',
       'fin'=>'02/02/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 3 au 8 f?vrier 2020',
       'num'=> '0000001000000',
       'numsem'=>'semaine 06',
       'debut'=>'03/02/2020',
       'fin'=>'09/02/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 10 au 15 f?vrier 2020',
       'num'=> '0000002000000',
       'numsem'=>'semaine 07',
       'debut'=>'10/02/2020',
       'fin'=>'16/02/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 17 au 22 f?vrier 2020',
       'num'=> '0000004000000',
       'numsem'=>'semaine 08',
       'debut'=>'17/02/2020',
       'fin'=>'23/02/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 24 au 29 f?vrier 2020',
       'num'=> '0000008000000',
       'numsem'=>'semaine 09',
       'debut'=>'24/02/2020',
       'fin'=>'01/03/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 2 au 7 mars 2020',
       'num'=> '0000010000000',
       'numsem'=>'semaine 10',
       'debut'=>'02/03/2020',
       'fin'=>'08/03/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 9 au 14 mars 2020',
       'num'=> '0000020000000',
       'numsem'=>'semaine 11',
       'debut'=>'09/03/2020',
       'fin'=>'15/03/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 16 au 21 mars 2020',
       'num'=> '0000040000000',
       'numsem'=>'semaine 12',
       'debut'=>'16/03/2020',
       'fin'=>'22/03/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 23 au 28 mars 2020',
       'num'=> '0000080000000',
       'numsem'=>'semaine 13',
       'debut'=>'23/03/2020',
       'fin'=>'29/03/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 30 mars au 4 avril 2020',
       'num'=> '0000100000000',
       'numsem'=>'semaine 14',
       'debut'=>'30/03/2020',
       'fin'=>'05/04/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 6 au 11 avril 2020',
       'num'=> '0000200000000',
       'numsem'=>'semaine 15',
       'debut'=>'06/04/2020',
       'fin'=>'12/04/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 13 au 18 avril 2020',
       'num'=> '0000400000000',
       'numsem'=>'semaine 16',
       'debut'=>'13/04/2020',
       'fin'=>'19/04/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 20 au 25 avril 2020',
       'num'=> '0000800000000',
       'numsem'=>'semaine 17',
       'debut'=>'20/04/2020',
       'fin'=>'26/04/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 27 avril au 2 mai 2020',
       'num'=> '0001000000000',
       'numsem'=>'semaine 18',
       'debut'=>'27/04/2020',
       'fin'=>'03/05/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 4 au 9 mai 2020',
       'num'=> '0002000000000',
       'numsem'=>'semaine 19',
       'debut'=>'04/05/2020',
       'fin'=>'10/05/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 11 au 16 mai 2020',
       'num'=> '0004000000000',
       'numsem'=>'semaine 20',
       'debut'=>'11/05/2020',
       'fin'=>'17/05/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 18 au 23 mai 2020',
       'num'=> '0008000000000',
       'numsem'=>'semaine 21',
       'debut'=>'18/05/2020',
       'fin'=>'24/05/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 25 au 30 mai 2020',
       'num'=> '0010000000000',
       'numsem'=>'semaine 22',
       'debut'=>'25/05/2020',
       'fin'=>'31/05/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 1 au 6 juin 2020',
       'num'=> '0020000000000',
       'numsem'=>'semaine 23',
       'debut'=>'01/06/2020',
       'fin'=>'07/06/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 8 au 13 juin 2020',
       'num'=> '0040000000000',
       'numsem'=>'semaine 24',
       'debut'=>'08/06/2020',
       'fin'=>'14/06/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 15 au 20 juin 2020',
       'num'=> '0080000000000',
       'numsem'=>'semaine 25',
       'debut'=>'15/06/2020',
       'fin'=>'21/06/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 22 au 27 juin 2020',
       'num'=> '0100000000000',
       'numsem'=>'semaine 26',
       'debut'=>'22/06/2020',
       'fin'=>'28/06/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 29 juin au 4 juillet 2020',
       'num'=> '0200000000000',
       'numsem'=>'semaine 27',
       'debut'=>'29/06/2020',
       'fin'=>'05/07/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 6 au 11 juillet 2020',
       'num'=> '0400000000000',
       'numsem'=>'semaine 28',
       'debut'=>'06/07/2020',
       'fin'=>'12/07/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 13 au 18 juillet 2020',
       'num'=> '0800000000000',
       'numsem'=>'semaine 29',
       'debut'=>'13/07/2020',
       'fin'=>'19/07/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 20 au 25 juillet 2020',
       'num'=> '1000000000000',
       'numsem'=>'semaine 30',
       'debut'=>'20/07/2020',
       'fin'=>'26/07/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 27 juillet au 1 ao?t 2020',
       'num'=> '2000000000000',
       'numsem'=>'semaine 31',
       'debut'=>'27/07/2020',
       'fin'=>'02/08/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 3 au 8 ao?t 2020',
       'num'=> '4000000000000',
       'numsem'=>'semaine 32',
       'debut'=>'03/08/2020',
       'fin'=>'09/08/2020',
     ]);
  DB::table('semaines')->insert([
       'nom'=> 'du 10 au 15 ao?t 2020',
       'num'=> '8000000000000',
       'numsem'=>'semaine 33',
       'debut'=>'10/08/2020',
       'fin'=>'16/08/2020',
     ]);
  }
}
