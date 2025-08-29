<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevoMantenimiento extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $id_equipo;
    private $nombre_equipo;
    private $usuario_id;
    public function __construct($id_equipo, $nombre_equipo, $usuario_id)
    {
        $this->id_equipo = $id_equipo;
        $this->nombre_equipo = $nombre_equipo;
        $this->usuario_id = $usuario_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notificaciones');
        return (new MailMessage)
            ->line('Se te ha asignado un nuevo mantenimiento al equipo: ' . $this->nombre_equipo)
            ->action('Ver asignacion', url($url))
            ;
    }

    public function toDatabase(object $notifiable)
    {
        return [
            'id_equipo' => $this->id_equipo,
            'nombre_equipo' => $this->nombre_equipo,
            'usuario_id' => $this->usuario_id,
            'mensaje' => 'Se ha asignado un nuevo mantenimiento al equipo: ' . $this->nombre_equipo,
        ];
    }   
}
