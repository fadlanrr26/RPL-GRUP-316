<?php

namespace App\Http\Controllers\Auth;

use App\Models\Guru;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): View
    {
        $role = $request->role;
        if($role == "guru"){
            return view('auth.register-guru');
        } else{
            return view('auth.register-walimurid');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no_telepon' => ['required', 'unique:'.User::class, 'regex:/^[0-9+\s]+$/', 'min:10'],
            'username' => ['required', 'string', 'lowercase',  'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->role == "guru"){
            $request->validate(["tingkatan_sekolah" => ['required', 'string', 'max:255']]);
            }else{
            $request->validate(["nama_anak" => ['required', 'string', 'max:255']]);
        }

        if($request->role == "guru"){
            $user = User::create([
                'username' => $request->username,
                'no_telepon' => $request->no_telepon,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole('guru');
            Guru::create([
                "tingkatan_sekolah" => $request->tingkatan_sekolah,
                "user_id" => $user->id
            ]);
        }else{
            $user = User::create([
                'username' => $request->username,
                'no_telepon' => $request->no_telepon,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ])->assignRole('wali_murid');
            Guru::create([
                "nama_murid" => $request->nama_murid,
                "user_id" => $user->id
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
