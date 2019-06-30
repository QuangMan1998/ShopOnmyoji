<?php
// use App\Model\Product;
// use App\Model\Category;
// Route::get('/try', function(){
//     // return Category::find(1)->products;
//     return Product::find(25)->category;
// });
Route::get('{path}', "HomeController@index")->where( 'path', '(([A-z\d-\/_.]+)?)' );
