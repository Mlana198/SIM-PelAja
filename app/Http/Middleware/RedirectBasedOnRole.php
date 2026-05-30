<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Jika user mencoba akses panel admin tapi role-nya bukan Admin
        if ($user && $request->is('admin*')) {
            if ($user->role === UserRole::Instruktur) {
                return redirect('/instruktur');
            }
            if ($user->role === UserRole::SubKoordinator) {
                return redirect('/sub-koordinator');
            }
            if ($user->role === UserRole::Kabid) {
                return redirect('/kabid');
            }
            if ($user->role === UserRole::Peserta) {
                return redirect('/peserta');
            }
        }

        return $next($request);
    }
}
