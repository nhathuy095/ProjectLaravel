<?php

Route::get('/bang-dieu-khien', function (){
    return view('index')
        ->with('page', 1);
});
Route::get('/bieu-do', function (){
    return view('index')
        ->with('page', 2);
});
Route::get('/don-hang', function (){
    return view('index')
        ->with('page', 3);
});
Route::get('/giao-dich', function (){
    return view('index')
        ->with('page', 4);
});

Route::get('/san-pham', function (){
    return view('index')
        ->with('page', 5);
});
Route::get('/san-pham/them', function (){
    return view('index')
        ->with('page', 6);
});
Route::get('/san-pham/chinh-sua', function (){
    return view('index')
        ->with('page', 7);
});
Route::get('/san-pham/chi-tiet', function (){
    return view('index')
        ->with('page', 8);
});

Route::get('/danh-muc', function (){
    return view('index')
        ->with('page', 9);
});
Route::get('/danh-muc/them', function (){
    return view('index')
        ->with('page', 10);
});
Route::get('/danh-muc/chinh-sua', function (){
    return view('index')
        ->with('page', 11);
});
Route::get('/danh-muc/chi-tiet', function (){
    return view('index')
        ->with('page', 12);
});

Route::get('/ban-quan-tri', function (){
    return view('index')
        ->with('page', 13);
});
Route::get('/ban-quan-tri/them', function (){
    return view('index')
        ->with('page', 14);
});
Route::get('/ban-quan-tri/chinh-sua', function (){
    return view('index')
        ->with('page', 15);
});
Route::get('/ban-quan-tri/chi-tiet', function (){
    return view('index')
        ->with('page', 16);
});

Route::get('/thanh-vien', function (){
    return view('index')
        ->with('page', 17);
});
Route::get('/thanh-vien/them', function (){
    return view('index')
        ->with('page', 18);
});
Route::get('/thanh-vien/chinh-sua', function (){
    return view('index')
        ->with('page', 19);
});
Route::get('/thanh-vien/chi-tiet', function (){
    return view('index')
        ->with('page', 20);
});


Route::get('/ban-quan-tri', function (){
    return view('index')
        ->with('page', 21);
});
Route::get('/ban-quan-tri/them', function (){
    return view('index')
        ->with('page', 22);
});
Route::get('/ban-quan-tri/chinh-sua', function (){
    return view('index')
        ->with('page', 23);
});
Route::get('/ban-quan-tri/chi-tiet', function (){
    return view('index')
        ->with('page', 24);
});

Route::get('/thanh-vien', function (){
    return view('index')
        ->with('page', 25);
});
Route::get('/thanh-vien/them', function (){
    return view('index')
        ->with('page', 26);
});
Route::get('/thanh-vien/chinh-sua', function (){
    return view('index')
        ->with('page', 27);
});
Route::get('/thanh-vien/chi-tiet', function (){
    return view('index')
        ->with('page', 28);
});
//
Route::get('/ho-tro', function (){
    return view('index')
        ->with('page', 29);
});
Route::get('/ho-tro/them', function (){
    return view('index')
        ->with('page', 30);
});
Route::get('/ho-tro/chinh-sua', function (){
    return view('index')
        ->with('page', 31);
});
Route::get('/hotro/chi-tiet', function (){
    return view('index')
        ->with('page', 32);
});

Route::get('/lienhe', function (){
    return view('index')
        ->with('page', 33);
});
Route::get('/chi-tiet/chi-tiet', function (){
    return view('index')
        ->with('page', 34);
});

//
Route::get('/tin-tuc', 'TinTucController@getListNews');

Route::get('/tin-tuc/them', 'TinTucController@showAddListNews');

Route::post('/tin-tuc/them', 'TinTucController@addPostListNews');

Route::get('/tin-tuc/chinh-sua', function (){
    return view('index')
        ->with('page', 37);
});
Route::get('/tin-tuc/chi-tiet', function (){
    return view('index')
        ->with('page', 38);
});

Route::get('/trang', function (){
    return view('index')
        ->with('page', 39);
});
Route::get('/trang/them', function (){
    return view('index')
        ->with('page', 40);
});
Route::get('/trang/chinh-sua', function (){
    return view('index')
        ->with('page', 41);
});
Route::get('/trang/chi-tiet', function (){
    return view('index')
        ->with('page', 42);
});