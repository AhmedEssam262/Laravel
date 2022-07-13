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
