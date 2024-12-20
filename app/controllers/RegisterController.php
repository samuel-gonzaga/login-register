<?php
require_once __DIR__ . '/../models/User.php';

class RegisterController extends Controller
{
    public function validarRegistro($dados)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $username = trim($dados['username'] ?? '');
            $email = trim($dados['email'] ?? '');
            $password = trim($dados['password'] ?? '');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if (strlen($username) < 3) {
                $errors[] = "O nome de usuário deve ter pelo menos 3 caracteres.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "O email informado não é válido.";
            }

            if (strlen($password) < 6) {
                $errors[] = "A senha deve ter pelo menos 6 caracteres.";
            }

            if (empty($errors))
            {
                try {
                    $user = new User($this->db);
                    $result = $user->registerUser($username, $email, $hashedPassword);

                    if ($result === true) {
                        header("Location: home");
                        exit;
                    } elseif (is_string($result)) {
                        $errors[] = $result; // Mensagem de erro retornada pela model
                    } else {
                        $errors[] = "Erro desconhecido ao registrar o usuário.";
                    }
                } catch (Exception $e) {
                    $errors[] = "Erro ao processar o registro: " . $e->getMessage();
                }
            }
        }
    }
}