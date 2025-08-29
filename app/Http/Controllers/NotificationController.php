<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $notificaciones = auth()->user()->unreadNotifications;
        // Marcar todas las notificaciones como leídas
        auth()->user()->unreadNotifications->markAsRead();
        return view('notificaciones.index', [
            'notificaciones' => $notificaciones
        ]);
    }
}
