<div class="container">
    <div class="column is-12">
        <h1 class="title is-1">Lista de usuarios</h1>
    </div>
    <div class="column is-12">
        <div class="table">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->usuarios as $usuario){
                    ?>
                    <tr>
                        <th><?php echo $usuario->cedula; ?></th>
                        <th><?php echo $usuario->nombre; ?></th>
                        <th><?php echo $usuario->correo; ?></th>
                    </tr>
                <?php } ?>
            </tbody>
        </div>
    </div>
</div>