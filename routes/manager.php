<?php

Route::group(['prefix' => 'manager', 'middleware' => ['login']], function(){
    Route::get('/addtakeleave', 'Web\ManagerController@addTakeleave')->name('manager.addTakeleave');
    Route::get('/addpromotion', 'Web\ManagerController@addPromotion')->name('manager.addPromotion');
    Route::get('/addmenu', 'Web\ManagerController@addMenu')->name('manager.addMenu');
    Route::get('/addvendor', 'Web\ManagerController@addVendor')->name('manager.addVendor');
    Route::get('/adduser', 'Web\ManagerController@addUser')->name('manager.addUser');
    Route::get('/dailystock', 'Web\ManagerController@viewDailystock')->name('manager.viewDailystock');
    Route::get('/addstaff', 'Web\ManagerController@viewAddstaff')->name('manager.viewAddstaff');
    Route::get('/homemanager', 'Web\ManagerController@viewHomemanager')->name('manager.viewHomeManager');
    Route::get('/menu', 'Web\ManagerController@viewMenu')->name('manager.viewMenu');
    Route::get('/promotion', 'Web\ManagerController@viewPromotion')->name('manager.viewPromotion');
    Route::get('/salary', 'Web\ManagerController@viewSalary')->name('manager.viewSalary');
    Route::get('/takeleave', 'Web\ManagerController@viewTakeleave')->name('manager.viewTakeleave');
    Route::get('/vendor', 'Web\ManagerController@viewVendor')->name('manager.viewVendor');
    Route::get('/work', 'Web\ManagerController@viewWork')->name('manager.viewWork');
    Route::get('/viewshowstock', 'Web\ManagerController@viewshowstock')->name('manager.viewshowstock');
    Route::get('/addstock', 'Web\ManagerController@addStock')->name('manager.addStock');
    Route::get('/delvp/{id}', 'Web\ManagerController@delVP')->name('manager.delVP');
    Route::get('/delmenu/{id}', 'Web\ManagerController@delMenu')->name('manager.delMenu');
    Route::get('/addattend/{id}', 'Web\ManagerController@addAttend')->name('manager.addAttend');
    Route::get('/addsalary/{id}', 'Web\ManagerController@addSalary')->name('manager.addSalary');
});

