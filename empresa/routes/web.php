<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {// Criando eventos nas minhas rotas

    $nome = "MARCOS LEVI SANTOS TEIXEIRA";
    $idade = 22; 
    $profissao = "Desenvolvedor de sistemas web";
    $arr = [10, 20, 30, 40, 50];
    $nomes = ['MARCOS','LEVI', 'ANA MARIA', 'ANTONIO RAIMUNDO', 'DANIELE'];
    return view('welcome',
     
    ['nome'=> $nome, 
     'idade'=> $idade, 
     'profissao'=>$profissao,
    'arr'=>$arr,
    'nomes'=>$nomes]);

});

Route::get('contact', function () {
    return view('contact');
});

Route::get('produtos', function () {
    return view('produtos');
});