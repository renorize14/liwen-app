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
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Volver a la página principal</p>
                            <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="/">
                                Clic aquí
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
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
        <div class="col-lg-12">
            <div class="card h-100 p-4">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">
                            Estimad@ {{ $reserv->client_name }}
                        </h5>
                        <p class="text-white">Su pago ha sido confirmado y su reserva está lista!<br> Recuerde que solo puede cancelar su visita
                        con 24 horas de antelación, de lo contrario su dinero no será reembolsado.</p>

                        <h6 class="text-white">Datos de la reserva: </h6>
                        <table class="table align-items-center text-white">
                            <tbody>
                                <tr>
                                    <td>Fecha</td>
                                    <td>{{ $reserv->reservation_date }}</td>
                                </tr>
                                <tr>
                                    <td>RUN Paciente:</td>
                                    <td>{{ $reserv->client_rut }}</td>
                                </tr>
                                <tr>
                                    <td>Nombre Paciente: </td>
                                    <td>{{ $reserv->client_name }}</td>
                                </tr>
                                <tr>
                                    <td>Mail Paciente:</td>
                                    <td>{{ $reserv->client_mail }}</td>
                                </tr>
                                <tr>
                                    <td>Teléfono Paciente: </td>
                                    <td>{{ $reserv->client_phone }}</td>
                                </tr>
                                <tr>
                                    <td>Profesional: </td>
                                    <td>{{ $prof->name }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function
</script>

@endsection
