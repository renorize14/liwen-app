@extends('layouts.base')

@section('content')

    @if ( session('logged') == true )

        @if ( session('active') == 1 )
        <div class="container">
            <br>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card h-100 p-4">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2" id="welcomeName"></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card h-100 p-4">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2" >Próximas horas</h5>
                                <div id="nextHours"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card h-100 p-4">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_1.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2" >Ver horas</h5>
                                <div class="row">
                                    <div class="col-2 text-end" style="cursor: pointer;" onclick="getBlocksByProfessionalId( -1 )">
                                        <i class="ni ni-bold-left text-sm ms-1 " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-8 text-center" id="dateToShow"></div>
                                    <div class="col-2 text-start" style="cursor: pointer;" onclick="getBlocksByProfessionalId( 1 )">
                                        <i class="ni ni-bold-right text-sm ms-1 " aria-hidden="true" ></i>
                                    </div>
                                    <div class="col-12" id="blocks"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Datos de la reserva</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="clientData"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Datos de la reserva</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalEditData"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ml-auto" onclick="cancelReservation()">Cancelar reserva</button>
                        <button id="cancelReservationCloseButton" type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Reserva de hora</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Por favor, complete los siguientes datos para continuar con la reserva</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre completo" id="client_name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="RUN" id="client_rut" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="email" class="form-control" id="client_email" placeholder="correo-paciente@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Teléfono" id="client_phone" />
                                </div>
                            </div>
                            <div id="alertZone" class="col-md-12"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="buttonCloseExampleModal" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn bg-gradient-primary" onclick="confirmGetBlock()">Confirmar</button>
                </div>
                </div>
            </div>
        </div>

        @else
            <div style="margin: auto">
                <h4>Su cuenta está desactivada, por favor contactese con la administración del sitio.</h4>
                <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=/">
            </div>

        @endif

    @else
        <div style="margin: auto">
            <h4>No tiene permisos para ingresar a esta página</h4>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=/">
        </div>
    @endif

    @php
        $user_id = session('user_id');
    @endphp
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let intMove = 0;
        let date    = "";
        let time    = "";
        let prof_id = 0;
        let res_id  = 0;

        function getNextBlocksByProfId( id ){
            $.ajax({
                url    : 'get-next-blocks-by-id',
                method : 'get',
                type   : 'json',
                data   : {
                    id   : id
                }
            })
            .done( function ( response ){
                let json = JSON.parse(response);
                makeNextBlocksTable(json)
            })
            .fail( function( error ){
                console.log(error)
            })

        }

        function makeNextBlocksTable(json){

            $("#nextHours").html("");

            let textToFill = "<br>";

            for ( let i = 0 ; i < json.length ; i ++ ){

                var date    = new Date(json[i].reservation_date);
                var fechaHoraOriginal = date.toLocaleString('es-CL', { timeZone: 'America/Santiago', day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit'});
                date.setHours(date.getHours() + 1);
                var sigHora = date.toLocaleString('es-CL', { timeZone: 'America/Santiago', hour: '2-digit', minute: '2-digit'});

                textToFill = textToFill + "<button onclick='setClientData(\"" + json[i].client_name + "\",\"" + json[i].client_mail + "\",\"" + json[i].client_phone + "\",\"" + json[i].client_rut + "\")' type='button' class='btn btn-info' data-container='body' data-bs-toggle='modal' data-bs-target='#modal-default'>";
                textToFill = textToFill + fechaHoraOriginal + ":00 - " + sigHora + ":00";

                textToFill = textToFill + "</button>";
            }

            $("#nextHours").html(textToFill);
        }

        function setClientData( name, email, phone, rut ){
            let textToFill = "";

            textToFill = textToFill + "<table class='table align-items-center text-black'>";
            textToFill = textToFill + "<tbody>";

            textToFill = textToFill + "<tr><td>Nombre cliente </td><td>" + name + "</td></tr>";
            textToFill = textToFill + "<tr><td>E-mail </td><td>" + email + "</td></tr>";
            textToFill = textToFill + "<tr><td>Teléfono </td><td>" + phone + "</td></tr>";
            textToFill = textToFill + "<tr><td>Rut </td><td>" + rut + "</td></tr>";
            textToFill = textToFill + "<tr><td>Especialidad </td><td></td></tr>";

            textToFill = textToFill + "</tbody>";
            textToFill = textToFill + "</table>";

            $("#clientData").html(textToFill);
        }

        function getBlocksByProfessionalId( move ){

            id = @json($user_id);

            var actualDate = new Date();
            actualDate.toLocaleString('es-CL', { timeZone: 'America/Santiago' });
            var actualDateFormatted = actualDate.toISOString().split('T')[0];

            intMove = intMove + move;
            var requestDate = new Date();

            if ( move != 0 ){
                requestDate.setDate(requestDate.getDate() + intMove );
            }

            requestDate.toLocaleString('es-CL', { timeZone: 'America/Santiago' });
            var fechaFormateada = requestDate.toISOString().split('T')[0];

            var diaSemana         = requestDate.getDay();
            var nombresDiasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            var nombreDiaSemana   = nombresDiasSemana[diaSemana];

            /* Formatear fecha */actualDate
            var dia  = requestDate.getDate();
            var mes  = requestDate.getMonth() + 1; // ¡Recuerda que los meses se cuentan desde 0!
            var anio = requestDate.getFullYear();

            // Formatear la fecha en el formato "dd/mm/YYYY"
            var dateToShow = dia + '/' + mes + '/' + anio;

            $("#dateToShow").html(nombreDiaSemana + " " + dateToShow);

            var horaActual = requestDate.getHours();

            actualDate.setHours(0, 0, 0, 0);
            requestDate.setHours(0, 0, 0, 0);

            if ( diaSemana == 0 ){
                let textToShow = "<br>";
                textToShow = textToShow + "<p class='text-bold text-start'>Lo sentimos</p>";
                textToShow = textToShow + "<p class='text-justify' style='width: 50%'>No hay horas.</p>";
                $("#blocks").html(textToShow);
            }
            else if ( diaSemana < 6 ){
                if (horaActual >= 19) {
                    if ( actualDate.getTime() == requestDate.getTime() ){
                        let textToShow = "<br>";
                        textToShow = textToShow + "<p class='text-bold text-start'>Sin horas disponibles.</p>";
                        $("#blocks").html(textToShow);
                    }
                    else if ( actualDate.getTime() > requestDate.getTime() ){
                        let textToShow = "<br>";
                        textToShow = textToShow + "<p class='text-bold text-start'>Fecha incorrecta.</p>";
                        $("#blocks").html(textToShow);
                    }
                    else {
                        $.ajax({
                            url    : 'get-blocks-by-id',
                            method : 'get',
                            type   : 'json',
                            data   : {
                                id   : id,
                                date : requestDate.toISOString().split('T')[0]
                            }
                        })
                        .done( function ( response ){
                            let json = JSON.parse(response);
                            makeBlocksTable( 9, 19, json, requestDate )
                        })
                        .fail( function( error ){
                            console.log(error)
                        })
                    }
                }
                else {
                    $.ajax({
                        url    : 'get-blocks-by-id',
                        method : 'get',
                        type   : 'json',
                        data   : {
                            id   : id,
                            date : requestDate.toISOString().split('T')[0]
                        }
                    })
                    .done( function ( response ){
                        let json = JSON.parse(response);
                        if ( horaActual < 9 ){
                            makeBlocksTable( 9, 19, json, requestDate )
                        }
                        else{
                            if ( actualDate.getTime() == requestDate.getTime() ){
                                makeBlocksTable( horaActual, 19, json, requestDate )
                            }
                            else{
                                makeBlocksTable( 9, 19, json, requestDate )
                            }

                        }

                    })
                    .fail( function( error ){
                        console.log(error)
                    })
                }
            }
            else if ( diaSemana == 6 ){
                if ( horaActual > 13 ) {
                    if ( actualDate.getTime() == requestDate.getTime() ){
                        let textToShow = "<br>";
                        textToShow = textToShow + "<p class='text-bold text-start'>Sin horas disponibles.</p>";
                        $("#blocks").html(textToShow);
                    }
                    else if ( actualDate.getTime() > requestDate.getTime() ){
                        let textToShow = "<br>";
                        textToShow = textToShow + "<p class='text-bold text-start'>Fecha incorrecta.</p>";
                        $("#blocks").html(textToShow);
                    }
                    else{
                        $.ajax({
                            url    : 'get-blocks-by-id',
                            method : 'get',
                            type   : 'json',
                            data   : {
                                id   : id,
                                date : requestDate.toISOString().split('T')[0]
                            }
                        })
                        .done( function ( response ){
                            let json = JSON.parse(response);
                            makeBlocksTable( 9, 13, json, requestDate )
                        })
                        .fail( function( error ){
                            console.log(error)
                        })
                    }

                }
                else {
                    $.ajax({
                        url    : 'get-blocks-by-id',
                        method : 'get',
                        type   : 'json',
                        data   : {
                            id   : id,
                            date : requestDate.toISOString().split('T')[0]
                        }
                    })
                    .done( function ( response ){
                        let json = JSON.parse(response);
                        makeBlocksTable( horaActual, 12, json, requestDate )
                    })
                    .fail( function( error ){
                        console.log(error)
                    })
                }
            }
        }

        function makeBlocksTable( initHour, endHour, json, date ){

            $("#blocks").html("");

            let textToFill = "<br>";

            for ( let i = initHour ; i < endHour ; i ++ ){
                if ( i != 13 ){
                    let nextHour = i + 1;
                    let hour     = "";

                    if ( i < 10 ){
                        hour = "0" + i;
                    }
                    else{
                        hour = i;
                    }

                    if ( findBlockedHour(json, hour + ":00:00") ){
                        getBlockedHour(json, hour + ":00:00")
                        textToFill = textToFill + "<button type='button' class='btn btn-danger' data-container='body' data-bs-toggle='modal' data-bs-target='#modal-edit'>";
                        textToFill = textToFill + hour + ":00 - " + nextHour + ":00, OCUPADA";
                        textToFill = textToFill + "</button><br>";
                    }
                    else{
                        textToFill = textToFill + "<button onclick='setDateTIme(\"" + hour + ":00:00" + "\", \"" + date.toISOString().split('T')[0] + "\")' type='button' class='btn btn-info' data-container='body' data-bs-toggle='modal' data-bs-target='#exampleModal'>";
                        textToFill = textToFill + hour + ":00 - " + nextHour + ":00, DISPONIBLE";
                        textToFill = textToFill + "</button><br>";
                    }
                    textToFill = textToFill + "</div>";
                }

            }

            $("#blocks").html(textToFill);
        }

        function findBlockedHour(json, hour){
            let response = false;
            for ( let i = 0 ; i < json.length ; i ++ ){
                var partes     = json[i].reservation_date.split(' ');
                var horaString = partes[1];
                if ( horaString == hour ){
                    response = true;
                    break;
                }
            }
            return response;
        }

        function getBlockedHour(json, hour){
            let response = {};
            for ( let i = 0 ; i < json.length ; i ++ ){
                var partes     = json[i].reservation_date.split(' ');
                var horaString = partes[1];
                if ( horaString == hour ){
                    response = json[i];
                    let textToFill = "";

                    textToFill = textToFill + "<table class='table align-items-center text-black'>";
                    textToFill = textToFill + "<tbody>";

                    textToFill = textToFill + "<tr><td>Nombre cliente </td><td>" + json[i].client_name + "</td></tr>";
                    textToFill = textToFill + "<tr><td>E-mail </td><td>" + json[i].client_mail + "</td></tr>";
                    textToFill = textToFill + "<tr><td>Teléfono </td><td>" + json[i].client_phone + "</td></tr>";
                    textToFill = textToFill + "<tr><td>Rut </td><td>" + json[i].client_rut + "</td></tr>";
                    textToFill = textToFill + "<tr><td>Especialidad </td><td></td></tr>";

                    textToFill = textToFill + "</tbody>";
                    textToFill = textToFill + "</table>";

                    res_id = json[i].id;

                    $("#modalEditData").html(textToFill);

                    break;
                }
            }
            return response;
        }

        function setDateTIme( time_, date_ ){
            time = time_;
            date = date_;
        }

        function getUserData(){
            $.ajax({
                url : 'get-user-data',
                type : 'json',
                method : 'get',
                data : {
                    id : @json($user_id)
                }
            })
            .done( function(response){
                let json = JSON.parse(response);

                $("#welcomeName").html("Bienvenid@, " + json.name);
            })
            .fail( function(error){
                console.log(error)
            })
        }

        function confirmGetBlock(){
                event.preventDefault();

                $("#alertZone").html("");

                let name  = document.getElementById('client_name').value;
                let email = document.getElementById('client_email').value;
                let rut   = document.getElementById('client_rut').value;
                let phone = document.getElementById('client_phone').value;

                let alertText = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";


                if ( name  != '' &&
                    email != '' &&
                    rut   != '' &&
                    phone != '' ){

                    if ( validarCorreo(email) &&
                        validarRut(rut)      &&
                        validarTelefono(phone) ){

                        $.ajax({
                            url    : 'make-reservation',
                            method : 'post',
                            type   : 'json',
                            data   : {
                                _token          : "{{ csrf_token() }}",
                                name            : name,
                                email           : email,
                                rut             : rut,
                                phone           : phone,
                                date            : date,
                                time            : time,
                                speciality      : 'No informada',
                                professional_id : @json($user_id)
                            }
                        })
                        .done( function ( response ){
                            console.log(response)
                            if ( response != 0){
                                Swal.fire(
                                    '¡Listo!',
                                    'Se ha confirmado la reserva.',
                                    'success'
                                );
                                $("#buttonCloseExampleModal").click();
                                getBlocksByProfessionalId(1);
                                getBlocksByProfessionalId(-1);
                                getNextBlocksByProfId(@json($user_id))
                            }
                            else{
                                console.log(response)
                            }

                        })
                        .fail( function( error ){
                            console.log(error)
                        })
                    }
                    else{
                        if ( !validarCorreo(email) ){
                            alertText = alertText + "<span class='alert-text'><strong>Campo inválido: </strong> Email</span>";
                        }
                        else if ( !validarRut(rut) ){
                            alertText = alertText + "<span class='alert-text'><strong>Campo inválido: </strong> RUN</span>";
                        }
                        else if ( !validarTelefono(phone) ){
                            alertText = alertText + "<span class='alert-text'><strong>Campo inválido: </strong> Teléfono</span>";
                        }

                        alertText = alertText + "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>";
                        alertText = alertText + "<span aria-hidden='true'>&times;</span>";
                        alertText = alertText + "</button></div>";

                        $("#alertZone").html(alertText);
                    }

                }

            }


            function validarRut(rut) {
            var rutRegex = /^(\d{1,3}(\.?\d{3}){2})\-?([\dkK])$/;

            return rutRegex.test(rut);
        }

        function validarCorreo(correo) {
            var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            return correoRegex.test(correo);
        }

        function validarTelefono(telefono) {
            var telefonoRegex = /^\d{9}$/;

            return telefonoRegex.test(telefono);
        }

        function cancelReservation(){
            Swal.fire({
                title: '¿Desea cancelar esta reserva?',
                text: '¡Esta acción no se puede deshacer!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'cancel-reservation',
                        type : 'json',
                        method : 'POST',
                        data : {
                            _token : "{{ csrf_token() }}",
                            id     : res_id
                        }
                    })
                    .done(function(response){
                        if ( response == "success" ){
                            Swal.fire(
                                '¡Listo!',
                                'Se ha cancelado la reserva.',
                                'success'
                            );
                            getNextBlocksByProfId(@json($user_id))
                            getBlocksByProfessionalId( 1 )
                            getBlocksByProfessionalId( -1 )
                            $("#cancelReservationCloseButton").click();
                        }
                    })

                }
                });
        }

        getUserData();
        getNextBlocksByProfId(@json($user_id))
        getBlocksByProfessionalId( 0 )
    </script>

@endsection
