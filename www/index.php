
<?php 
require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


if(isset($_GET['controller'])):
    $nombre_controlador = $_GET['controller'].'Controller';
else:
    echo "La página que buscas no existe";
    exit();
endif;



if(class_exists($nombre_controlador)):
    
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action'])):
        $action = $_GET['action'];
        $controlador->$action();

    else:
        echo "La página que buscas no existe";
    endif;
    
else:
    echo "La página que buscas no existe";
endif;


require_once 'views/layout/footer.php';

    