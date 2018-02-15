<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validar o formulario
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //criar e guardar o utilizador
        $user = User::create(
            request(['name', 'email', 'password'])
        );

        //ligar ao site
        auth()->login($user);

        \Mail::to($user)->send(new Email);

        //redireeccionar para a homepage
        return redirect()->home();

    }
}
