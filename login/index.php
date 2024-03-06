<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

$showMessage = false;
$isAuthorized = isAuthorized();
$email = $_COOKIE['email'];

if ($isAuthorized) {
    $showMessage = true;
}

if ($_POST) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/data/users.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/data/passwords.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $showMessage = true;
    $key = array_search($email, $users, true);

    if ($key !== false && $passwords[$key] === $password) {
        authorize(['email' => $email]);
        $isAuthorized = true;
        setcookie('email', $email, [
            'expires' => time() + 3600 * 24 * 31,
            'path' => '/',
            'domain' => '',
            'secure' => false,
            'httponly' => true,
            'samesite' => 'Strict'
        ]);
    }
}

?>

<?php includeTemplate('header.php', ['title' => 'Авторизация']);?>

<?php
if ($showMessage && !$isAuthorized) {
    includeTemplate('messages/error_message.php', ['message' => 'Неверный email или пароль']);
}
if ($showMessage && $isAuthorized) {
    includeTemplate('messages/success_message.php', ['message' => 'Вы успешно авторизовались']);
} ?>

<?php
if (!$isAuthorized) : ?>
    <form action="/../login/" method="post">
        <div class="mt-8 max-w-md">
            <div class="grid grid-cols-1 gap-6">
                <div class="block">
                    <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                    <input id="fieldEmail"
                           name="email"
                           type="email"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           placeholder="john@example.com"
                           value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
                </div>
                <div class="block">
                    <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                    <input id="fieldPassword"
                           name="password"
                           type="password"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           placeholder="******"
                           value="<?= isset($password) ? htmlspecialchars($password) : '' ?>">
                </div>
                <div class="block">
                    <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Войти
                    </button>
                    <a href="register.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                        У меня нет аккаунта
                    </a>
                </div>
            </div>
        </div>
    </form>
<?php endif ?>

<?php includeTemplate('footer.php'); ?>
