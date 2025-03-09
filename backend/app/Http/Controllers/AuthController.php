<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Register new user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
    
            $user = $this->authService->register($data);
    
            return response()->json(['message' => 'Usuário registrado com sucesso!', 'user' => $user], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Erro na validação dos dados.',
                'errors' => $e->errors()
            ], 422);
        }       
    }

    /**
     * Login user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            
            $user = $this->authService->login($credentials['email'], $credentials['password']);
    
            if ($user) {
                
                $token = $user->createToken('AppToken')->plainTextToken;
                
                return response()->json(['token' => $token]);
            }
    
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Erro na validação dos dados.',
                'errors' => $e->errors()
            ], 422);
        }

    }
}
