<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Realiza o clone do diretorio ou realiza o download o arquivo .zip e extraia em alguma pasta do servidor

Criar um banco de dados no MySQL Ex.: create database facilita_biblioteca.

Adicione as informações referentes a conexão do banco no arquivo .env. Veja no exemplo abaixo. 

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=zeppelin<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

Após alteração no arquivo .env salve o arquivo. Executar os comandos abaixo via cmd ou shell na pasta do projeto.

php artisan migrate<br>
php artisan db:seed --class=UsuarioSeeder<br>
php artisan db:seed --class=LivroSeeder<br>

Por fim, executar o comando php artisan serve para iniciar a aplicação laravel.

php artisan serve

Como pré-requisito ter instalado o PHP7, Composer, Laravel e o MySQL.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
