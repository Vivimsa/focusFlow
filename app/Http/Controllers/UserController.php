<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @OA\Get(
     * path="/api/user",
     * summary="Lista todos os usuários",
     * tags={"Usuários"},
     * @OA\Response(
     * response=200,
     * description="Lista de usuários retornada com sucesso."
     * )
     * )
     */

    public function index()
    {
        return response()->json(User::all());
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $user->tokens()->delete();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso',
            'token' => $token
        ]);
    }

    public function show($id)
    {
        $user = User::find(auth()->id());
        return response()->json($user);
    }

    public function update(UserRequest $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json($user);
    }
    public function destroy()
    {
        $user = auth()->user();
        $user->delete();
        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}

