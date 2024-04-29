@extends('layouts.base')

@section('content')<div class="container">
    <br>
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
            <div class="card p-4">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_3.png');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <h5 class="text-white">
                        Esta sección es para reservar "intervenciones individuales", para Talleres, charlas y capacitaciones
                        <a href="https://wa.me/+56933243835?text=" target="_blank" class="text-info">consulte aquí.</a>
                    </h5>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100 p-4">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/img_2.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <table class="table align-items-center text-white">
                        <thead>
                            <th colspan="2">Selecciona profesional</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="cursor: pointer" onclick="selectProfessional(1)">
                                    Geraldin Maldonado Sánchez
                                </td>
                                <td style="cursor: pointer" onclick="selectProfessional(1)">
                                    Fonoaudióloga
                                </td>
                            </tr>
                            <tr>
                                <td style="cursor: pointer" onclick="selectProfessional(2)">
                                    Roxana Millar Barría
                                </td>
                                <td style="cursor: pointer" onclick="selectProfessional(2)">
                                    Terapeuta ocupacional
                                </td>
                            </tr>
                            <tr>
                                <td style="cursor: pointer" onclick="selectProfessional(3)">
                                    Rosita Alvarado Toledo
                                </td>
                                <td style="cursor: pointer" onclick="selectProfessional(4)">
                                    Terapeuta ocupacional
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
                    <table class="table align-items-center text-white">
                        <thead>
                            <th id="bloques">Bloques disponibles</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-2 text-end" style="cursor: pointer;" onclick="getBlocksByProfessionalId( 0, -1 )">
                                            <i class="ni ni-bold-left text-sm ms-1 " aria-hidden="true"></i>
                                        </div>
                                        <div class="col-8 text-center" id="dateToShow"></div>
                                        <div class="col-2 text-start" style="cursor: pointer;" onclick="getBlocksByProfessionalId( 0, 1 )">
                                            <i class="ni ni-bold-right text-sm ms-1 " aria-hidden="true" ></i>
                                        </div>
                                        <div class="col-12" id="blocks"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                            <h5>Por favor, complete los siguientes datos para continuar con su reserva</h5>
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
                <button type="button" class="btn bg-gradient-primary" onclick="confirmGetBlock()">Ir a pagar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="successModalLabel">¡Listo!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Te hemos enviado un correo con la información para el pago. Tienes 10 minutos para completarlo o tu reserva se anulará</h5>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <button hidden data-bs-toggle="modal" data-bs-target="#successModal" id="buttonSuccess"></button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
            let intMove = 0;
            let date    = "";
            let time    = "";
            let prof_id = 0;

            function getBlocksByProfessionalId( id, move ){

                if ( id == 0 ){
                    id = prof_id;
                }

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
                    textToShow = textToShow + "<p class='text-justify' style='width: 50%'>Domingo cerrado.</p>";
                    $("#blocks").html(textToShow);
                }
                else if ( diaSemana < 6 ){
                    if (horaActual >= 19) {
                        if ( actualDate.getTime() == requestDate.getTime() ){
                            let textToShow = "<br>";
                            textToShow = textToShow + "<p class='text-bold text-start'>Ups! que mala suerte</p>";
                            textToShow = textToShow + "<p class='text-justify' style='width: 50%'>Sin horas disponibles.</p>";
                            $("#blocks").html(textToShow);
                        }
                        else if ( actualDate.getTime() > requestDate.getTime() ){
                            let textToShow = "<br>";
                            textToShow = textToShow + "<p class='text-bold text-start'>Ups! tenemos un error</p>";
                            textToShow = textToShow + "<p class='text-justify' style='width: 50%'>Fecha incorrecta.</p>";
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
                            textToShow = textToShow + "<p class='text-bold text-start'>Ups! que mala suerte</p>";
                            textToShow = textToShow + "<p class='text-justify' style='width: 50%'>Sin horas disponibles.</p>";
                            $("#blocks").html(textToShow);
                        }
                        else if ( actualDate.getTime() > requestDate.getTime() ){
                            let textToShow = "<br>";
                            textToShow = textToShow + "<p class='text-bold text-start'>Ups! tenemos un error</p>";
                            textToShow = textToShow + "<p class='text-justify' style='width: 50%'>Fecha incorrecta.</p>";
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
                            textToFill = textToFill + "<div style='border-style: solid; border-color: white;'>";
                            textToFill = textToFill + hour + ":00 - " + nextHour + ":00";
                            textToFill = textToFill + " - OCUPADO <i class='ni ni-fat-remove text-sm ms-1 text-danger' aria-hidden='true'></i>";

                        }
                        else{


                            textToFill = textToFill + "<div onclick='setDateTIme(\"" + hour + ":00:00" + "\", \"" + date.toISOString().split('T')[0] + "\")' style='border-style: solid; border-color: white; cursor: pointer;' data-bs-toggle='modal' data-bs-target='#exampleModal'>";
                            textToFill = textToFill + hour + ":00 - " + nextHour + ":00";
                            textToFill = textToFill + "- DISPONIBLE <i class='ni ni-check-bold text-sm ms-1 text-success' aria-hidden='true'></i>";
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

            function setDateTIme( time_, date_ ){
                time = time_;
                date = date_;
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
                                professional_id : prof_id,
                                validated       : 0

                            }
                        })
                        .done( function ( response ){
                            if ( response.id != 0){
                                getBlocksByProfessionalId(prof_id,0);
                                let jsn = JSON.parse(response);

                                $.ajax({
                                    url    : 'make-payment',
                                    method : 'get',
                                    type   : 'json',
                                    data   : {
                                        email  : email,
                                        rut    : rut,
                                        db_id  : jsn.id,
                                        com_or : jsn.commerce_order
                                    }
                                })
                                .done( function ( resp ){
                                    console.log(resp)
                                    window.location.href = resp;
                                })
                                .fail( function ( error ){
                                    console.log(error)
                                })
                                /*$("#buttonCloseExampleModal").click();
                                $("#buttonSuccess").click();*/
                            }
                            else{
                                console.log(resp)
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

            function selectProfessional( id ){
                if ( id == 1 ){
                    prof_id = 1;
                    $("#bloques").html("Bloques: Geraldin Maldonado Sánchez");
                    getBlocksByProfessionalId(prof_id,0);
                }
                else if ( id == 2 ){
                    prof_id = 2;
                    $("#bloques").html("Bloques: Roxana Millar Barría");
                    getBlocksByProfessionalId(prof_id,0);
                }
                else if ( id == 3 ){
                    prof_id = 3;
                    $("#bloques").html("Bloques: Rosita Alvarado Toledo");
                    getBlocksByProfessionalId(prof_id,0);
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

            function verifyPay(){
                $.ajax({
                    url    : 'verify-pay',
                    method : 'get'
                })
                .done( function(response){
                    if ( response == "success" ){
                        getBlocksByProfessionalId(prof_id,0);
                    }
                })
                .fail( function(error){
                    console.log(error)
                })
            }

            setInterval(() => {
                $.ajax({
                    url    : 'verify-pay',
                    method : 'get'
                })
                .done( function(response){
                    if ( response == "success" ){
                        getBlocksByProfessionalId(prof_id,0);
                    }
                })
                .fail( function(error){
                    console.log(error)
                })
            }, 1000*300);


            verifyPay();
            selectProfessional(1)
            getBlocksByProfessionalId(1,0);

        </script>
@endsection
