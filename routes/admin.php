<?php

Route::group(['prefix' => 'admin', 'middleware' => ['login']], function(){
    Route::get('/adduser', 'Web\OwnerController@addUser')->name('admin.adduser');
    Route::get('/addvendor', 'Web\OwnerController@addVendor')->name('admin.addvendor');
    Route::get('/addbranch', 'Web\OwnerController@addBranch')->name('admin.addbranch');
    Route::get('/updateposition', 'Web\OwnerController@updatePositionOfUser')->name('admin.updateposition');
    Route::get('/updatebranch', 'Web\OwnerController@updateBranch')->name('admin.updatebranch');
    Route::get('/updatestaff', 'Web\OwnerController@updateStaff')->name('admin.updatestaff');
    Route::get('/updatevendor', 'Web\OwnerController@updateVendor')->name('admin.updatevendor');
    Route::get('/viewmanager', 'Web\OwnerController@viewmanager')->name('admin.viewmanager');
    Route::get('/viewstaff', 'Web\OwnerController@viewstaff')->name('admin.viewstaff');
    Route::get('/viewbranch', 'Web\OwnerController@viewbranch')->name('admin.viewbranch');
    Route::get('/viewdailystock', 'Web\OwnerController@viewdailystock')->name('admin.viewdailystock');
    Route::get('/viewpartner', 'Web\OwnerController@viewpartner')->name('admin.viewpartner');
    Route::get('/viewhome', 'Web\OwnerController@viewhome')->name('admin.viewhome');
    Route::get('/delstaff/{id}', 'Web\OwnerController@delStaff')->name('admin.delstaff');
    Route::get('/delbranch/{id}', 'Web\OwnerController@delBranchs')->name('admin.delbranch');
    Route::get('/delvendor/{id}', 'Web\OwnerController@delVendors')->name('admin.delvendor');
});