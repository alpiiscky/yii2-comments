# yii2-comments [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE) [![Scrutinizer](https://img.shields.io/scrutinizer/g/ogheo/yii2-comments.svg?style=flat-square)](https://scrutinizer-ci.com/g/ogheo/yii2-comments/)

Комментарии для yii2

## Установка

```
composer require "alpiiscky/yii2-comments:*"
```

или

```
"alpiiscky/yii2-comments": "*"
```

## Зависимости

Расширение представлет собой измененную версию расширения ```ogheo/yii2-comments``` с правками под 
```webvimark/module-user-management``` и небольшими правками.

### Миграции

```
php yii migrate/up --migrationPath=@vendor/alpiiscky/yii2-comments/src/migrations
```

### Настройка

```
'modules' => [
    'comments' => [
        'class' => 'alpiiscky\comments\Module',
    ]
]
```

Если необходимо чтобы комментарии публиковались сразу, без модерации, то указать переменную 
```'new_comments' => 1 ``` в файле конфигурации ```params``` проекта

## Использование

```
use alpiiscky\comments\widget\Comments;
    
echo Comments::widget();
```

### Расширенное использование

```
use alpiiscky\comments\widget\Comments;
    
echo Comments::widget([
    'model' => $model,
    'model_key' => $model_key,
]);
```

