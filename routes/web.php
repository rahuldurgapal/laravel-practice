<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\TestUser;

function getUsers() {
    $names = [
    
        1 => ['name'=>'Amitabh', 'phone'=>'9839293848', 'city'=>'goa'],
        2=> ['name'=>'salman', 'phone'=>'39830493049','city'=>'delhi'],
        3=>['name'=>'sunny', 'phone'=>'973849384038','city'=> 'mumbai'],
        4=>['name'=>'akshay', 'phone'=>'934330948', 'city'=>'agra']
    ];$names = [
    
        1 => ['name'=>'Amitabh', 'phone'=>'9839293848', 'city'=>'goa'],
        2=> ['name'=>'salman', 'phone'=>'39830493049','city'=>'delhi'],
        3=>['name'=>'sunny', 'phone'=>'973849384038','city'=> 'mumbai'],
        4=>['name'=>'akshay', 'phone'=>'934330948', 'city'=>'agra']
    ];

    return $names;
}

Route::get('/', function () {
    return view('home');
});

Route::view('/user','user')->name('user');

// Route::prefix('page')->group(function() {
//     Route::get('/post', function() {
//         return view('post');
//     })->name('post');
    
//     Route::get('/about',function() {
//         return view('about');
//     });


// });

// Route::get('/test',function() {
//     return view('test');
// });

// Route::fallback(function() {
//     return "<h1>Page Not Found</h1>";
// });


// Route::get('/users', function() {
//     // $name = "Rahul Durgapal";
 
//      $names = getUsers();

//     return view('users',['user'=> $names, 
//                         'city'=> "varanasi"
//      ]);

    // return view('users')
    //   ->with('user', $name)
    //   ->with('city',"varanasi");

    // return view('users')->withUser($name)->withCity('Varansi');
// });


// Route::get('/user/{id}', function($id) {

//     $users = getUsers();
//     abort_if(!isset($users[$id]), 404);
//     $user = $users[$id];
//     return view('user',['id'=>$user]);
// })->name('view.user');



// Route::view('/hello','post');

// Route::get('/post/firstpost', function() {
//     return view('firstpost');
// });

// Route:: get('/post/{id?}', function(string $id=null) {
//     if($id) {
//         return "<h1> Post Id: ". $id . "</h1>";
//     }else {
//         return "<h1> No Id Found</h1>";
//     }
    
// })->whereNumber('id');

// Route::get('/', [PageController::class,'showHome'])->name('home');

// Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');

// Route::get('/block', [PageController::class,'showBlog'])->name('blog');


// Route::controller(PageController::class)->group(function() {
//     Route::get('/','showHome')->name('home');
//     Route::get('/user/{id}','showUser')->name('user');
//     Route::get('/blog','showBlog')->name('blog');
// });

Route::get('/showUser',[UserController::class,'show'])->name('home');
Route::post('/registerSave', [UserController::class, 'register'])
                                   ->name('registerSave');
                                   
;
Route::view('/register', 'register')->name('register');
                                
Route::view('/login', 'login')->name('login');
Route::post('/loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('/dashboard', [UserController::class, 'dashBoardPage'])->name('dashboard')
                                      ->middleware(["auth",'isUserValid:admin']);

Route::get('/dashboard/inner',[UserController::class,'innerPage'])->name('inner')
                                      ->middleware(["auth",'isUserValid:admin']);
       

// Route::middleware(['ok-user'])->group(function() {
//     Route::get('/dashboard', [UserController::class, 'dashBoardPage'])->name('dashboard');
//     Route::get('/dashboard/inner',[UserController::class,'innerPage'])->name('inner')
//                                               ->withoutMiddleware([TestUser::class]);
// });

 Route::get('/logout',[UserController::class,'logout'])->name('logout');
