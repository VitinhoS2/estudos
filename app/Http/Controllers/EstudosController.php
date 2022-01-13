<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Usuario;
use App\Models\Envio;

class EstudosController extends Controller
{
    //PAGINA PRINCIPAL
    public function index(){
        $search=request('search');
        if($search) {
            $envios=Envio::where([
                ['nome_envio', 'ILIKE', '%'.$search.'%']//"ILIKE" é para postgress ser case insensitive ou seja funciona no heroku mas não funciona no local
            ])->get();

            if(count($envios)==0) {
                $envios=Envio::where([['disciplina', 'ILIKE', '%'.$search.'%']])->get(); //"ILIKE" é para postgress ser case insensitive ou seja funciona no heroku mas não funciona no local

                if(count($envios)==0) {
                    $envios=Envio::where([['nome_usuario', 'ILIKE', '%'.$search.'%']])->get();//"ILIKE" é para postgress ser case insensitive ou seja funciona no heroku mas não funciona no local
                }

            }

        } 
        else {
            $envios=Envio::all();
            $users=User::all();
        }

            $users=User::all();
            $disciplina='';
        return view('welcome', ['envios'=>$envios, 'user'=>$users, 'search'=> $search, 'disciplina'=>$disciplina]);
    }

    //FILTRAR POR MATERIA
    public function materia($disciplina){
        
        if($disciplina=='dashboard'){
            $disciplina='';
            $envios=Envio::all();
        }

        else{
            $envios=Envio::where([['disciplina', 'like', '%'.$disciplina.'%']])->get();
        }

        $users=User::all();
        $search='';
        
        //$envios=Envio::where([['disciplina', 'like', '%'.$search.'%']])->get();

        return view('welcome', ['envios'=>$envios, 'user'=>$users, 'search'=> $search, 'disciplina'=>$disciplina]);
    }
    
    //REPORTAR ENVIO
    public function reportar($id){
        $envioReportado=Envio::findOrFail($id);
        $envioReportado->report="1";

        $envioReportado->save();
        $envios=Envio::all();
        $users=User::all();
        $search='';
        $disciplina='';
        return redirect('/');
    }
    
    //VERIFICAR ENVIO
    public function verificar($id){
        $envioVerificado=Envio::findOrFail($id);
        $envioVerificado->report="0";
        $envioVerificado->save();
        return redirect('/administrar/193419');
    }

    //ADMINISTRAR ENVIOS
    public function administrar($senha){

        $user=auth()->user();
        if($senha==193419){
            $envios=Envio::all();
        }

        else{
            return redirect('/'); 
        }

        return view('administrar', ['envios'=>$envios, 'user'=>$user]);
    }

    //GERENCIAR PERFIL
    public function gerenciarcrtl(){
        
        $user = auth()->user();
        $envios = $user->envios;
        return view('gerenciar', ['envios'=>$envios, 'user'=>$user]);
    }

    //EDITAR ENVIO
    public function edit($id){
        $envios=Envio::findOrFail($id);
        $user = auth()->user();
        return view('editar', ['envios'=> $envios, 'user'=>$user]);
    }

    public function update(Request $request){
        $data=$request->all();

        if($request->hasFile('file') && $request->file('file')->isValid()){
            $path = $request->file(key: 'file')->store(path: 'arquivos', options: 's3'); 
            $data['file']=$path;
        }

        Envio::findOrFail($request->id)->update($data);
        return redirect('/gerenciar');
    }
    
    //APAGAR ENVIO
    public function destroy($id){
        Envio::findOrFail($id)->delete();
        return redirect('/gerenciar');
    }

    //ACESSAR UM PERFIL
    public function perfilshow($user_id){
       //$users= User::findOrFail($id);
        $envios= Envio::findOrFail($user_id);
        $userEmail = User::where('id' , $envios->user_id)->first()->toArray();
        $envio= Envio::all();

        return view('perfil', ['envios'=>$envios, 'envio'=>$envio, 'userEmail'=>$userEmail]);
    }

    //REALIZAR ENVIO
    public function uploadcrtl(){
        return view('upload');
    }

    public function uploadstore(Request $request){
        $envio = new Envio;
        $user = auth()->user();

        $envio->nome_envio = $request->nome_envio;
        $envio->nome_usuario = $user->name;
        $envio->disciplina = $request->disciplina;
        $envio->descricao = $request->descricao;
        $envio->report= "0";
        $envio->user_id = $user->id;

        if($request->hasFile('file') && $request->file('file')->isValid()){
            $path = $request->file(key: 'file')->store(path: 'arquivos', options: 's3'); 
            //Storage::disk(name: 's3')->setVisibility($path, visibility: 'public');
            $envio->file=$path;
        }

        $envio->save();
        return redirect('/');            
        
    }

    public function uploadshow($id){
        $envio= Envio::findOrFail($id);
        return Storage::disk(name: 's3')->response(path: $envio->file); 
    }

    //VIEWS NÃO USADAS-----------------------

    /*

    public function imagecreate(){
        return view('upload');
    }

    public function imagestore(Request $request){
        
    }

        public function registrocrtl(){
            return view('registro');
        }
    
        public function registrostore(Request $request){
            $usuario = new Usuario;
    
            $usuario->nome_usuario = $request->nome_usuario;
            $usuario->email = $request->email;
            $usuario->senha = $request->senha;
    
            if($request->hasFile('image') && $request->file('image')->isValid()){
                
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage) . "." . $extension;
                $requestImage->move(public_path('img/estudos'), $imageName);
                $usuario->image = $imageName;
            }
            
            $usuario->save();
    
            return redirect('teste');
        }
        */
    public function navega3crtl(){
        return view('navega3');
    }

    public function navegacrtl(){
        $envios=Envio::all();
        $usuarios=Usuario::all();
        return view('navega', ['envios'=>$envios, 'usuarios'=>$usuarios]);
    }

    public function autenticarcrtl(){
        return view('autenticar');
    }

    public function navega2crtl(){
        return view('navega2');
    }

    //VIEWS DE TESTE-----------------------

    public function testecrtl(){
        $nome="Vitor";
        $idade=18;
        $arr=[10,20,30,40,50];
        $busca=request('search');
        $usuarios=Usuario::all();
        $envios=Envio::all();
    
        return view('teste', ['nome'=>$nome, 'idade'=> $idade, 'arr'=>$arr, 'busca'=>$busca, 'usuarios'=>$usuarios, 'envios'=>$envios]); 
    }

    public function testeidcrtl($id=null){
        $usuarios= Usuario::findOrFail($id);
        $envios= Envio::findOrFail($id);
        return view('teste_id',['envios'=>$envios, 'usuarios'=>$usuarios, 'id'=> $id]);
    }

}
