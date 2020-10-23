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
          'nom' => 'du 17 au 22 août 2020',
          'num' => '0000000000001',
          'numsem' => '34',
          'debut' => '17/08/2020',
          'fin' => '22/08/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 24 au 29 août 2020',
          'num' => '0000000000002',
          'numsem' => '35',
          'debut' => '24/08/2020',
          'fin' => '29/08/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 31 août au 5 septembre 2020',
          'num' => '0000000000004',
          'numsem' => '36',
          'debut' => '31/08/2020',
          'fin' => '05/09/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 7 au 12 septembre 2020',
          'num' => '0000000000008',
          'numsem' => '37',
          'debut' => '07/09/2020',
          'fin' => '12/09/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 14 au 19 septembre 2020',
          'num' => '0000000000010',
          'numsem' => '38',
          'debut' => '14/09/2020',
          'fin' => '19/09/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 21 au 26 septembre 2020',
          'num' => '0000000000020',
          'numsem' => '39',
          'debut' => '21/09/2020',
          'fin' => '26/09/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 28 septembre au 3 octobre 2020',
          'num' => '0000000000040',
          'numsem' => '40',
          'debut' => '28/09/2020',
          'fin' => '03/10/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 5 au 10 octobre 2020',
          'num' => '0000000000080',
          'numsem' => '41',
          'debut' => '05/10/2020',
          'fin' => '10/10/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 12 au 17 octobre 2020',
          'num' => '0000000000100',
          'numsem' => '42',
          'debut' => '12/10/2020',
          'fin' => '17/10/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 19 au 24 octobre 2020',
          'num' => '0000000000200',
          'numsem' => '43',
          'debut' => '19/10/2020',
          'fin' => '24/10/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 26 au 31 octobre 2020',
          'num' => '0000000000400',
          'numsem' => '44',
          'debut' => '26/10/2020',
          'fin' => '31/10/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 2 au 7 novembre 2020',
          'num' => '0000000000800',
          'numsem' => '45',
          'debut' => '02/11/2020',
          'fin' => '07/11/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 9 au 14 novembre 2020',
          'num' => '0000000001000',
          'numsem' => '46',
          'debut' => '09/11/2020',
          'fin' => '14/11/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 16 au 21 novembre 2020',
          'num' => '0000000002000',
          'numsem' => '47',
          'debut' => '16/11/2020',
          'fin' => '21/11/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 23 au 28 novembre 2020',
          'num' => '0000000004000',
          'numsem' => '48',
          'debut' => '23/11/2020',
          'fin' => '28/11/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 30 novembre au 5 décembre 2020',
          'num' => '0000000008000',
          'numsem' => '49',
          'debut' => '30/11/2020',
          'fin' => '05/12/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 7 au 12 décembre 2020',
          'num' => '0000000010000',
          'numsem' => '50',
          'debut' => '07/12/2020',
          'fin' => '12/12/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 14 au 19 décembre 2020',
          'num' => '0000000020000',
          'numsem' => '51',
          'debut' => '14/12/2020',
          'fin' => '19/12/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 21 au 26 décembre 2020',
          'num' => '0000000040000',
          'numsem' => '52',
          'debut' => '21/12/2020',
          'fin' => '26/12/2020',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 28 décembre 2020 au 2 janvier 2021',
          'num' => '0000000080000',
          'numsem' => '53',
          'debut' => '28/12/2020',
          'fin' => '02/01/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 4 au 9 janvier 2021',
          'num' => '0000000100000',
          'numsem' => '2',
          'debut' => '04/01/2021',
          'fin' => '09/01/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 11 au 16 janvier 2021',
          'num' => '0000000200000',
          'numsem' => '3',
          'debut' => '11/01/2021',
          'fin' => '16/01/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 18 au 23 janvier 2021',
          'num' => '0000000400000',
          'numsem' => '4',
          'debut' => '18/01/2021',
          'fin' => '23/01/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 25 au 30 janvier 2021',
          'num' => '0000000800000',
          'numsem' => '5',
          'debut' => '25/01/2021',
          'fin' => '30/01/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 1 au 6 février 2021',
          'num' => '0000001000000',
          'numsem' => '6',
          'debut' => '01/02/2021',
          'fin' => '06/02/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 8 au 13 février 2021',
          'num' => '0000002000000',
          'numsem' => '7',
          'debut' => '08/02/2021',
          'fin' => '13/02/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 15 au 20 février 2021',
          'num' => '0000004000000',
          'numsem' => '8',
          'debut' => '15/02/2021',
          'fin' => '20/02/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 22 au 27 février 2021',
          'num' => '0000008000000',
          'numsem' => '9',
          'debut' => '22/02/2021',
          'fin' => '27/02/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 1 au 6 mars 2021',
          'num' => '0000010000000',
          'numsem' => '10',
          'debut' => '01/03/2021',
          'fin' => '06/03/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 8 au 13 mars 2021',
          'num' => '0000020000000',
          'numsem' => '11',
          'debut' => '08/03/2021',
          'fin' => '13/03/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 15 au 20 mars 2021',
          'num' => '0000040000000',
          'numsem' => '12',
          'debut' => '15/03/2021',
          'fin' => '20/03/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 22 au 27 mars 2021',
          'num' => '0000080000000',
          'numsem' => '13',
          'debut' => '22/03/2021',
          'fin' => '27/03/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 29 mars au 3 avril 2021',
          'num' => '0000100000000',
          'numsem' => '14',
          'debut' => '29/03/2021',
          'fin' => '03/04/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 5 au 10 avril 2021',
          'num' => '0000200000000',
          'numsem' => '15',
          'debut' => '05/04/2021',
          'fin' => '10/04/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 12 au 17 avril 2021',
          'num' => '0000400000000',
          'numsem' => '16',
          'debut' => '12/04/2021',
          'fin' => '17/04/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 19 au 24 avril 2021',
          'num' => '0000800000000',
          'numsem' => '17',
          'debut' => '19/04/2021',
          'fin' => '24/04/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 26 avril au 1 mai 2021',
          'num' => '0001000000000',
          'numsem' => '18',
          'debut' => '26/04/2021',
          'fin' => '01/05/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 3 au 8 mai 2021',
          'num' => '0002000000000',
          'numsem' => '19',
          'debut' => '03/05/2021',
          'fin' => '08/05/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 10 au 15 mai 2021',
          'num' => '0004000000000',
          'numsem' => '20',
          'debut' => '10/05/2021',
          'fin' => '15/05/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 17 au 22 mai 2021',
          'num' => '0008000000000',
          'numsem' => '21',
          'debut' => '17/05/2021',
          'fin' => '22/05/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 24 au 29 mai 2021',
          'num' => '0010000000000',
          'numsem' => '22',
          'debut' => '24/05/2021',
          'fin' => '29/05/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 31 mai au 5 juin 2021',
          'num' => '0020000000000',
          'numsem' => '23',
          'debut' => '31/05/2021',
          'fin' => '05/06/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 7 au 12 juin 2021',
          'num' => '0040000000000',
          'numsem' => '24',
          'debut' => '07/06/2021',
          'fin' => '12/06/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 14 au 19 juin 2021',
          'num' => '0080000000000',
          'numsem' => '25',
          'debut' => '14/06/2021',
          'fin' => '19/06/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 21 au 26 juin 2021',
          'num' => '0100000000000',
          'numsem' => '26',
          'debut' => '21/06/2021',
          'fin' => '26/06/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 28 juin au 3 juillet 2021',
          'num' => '0200000000000',
          'numsem' => '27',
          'debut' => '28/06/2021',
          'fin' => '03/07/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 5 au 10 juillet 2021',
          'num' => '0400000000000',
          'numsem' => '28',
          'debut' => '05/07/2021',
          'fin' => '10/07/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 12 au 17 juillet 2021',
          'num' => '0800000000000',
          'numsem' => '29',
          'debut' => '12/07/2021',
          'fin' => '17/07/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 19 au 24 juillet 2021',
          'num' => '1000000000000',
          'numsem' => '30',
          'debut' => '19/07/2021',
          'fin' => '24/07/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 26 au 31 juillet 2021',
          'num' => '2000000000000',
          'numsem' => '31',
          'debut' => '26/07/2021',
          'fin' => '31/07/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 2 au 7 août 2021',
          'num' => '4000000000000',
          'numsem' => '32',
          'debut' => '02/08/2021',
          'fin' => '07/08/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 9 au 14 août 2021',
          'num' => '8000000000000',
          'numsem' => '33',
          'debut' => '09/08/2021',
          'fin' => '14/08/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 16 au 21 août 2021',
          'num' => '1000000000000',
          'numsem' => '34',
          'debut' => '16/08/2021',
          'fin' => '21/08/2021',
      ]);

      DB::table('semaines')->insert([
          'nom' => 'du 23 au 28 août 2021',
          'num' => '2000000000000',
          'numsem' => '35',
          'debut' => '23/08/2021',
          'fin' => '28/08/2021',
      ]);
  }
  }
