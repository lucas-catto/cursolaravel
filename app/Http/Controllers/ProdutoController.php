<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        // $produtos = Produto::all();
        // return dd($produtos);

        // return view('news/news');

        /*
        $name = 'lucas';
        $age  = 17;
        $html = '<h1>html</h1>';

        return view('empresa/empresa', [
            'name' => $name,
            'age'  => $age,
            'html' => $html
        ]);
        */
        /*
        $name = 'lucas';
        $age  = 17;
        $html = '<h1>ABCXYZ</h1>';

        return view('empresa/empresa', compact('name', 'age', 'html'));
        */

        // $name = 'lucas';
        // $age = 17; /* 16/17/18 */
        // $languages = ['php', 'python', 'c++', 'c', 'cobol', 'lisp'];
        // $search_results = []; // ['php', 'python', 'c++', 'c', 'cobol', 'lisp'];

        // return view('empresa/home', compact('name', 'age', 'languages', 'search_results'));
        
        $produtos = Produto::all();
        return view('empresa/home', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "show";
        // Criando um Erro Interno (.env APP_DEBUG=true => false)
        // if
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "destroy";
    }
}
