<div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email', esc($user->email))?>">
    </div>

    <div>
        <label for="password">password</label>
        <input type="password" name="password">
        <?php if ($user->id): ?>
        <p>Dejalo en blanco para conservar la contraseña</p>
        <?php endif; ?>
        
    </div>

    <div>
        <label for="password_confirmation">Repeat password</label>
        <input type="password" name="password_confirmation">
    </div>

<div>
    <label for="is_admin">
            <?php if ($user->id == current_user()->id): ?>
                <input type="checkbox" checked disabled> administrador

            <?php else: ?>

                <input type="hidden" name="is_admin" value="0">

                <input type="checkbox" id="is_admin" name="is_admin" value="1"
                <?php if (old('is_admin', $user->is_admin)):?>checked<?php endif; ?>>administrador
            <?php endif; ?>
    </label>
</div>
