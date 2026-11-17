<?php
// SQLite store for quote requests, 3D designs, newsletter sign-ups and admin users.

function db(): PDO
{
    static $pdo = null;
    if ($pdo) {
        return $pdo;
    }
    $pdo = new PDO('sqlite:' . DATA_DIR . '/site.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->exec('PRAGMA journal_mode = WAL');
    $pdo->exec('CREATE TABLE IF NOT EXISTS quotes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        created_at TEXT NOT NULL,
        status TEXT NOT NULL DEFAULT "new",
        name TEXT NOT NULL,
        company TEXT,
        email TEXT NOT NULL,
        phone TEXT,
        role TEXT,
        project_type TEXT,
        location TEXT,
        cfm INTEGER,
        timeline TEXT,
        details TEXT,
        design_json TEXT,
        source_page TEXT,
        notes TEXT,
        ip TEXT
    )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS subscribers (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        created_at TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE
    )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS admins (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password_hash TEXT NOT NULL,
        created_at TEXT NOT NULL
    )');
    return $pdo;
}
