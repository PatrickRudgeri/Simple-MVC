<?php foreach ($viewData as $row):  ?>
	<h3>
		<?php
		echo "nome: " . $row['nome'] . " | email: " . $row['email'] . " | tipo: " . tipo($row['role_user']);
		 ?>
	</h3>
<?php endforeach; ?>

<?php
function tipo($tipo)
{
	$role_user = '';
	switch ($tipo) {
		case 1:
			$role_user = 'comum';
			break;
		case 2:
			$role_user = 'manutenção';
			break;
		case 3:
			$role_user = 'admin';
			break;
		case 4:
			$role_user = 'comum_premium';
			break;
		default:
			$role_user = 'unknown';
	}
	return $role_user;
}



echo '<h2>Você está na view home</h2>';
?>
