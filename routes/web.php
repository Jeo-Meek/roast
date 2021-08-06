<?php

Route::get('/', 'Web\AppController@getApp')->middleware('auth');
// 路由加中间件 也就是权限门  只有认证后的用户才可以访问
Route::get('login','Web\AppController@getLogin')
    ->name('login')
    ->middleware('guest');

Route::get('auth/{social}','Web\AuthenticationController@getSocialRedirect')->middleware('guest');
Route::get('/auth/{social}/callback','Web\AuthenticationController@getSocialCallback')->middleware('guest');

