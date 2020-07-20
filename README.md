# Laravel Request Hydrator

## Introduction

This package add `castTo` and `HydrateTo` methods to the request object for facilitate filling Data Transfer Objects.

## How to use

```php
$postDTOOne = request()->castTo(PostDTO::class);

$postDTOTwo = request()->hydrateTo(PostDTO::class);
```

## overwrite properties

```php
$postDTO = request()->castTo(PostDTO::class, [
    'title' => ucfirst(request()->title)
]);
```