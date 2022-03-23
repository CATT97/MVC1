<div class="container">
    <div class="column is-12">
        <h1 class="title is-1 has-text-centered">Crear usuario </h1>
    </div>
    <form class="card card-content mt-6 column is-7 mx-auto p-4" method="POST" action="<?php echo APP_URL;?>/usuario/almacenar">
        <div class="field">
            <label class="label" for="cedula">Cedula</label>
            <div class="control">
                <input class="input" type="text" name="cedula" placeholder="Text input">
            </div>
        </div>
        <div class="field">
            <label class="label" for="nombre">Nombre</label>
            <div class="control">
                <input class="input" type="text" name="nombre" placeholder="Text input">
            </div>
        </div>

        <div class="field">
            <label class="label" for="correo">Correo</label>
            <div class="control">
                <input class="input" type="text" name="correo" placeholder="Text input">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">Contraseña</label>
            <div class="control">
                <input class="input" type="text" name="password" placeholder="Text input">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" >Submit</button>
            </div>
            <div class="control">
                <button class="button is-link is-light" type="button">Cancel</button>
            </div>
        </div>
    </form>
</div>