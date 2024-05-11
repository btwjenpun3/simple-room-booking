<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;

    public function logins()
    {
        $credential = $this->validate([
            'username' => 'required',
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
                $this->dispatch('failed', 'Username / Password salah!');
            }
        } catch (\Exception $e) {
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
