<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css>
</head>
<body>

<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
My Page Title
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>
</body>
