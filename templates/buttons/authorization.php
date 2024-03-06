<?php

/** @var string $message */

?>

<li>
    <a class="text-gray-500 hover:text-orange" href="/login/">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <?=htmlspecialchars($message)?>
    </a>
</li>
