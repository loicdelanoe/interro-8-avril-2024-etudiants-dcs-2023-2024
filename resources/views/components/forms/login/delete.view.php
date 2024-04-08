<?php
/** @var string $id */ ?>
<form action="/jiri"
      method="post">
    <?php
    method('delete') ?>
    <?php
    csrf_token() ?>
    <?php
    component('forms.controls.button-danger', ['text' => 'Se déconnecter']); ?>
</form>