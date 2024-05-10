<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function logins()
    {
        $credential = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {
            if(auth()->attempt($credential)) {
                $user = auth()->user();        
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);            
                session()->regenerate();
                return redirect()->route('booking.index', ['type' => 'C']);
            } else {
                $this->dispatch('failed', 'Email / Password salah!');
            }
        } catch (\Exception $e) {

        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
