
    <div class="contenedor">
        <div class="box-centrada">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-solid fa-folder-open"></i> <b>Panel de Administrador</b>
                </div>
                	<table class="table table-striped">
					  <thead>
					    <tr>
					      <th>Nombre</th>
					      <th>Email</th>
					      <th>Rol</th>
					      <th>Imagen</th>
					      <th>Borrar Usuario</th>
					    </tr>
					  </thead>
					  <tbody>

					  <?php
					  	$select = "SELECT * FROM usuarios";

						$result = mysqli_query($mysqli, $select);

   						if(mysqli_num_rows($result) > 0){

	       					while ($row = $result->fetch_assoc()){
								    echo '<tr>';
								    echo '<td>'.$row["nombre"].'</td>';
								    echo '<td>'.$row["email"].'</td>';
								    echo '<td>'.$row["id_rol"].'</td>';
								    echo '<td><img src="'.$row["imagen"].'" class="mini-img"></td>';
								    echo '<td><form action="../php/delete-user.php" method="post"><input type="hidden" name="id" value="'.$row["id"].'" /><button class="btn btn-light" type="submit"><i class="fa-regular fa-trash"></i></button></form></td>';
								    echo '</tr>';
						    }
						}

					    ?>
					  </tbody>
					</table>
            </div>
        </div>
    </div>




