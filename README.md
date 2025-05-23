Instale as dependências usando o composer

composer install


Copie o arquivo env de exemplo e faça as mudanças de configuração necessárias no arquivo .env

cp .env.example .env


Gere uma nova chave da aplicação

php artisan key:generate


Execute as migrações de banco de dados e seeds

php artisan migrate --seed
