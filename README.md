# php 설치 후

### 위치
```
/var/www/dev 
```


```
sudo vi /etc/nginx/sites-available/default


server {
    listen 443 ssl;
    listen [::]:443 ssl;
    server_name www.lshwan.com;  # www.lshwan.com 도메인 설정
    ssl_certificate /etc/ssl/certs/cloudflare.crt;
    ssl_certificate_key /etc/ssl/private/cloudflare.key;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers 'HIGH:!aNULL:!MD5';
    
    # dev 폴더의 코드를 사용하도록 root 경로 변경
    root /var/www/dev;
    index index.php index.html index.htm;
    
    location / {
        try_files $uri $uri/ /index.php?$args;
    }
    
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }
    
    location ~ /\.ht {
        deny all;
    }
}
```


```
sudo nginx -t
sudo systemctl reload nginx
```
