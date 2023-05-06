<?php
    include('./databases/connectToBD.php');
    $consulta = 'SELECT * FROM usuarios  WHERE rol = ?';
    $sentencia = $mbd->prepare($consulta);
    $sentencia->bindParam(1, $rol);
    $sentencia->execute();
    $filas = $sentencia->rowCount();
    $usuarios = $sentencia->fetchAll();
    ?>


<table class="table table-striped " id="<?php echo $tabla ?>">
    <thead class="bg-dark text-white ">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <!-- <th>Contraseña</th> -->
            <th class="text-center">No. identificacion </th>
            <th class="text-center">Activo</th>
            <th class="text-center">opciones</th>
        </tr>
    </thead>
    <tbody>
        <?Php 
                    foreach($usuarios as $usuario){
                    ?>
        <tr class="py-0">
            <td><?php echo ucwords($usuario['nombre']) ?></td>
            <td><?php echo ucwords($usuario['apellido']) ?></td>
            <td><?php echo $usuario['correo'] ?></td>
            <!-- <td><input type="password" readonly class="border-0 bg-transparent" value="<?php echo $usuario['clave'] ?>"></td> -->
            <td class="text-center"><?php echo $usuario['documento'] ?></td>
            <td>
                <div class="form-check form-switch  d-flex justify-content-center">
                    <input class="form-check-input bg-ligth" type="checkbox" data-id="<?php echo $usuario['id'] ?>" role="switch" id="flexSwitchCheckDefault"
                        <?php echo ($usuario['estado'] == 'activo' ? 'checked' : '') ?>>
                </div>
            </td>
            <td class="text-center">
                
            <button  id="button-delete-user" class="text-danger btn border "><i class="mdi mdi-delete"></i></button>
            </td>
        </tr>
        <?php 
                    }
                    ?>
    </tbody>
</table>