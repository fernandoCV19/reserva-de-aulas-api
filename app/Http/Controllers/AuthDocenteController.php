<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Docente;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class AuthDocenteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('jwt.verify', ['except' => ['login', 'activar','activarAdmin']]);
        $this->middleware('auth:docente', ['except' => ['login', 'register']]);
    }

    /**
     * @OA\Post(
     *      path= "/auth/loginDocente",
     *      summary =  "Inicio de sesion",
     *      tags = {"Auth"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="cod_SIS", 
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="contrasenia", 
     *                  type="string"
     *               ),
     *         ),
     *        
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $admin = false;
        $user = Docente::where("cod_SIS", "=", $request->cod_SIS)->first();
       
        if (!$user){
            return response()->json(['message' => 'Codigo SIS o contraseña erroneos'], 401);
        }
       
        if(Hash::check($request->contrasenia, $user->contrasenia)){
            $token = JWTAuth::fromUser($user);
            return $this->respondWithToken($token, $admin);
        }   
        else{
            return response()->json([
                'success' => false,
                'message' => 'Codigo SIS o contrasenia invalidos.',
            ], 400);
        }     
    }
   

    /**
     * @OA\Get(
     *      path= "/auth/meDocente",
     *      summary =  "Obtencion de la informacion de un usuario",
     *      tags = {"Auth"},
     * 
     *      security={{"bearerAuth":{}}} ,
    
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {            
        if(auth()->user() == null){
            return response()->json(['message' => 'No autorizado'], 401);}
        else 
            return response()->json(auth()->user());
    }

    /**
     * @OA\Post(
     *      path= "/auth/logoutDocente",
     *      summary =  "Cerrar sesion",
     *      tags = {"Auth"}, 
     *      security={{"bearerAuth":{}}} ,
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
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
     * @OA\Post(
     *      path= "/auth/refreshDocente",
     *      summary =  "Refresco del token",
     *      tags = {"Auth"},
     * 
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *          response=401,
     *          description = "No autorizado"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh(), true);
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
    /** 
     * @OA\Post(
     *      path= "/auth/activarDocente",
     *      summary =  "Activacion de la cuenta de un docente",
     *      tags = {"Auth"},
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="cod_SIS", 
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="nombre", 
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="celular", 
     *                  type="int",
     *               ),
     *               @OA\Property(
     *                  property="email", 
     *                  type="string",
     *               ),
     *              @OA\Property(
     *                  property="contrasenia", 
     *                  type="string"
     *               ),
     *         ),        
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
    */
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
        $docente -> activado = 2;
        $docente -> email = $request->email;
        $docente -> cod_SIS = $request->cod_SIS;
        $docente -> celular = $request->celular; 
        $docente -> contrasenia =bcrypt($request->contrasenia);
        $docente -> save();

        return response()->json([
            'message' =>'activado',
            'docente' => $docente
        ], 201);
    }

   
}
