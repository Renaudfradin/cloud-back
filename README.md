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
./vendor/bin/sail artisan migrate
```

execute factory
```sh
./vendor/bin/sail artisan migrate:fresh --seed
```

3. Base Url

http://127.0.0.1:8001/

CMS : http://127.0.0.1:8001/admin

API : http://127.0.0.1:8001/graphql

DOC : http://127.0.0.1:8001/graphiql
