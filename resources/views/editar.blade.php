@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos')

    @section('content')
    <br>

    <br><h2><center>Editar envio</center></h2><br>

    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Editando envio: {{$envios->nome_envio}}</div>
                        <div class="card-body">

                            <form action="/envios/update/{{$envios->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Selecione o arquivo</label>
                                    <div class="col-md-6">
                                        <input type="file" id="file" name="file" autocomplete="off"><br><br>
                                    </div>
                                </div>  

                            <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nome do envio</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nome_envio" class="form-control" name="nome_envio" autocomplete="off" required value="{{$envios->nome_envio}}"><br>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Descrição</label>
                                    <div class="col-md-6">
                                    <textarea id="descricao" class="form-control" name="descricao">{{$envios->descricao}}</textarea><br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Disciplina</label>
                                    <div class="col-md-6">
                                    <select name="disciplina">
                                    <!--<option value="{{$envios->disciplina}}">{{$envios->disciplina}}</option>
                                    value="{{$envios->disciplina}}"-->
                                    <option value="Administração"{{$envios->disciplina == 'Administração'? "selected='selected' ": ""}}>Administração</option>
                                    <option value="Biologia"{{$envios->disciplina == 'Biologia'? "selected='selected' ": ""}}>Biologia</option>
                                    <option value="Desenvolvimento de sistemas"{{$envios->disciplina == 'Desenvolvimento de Sistemas'? "selected='selected' ": ""}}>Desenvolvimento de Sistemas</option>
                                    <option value="Eletrônica"{{$envios->disciplina == 'Eletrônica'? "selected='selected' ": ""}}>Eletrônica</option>
                                    <option value="Espanhol"{{$envios->disciplina == 'Espanhol'? "selected='selected' ": ""}}>Espanhol</option>
                                    <option value="Filosofia"{{$envios->disciplina == 'Filosofia'? "selected='selected' ": ""}}>Filosofia</option>
                                    <option value="Física"{{$envios->disciplina == 'Física'? "selected='selected' ": ""}}>Física</option>
                                    <option value="Geografia"{{$envios->disciplina == 'Geografia'? "selected='selected' ": ""}}>Geografia</option>
                                    <option value="História"{{$envios->disciplina == 'História'? "selected='selected' ": ""}}>História</option>
                                    <option value="Inglês"{{$envios->disciplina == 'Inglês'? "selected='selected' ": ""}}>Inglês</option>
                                    <option value="Matemática"{{$envios->disciplina == 'Matemática'? "selected='selected' ": ""}}>Matemática</option>
                                    <option value="Português"{{$envios->disciplina == 'Português'? "selected='selected' ": ""}}>Português</option>
                                    <option value="Química"{{$envios->disciplina == 'Química'? "selected='selected' ": ""}}>Química</option>
                                    <option value="Sociologia" {{$envios->disciplina == 'Sociologia'? "selected='selected' ": ""}}>Sociologia</option>
                                 </select><br>
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4"><br>
                                        <button type="submit" class="btn btn-success">
                                        <i class="fa fa-upload" aria-hidden="true"></i> Salvar alterações
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

            
    @endsection