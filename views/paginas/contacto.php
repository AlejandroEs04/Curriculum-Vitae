<div class="contenedor">
    <div class="contenedor-grid2 formulario-grid" id="contenedor">
        <div class="contenedor-texto formulario-texto">
            <h2>LLena el formulario para seguir en contacto</h2>
            <p>Me pondre en contacto en cuanto antes, gracias:D</p>
        </div>

        <div class="contenedor-formulario">
            <h2>LLena el formulario con tus datos</h2>
            <?php foreach($errores as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>

            <?php 
                if($resultado):
                    $mensaje = mostrarNotificacion( intval( $resultado) );
                    if($mensaje): ?>
                        <p class="alerta exito"><?php echo $mensaje; ?></p>
                    <?php endif;
                endif;
            ?>
            <form class="formulario" method="post" action="/contacto">
                <label for="name">Datos personales</label>
                <input type="text" placeholder="Name" name="contacto[name]" value="<?php echo $email->name; ?>">
                <input type="text" placeholder="Last Name" name="contacto[lastName]" value="<?php echo $email->lastName; ?>">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" id="email" name="contacto[email]" value="<?php echo $email->email; ?>">

                <label for="message">Message</label>
                <textarea name="contacto[message]" id="message" value="<?php echo $email->message; ?>"></textarea>

                <input type="submit" value="Enviar" class="btn enviar">
            </form>
        </div>
    </div>
</div>