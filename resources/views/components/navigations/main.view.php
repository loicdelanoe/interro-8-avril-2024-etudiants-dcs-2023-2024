<nav id="main-menu justify-between">
    <h2 class="sr-only">Menu principal</h2>
    <ul class="flex gap-4">
        <li><a class="underline text-blue-500"
               href="/jiris">Jiris</a></li>
        <li><a class="underline text-blue-500"
               href="/contacts">Contacts</a></li>
        <li><a class="underline text-blue-500"
               href="/projects">Projets</a></li>
    </ul>
    <?php if (isset($_SESSION['user_id'])) {
        component('forms.login.delete');
    }?>
</nav>