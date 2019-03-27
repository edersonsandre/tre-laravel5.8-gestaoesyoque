<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Curso Laravel 5.8 ([Tempo Real Eventos](https://www.temporealeventos.com.br/))

**Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto. Cuja o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.**

Com uma rápida pesquisa no [Google Trends](https://trends.google.com.br/trends/explore?q=laravel,CodeIgniter,symfony,cakephp,Zend), podemos comprovar a crescente popularidade do Laravel.

Abaixo segue alguns links e tópicos apresentado, todo conteúdo e temos na documentação do Laravel, porém foi pesquisado em outras fontes como referencia, tanto a documentação como links de referencia te ajudará a obter êxito no curso, alguns links estão em versões anterior da 5.8 porém não irá influenciar no conteúdo.

## 1. Conhecendo o Laravel
Falando sobre Laravel, conhecendo algumas funcionalidades, diretórios e configurações:
- [O que é um Framework?](https://gaea.com.br/entenda-o-que-e-framework/)
- [Estrutura do Framework PHP](https://blog.especializati.com.br/estrutura-do-framework-php-laravel)
- [O que é MVC](https://tableless.com.br/mvc-afinal-e-o-que/)
- [Rotas](https://blog.especializati.com.br/rotas-no-laravel/)
- [Eloquent (Migrations)](https://imasters.com.br/desenvolvimento/criando-migrations-e-relacionando-tabelas-com-laravel)
- [Model](https://medium.com/trainingcenter/relacionando-models-e-tabelas-no-laravel-5-4-a8365a12eca2)
- [Controller](https://blog.dialhost.com.br/laravel-controller/)
- [View (layout)](https://www.devmedia.com.br/blade-engine-utilizando-templates-no-laravel/36749)

## 2. Estrutura do projeto (Gestão de estoque), Eloquent, Model e Validation
Configurando o requistório:

```
git clone https://github.com/edersonsandre/tre_gestao-estoque.git;

cd tre_gestao-estoque;

composer install;
```


Vamos criar o arquivo ".env" no diretorio raiz com o seguinte conteudo:
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:nEdYziu8oxRmIOssq4mX973DytqQTMSmt5PFU1RaS5Y=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

Em seguida vamos limpar o cache das configurações e levantar o servidor
```
php artisan config:cache;
php artisan serve;
```

- [Blade (Layout)](https://laravel.com/docs/5.8/blade#forms)
- [Eloquent](https://imasters.com.br/back-end/como-criar-as-models-do-seu-projeto-com-eloquent-no-laravel)
- [Validação](https://blog.dialhost.com.br/laravel-5-7-criando-form-validations/)


## Links
* [Composer (Instalação)](https://getcomposer.org/doc/00-intro.md)
* [Composer - Primeiros Passos](https://www.youtube.com/watch?v=gXQZlrbzesc)
* [Introdução GIT](https://tableless.com.br/tudo-que-voce-queria-saber-sobre-git-e-github-mas-tinha-vergonha-de-perguntar/)
* [Git e Github para iniciantes](https://www.youtube.com/watch?v=UMhskLXJuq4)
* [Documentação PHP](https://www.php.net)
* [PHP Orientado a Objetos](https://www.youtube.com/watch?v=_mBqvoSJIBU)
* [Documentação Laravel 5.8](https://laravel.com/docs/5.8)
* [Cache (Acelere o carregamento)](https://tableless.com.br/acelere-o-carregamento-de-seu-site-com-php-caching/)