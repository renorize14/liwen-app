<?php

namespace App\Http\Controllers;

use Config;
use Exception;
use FlowApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

require_once __DIR__ . '/FlowApi.php';
require_once __DIR__ . '/Config.php';

class PaymentController extends Controller
{
    public function makePaymentOrder(Request $request){

        $conf = new Config();

        $optional = array(
            "rut" => $request->rut,
            "otroDato" => "otroDato"
        );
        $optional = json_encode($optional);



        $urlConfirmation = "http://127.0.0.1:8000/confirm-payment?commerce_order=" . $request->com_or;

        $params = array(
            "commerceOrder" => $request->com_or,
            "subject" => "Consulta centro Liwen (General)",
            "currency" => "CLP",
            "amount" => 25000,
            "email" => $request->email,
            "paymentMethod" => 9,
            "urlConfirmation" => $urlConfirmation,
            "urlReturn" => $urlConfirmation
        );

        // Define el metodo a usar
        $serviceName = "payment/create";

        try {
            // Instancia la clase FlowApi
            $flowApi = new FlowApi;
            // Ejecuta el servicio
            $response = $flowApi->send($serviceName, $params, "POST");

            // Prepara URL para redireccionar el browser del pagador
            $redirect = $response["url"] . "?token=" . $response["token"];
            return $redirect;
        } catch (\Exception $e) {
            return $e->getCode() . " - " . $e;
        }
    }
}
