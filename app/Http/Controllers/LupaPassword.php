<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

use Sentinel;
use Reminder;


class LupaPassword extends Controller
{
    public function lupa()
    {
        return view('user.inputEmail');
    }

    public function password(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if ($user == null) {
            return redirect()->back->with(['error' => 'Email yang anda masukkan tidak terdaftar']);
        }

        $user = User::findByid($user->id);
        $reminder = User::exits($user) ?: User::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Kode Reset password akan dikirim ke email anda']);
    }

    public function sendEmail($user, $code)
    {
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function ($message) use ($user) {
                $message->to($user->email);
                $message->subject("$user->name, reset password anda");
            }
        );
    }
}
