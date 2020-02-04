<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <center>Data Pegawai</center>
 @foreach ($data as $val)
   @if ($val['Jabatan'] == "Manager")
       @php $jab = 5000000; @endphp
   @elseif ($val['Jabatan'] == "Sekretaris")
       @php $jab = 3500000; @endphp
   @elseif ($val['Jabatan'] == "Staff")
       @php $jab = 250000; @endphp
   @endif

   @if ($val['Jam_Kerja'] > 250)
     @php $bonus = 0.10 * $jab; @endphp
   @elseif ($val['Jam_Kerja'] > 200)
     @php $bonus = 0.05 * $jab; @endphp
   @else
     @php $bonus = 0; @endphp
    @endif

    @php $ppn = 0.25 * $jab; @endphp
    @php $gaber = ($jab + $bonus) - $ppn; @endphp
    Nama               : {{$val['Nama']}} <br>
    Agama              :  {{$val['Agama']}} <br>
    Jabatan            : {{$val['Jabatan']}} <br>
    Jam Bekerja        : {{$val['Jam_Kerja']}} <br>
    Gaji               : {{$jab}} <br>
    Bonus              : {{$bonus}} <br>
    PPN                : {{$ppn}} <br>
    Gaji Bersih        : {{$gaber}} <br>
    <hr>
    @endforeach

</body>
</html>
