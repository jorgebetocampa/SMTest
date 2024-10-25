
## How to execute

Download or clone the repository at your PC
<br/>
Open a CMD and cd to the location where you downloaded the files
<br/>
Execute the next commands:
docker-compose build<br/>
docker-compose up -d<br/>
<br/>
add this to the file /etc/apache2/sites-available/000-default.conf:
<p>
<Directory /var/www/html>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
</p>