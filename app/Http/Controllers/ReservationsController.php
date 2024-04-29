<?php

namespace App\Http\Controllers;

use App\Mail\NewMail;
use App\Models\Professional;
use App\Models\Reservation;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

class ReservationsController extends Controller
{
    public function getFreeBlocksById(Request $request){
        try {
            $reservation = Reservation::where('professional_id', $request->id)
                            ->whereBetween('reservation_date', [$request->date . ' 00:00:00', $request->date  . ' 23:59:00'])
                            ->get();

            if ($reservation) {
                echo json_encode($reservation);
            } else {
                echo "No se encontró ninguna reserva con el ID proporcionado";
            }

        } catch (\Throwable $th) {
            return "Error: " . $th->getMessage();
        }
    }

    public function makeNewReservation(Request $request){
        try {
            $reservation = new Reservation();

            $reservation->reservation_date = $request->date . " " . $request->time;
            $reservation->professional_id  = $request->professional_id;
            $reservation->client_name      = $request->name;
            $reservation->client_mail      = $request->email;
            $reservation->client_phone     = $request->phone;
            $reservation->client_rut       = $request->rut;
            $reservation->speciality       = $request->speciality;
            $reservation->pagado           = $request->validated;
            $reservation->commerce_order   = rand(1100, 2000);



            if ( $reservation->save() ) {
                $json = [
                    "id" => $reservation->id,
                    "commerce_order" => $reservation->commerce_order
                ];
                echo json_encode($json);
            }
            else{
                echo "error";
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function verifyReservationPay(){
        // Obtener todas las reservas no pagadas
        $reservations = Reservation::where('pagado', 0)->get();

        // Obtener la fecha y hora actual en la hora local de Chile
        $zonaHoraria = new DateTimeZone('America/Santiago');
        $fechaHoraChile = new DateTime('now', $zonaHoraria);

        foreach ($reservations as $reservation) {
            $created_at = new DateTime($reservation->created_at);

            // Calcular la diferencia entre las fechas en minutos
            $interval = $created_at->diff($fechaHoraChile);
            $totalMinutos = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

            // Verificar si la diferencia es mayor que 5 minutos
            if ($totalMinutos > 5) {
                // Eliminar la reserva
                $reservation->delete();
            }
        }

        // Obtener las reservas actualizadas (solo para fines de depuración)
        $reservations = Reservation::all();

        // Devolver las reservas en formato JSON (solo para fines de depuración)
        return response()->json($reservations);
    }

    public function getNextBlocks(Request $request){
        $reservations = Reservation::where('professional_id', $request->id)->limit(5)->get();

        return json_encode($reservations);
    }

    public function cancelReservation(Request $request){
        $reservations = Reservation::where('id', $request->id)->get();

        if ( $reservations[0]->delete()){
            return "success";
        }
    }

    public function confirmPaymentPage(Request $request){

        if ( Reservation::where("commerce_order", $request->commerce_order)->update(['pagado' => 1]) ){
            $res    = Reservation::where('commerce_order', $request->commerce_order)->get();
            $reserv = $res[0];

            $profess = Professional::where('id', $reserv->professional_id)->get();

            if ( count($profess) > 0 ){
                $prof    = $profess[0];
                return view('/confirm-payment', compact('reserv','prof'));
            }
            else{
                $profess = Professional::where('id', 4)->get();
                $prof    = $profess[0];
                return view('/confirm-payment', compact('reserv','prof'));
            }


        }
        else{
            return view('/');
        }

    }

}
