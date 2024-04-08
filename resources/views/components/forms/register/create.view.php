<form action="/register"
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
    </div>
    <div>
        <?php
        component('forms.controls.button', ['text' => 'Créer votre compte']) ?>
    </div>
    <?php
    $_SESSION['errors'] = [];
    $_SESSION['old'] = [];
    ?>
</form>