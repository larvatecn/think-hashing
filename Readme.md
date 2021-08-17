# think-hashing

适用于 ThinkPHP 6 的 hashing 扩展.

[![Packagist](https://img.shields.io/packagist/l/larva/think-hashing.svg?maxAge=2592000)](https://packagist.org/packages/larva/think-hashing)
[![Total Downloads](https://img.shields.io/packagist/dt/larva/think-hashing.svg?style=flat-square)](https://packagist.org/packages/larva/think-hashing)


## 安装

```bash
composer require larva/think-hashing -vv
```

## 配置

配置 'config/hashing.php' 即可。

## 使用
```php
$hashedValue = \Larva\Hashing\Hash::make('abv');
\Larva\Hashing\Hash::check('abv', $hashedValue);
```
