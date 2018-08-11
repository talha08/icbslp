# Laravel Vuejs Boilerplate
This boilerplate is the extend version of [laravel-vue-spa](https://github.com/cretueusebiu/laravel-vue-spa)

## Features

- Laravel 5.6 
- Service + Repository + Observer
- Fractal
- Vue + VueRouter + Vuex + VueI18n + ESlint
- Pages with dynamic import and custom layouts
- Login, register and password reset
- Authentication with JWT
- Socialite integration
- Bootstrap 4 + Font Awesome 5 + Element UI

## Installation
Follow these commands:
- `git clone  https://github.com/talha08/laravel-vue-boilerplate.git`
- `cd laravel-vue-boilerplate`
- `cp .env.example .env`
- Open `.env` and edit your database connection details
- `php artisan key:generate` 
- `php artisan jwt:secret`
- `php artisan migrate`
- `php artisan db:seed`
- `yarn` (Install [Yarn](https://yarnpkg.com/en/docs/install) if you don't have it.)

## Usage

#### Development

open bash 
```bash
# serve with hot reloading
yarn run hot OR npm run hot
```
open another bash 
```bash
# serve with hot reloading
php artisan serve
```
#### Production

```bash
yarn run production OR npm run production
```



## Deployment
[SCDN LARAVEL DEPLOY](https://scdnlab.com/vps/)

then on the project path of the server hit,
```bash
yarn run production OR npm run production
```
## Built With

* [Laravel](https://laravel.com/) - Backend Framework
* [Vuejs](https://vuejs.org/) - Frontend Framework
* [Element UI](http://element.eleme.io/) - Frontend Framework
* [Fractal](http://fractal.thephpleague.com/) - Api Response
* [Bootstrap](https://getbootstrap.com/) - Frontend Framework

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Thank you [**Cretu Eusebiu**]((https://github.com/cretueusebiu)) for your initial work.

