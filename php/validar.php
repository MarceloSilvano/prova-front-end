<?php
$nome = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['menssage'];

$valido = true;

if(!$name<>NULL&&!$name<>""){
    $valido = false;
}

if(!$phone<>NULL&&!$phone<>""){
    $valido = false; 
}else{
    if(1==1){

    }
}

if(!$email<>NULL&&!$email<>""){
    $valido = false;
}else{
    if(checkEmail()==false){
        $valido = false;
    }
}

if(!$msg<>NULL&&!$msg<>""){
    $valido = false;
}

if(!$name<>NULL&&!$name<>""){
    $valido = false;
}

function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Regex
            if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email))
            {
                list($uname, $domain) = split('@', $email);
                // Checking the DNS
                if(checkdnsrr($domain, 'MX')) {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        return false;
    }
