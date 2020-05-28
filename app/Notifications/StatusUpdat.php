<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class StatusUpdat extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    /*Esto es para poder utilizar el objeto user*/
    /*Hay que injectar el usuario en el contructor*/
    public function __construct($user){
    $this->user = $user;
        //
    }


/*
/*
/*
/****************** VIA *************************/
    /* Via recive el objeto Notifiable por URL y 
    decide el canal que va a utilizar for delivery*/
    public function via($notifiable)
    {

        /*return('mail');*/
        return ['database'];
    }
/****************** VIA *************************/
/*
/*
/*
/**************** ToMAIL ***************************/
    /*Este es el canal que se activa con el metodo de VIA*/
    /*Receive a $notifiable entity and should return an Illuminate\Notifications\Messages\MailMessage*/
    /*Aqui se modifica que es lo que va a llevar el mensaje*/

    /* function toMail($notifiable)
    {
        return (new MailMessage)*/
                    
                    /*En caso de que se quiera informar a los usuarios sobre un error*/
                   /* ->error()
                    ->subject('Order Status')
                    ->from('sender@example.com', 'Sender')
                    ->greeting('Hello!') 
                    ->line('Your order status has been updated')
                    ->action('Check it out', url('/'))
                    ->line('Best regards!');
    }*/
/**************** /ToMAIL ***************************/



    /**
     * Get the array representation of the notification.
     *
    */
    public function toArray($notifiable)
    {
        return [
            'name' => $this->user->first_name,
            'email' => $this->user->email,
        ];
    }
}
