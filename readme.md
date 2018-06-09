
# Larant

<img src="https://raw.githubusercontent.com/fusion2222/larant/master/public/img/logo.svg?sanitize=true" width="90px">

This project is small web application, which helps managers to manage multiple restaurants. Main functionality is approval of weekly menus and management of  employees, etc. Name of this project stands for **La**ravel Restau**rant**. This project runs on `PHP7`, `Laravel 5.6` framework to be specific. That is how the name was picked.

## Requirements

- Install [PHP](http://php.net/manual/en/install.php) version 7.1.14 or higher on your local machine.
- Install [Composer](https://getcomposer.org/) version 1.6.5 or higher on your local machine.
- Install [NodeJS](https://nodejs.org/en/) version 10.1.0 or higher on your local machine.
- Check if `npm` package manager has been installed along your `NodeJS` installation. If not, [install it](https://www.npmjs.com/get-npm).

## How to run
- [Clone](https://git-scm.com/docs/git-clone) this git repository on your local machine.
- Navigate into project's root folder using console with full administrator privileges.
- Run `composer install`.
- Run `php artisan key:generate`
- Copy `.env.example` into project root folder and name it `.env`.
- Configure your new `.env` file.
- Generate your application key `php artisan key:generate`.
- Run `npm install`.
- Run `npm run dev`.
- Run `php artisan migrate`.

## Contribution guide

Any contributors and ideas are welcome. In order to prevent chaotic development we should follow these principles:

- Everything should be consistent. Design, naming conventions, etc. If names of functions is `snake_case` make your contributions consistent with it.
- This project uses SCSS syntax. For sake of not-mixing CSS preprocessing files, no other formats, like `LESS` or `SASS` will be accepted. Ever.
- This project should be be lightweight as possible. Only reason of getting any package is, when it would save time, because the functionality would take a big amount of code - for example, it is totally okay to use HTML parser as a package. However if you need some simple functionality, which would take only few lines to write, in this case no packages will be accepted.

## Contact

If you found bugs or have any remarks, ideas or questions, feel free to contact me on github.
