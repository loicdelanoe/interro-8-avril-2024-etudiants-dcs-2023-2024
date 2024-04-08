<form action="/login"
      method="post"
      class="flex flex-col gap-6">
    <?php
    csrf_token() ?>
    <div class="flex flex-col gap-2">
        <?php
        component('forms.controls.label-and-input', [
            'name' => 'email',
            'label' => 'Votre email',
            'type' => 'text',
            'value' => '',
            'placeholder' => 'john@doe.com'
        ]);
        ?>

    </div>
    <div class="flex flex-col gap-2">
        <?php
        component('forms.controls.label-and-input', [
            'name' => 'password',
            'label' => "Votre mot de passe",
            'type' => 'text',
            'value' => '',
            'placeholder' => 'Votre mot de passe'

        ]);
        ?>
        <?php
        if (isset($_SESSION['login'])): ?>
            <p class="text-red-500"><?= $_SESSION['login'] ?></p>
        <?php endif; ?>
    </div>
    <div>
        <?php
        component('forms.controls.button', ['text' => 'Se connecter']) ?>
    </div>

    <?php
    $_SESSION['login'] = null;
    $_SESSION['errors'] = [];
    $_SESSION['old'] = [];
    ?>
</form>