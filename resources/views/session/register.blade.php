@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row" style="margin: auto; margin-top: 15vh">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">

                    <div class="card-body">
                        <form role="form text-left">
                            <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nombre completo" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Rut" name="rut" id="rut" aria-label="rut" aria-describedby="rut-addon" value="{{ old('rut') }}">
                                @error('rut')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="phone" name="phone" id="phone" aria-label="phone" aria-describedby="phone-addon" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password" id="conf_password" aria-label="Password" aria-describedby="password-addon">
                                @error('conf_password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2" onclick="register()">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function register(){
            event.preventDefault();

            let rut           = document.getElementById('rut').value;
            let name          = document.getElementById('name').value;
            let email         = document.getElementById('email').value;
            let phone         = document.getElementById('phone').value;
            let password      = document.getElementById('password').value;
            let conf_password = document.getElementById('conf_password').value;

            if ( rut           != '' &&
                 name          != '' &&
                 email         != '' &&
                 phone         != '' &&
                 password      != '' &&
                 conf_password != ''    ){

                    if ( password == conf_password ){
                    $.ajax({
                        url    : 'register-user',
                        type   : 'json',
                        method : 'POST',
                        data   : {
                            _token   : "{{ csrf_token() }}",
                            rut      : rut,
                            name     : name,
                            email    : email,
                            phone    : phone,
                            password : password
                        }
                    })
                    .done( function(response){
                        console.log(response)

                        let json = JSON.parse(response)

                        console.log(json)
                        if ( json.response == "success" ){
                            window.location.href = "/dashboard"
                        }
                    })
                    .fail( function(error){
                        console.log(error)
                    })
                }
                else{

                }

            }
            else{

            }
        }
    </script>

@endsection
