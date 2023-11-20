<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.index'));
});

// Home > Users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Users', route('admin.users.index'));
});

// Home > Users > [User]
Breadcrumbs::for('user', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users');
    $trail->push($user->name, route('admin.users.show', $user));
});

// Home > Books
Breadcrumbs::for('books', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Books', route('admin.books.index'));
});

// Home > Books > Create
Breadcrumbs::for('book-create', function (BreadcrumbTrail $trail) {
    $trail->parent('books');
    $trail->push('Create', route('admin.books.create'));
});

// Home > Books > [Book]
Breadcrumbs::for('book', function (BreadcrumbTrail $trail, Book $book) {
    $trail->parent('books');
    $trail->push($book->title, route('admin.books.edit', $book));
});

// Home > Authors
Breadcrumbs::for('authors', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Authors', route('admin.authors.index'));
});

// Home > Authors > Create
Breadcrumbs::for('author-create', function (BreadcrumbTrail $trail) {
    $trail->parent('authors');
    $trail->push('Create', route('admin.authors.create'));
});

// Home > Authors > [Author]
Breadcrumbs::for('author', function (BreadcrumbTrail $trail, Author $author) {
    $trail->parent('authors');
    $trail->push($author->name, route('admin.authors.edit', $author));
});

// Home > Publishers
Breadcrumbs::for('publishers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Publishers', route('admin.publishers.index'));
});

// Home > Publishers > Create
Breadcrumbs::for('publisher-create', function (BreadcrumbTrail $trail) {
    $trail->parent('publishers');
    $trail->push('Create', route('admin.publishers.create'));
});

// Home > Publishers > [Publisher]
Breadcrumbs::for('publisher', function (BreadcrumbTrail $trail, Publisher $publisher) {
    $trail->parent('publishers');
    $trail->push($publisher->name, route('admin.publishers.edit', $publisher));
});

// Home > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Categories', route('admin.categories.index'));
});

// Home > Categories > Create
Breadcrumbs::for('category-create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Create', route('admin.categories.create'));
});

// Home > Categories > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories');
    $trail->push($category->name, route('admin.categories.edit', $category));
});

// Home > Transactions
Breadcrumbs::for('transactions', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Transactions', route('admin.transactions.index'));
});

// Home > Transactions > [Transaction]
Breadcrumbs::for('transaction', function (BreadcrumbTrail $trail, Transaction $transaction) {
    $trail->parent('transactions');
    $trail->push($transaction->transaction_id, route('admin.transactions.edit', $transaction));
});
