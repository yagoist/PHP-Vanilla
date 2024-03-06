<?php

function authorize(array $user = []): void
{
    $_SESSION['auth'] = true;
    $_SESSION['user'] = $user;
}

function isAuthorized(): bool
{
    return (bool) ($_SESSION['auth'] ?? false);
}

function logout(): void
{
    $_SESSION['auth'] = false;
    $_SESSION['user'] = [];
}

function currentUser(): array
{
    return $_SESSION['user'] ?? [];
}

function redirectIfNotAuthorized(string $location = '/login/'): void
{
    if (!isAuthorized()) {
        header('Location: ' . $location);
        exit();
    }
}
