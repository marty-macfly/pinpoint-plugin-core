# Pinpoint core plugin

[Pinpoint](https://pinpoint-apm.github.io/pinpoint/index.html) is an APM (Application Performance Management) tool for large-scale distributed systems written in Java / PHP. Inspired by Dapper, Pinpoint provides a solution to help analyze the overall structure of the system and how components within them are interconnected by tracing transactions across distributed applications.

[Pinpoint](https://pinpoint-apm.github.io/pinpoint/index.html) support Java, PHP and Python application introspection.

For PHP you need to install the [pinpoint-c-agent](https://github.com/pinpoint-apm/pinpoint-c-agent) and add plugin to instrument your application for [pinpoint-php-aop](https://github.com/pinpoint-apm/pinpoint-php-aop) to work.

This extension is providing core plugin that are common to all framework (mainly core php class and function) to integrate [Pinpoint](https://pinpoint-apm.github.io/pinpoint/index.html) with your PHP application.

To use that extension you need to do the following:

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist macfly/pinpoint-plugin-core
```

or add

```json
"macfly/pinpoint-plugin-core": "dev-main"
```

to the `require` section of your composer.json.