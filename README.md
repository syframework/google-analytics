# sy\google-analytics

A web component for adding Google Analytics on your website

## Installation

Install the latest version with

```bash
$ composer require sy/google-analytics
```

## Basic Usage

```php
<?php

use Sy\Component\Html\Page;
use Sy\Component\Web\GoogleAnalytics;

require __DIR__ . '/../vendor/autoload.php';

$ga = new GoogleAnalytics('ID-XXXXX');

$page = new Page();

$page->addBody($ga);

echo $page;
```

Output:
```html
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script src="https://www.googletagmanager.com/gtag/js?id=ID-XXXXX" async></script>
</head>
<body>
<script type="module">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'ID-XXXXX');</script>
</body>
</html>
```