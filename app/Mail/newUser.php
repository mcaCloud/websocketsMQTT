<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;


class newUser extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(){}

    /*Simpre para enviar correos en la funcion build tenemos el metodo para construir*/
    public function build(){

        /*Primero definimos de parte de quien se envia el mensaje*/
        /*De esta forma el usuario sabe si puede reply o no*/
        return $this->from('example@example.com')
                /*Regresamos el view con el BODY del correo*/
                ->view('mails.newUser');
    }
}