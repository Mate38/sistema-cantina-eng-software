# Cantinator
-------------------------------

Esse projeto tem  por objetivo avaliar o processo de desenvolvimento de um software na disciplina de Engenharia de Software do curso de Ciência da Computação do Instituto Federal Catarinense - Campus Videira.

## Dependências
------------------------------

* PHP >= 5.5
* MySQL Server >= 5.5.54

## Configuração
------------------------------

Após clonar o projeto, com o terminal aberto na pasta do projeto, execute o comando:

```composer install --no-scripts```

Renomeie então o arquivo:

```.env.example```

para

```.env```

Dentro do arquivo .env edite os campos para que fiquem como os demonstrados abaixo:

```DB_CONNECTION=mysql```

```DB_HOST=127.0.0.1```

```DB_PORT=3306```

```DB_DATABASE=cantinator```

```DB_USERNAME=root```

```DB_PASSWORD=1234```

Obs: No lugar de "root" e "1234" coloque o usuário e a senha atribuidos na instalação do seu MySQL.

Crie então uma nova chave para a aplicação com o comando:

```php artisan key:generate```

Crie então no MySQL um BD (banco de dados) chamado "cantinator" (caso deseje utilizar outro nome modifique também no DB_DATABASE).

Em seguida, no terminal aberto na pasta do projeto, execute o comando para criação das tabelas:

```php artisan migrate```

Pronto! Agora, para executar o sistema, utilize o comando:

```php artisan serve```

No navegador pode acessar o sistema através do endereço:

```http://127.0.0.1:8000```

ou então:

```localhost:8000```

Para logar no sistema utilize os dados de login abaixo:

```e-mail: admin@admin.com```

```senha: admin123```
