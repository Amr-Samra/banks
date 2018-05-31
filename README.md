# banks
package handle many Bank Accounts

## Install

Add to Composer

``` bash
"bdwey/banks": "dev-master",
```



Add to config/app providers
``` bash
Bdwey\Banks\BanksServiceProvider::class,
```


## Usage

``` php
composer dump-autoload
php artisan migrate
php artisan vendor:publish --tag=banks.seeds
composer dump-autoload
php artisan db:seed  --class=BanksSeeder
```