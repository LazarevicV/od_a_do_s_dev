<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('pocetna'));
});

Breadcrumbs::for('razvoj', function (BreadcrumbTrail $trail) {
    $trail->push('Razvoj', route('resurs.resursi'));
});

Breadcrumbs::for('alati', function (BreadcrumbTrail $trail) {
    $trail->parent('razvoj');
    $trail->push('Alati', route('alat.list'));
});

Breadcrumbs::for('uputstva', function (BreadcrumbTrail $trail) {
    $trail->parent('razvoj');
    $trail->push('Uputstva', route('uputstva'));
});

Breadcrumbs::for('resursi', function (BreadcrumbTrail $trail) {
    $trail->push('Resursi', route('resurs.resursi'));
});

Breadcrumbs::for('baza-fontova', function (BreadcrumbTrail $trail) {
    $trail->parent('resursi');
    $trail->push('Baza fontova', route('resurs.resurs', 1));
});

Breadcrumbs::for('video-tutorijali', function (BreadcrumbTrail $trail) {
    $trail->parent('resursi');
    $trail->push('Video tutorijali', route('resurs.resurs', 2));
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
