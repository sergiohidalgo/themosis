Themosis framework (base)
==================

This is a basic structure to work with themosis including libraries and plugins frequently used in the development of projects on WordPress.

The repositiorio is a fork of the original project [Julien Lambe] (http://www.themosis.com/), who continues to lead the development

### Getting:

#### System Requirements:
* [Composer](https://getcomposer.org)
* [Node.js and NPM](https://nodejs.org)

##### Environment variables:
```bash
cp .env.example .env
nano .env # Change by correct credentials
```

##### Build App develop mode:
```bash
composer install --prefer-dist
npm install
```

License
-------
The Themosis framework is open-source software licensed under [GPL-2+ license](http://www.gnu.org/licenses/gpl-2.0.html).
