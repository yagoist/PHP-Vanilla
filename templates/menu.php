<?php

/** @var array $menu */
/** @var bool $isAuthorized */

?>

<ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
    <?php foreach ($menu as $item) {?>
        <li class="px-5 py-2">
            <a class="<?=isCurrentUrl($item['path']) ? 'text-orange cursor-default' : 'text-gray-600 hover:text-red-600' ?>"
               href="<?=$item['path']?>">
                <?=cutString($item['title'], 15)?>
            </a>
        </li>
    <?php }?>
</ul>
