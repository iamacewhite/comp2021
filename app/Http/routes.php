<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bubble', function () {
    return view('bubble');
});

Route::get('bfs', function() {
  return view('BFS');
});

Route::get('insertion', function() {
  return view('insertion');
});

Route::get('quicksort', function() {
  return view('quicksort');
});

Route::get('dfs', function() {
  return view('dfs');
});

Route::get('dijkstra ', function() {
  return view('dil');
});

Route::get('about ', function() {
  return view('about');
});

Route::get('browse', function() {
  return view('browse');
});
