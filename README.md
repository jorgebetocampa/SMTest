<b>
## How to execute
</b>
Download or clone the repository at your PC
<br/>
Open a CMD and cd to the location where you downloaded the files
<br/>
Execute the next commands:
docker-compose build<br/>
docker-compose up -d<br/>
<br/>
## Run the creation of the database, tables and seeders.
php artisan make:migration create_clients_table
php artisan make:migration _create_users_table
php artisan migrate
php artisan db:seed --class=ClientsTableSeeder
php artisan db:seed --class=UsersTableSeeder


add this to the file /etc/apache2/sites-available/000-default.conf:
<p>
<Directory /var/www/html>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
</p>