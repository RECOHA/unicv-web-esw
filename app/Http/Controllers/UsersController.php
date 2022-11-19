<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $validated = Validator::make($request->all(), [
            'nome'     => 'required|min:3|max:120',
            'email'    => 'required|email',
            'idade' => 'integer|min:0',
            'telefone' => 'integer',
        ]);

        if ($validated->fails()) {
            return response()->json(['mensagem' => 'Problemas encontrados.'], 422);
        } else {
            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'idade' => $request->idade
                'telefone' => $request->telefone
            ];

            Usuario::create($data);
            return "Usuário criado com sucesso!";
        };
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

     public function update(Request $request, $id){
        $validated = Validator::make($request->all(), [
            'nome'     => 'required|min:3|max:120',
            'email'    => 'required|email',
            'idade' => 'integer|min:0',
            'telefone' => 'integer',
        ]);

        if ($validated->fails()) {
            return response()->json(['mensagem' => 'Problemas encontrados.'], 422);
        } else {
            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'idade' => $request->idade
                'telefone' => $request->telefone
            ];

            $user = Usuario::findOrFail($id);

            $user->update($data);
            return "Usuário atualizado com sucesso";
        }
    }

    public function delete($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.delete', ['usuario' => $usuario]);
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return "Usuário excluído com sucesso";
    }
}
