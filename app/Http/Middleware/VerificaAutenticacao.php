<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class VerificaAutenticacao
{
public function handle($request, Closure $next)
{
if (!Auth::check()) {
// Se o usuário não estiver autenticado, redireciona para a página de login
return redirect()->route('login')->with('error', 'Por favor, faça login para acessar esta
página.');
}

// Se o usuário estiver autenticado, permite que a solicitação prossiga
return $next($request);
}
}