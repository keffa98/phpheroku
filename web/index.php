<?php 
		session_start();
		if (isset($_GET['page']) && $_GET['page']) {
			
			if ($_GET['page'] == 'deconnexion') {
				session_destroy();
				include 'controller/index.php';
			}else{
				$page = 'controller/' . $_GET['page'] . '.php';
				if (is_file($page)) {
					include $page;
				}else{
					echo 'Page non trouvée';
				}
			}
		}else{
			include 'controller/index.php';
		}

?>