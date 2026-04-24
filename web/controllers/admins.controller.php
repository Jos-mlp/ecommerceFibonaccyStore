<?php

class AdminsController{

    /*==============================================
    Login Administradores 
    ==============================================*/

    public function login(){
        if(isset($_POST["loginAdminEmail"])){
            $url = "admins?login=true&suffix=admin";
            $method = "POST";
            $fields = array(
                "email_admin" => $_POST["loginAdminEmail"],
                "password_admin" => $_POST["loginAdminPass"]
            );

            $login = CurlController::request($url, $method, $fields);

            if($login->status == 200){
                $_SESSION["admin"] = $login->results[0];

                echo '<script>
                    location.reload();
                </script>';
            }else{
                echo '<div class="mt-4 px-4 py-3" style="
                background:#fff;
                border-left:4px solid #fb0404;
                box-shadow:0 10px 30px rgba(255, 187, 187, 0.97);
                font-size:13px;
                letter-spacing:0.5px;
                ">
                <strong style="display:block; font-size:11px; text-transform:uppercase; color:#777; letter-spacing:2px;">
                Error de acceso
                </strong>
                <span style="color:#333;">Correo o contraseña incorrectos</span>
                </div>
                
                
                <script> fncFormatInput(); </script>
                ';
            }
        }
    }
}