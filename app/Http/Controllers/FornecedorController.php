<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    
    // public function index() {
    //     return view(' admin\fornecedores\index');
    // }

    public function index() {
        $fornecedores = ['Fornecedores 1']; // Atribuição de valor ao array
        return view('admin.fornecedores.index', compact('fornecedores'));
    }
}