# larave-react-new

### Subindo o ambiente ###
* Clonar o repositório.
* Criar arquivo .env
* Rodar o composer
```
composer install
```
```
cp .env.example .env
```
```
php artisan key:generate
```
* Criar banco 

* Atualizar banco
```
php artisan migrate
```
```
php artisan db:seed
```

* Rodar o yarn
```
yarn
```

* Criar client que ira consulmir a api
```
php artisan passport: client --personal
```
