Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function (){
    $username="Ahmed";
    return view("users");
});

Route::get('links', function (){
    $username="Ahmed";
    return view("links");
});Route::get('home', function (){
    $username="Ahmed";
    return view("home");
});
//Route::post('users', function ( Request $request){
//    //return view('users');
//    return $request;
//});
//Route::get('users', function (){
//    $username="Ahmed";
//    return view("users",compact('username'));
//});
