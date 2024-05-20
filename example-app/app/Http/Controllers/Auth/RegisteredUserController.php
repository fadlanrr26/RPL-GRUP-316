<?php

namespace App\Http\Controllers\Auth;

use App\Models\Guru;
use App\Models\User;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\WaliMurid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function registerGuru(): View
    {
        return view('auth.register-guru');
    }

    public function registerWaliMurid(): View
    {
        $students = Student::all();
        return view('auth.register-walimurid', compact('students'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
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
            $request->validate(["id_anak" => ['required', 'string', 'max:255']]);
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
            ])->assignRole('wali murid');
            WaliMurid::create([
                "id_anak" => $request->id_anak,
                "user_id" => $user->id
            ]);
        }
        event(new Registered($user));

        Auth::login($user);


        return redirect(route('dashboard', absolute: false));
    }
}
