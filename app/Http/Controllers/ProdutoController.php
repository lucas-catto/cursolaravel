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
        $name = 'lucas';
        $age  = 17;
        $html = '<h1>ABCXYZ</h1>';

        return view('empresa/empresa', compact('name', 'age', 'html'));
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
