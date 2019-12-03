<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Fabricante;

class FabricanteController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $contacts = Contact::where('user_id', '=', $user_id)->paginate(10);
        return view('fabricante.index')->with('fabricantes', $fabricantes);
    }

    public function show($id){
        $contact = Contact::find($id);

        return view('fabricante.show')->with('fabricantes', $fabricantes);
    }

    public function create(){
        return view('fabricante.create');
    }

    public function store (Request $request){
        $request->validate([
            'cnpj' => 'required|max:14',

            
        ]);


        $fabricantes = Fabricante::create([
            'cnpj' => $request->input('nome'),
            'last_name' => $request->input('sobrenome'),
            'telephone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'avatar' => $caminhoRelativo,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/contacts/show/' . $contact->id);
    }

    public function edit($id){
        $contact = Contact::find($id);

        return view('contact.edit')->with('contact', $contact);
    }

    public function update(Request $request, $id){
        $contact = Contact::find($id);

        $request->validate([
            'nome' => 'required|max:60',
            'sobrenome' => 'required|max:60',
            'telefone' => 'required|max:11',
            'email' => 'email|max:80',
            'avatar' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'   
        ]);

        $avatar = $request->file('avatar');
        if (empty($avatar)) {
            $caminhoRelativo = $contact->avatar;
        } else {
            $avatar->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $avatar->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $avatar->move($caminhoAbsoluto, $nomeArquivo);
        }

        $contact->first_name = $request->input('nome');
        $contact->last_name = $request->input('sobrenome');      
        $contact->telephone = $request->input('telefone');
        $contact->email = $request->input('email');
        $contact->avatar = $caminhoRelativo;

        $contact->save();

        return redirect('/contacts/show/' . $contact->id);
    }
}
