@extends('layouts.testelayout')
    
    @section('title', 'IF Estudos registrar-se')

    @section('content')


    <br><h2><center>Crie sua conta</center></h2><br>



<main class="my-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Registrar-se</div>
                        <div class="card-body">

                            <form action="/registro" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Nome de usuário</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nome_usuario" class="form-control" name="nome_usuario" required><br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Endereço de E-mail</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" required><br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="senha" class="form-control" name="senha" required pattern="[a-zA-Z0-9]+" required oninvalid="this.setCustomValidity('A senha não pode conter espaços')" oninput="this.setCustomValidity('')"/><br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Foto de perfil</label>
                                    <div class="col-md-6">
                                        <input type="file" id="image" name="image" required><br>
                                    </div>
                                </div>  

                                    <div class="col-md-6 offset-md-4"><br>
                                        <button type="submit" class="btn btn-success">
                                        Registrar-se
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