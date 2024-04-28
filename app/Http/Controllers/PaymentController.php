<?php

namespace App\Http\Controllers;

use Config;
use Exception;
use FlowApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

require_once __DIR__ . '\FlowApi.class.php';
require_once __DIR__ . '\Config.class.php';

class PaymentController extends Controller
{
    public function makePaymentOrder(Request $request){

         // Para datos opcionales campo "optional" prepara un arreglo JSON
        $optional = [
            "rut" => $request->rut,
            "db_id" => $request->db_id
        ];
        $optional = json_encode($optional);

        // Prepara el arreglo de datos
        $params = [
            "commerceOrder" => rand(1100,2000),
            "subject" => "Pago de prueba",
            "currency" => "CLP",
            "amount" => 5000,
            "email" => $request->email,
            "paymentMethod" => 9,
            "urlConfirmation" => Config::get("BASEURL") . "/payments/confirm.php",
            "urlReturn" => Config::get("BASEURL") ."/payments/result.php",
            "optional" => $optional
        ];
        // Define el metodo a usar
        $serviceName = "payment/create";

        try {
            // Instancia la clase FlowApi
            $flowApi = new FlowApi;
            // Ejecuta el servicio

            $response = $flowApi->send($serviceName, $params, "POST");

            // Prepara url para redireccionar el browser del pagador
            $redirect = $response["url"] . "?token=" . $response["token"];

            return $redirect;
        } catch (Exception $e) {
            return "Error: " . $e->getCode() . " - " . $e;
        }

    }
}
