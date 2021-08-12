<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class UsuarioController extends Controller {
    //
    private $api = 'https://api.github.com';

    /**
     * Método responsável para trazer a tela de busca e usuarios
     */
    public function inicial() {
        return view('inicial');
    }

    /**
     * Exibe os resultado da busca 
     */
    public function resultado(Request $request) {
        $response = Http::get($this->api . '/search/users?q=' . $request->termo);
        return view('resultado', $response->json());
    }

    /**
     * Traz mais informações do usuário
     * @param $usuario -> É o código do usuário no github
     */
    public function visualizar($usuario) {
        //Recupera os dados do usuário
        $response = Http::get($this->api . '/users/' . $usuario);
        $usuario = $response->json();

        //Recupera os repositórios
        $response = Http::get($usuario['repos_url']);
        $repositorios = $response->json();

        $dados = ['usuario' => $usuario, 'repositorios' => $repositorios];

        return view('visualizar', $dados);
    }
}
