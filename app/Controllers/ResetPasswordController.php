<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('reset_password_form');
    }

    public function resetPassword()
    {
        $userModel = new UserModel();

        // Recupera os dados enviados pelo formulário
        $username = $this->request->getPost('usuario');
        $email = $this->request->getPost('email');
        $document = $this->request->getPost('doc');
        $password = $this->request->getPost('senha');

        // Verifica se as informações fornecidas coincidem com o registro do usuário
        $user = $userModel->where('usuario', $username)
            ->where('email', $email)
            ->where('doc', $document)
            ->first();

        if ($user === null) {
            // Informações inválidas, redireciona o usuário para o formulário de redefinição de senha
            $data['msg_erro'] = 'Informações inválidas';
            return view('reset_password_form', $data);
        }

        // Atualiza a senha do usuário no banco de dados
        $userModel->update($user->id, [
            'senha' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        // Define a mensagem de sucesso
        $data['msg_sucess'] = 'Senha redefinida com sucesso !';

        // Redireciona o usuário para uma página de confirmação
        return redirect()->to('home/login')->with('data', $data);
    }
}
