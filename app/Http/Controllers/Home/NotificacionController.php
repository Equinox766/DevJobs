<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class NotificacionController extends Controller
{
    public function __invoke()
    {
        $notificaciones = auth()->user()->unreadNotifications;

        //limpiar notificacions
        auth()->user()->unreadNotifications->markAsRead();
        return view('notificaciones.index', compact('notificaciones'));
    }
}
