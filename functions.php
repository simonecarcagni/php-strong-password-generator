<?php

    function generatoreDiPassword($passwordLength) {

        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $symbols = "!@#$%&*/";

        $passwordSet = $alphabet . strtoupper($alphabet) . $numbers . $symbols;

        if(empty($passwordLength)){
            $result = "La lunghezza della password non è valida";
        } elseif ($passwordLength < 8 || $passwordLength > 32) {
            $result = "La lunghezza della password deve essere compresa tra 8 e 32 caratteri";
        }  else {

            $password = "";

            for($i = 0; $i < $passwordLength; $i++){
                $index = rand(0, strlen($passwordSet));
                $password .= $passwordSet[$index];
            }
            
            $result = $password;

            session_start();
            $_SESSION['password'] = $password;

            header('Location: finalpassword.php');
        }

        return $result;
    }

?>
