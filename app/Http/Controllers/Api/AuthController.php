<?php
namespace App\Http\Controllers\Api; 
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 
 
class AuthController extends Controller 
{ 
    public function login(Request $request) 
    { 
        // Validasi input dari request 
        $credentials = $request->validate([ 
            'email' => 'required|email', 
            'password' => 'required', 
        ]); 
 
        // Coba lakukan autentikasi menggunakan data yang diberikan 
        if (!Auth::attempt($credentials)) { 
            // Jika gagal, kirim respons error 
            return response()->json([ 
                'message' => 'Email atau Password salah.' 
            ], 401); // 401 = Unauthorized 
        } 
 
        // Jika berhasil, ambil data user dan buat token 
        $user = User::where('email', $request->email)->firstOrFail(); 
        $token = $user->createToken('auth_token')->plainTextToken; 
 
        // Kirim respons sukses beserta token 
        return response()->json([ 
            'message' => 'Login berhasil', 
            'access_token' => $token, 
            'token_type' => 'Bearer', 
            'user' => $user 
        ]); 
    } 
 
    public function logout(Request $request) 
    { 
        // Hapus token yang sedang digunakan untuk request ini 
        $request->user()->currentAccessToken()->delete(); 
 
        return response()->json([ 
            'message' => 'Logout berhasil' 
        ]);
    }
}