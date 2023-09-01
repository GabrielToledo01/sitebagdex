<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Home extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UserModel();
    }

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $data['msg'] = '';

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $senha = $this->request->getPost('senha');

            $usuarioModel = model('UserModel');
            $buscaUsuario = $usuarioModel->where('email', $email)->first();

            if ($buscaUsuario) {
                if (password_verify($senha, $buscaUsuario->senha)) {
                    // Login válido, salvar dados na sessão
                    $this->session->set('perfil', $buscaUsuario->perfil);
                    $this->session->set('nomeUsuario', $buscaUsuario->usuario);
                    $this->session->set('usuario_id', $buscaUsuario->id);

                    return redirect()->to('homelogin'); // Redirecionar para a página restrita
                } else {
                    // Senha incorreta
                    $data['msg'] = 'Senha incorreta!';
                }
            } else {
                // Usuário não encontrado
                $data['msg'] = 'E-mail não encontrado!';
            }
        }

        $data['msg_sucess'] = session('data.msg_sucess');

        return view('login', $data);
    }


    public function create()
    {

        return view('cadastro');
    }

    public function store()
    {
        $data['msg'] = '';

        if ($this->request->getMethod() === 'post') {
            $usuario = $this->request->getPost('usuario');
            $email = $this->request->getPost('email');
            $telefone = $this->request->getPost('phone');
            $cpf = $this->request->getPost('doc');

            // Verificar se o email já está cadastrado
            $buscaEmail = $this->usuarioModel->where('email', $email)->first();

            if ($buscaEmail) {
                $data['msg_erro'] = 'Email já cadastrado.';
            } else {
                // Verificar se o email é válido e existe no Google
                if ($this->isValidGoogleEmail($email)) {
                    // Verificar se o nome de usuário já está cadastrado
                    $buscaUsuario = $this->usuarioModel->where('usuario', $usuario)->first();

                    if ($buscaUsuario) {
                        $data['msg_erro'] = 'Nome de usuário já cadastrado.';
                    } else {
                        // Verificar se o número de telefone já está cadastrado
                        $buscaTelefone = $this->usuarioModel->where('phone', $telefone)->first();

                        if ($buscaTelefone) {
                            $data['msg_erro'] = 'Número de telefone já cadastrado.';
                        } else {
                            // Verificar se o CPF já está cadastrado
                            $buscaCPF = $this->usuarioModel->where('doc', $cpf)->first();

                            if ($buscaCPF) {
                                $data['msg_erro'] = 'CPF já cadastrado.';
                            } else {
                                // Verificar se o CPF é válido
                                if ($this->isValidCPF($cpf)) {
                                    // Todos os dados estão válidos, salvar no banco de dados
                                    $userData = $this->request->getPost();
                                    $userData['perfil'] = 'usuario'; // Define o perfil padrão

                                    if ($this->usuarioModel->save($userData)) {
                                        $data['msg'] = 'Usuário criado com sucesso!';
                                    } else {
                                        $data['msg'] = 'Erro ao criar usuário!';
                                    }
                                } else {
                                    $data['msg_erro'] = 'CPF inválido.';
                                }
                            }
                        }
                    }
                } else {
                    $data['msg_erro'] = 'Email inválido.';
                }
            }
        }

        return view('cadastro', $data);
    }

    private function isValidGoogleEmail($email)
    {
        return strpos($email, '@') !== false;
    }
    

    private function isValidCPF($cpf)
    {
        // Remove todos os caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
        // Verifica se o CPF possui 11 dígitos
        if (strlen($cpf) !== 11) {
            return false;
        }
    
        // Verifica se todos os dígitos são iguais, o que torna o CPF inválido
        if (preg_match('/^(\d)\1+$/', $cpf)) {
            return false;
        }
    
        return true;
    }
    
    
}
