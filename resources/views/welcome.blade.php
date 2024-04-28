@extends('layouts.base')

@section('content')

    <div class="container">
        <br>
        <div class="row">

            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Martínez de Rosas 241</p>
                                <h5 class="font-weight-bolder mb-0">
                                Purranque
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                <i class="ni ni-pin-3 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Contacto</p>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="https://wa.me/+56933243835?text=" target="_blank">
                                        +569 3324 3835
                                        <i class="ni ni-bold-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="ni ni-mobile-button text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Reserva tu hora</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="/reservation">
                                    Clic aquí
                                    <i class="ni ni-bold-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100 position-relative">
                                    <img src="{{ asset('assets/img/fondo-rec.png') }}" style="max-width: 100%; max-height: 60vh; border-radius: 20px; z-index: 0;">

                                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(29, 14, 153, 0.4); border-radius: 20px; z-index: 1;"></div>

                                    <!--<h5 class="position-absolute top-50 start-50 translate-middle text-white z-index-2">Centro de estimulación integral Liwen</h5>
                                        -->
                                    <img class="position-absolute top-50 start-50 translate-middle text-white z-index-2" src="{{ asset('assets/img/big-logo.png') }}" style="min-width: 20vw; max-width: 30vw;">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Profesionales</h5>
                        <table class="table align-items-center text-white">
                            <tbody>
                                <tr>
                                    <td>Fonoaudióloga</td>
                                    <td>Geraldin Maldonado Sánchez</td>
                                </tr>
                                <tr>
                                    <td>Terapeuta ocupacional</td>
                                    <td>Roxana Millar Barría</td>
                                </tr>
                                <tr>
                                    <td>Terapeuta ocupacional</td>
                                    <td>Rosita Alvarado Toledo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_2.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Nuestros servicios</h5>
                        <p class="text-white">"Ofrecemos estimulación sensorial, psicomotriz y del lenguaje, talleres de habilidades sociales y exploración emocional, estimulación cognitiva, talleres funcionales y de actividades de la vida diaria, además de servicios de fonoaudiología y terapia ocupacional. Todo diseñado para promover el desarrollo integral y el bienestar de nuestros pacientes."</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_2.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Nuestra ubicación</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.0396286683763!2d-73.16056132414646!3d-40.91487697136382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9617c135f08874e7%3A0x9c56550b0cdf852d!2sMart%C3%ADnez%20de%20Rosas%20241%2C%205380199%20Purranque%2C%20Los%20Lagos!5e0!3m2!1ses-419!2scl!4v1714066926151!5m2!1ses-419!2scl"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Horarios</h5>
                        <table class="table align-items-center text-white">
                            <thead>
                                <th>LUNES</th>
                                <th>MARTES</th>
                                <th>MIÉRCOLES</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09:00 - 13:00 <br> 14:00 - 19:00</td>
                                    <td>09:00 - 13:00 <br> 14:00 - 19:00</td>
                                    <td>09:00 - 13:00 <br> 14:00 - 19:00</td>
                                </tr>
                            </tbody>
                            <thead>
                                <th>JUEVES</th>
                                <th>VIERNES</th>
                                <th>SÁBADO</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09:00 - 13:00 <br> 14:00 - 19:00</td>
                                    <td>09:00 - 13:00 <br> 14:00 - 19:00</td>
                                    <td>09:00 - 13:00</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <table class="table align-items-center text-white">
                                <tbody>
                                    <tr>
                                        <td>Centro de estimulación integral Liwen</td>
                                    </tr>
                                    <tr>
                                        <td>centrodeestimulacion.liwen@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>+569 3324 3835</td>
                                    </tr>
                                    <tr>
                                        <td>Martínez De Rosas 241, Purranque</td>
                                    </tr>
                                    <tr>
                                        <td>Desarrollado por Innovática D.M. 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Desarrollado por Innovática D.M. 2024</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-gradient-secondary" data-bs-toggle="modal" data-bs-target="#successModal" id="buttonSuccess">Ingreso funcionarios</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 p-4">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <img src="{{ asset('assets/img/big-logo.png') }}" style="max-width: 20vw; border-radius: 20px; z-index: 0; margin:auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="successModalLabel">Ingreso funcionarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form text-left">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="rut" name="rut" id="rut" aria-label="rut" aria-describedby="rut" value="{{ old('rut') }}">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="password" name="password" id="password" aria-label="password" aria-describedby="password-addon">
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn bg-gradient-success" onclick="login()">Ingresar</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        function login(){
            let rut      = document.getElementById('rut').value;
            let password = document.getElementById('password').value;

            if ( rut != '' && password != '' ){
                $.ajax({
                    url : 'login-prof',
                    type : 'json',
                    method : 'POST',
                    data : {
                        _token   : "{{ csrf_token() }}",
                        rut      : rut.replace(".","").replace(".","").replace("-",""),
                        password : password
                    }
                })
                .done( function(response){
                    if ( response == "success" ){
                        window.location.href = '/dashboard'
                    }
                    else{

                    }
                })
                .fail( function(error){
                    console.log(error)
                })
            }
        }
    </script>

@endsection
