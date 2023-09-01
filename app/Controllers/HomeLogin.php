<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UsuarioModel;
use App\Models\FormModel;

class HomeLogin extends BaseController
{
    private $usuarioModel;
    private $userModel;
    private $formModel;

    public function __construct()
    {
        $this->usuarioModel = new UserModel();
        $this->userModel = new UsuarioModel();
        $this->formModel = new FormModel();
    }

    public function index()
    {
        $usuarioId = $this->session->get('usuario_id');
        $usuarios = $this->userModel->select('id', 'usuario')->find($usuarioId);
        return view('homelogin', [
            'usuarios' => $usuarios
        ]);
    }

    public function form()
    {
        $usuarioId = $this->session->get('usuario_id');
        $usuarios = $this->userModel->select('id', 'usuario')->find($usuarioId);
        return view('form', [
            'usuarios' => $usuarios
        ]);
    }

    public function storeForm()
    {
        $data['msg'] = '';
        $data['msg_erro'] = '';
        $formData = $this->request->getPost();
    
        // Salvar os dados no banco de dados
        if ($this->formModel->save($formData)) {
            $data['msg'] = 'Avaliação salva com sucesso!';
        } else {
            $data['msg_erro'] = 'Erro ao salvar a avaliação!';
        }
    
        $usuarioId = $this->session->get('usuario_id');
        $usuarios = $this->userModel->select('id', 'usuario')->find($usuarioId);
    
        return view('form', ['usuarios' => $usuarios] + $data);
    }
    
    public function storeEdit()
    {
        $data['msg'] = '';
        $userData = $this->request->getPost();
        $userData['perfil'] = 'usuario'; // Define o perfil padrão
    
        // Verificar se a senha foi fornecida
        if (isset($userData['senha'])) {
            // Verificar se a senha está vazia
            if (empty($userData['senha'])) {
                // Remover o campo senha se estiver vazio
                unset($userData['senha']);
            } else {
                // Criptografar a nova senha fornecida
                $userData['senha'] = password_hash($userData['senha'], PASSWORD_DEFAULT);
            }
        }
    
        // Obter os dados originais do usuário do banco de dados
        $originalData = $this->usuarioModel->find($userData['id']);
    
        // Verificar se algum dado foi alterado
        $isDataChanged = $this->isDataChanged($userData, (array) $originalData);
    
        if ($isDataChanged) {
            if ($this->usuarioModel->save($userData)) {
                $data['msg'] = 'Usuário editado com sucesso!';
                $data['usuarios'] = $userData; // Passa os dados do usuário para a view
                $this->session->set('nomeUsuario', $userData['usuario']); // Atualizar o nome do usuário na sessão
            } else {
                $data['msg_erro'] = 'Erro ao editar usuário!';
            }
        } else {
            $data['msg_erro'] = 'Nenhum dos dados foram alterados. Altere para salvar.';
            $data['usuarios'] = (array) $originalData; // Mantém os dados originais na view
        }
    
        return view('edit_user', $data);
    }
    
    public function edit($id)
    {
        $usuarios = $this->userModel->find($id);
        return view('edit_user', ['usuarios' => $usuarios]);
    }

    private function isDataChanged($userData, $originalData)
    {
        // Comparar cada campo individualmente com os dados originais
        foreach ($userData as $key => $value) {
            // Ignorar o campo "honeypot"
            if ($key === 'honeypot') {
                continue;
            }
    
            if ($value !== $originalData[$key]) {
                return true; // Dado alterado encontrado
            }
        }
    
        return false; // Nenhum dado alterado encontrado
    }
    

}
