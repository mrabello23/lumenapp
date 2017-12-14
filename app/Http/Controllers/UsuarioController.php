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
	    return view('usuario', ['usuario' => $usuario]);
	}

	public function getUsuarioId($id)
	{
		$usuario = Usuario::find($id);
		return view('usuario', ['usuario' => $usuario]);
	}

	public function saveUsuario(Request $request)
	{
		$usuario = Usuario::create($request->all());
		return response()->json($usuario);
	}

	public function updateUsuario(Request $request, $id)
	{
		$usuario = Usuario::find($id);

		$usuario->nome = $request->input('nome');
		$usuario->cpf = $request->input('cpf');

		$usuario->save();
		return response()->json($usuario);
	}

	public function deleteUsuario($id)
	{
		$usuario = Usuario::find($id);
		$usuario->delete();

		return response()->json($usuario);
	}
}