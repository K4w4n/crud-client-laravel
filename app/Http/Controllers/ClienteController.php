<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function createCustomer()
    {
        //Validando dados
        if (
            @$_POST['nome'] &&
            @$_POST['telefone'] &&
            @$_POST['email']
        ) {

            //Enviando dados 
            return [
                'status' => 'success',
                'data' => Cliente::create($_POST)
            ];
        }

        //Enviando erro nos dados
        return [
            'status' => 'failed',
            'message' => 'Alguns dados podem estar faltando'
        ];
    }

    public function updateCustomer()
    {
        if (@$_REQUEST['id']) {
            //Verificando se id existe

            //Formatando dados
            $dados = [];

            if (@$_REQUEST['nome']) $dados['nome'] = $_REQUEST['nome'];

            if (@$_REQUEST['telefone']) $dados['telefone'] = $_REQUEST['telefone'];

            if (@$_REQUEST['email']) $dados['email'] = $_REQUEST['email'];

            //Verificando se existe pelo menos um dado para ser inserido
            if (count($dados)) {

                //Atualizando cliente
                if (Cliente::where('id', $_REQUEST['id'])->update($dados)) {

                    //Enviando resultados
                    return ['status' => 'success'];
                }

                //Enviando mensagem caso o cliente não exista
                return [
                    'status' => 'failed',
                    'message' => 'O cliente não existe'
                ];
            }
        }

        //Enviando mensagem de erro
        return [
            'status' => 'failed',
            'message' => 'Alguns dados podem estar faltando'
        ];
    }

    public function selectCustomer()
    {
        return [
            'status' => 'success',
            'data' => Cliente::all(['id', 'nome', 'telefone', 'email'])
        ];
    }
    public function DeleteCustomer()
    {
        //Checando se Id foi definido
        if (@$_REQUEST['id']) {

            //Deletando cliente
            $customerDeleted = Cliente::destroy($_REQUEST['id']);

            //Checando se algum Cliente foi deletado
            if ($customerDeleted) {

                //Enviando resultado da busca
                return ['status' => 'success'];
            }
            return [
                'status' => 'failed',
                'message' => 'O cliente não existe'
            ];
        }

        return [
            'status' => 'failed',
            'message' => 'Alguns dados podem estar faltando'
        ];
    }
    public function find()
    {
        if (is_numeric(@$_GET['id'])) {
            $cliente = Cliente::find($_GET['id'], ['id', 'nome', 'telefone', 'email']);
            if ($cliente) {
                return [
                    'status' => 'success',
                    'data' => $cliente
                ];
            }
            return [
                'status' => 'failed',
                'message' => 'Cliente não cadastrado'
            ];
        }
        return [
            'status' => 'failed',
            'message' => 'Alguns dados podem estar faltando'
        ];
    }
}
