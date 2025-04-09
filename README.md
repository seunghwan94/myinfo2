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

![image](https://github.com/user-attachments/assets/f4945d89-0ecc-4e94-a56b-b3320c15ee16)
![image](https://github.com/user-attachments/assets/815443b7-0813-45d8-8956-30e30a4e38b6)
![image](https://github.com/user-attachments/assets/17d26e78-6d21-4da5-bb70-b9ba536acc9d)
![image](https://github.com/user-attachments/assets/eb2643f7-c669-4559-a6f0-cec082d4e7b2)




