## 🛠 Installation & Set Up

1. Install dependencies

```sh
composer install
```

```sh
composer update
```

2. Start the development server

start docker
```sh
./vendor/bin/sail up
```

run migartion
```sh
./vendor/bin/sail migrate
```

execute factory
```sh
./vendor/bin/sail artisan migrate:fresh --seed
```

generate doc
```sh
php artisan l5-swagger:generate
```


3. Base Url

http://localhost:8001/

CMS : http://localhost:8001/admin

API : http://localhost:8001/api

DOC : http://localhost:8001/api/documentation
