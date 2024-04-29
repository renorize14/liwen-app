<?php

/**
 * Clase para configurar el cliente de Flow
 */
class Config
{
    /**
     * Configuración del cliente de Flow
     */
    protected $config = [
        "APIKEY" => "2CFEE8DA-BADC-4E26-B73C-5CE4CL529F22",
        "SECRETKEY" => "d2a93b353471cb44a21e9ebb6341fb562385e759",
        "APIURL" => "https://sandbox.flow.cl/api",
        "BASEURL" => "htt://127.0.0.1:8000"
    ];

    /**
     * Obtener un valor de configuración
     *
     * @param string $name Nombre del valor de configuración
     * @return mixed Valor de configuración correspondiente al nombre dado
     */
    public function get($name)
    {
        if (!isset($this->config[$name])) {
            throw new Exception("El elemento de configuración no existe: $name");
        }
        return $this->config[$name];
    }
}
