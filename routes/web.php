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

//Route Parameter
Route::get('pesan/{makan}/{minuman}/{harga}',function($mkn,$mnm,$hrg){
    return 'Makanan Yang Saya Pesan adalah =' .$mkn.'<br>'
    .'minuman yang saya pesan adalah =' .$mnm.'<br>'
    .'harganya adalah = '.$hrg;

});

// Route Optional Parameter
Route::get('halo/{nama?}',function($nama='Nurhadi Aldo'){
    return 'Haloo Nama Saya Adalah ' .$nama;
});


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

Route::get('/testmodel', function() {
    $query = App\Post::all();
    return $query;
});

Route::get('/testmodel', function() {
    $query = App\Post::find(1);
    return $query;
});

Route::get('/testmodel2', function() {
    $query = App\Post::where('title','like','%cepat nikah ')->get();
    return $query;
});

Route::get('/testmodel3', function() {
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('/testmodel4', function() {
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah,puasa sunah,silahturahmi,senyum,doa,tobat";
    $post->save();
    return $post;
});
Route::get('/penggajian',function(){
    $query = App\Gaji::all();
    return $query;
});


Route::get('pengjaian-2',function(){
    $gaji = App\Penggajian::where('agama','=','islam')->get();
    return $gaji;
});

Route::get('penggajian-3',function(){
    $gaji = App\penggjian::select('id','nama','agama')
    ->where('agama','=','islam')->get();
    return $gaji;
});

Route::get('penggajian{id}',function($id){
    $gaji = App\penggajian::find($id);
    return $gaji;
});

Route::get('tambah datapenggajian',function(){
    $gaji = new App\penggajian();
    $gaji->nama='Indah Mambo';
    $gaji->jabatan='sekretaris';
    $gaji->jk='perempuan';
    $gaji->alamat='Bojong Honey';
    $gaji->gaji=500000;
    $gaji->agama='islam';
    $gaji->save();
    return $gaji;
});



