cd ~/deploy-rede-crinet

docker run --rm -v $(pwd):/app composer install

sudo chown -R $USER:$USER ~/deploy-rede-crinet

cd ~/deploysettings

cp -r .env ~/deploy-rede-crinet/ 

cp -r Dockerfile ~/deploy-rede-crinet/

cp -r docker-compose.yml ~/deploy-rede-crinet/ 

cp -r mysql/ ~/deploy-rede-crinet/

cp -r nginx/ ~/deploy-rede-crinet/

cp -r php/ ~/deploy-rede-crinet/ 

cd ~/deploy-rede-crinet

composer install --ignore-platform-reqs

chmod -R 777 storage bootstrap/cache

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan config:cache

GRANT ALL PRIVILEGES ON *.* TO 'laraveluser'@'%' IDENTIFIED BY 'PASSWORD' WITH GRANT OPTION;

FLUSH PRIVILEGES;

php artisan migrate

client_max_body_size 2M;

server {
    server_name redecrinet.com;
    root /var/www/redecrinet/public;

    client_max_body_size 4M;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }

    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/redecrinet.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/redecrinet.com/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

}
server {
    if ($host = redecrinet.com) {
        return 301 https://$host$request_uri;
    } # managed by Certbot


    listen 80;
    server_name redecrinet.com;
    return 404; # managed by Certbot


}
