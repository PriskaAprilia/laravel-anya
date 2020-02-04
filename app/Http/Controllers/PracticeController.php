<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
   public function pass()
   {
       $a = "Aku Cinta Bandung";
       return view('latihan',compact('a'));
   }

   public function pass1()
   {
       $data = [
           ['nama' => 'Ucup','kelas' => 'RPL 2'],
           ['nama' => 'Icip','kelas' => 'RPL 1'],
           ['nama' => 'Ecep','kelas' => 'RPL 3'],
       ];
       return view('latihan1',['siswa' => $data]);
   }
   public function pass2()
   {
       $data = [
             ['Nama' => 'Gisel','NIP' => '12345','Agama' => 'Islam','JK' => 'Laki-laki','Jabatan' => 'Manager','Jam_Kerja' => '250'],
             ['Nama' => 'Amanda','NIP' => '123456','Agama' => 'Islam','JK' => 'Perempuan','Jabatan' => 'Sekertaris','Jam_Kerja' => '150'],
             ['Nama' => 'Dimas','NIP' => '1234567','Agama' => 'Islam','JK' => 'Laki-laki','Jabatan' => 'Staff','Jam_Kerja' => '230'],
       ];
       return view('latihan2',compact('data'));


   }
}

