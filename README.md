# php-calisthenics-studies

## Regras:
1. Não usar getters e setters
    1.1. Tell Don't Ask
2. Ter apenas 1 nível de identação por método
3. Nunca use else
    3.1. Fail fast
4. Envolva os tipos primitivos (que possuam comportamento)
5. Coleções de primeira classe (classe específica para coleções)
6. Apenas 1 operador de acesso por instrução
    6.1. Lei de Demeter: http://wiki.c2.com/?LawOfDemeter
7. Nunca abrevie
    7.1. Clean code
8. Mantenha classes (máx. 50 linhas) e pacotes pequenos (máx. 10 classes)
9. Tenha no máximo 2 propriedades por classe

## Configs
1. pecl install ds

## Execução
1. docker run --rm -it -p 8000:8000 -v $PWD:/var/www/html -w /var/www/html --network="host" php php vendor/bin/phpunit