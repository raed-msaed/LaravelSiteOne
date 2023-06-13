<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;


Route::get('/', [StaticController::class, 'index'])->name('home.index');

Route::get('/about',[StaticController::class, 'about'])->name('home.about');

Route::get('/contact',[StaticController::class, 'contact'])->name('home.contact');

Route::resource('computers', ComputersController::class);

Route::view('help-me', 'help')->name('home.help');

Route::view('ViewPassParam', 'viewpassparam', [
    'NameDocument' => 'view pass Param',
    'DescriptionDocument' => 'Document exemple view pass Param',
    'script' => '<script>This is Description</script>',
])->name('home.viewpassparam');

Route::view('Master', 'master')->name('home.master');

/*
Route::get('/store/{category?}/{item?}', function($category=null, $item=null){
    if(isset($category)){
        if(isset($item)){
        return "<h1>{$item}</h1>";
        }
        return "<h1>{$category}</h1>";
    }
    return '<h1>Store</h1>';

});
*/

/*
Route::get('/store', function(){
    $filter = request('style');
    if(isset ($filter)){
        return '<h2>Type of Style is </h2><span>'.strip_tags($filter).'</span>';   
    }  
    return '<h2>Type of Style </h2>';
});
*/