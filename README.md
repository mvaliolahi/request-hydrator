# Laravel Request Hydrator

## Introduction

This package add `castTo` and `HydrateTo` methods to the request object for facilitate filling Data Transfer Objects.

## Install

```bash
composer require mvaliolahi/request-hydrator
```

## How to use

```php
$postDTOOne = request()->castTo(PostDTO::class);

$postDTOTwo = request()->hydrateTo(PostDTO::class);
```

## Overwrite properties

```php
$postDTO = request()->castTo(PostDTO::class, [
    'title' => ucfirst(request()->title)
]);
```