<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

if ($_SESSION['auth'] && $_COOKIE['email']) {
    setcookie('email', $_COOKIE['email'], time() + 3600 * 24 * 31, '/');
}

?>

<?php includeTemplate('header.php', ['title' => 'Регистрация'])?>

<form>
    <div class="mt-8 max-w-md">
        <div class="grid grid-cols-1 gap-6">
            <div class="block">
                <label for="field1" class="text-gray-700 font-bold">Текстовое поле</label>
                <input id="field1" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
            </div>
            <div class="block">
                <label for="field2" class="text-gray-700 font-bold">Пример поля с ошибкой валидации</label>
                <input id="field2" type="text" class="mt-1 block w-full rounded-md border-red-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                <span class="text-xs italic text-red-600">Поле не заполнено</span>
            </div>
            <div class="block">
                <label for="field3" class="text-gray-700 font-bold">Поле Email</label>
                <input id="field3" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
            </div>
            <div class="block">
                <label for="field4" class="text-gray-700 font-bold">Поле с выбором даты</label>
                <input id="field4" type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div class="block">
                <label for="field5" class="text-gray-700 font-bold">Выпадающий список</label>
                <select id="field5" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option>Corporate event</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="block">
                <label for="field6" class="text-gray-700">Текстарея</label>
                <textarea id="field6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3"></textarea>
            </div>
            <div class="block">
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" checked="">
                            <span class="ml-2">Поле - чекбокс</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="block">
                <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Сохранить
                </button>
                <button type="reset" class="inline-block bg-gray-400 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Отменить
                </button>
            </div>
        </div>
    </div>
</form>

<?php includeTemplate('footer.php')?>
