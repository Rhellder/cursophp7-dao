<?PHP


require_once("config.php");

// carrega 1 usario
// $root = new Usuario();
// $root->loadById(3);
//echo $root;


// Carrega todos usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega lista de usarios buscando pelo login
//$search = Usuario::search("Te");
//echo json_encode($search);


//carrega usario usando usuario e senha
 $usuario = new Usuario();
 $usuario->login("Rhellder", "!@#$");
 echo $usuario;
?>