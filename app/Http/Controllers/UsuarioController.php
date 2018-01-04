<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuario')->with('usuarios', $usuario);
    }

    public function get()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    public function getId($id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'nome'  => 'required',
            'cpf'   => 'required',
            'email' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->nome = $request->input('nome');
        $usuario->cpf = $request->input('cpf');
        $usuario->email = $request->input('email');

        $usuario->save();
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nome = $request->input('nome');
        $usuario->cpf = $request->input('cpf');
        $usuario->email = $request->input('email');

        $usuario->save();

        session_start();
        $_SESSION['success'] = true;
        $_SESSION['msg'] = 'Usuario alterado com sucesso!';

        return response()->json($usuario);
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return response()->json($usuario);
    }

    public function create(Request $request)
    {
        $save = $this->save($request);
        $usuarioJson = json_decode($save, true);

        $success = 'error';
        if (!empty($usuarioJson)) {
            $success = 'success';
        }

        $usuarios = Usuario::all();
        $data = array(
            'success' => $success,
            'usuarios' => $usuarios
        );

        return view('usuario')->with($data);
    }

    public function edit(Request $request, $id)
    {
        $update = $this->update($request, $id);
        $usuarioJson = json_decode($update, true);

        $success = 'error';
        if (!empty($usuarioJson)) {
            $success = 'success';
        }

        $usuarios = Usuario::all();
        $data = array(
            'success' => $success,
            'usuarios' => $usuarios
        );

        return view('usuario')->with($data);
    }

    public function destroy($id)
    {
        $delete = $this->delete($id);
        $usuarioJson = json_decode($delete, true);

        $success = 'error';
        if (!empty($usuarioJson)) {
            $success = 'success';
        }

        $usuarios = Usuario::all();
        $data = array(
            'success' => $success,
            'usuarios' => $usuarios
        );

        return view('usuario')->with($data);
    }

    public function createTemplate()
    {
        return view('create');
    }

    public function updateTemplate($id)
    {
        $usuario = Usuario::find($id);
        return view('edit')->with('usuario', $usuario);
    }
}