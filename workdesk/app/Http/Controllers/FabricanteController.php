<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Fabricante;

class FabricanteController extends Controller
{
    public function index(){   
        $fabricantes = Fabricante::paginate(5);
        return view('fabricantes.index',['fabricantes' => $fabricantes]);
    }

    public function show($id){
        $contact = Contact::find($id);

        return view('fabricante.show')->with('fabricantes', $fabricantes);
    }

    public function create(){
        return view('fabricantes.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'cnpj' => 'required|max:14',
            'razao_social' => 'required|max:50',
            'nome_fantasia' => 'required|max:50',
            'logradouro' => 'required|max:60',
            'numero' => 'required|max:15',
            'cidade' => 'required|max:25',
            'estado' => 'required|max:2',
            'cep' => 'required|max:8'
        ]);

        $fabricante = Fabricante::create([
            'cnpj' => $request->input('cnpj'),
            'razao_social' => $request->input('razao_social'),
            'nome_fantasia' => $request->input('nome_fantasia'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'cep' => $request->input('cep')
        ]);
            
        return redirect('/fabricantes');
    }

    public function edit($id){
        $fabricantes = Fabricante::find($id);

        return view('fabricante.edit')->with('fabricantes', $fabricantes);
    }

    public function update(Request $request, $id){
        $fabricantes = Fabricante::find($id);

        $request->validate([
            'cnpj' => 'required|max:14',

        ]);


        $fabricantes->cnpj = $request->input('cnpj');
        $fabricantes->razao_social = $request->input('razao_social');
        $fabricantes->nome_fantasia = $request->input('nome_fantasia');
        $fabricantes->logradouro = $request->input('logradouro');
        $fabricantes->numero = $request->input('numero');
        $fabricantes->cidade = $request->input('cidade');
        $fabricantes->estado = $request->input('estado');
        $fabricantes->cep = $request->input('cep');


        $fabricantes->save();

        return redirect('/fabricantes' . $fabricantes->id);
    }
}
