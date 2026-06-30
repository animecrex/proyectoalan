<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        if ($request->session()->token() !== $request->input('_token')) {
            throw ValidationException::withMessages([
                'error' => 'Token CSRF expirado. Por favor, inicia sesión nuevamente.',
            ])->redirectTo('/login');
        }

        $usuario = trim($request->input('usuario'));
        $password = trim($request->input('password'));

        //  Buscar usuario
        $user = \App\Models\User::where('usuario', $usuario)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'erroLogin' => 'Usuario o contraseña incorrectos.',
            ])->redirectTo('/login');
        }

        // Usuario inactivo
        //if ($user->status == 0) {
        //  throw ValidationException::withMessages([
        //    'erroLogin' => 'Usuario inactivo, contacta al administrador.',
        //])->redirectTo('/login');
        //}

        //  Intentar login
        if (Auth::attempt([
            'usuario' => $usuario,
            'password' => $password
        ])) {

            Log::channel('auth')->info(
                '[login][Inicio de sesión IP: ' . request()->ip() . '][ID:' . Auth::id() . ']'
            );

            // REDIRECCIÓN POR ROL
            // if ($user->hasRole('Admin')) {
            //   return redirect()->route('busquedae');
            //}

            // if ($user->hasRole('captura')) {
            //    return redirect()->route('registro');
            //}

            return redirect('/curso');
        }

        //  Password incorrecto
        throw ValidationException::withMessages([
            'erroLogin' => 'Usuario o contraseña incorrectos.',
        ])->redirectTo('/login');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
