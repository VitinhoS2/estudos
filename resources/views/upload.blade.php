@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos')

    @section('content')
    <br>

    <br><h2><center>Realizar envio</center></h2><br>


    <!--<div class="form-group">
        <label for="title">E-mail:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
    </div>-->
    
    <main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Realizar envio</div>
                        <div class="card-body">

                            <form action="/upload" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Selecione o arquivo</label>
                                    <div class="col-md-6">
                                        <input type="file" id="file" name="file" autocomplete="off" required><br><br>
                                    </div>
                                </div>  

                            <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nome do envio</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nome_envio" class="form-control" name="nome_envio" autocomplete="off" required><br>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Descrição</label>
                                    <div class="col-md-6">
                                        <textarea id="descricao" class="form-control" name="descricao" required></textarea><br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Disciplina</label>
                                    <div class="col-md-6">
                                    <select name="disciplina">
                                    <option value="Administração">Administração</option>
                                    <option value="Biologia">Biologia</option>
                                    <option value="Desenvolvimento de sistemas">Desenvolvimento de Sistemas</option>
                                    <option value="Eletrônica">Eletrônica</option>
                                    <option value="Espanhol">Espanhol</option>
                                    <option value="Filosofia">Filosofia</option>
                                    <option value="Física">Física</option>
                                    <option value="Geografia">Geografia</option>
                                    <option value="História">História</option>
                                    <option value="Inglês">Inglês</option>
                                    <option value="Matemática">Matemática</option>
                                    <option value="Português">Português</option>
                                    <option value="Química">Química</option>
                                    <option value="Sociologia">Sociologia</option>
                                </select><br>
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4"><br>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-upload" aria-hidden="true"></i>
                                        Enviar arquivo
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