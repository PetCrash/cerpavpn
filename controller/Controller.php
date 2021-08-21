<?php
session_start();
require_once("./config.php");
require_once("./model/databasemodel.php");

class Controller {
	private $alias;
	private $name;
	private $active;
	private $id_user;

	function __construct()
	{
		
	}

	public function logout(){
		session_destroy();
		require("view/loginview.php");
	}

	public function index(){
		if (!isset($_SESSION['name'])) {
			if (isset($_POST['usuario'])) {
				$password = hash("sha512", $_POST['password']);
				$db = new Database();
				$query = "SELECT * FROM users WHERE alias = '".$_POST['usuario']."' AND password = '".$password."'";
				$result = $db->execute_query($query);
				foreach ($result as $value) {
					$this->alias = $value['alias'];
					$this->name = $value['name'];
					$this->active = $value['active'];
					$this->id_user = $value['id_user'];
				}
				if (!isset($this->alias) || $this->active == 0) {
					$message = "Usuario o contraseña incorrecto";
					require("view/loginview.php");
					exit();
				}
				else{
					$_SESSION['alias']= $this->alias;
					$_SESSION['name']= $this->name;
					require("view/descargarview.php");
				}
				
			} else{
			require("view/loginview.php");
			}
		}
		else{
			require("view/descargarview.php");
		}
	}

	
}
?>