# HelpDesk

A ticket customer support online!


## Installation

### cPanel installation

- Copy all files under HelpDesk folder to your server's root or public_html directory
- Just visit your website - and follow the installation process

### NGinx installation

- Copy NSAAPP to your server
- Set document root as per your directory location where you did put that HelpDesk files.



#### Clear All Cache
```
php artisan optimize && php artisan cache:clear && php artisan route:cache && php artisan view:clear && php artisan config:cache && php artisan route:clear 
```


## Running a queue Cron job on shared hosting

```
php /path/to/application/artisan queue:work --queue=high,default --stop-when-empty
```
