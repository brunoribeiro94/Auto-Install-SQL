# Auto-Install-SQL
This script is used for easy database configuration.

### Key Features
* Uses Mysqli to check for database access (more security)
* Create configuration file
* Layout based on the wordpress installation

## Requirements

* **PHP 5.3.7+**, PHP 5.4+ or PHP 5.5+
* **MySQL 5** database

#### ON YOUR SERVER (we use Linux Mint 17 Qiana here):
1. install Apache, MySQL, PHP and eventually PHPMyAdmin: [How to setup a LAMP stack on Ubuntu 12.04](http://www.dev-metal.com/setup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-12-04/)
2. Navigate to your project, you want to add the auto installer for SQL
3. copy the contents of the extracted class-query repository into your project folder
Best way to do is cloning via git: `git clone https://github.com/offboard/Auto-Install-SQL.git /var/www/You-Project`

#### CONFIGS IN THE CODE:

In *_installer/setup-config-html.php*:
4. enter you  file config name  from your website in `$file`
5. enter your name project in `$name`
6. enter your link project in `$link`
7. define your logo project in `$logo`
8. protected function put in the code of your configuration file, replace the credentials of the database, you can use `print_r($POST);` to get past the POST method values.

In *_installer/install.php*:

9. replace if necessary credentials to connect to the database.
10. replace the variable `$sql_execute` put your .sql that will run on the database.


## Index.php Example
```php
<?php

$CONFIG_FILE_REQUIRED = 'config/config.inc.php';
if (!file_exists($CONFIG_FILE_REQUIRED)) {
    header('location: _installer/setup-config.php');
}
// replace the beginning of your application
echo 'installed';


```

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Current and further development

See active issues and requested features here:
https://github.com/offboard/Auto-Install-SQL/issues?state=open

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). Totally free for private or commercial projects.

