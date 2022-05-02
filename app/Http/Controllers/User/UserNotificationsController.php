<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user_notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserNotificationsController extends Controller
{
    public function notifications()
    {
        $notifications = user_notification::where('user_id', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('user.notification.notificationList', compact('notifications'));
    }
}
