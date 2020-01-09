<?php



Route::get('/', function () {
    return view('welcome');
});


Route:: get('/about',function(){
    return '<h1>Halo</h1>'
    .'Selamat datang di webapp saya<br>'
    .'Laravel,emang keren.';

});

Route::get('profil',function()
{
    return view('biodata');
});

Route::get('pus',function()
{
    return view('kampus');
});

Route::get('sekol',function()
{
    return view('sekolah');
});

Route::get('beran',function()
{
    return view('beranda');
});

Route::get('bagus',function()
{
    return view('toko');
});

// Route Parameter
// Route::get('pesan/{makan}/{minuman}/{harga}',function($mkn,$mnm,$hrg){
//     return 'Makanan Yang Saya Pesan adalah =' .$mkn.'<br>'
//     .'minuman yang saya pesan adalah =' .$mnm.'<br>'
//     .'harganya adalah = '.$hrg;

// });

// // Route Optional Parameter
// Route::get('halo/{nama?}',function($nama='Nurhadi Aldo'){
//     return 'Haloo Nama Saya Adalah ' .$nama;
// });


Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null,$minum=null,$hrg=null){
    if(isset($mkn)){
        $mkn = "anda memesan $mkn";
        echo $mkn;
    }
    if(isset($minum)){
        $minum= " & $minum";
        echo $minum;
    }
    if(isset($harga)){
        $harga =" dengan harga $haraga";
        echo $harga;
    }
    if(!$mkn && !$minum && !$harga)
    return "anda belum memesan sesuatau";

});





