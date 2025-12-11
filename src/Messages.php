<?php

namespace Fabiojr933\PhpFlashMessages;

class Messages
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }
    }

    public function setFlash(string $key, string $message): void
    {
        $_SESSION['flash'][$key] = $message;
    }

    public function getFlash(string $key): ?string
    {
        if (!isset($_SESSION['flash'][$key])) {
            return null;
        }

        $msg = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);

        return $msg;
    }

    public function hasFlash(string $key): bool
    {
        return isset($_SESSION['flash'][$key]);
    }

    public function all(): array
    {
        $messages = $_SESSION['flash'];
        $_SESSION['flash'] = [];
        return $messages;
    }

    public function clear(): void
    {
        $_SESSION['flash'] = [];
    }
}
