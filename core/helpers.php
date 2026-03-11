<?php

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

function csrf_token(): string
{
    if (empty($_SESSION['_csrf_token'])) {
        $_SESSION['_csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['_csrf_token'];
}

function csrf_check(?string $token): bool
{
    return isset($_SESSION['_csrf_token']) && is_string($token) && hash_equals($_SESSION['_csrf_token'], $token);
}

function is_post(): bool
{
    return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
}

function is_logged_in(): bool
{
    return !empty($_SESSION['user']);
}

function current_user(): ?array
{
    return $_SESSION['user'] ?? null;
}

function login_user(array $user): void
{
    $_SESSION['user'] = [
        'id' => (int) $user['id'],
        'name' => (string) $user['name'],
        'email' => (string) $user['email'],
        'role' => (string) ($user['role'] ?? 'user'),
    ];
}

function logout_user(): void
{
    unset($_SESSION['user']);
}

function require_auth(): void
{
    if (!is_logged_in()) {
        redirect('login.php');
    }
}

function is_admin(): bool
{
    $user = current_user();

    return !empty($user) && (($user['role'] ?? 'user') === 'admin');
}

function require_admin(): void
{
    if (!is_admin()) {
        redirect('../user/index.php');
    }
}
