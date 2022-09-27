# Ellis Project - Attila Tabory - CodeIgniter 

Aplicação simples com uso do framework  CodeIgniter 

CodeIgniter - 3
Php 5.6+ 

## Como rodar
- Fazer um git clone ou Download Zip
  - `git clone https://github.com/ATTILASAMUELL/Codelgniter-Ellis-Attila.git`

- Configurar .htaccess, que fica dentro da pasta application e criar um .htaccess na raiz do projeto.

```bash
    RewriteEngine on
    RewriteCond $1 !^(index\.php|assets|image|resources|robots\.txt)
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L,QSA]
```

- No arquivo application/config/config.php , inserir na 'base_url' a url da aplicação e 'index_page' deixar vazio.
  - `$config['base_url'] = 'http://localhost'`
  - `$config['index_page'] = '';`

- Importar o banco de dados que está dentro da pasta banco-de-dados para algum administrador de SQL/MySQL, pode ser o 'phpmyadmin'
  - `importar servicos.sql`

