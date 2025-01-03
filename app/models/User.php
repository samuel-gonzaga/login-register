<?php

class User
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function registerUser($name, $email, $hashedPassword)
    {
        try {
//            var_dump($name, $email, $hashedPassword); // Para depuração

            if (empty($name) || strlen($name) < 3) {
                throw new Exception("O nome deve ter pelo menos 3 caracteres.");
            }

            if (!$name || !$email || !$hashedPassword) {
                throw new Exception("Todos os campos são obrigatórios.");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Formato de e-mail inválido.");
            }

            date_default_timezone_set("America/Sao_Paulo");
            $data = date('Y-m-d H:i:s');
            $query = "INSERT INTO users (name, email, password, created_at) VALUES (:name, :email, :password, :data)";
            $stmt = $this->db->prepare($query);

            return $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashedPassword,
                ':data' => $data,
            ]);
        } catch (PDOException $exception) {
            if ($exception->getCode() === '23000') {
                return "E-mail já está cadastrado.";
            }
            error_log("Erro de validação: " . $exception->getMessage());
            return $exception->getMessage();
        }
    }

    public function retornaInfosUser($email)
    {
        $query = 'SELECT id, name, email, password FROM users WHERE email = :email';
        $stmt = $this->db->prepare($query);

        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}