<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Почетна', route('pocetna'));
});

Breadcrumbs::for('blogovi', function (BreadcrumbTrail $trail) {
    $trail->push('Блог', route('blog.blogovi'));
});

Breadcrumbs::for('razvoj', function (BreadcrumbTrail $trail) {
    $trail->push('Развој', route('resurs.resursi'));
});

Breadcrumbs::for('alati', function (BreadcrumbTrail $trail) {
    $trail->parent('razvoj');
    $trail->push('Алати', route('alat.list'));
});

Breadcrumbs::for('uputstva', function (BreadcrumbTrail $trail) {
    $trail->parent('razvoj');
    $trail->push('Упутства', route('uputstva'));
});

Breadcrumbs::for('resursi', function (BreadcrumbTrail $trail) {
    $trail->push('Ресурси', route('resurs.resursi'));
});

Breadcrumbs::for('baza-fontova', function (BreadcrumbTrail $trail) {
    $trail->parent('resursi');
    $trail->push('База фонтова', route('resurs.resurs', 1));
});

Breadcrumbs::for('video-tutorijali', function (BreadcrumbTrail $trail) {
    $trail->parent('resursi');
    $trail->push('Видео туторијали', route('resurs.resurs', 2));
});

Breadcrumbs::for('prikaz-svih-fontova', function (BreadcrumbTrail $trail) {
    $trail->parent('baza-fontova');
    $trail->push('Приказ свих фонтова', route('fontovi'));
});



// // Home > Blog
// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
