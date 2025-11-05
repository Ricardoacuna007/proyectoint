
<?php

class Auth 
{
    public function __construct()
    {
        var_dump("aqui"); exit();
        if (session_status() === PHP_SESSION_NONE) 
        {
            session_start();
        }
    }

    public static function authentication(array $user): array
    {
        if (empty($user) || !isset($user[0])) 
        {
            throw new InvalidArgumentException("Credenciales inválidas o vacías.");
        }

        $_SESSION['authUser'] = 
        [
            "authenticated" => true,
            "pkPhone"       => $user[0]['pk_user']    ?? null,
            "name"          => $user[0]['person']     ?? null,
            "firstName"     => $user[0]['first_name'] ?? null,
            "lastName"      => $user[0]['last_name']  ?? null
        ];

        return $_SESSION['authUser'];
    }
}

?>