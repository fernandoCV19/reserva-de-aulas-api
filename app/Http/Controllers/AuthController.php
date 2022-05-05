<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Docente;
use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'activar']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $admin = false;
        $user = Docente::where("cod_SIS", "=", $request->cod_SIS)->first();
        
        if(!$user){
            $user = Administrador::where("nombre", "=", $request->cod_SIS)->first();

            if (!$user){
                return response()->json(['message' => 'Codigo SIS o contraseña erroneos'], 401);
            }else{
                $admin = true;
            }
        }

        $token = JWTAuth::fromUser($user);
        return $this->respondWithToken($token, $admin);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token, $admin)
    {
        if($admin){
            $rol = 'administrador';
        }else{
            $rol = 'docente';
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'rol' => $rol
        ]);
    }

    public function activar(Request $request){
        $validator = Validator::make($request->all(),[
            'cod_SIS'=>'required',
            'email' => 'required|string|email|max:100|unique:docentes',
            'contrasenia' => 'required|string|min:6',
        ]);
        if($validator->fails()){
            return response()->json($validator -> errors()-> toJson(),400);
        }
        
        $docenteID = DB::table('docentes')
        -> where("nombre", "=", $request->nombre)->get(); 
        
        $docente = Docente::findOrFail($docenteID[0]->id);
        $docente -> celular = $request -> celular;
        $docente -> activado = 1;
        $docente -> email = $request->email;
        $docente -> cod_SIS = $request->cod_SIS;
        $docente -> contrasenia =bcrypt($request->contrasenia);
        $docente -> save();

        return response()->json([
            'message' =>'activado',
            'docente' => $docente
        ], 201);
    }

}
