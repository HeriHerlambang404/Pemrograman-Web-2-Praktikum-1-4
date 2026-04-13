<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 70px; background-color: #f4f7f6; }
        .navbar-admin { background-color: #2c3e50 !important; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-admin fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/admin/artikel'); ?>">Admin Panel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/admin/artikel'); ?>">Daftar Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/artikel'); ?>" target="_blank">Lihat Web</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container bg-white p-4 shadow-sm rounded"></div>