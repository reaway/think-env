# think-env

## 安装
```bash
composer require reaway/think-env
```

## 用法
```php
use Think\Component\Env\Facade\Env;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// load
Env::load(__DIR__ . DIRECTORY_SEPARATOR . '.env');

Env::get('app');
```