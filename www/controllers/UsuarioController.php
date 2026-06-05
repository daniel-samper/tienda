<?php
require_once 'models/usuario.php';

class usuarioController{
    
    public function index() {
        echo "controlador Usuarios, Acción index";
    }
    
    public function registro() {
        require_once 'views/usuario/registro.php';
    }
    
    public function save() {
        if(isset($_POST)):
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            // FALTA VALIDAR DATOS
            
            if($nombre && $apellidos && $email && $password):
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();
                if($save):
                    $_SESSION['register'] = "complete";
                else:
                    $_SESSION['register'] = "failed";
                endif;    
            else:
                $_SESSION['register'] = "failed";
            endif;
        
        else:
            $_SESSION['register'] = "failed";
        
        endif;
        echo '<meta http-equiv="refresh" content="0;url='.base_url.'usuario/registro">';
        exit();
    }
    
    public function login() {
        if(isset($_POST)):
            // Identificar al usuario
            //Consulta a la BD 
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            $identity = $usuario->login();
            
            if($identity && is_object($identity)):
                $_SESSION['identity'] = $identity;
            
                if($identity->rol == 'admin'):
                    $_SESSION['admin'] = true;
                endif;
            else:
                $_SESSION['error_login'] = 'Identificación fallida !!';
            endif;
            
        endif;
        echo '<meta http-equiv="refresh" content="0;url='.base_url.'">';
        exit();
    }
    
    public function logout() {
        if(isset($_SESSION['identity'])):
            unset($_SESSION['identity']);
            session_destroy();
        endif;
        
        if(isset($_SESSION['admin'])):
            unset($_SESSION['admin']);
            session_destroy();
        endif;
        
        echo '<meta http-equiv="refresh" content="0;url='.base_url.'">';
        exit();
    }
} // Fin clase