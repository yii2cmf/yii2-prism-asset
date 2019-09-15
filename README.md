Prism is a lightweight, extensible syntax highlighter.
======================================================
Built with modern web standards in mind. It’s used in thousands of websites, including some of those you visit daily.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2cmf/yii2-prism-asset "*"
```

or add

```
"yii2cmf/yii2-prism-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \yii2cmf\prism\PrismAsset::register($this); ?>
```

The recommended way to mark up a code block (both for semantics and for Prism) is a <pre> element with a '<code>' element inside, like so:

```
<pre><code class="language-php">p { color: red }</code></pre>
```
