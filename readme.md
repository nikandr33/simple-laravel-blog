# Simple Laravel Blog

## Installation

Use the package manager [composer](https://getcomposer.org/) to install laravel.

First, download the Laravel installer using Composer
```bash
composer global require "laravel/installer=~1.1"
```
On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe)

Make sure to place the ~/.composer/vendor/bin directory in your PATH so the laravel executable is found when you run the laravel command in your terminal.

Next, in the root of your Laravel application, run the `php composer.phar install` (or `composer install`) command to install all of the framework's dependencies. This process requires Git to be installed on the server to successfully complete the installation.

Once Laravel is installed, you should also configure your local environment. This will allow you to receive detailed error messages when developing on your local machine. By default, detailed error reporting is disabled in your production configuration file

## Server Requirements

- PHP >= 5.4
- MCrypt PHP Extension

As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension. When using Ubuntu, this can be done via apt-get install php5-json.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
