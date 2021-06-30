# docker_ynov

docker compose up pour lancer le projet

localhost:8080 pour y acceder

Pour lier ma bdd et symfony j'ai utilisé le docker-compose, en effet j'ai mes deux services "db" et "app" l'un avec une image mysql et l'autre contenant mon projet symfony.

Dans mon service db j'utilise la variable "container_name" qui va servir de hostname pour ma connexion depuis mon autre service.

J'ai créé un network dev que j'utilise dans les deux services afin de pouvoir utiliser le container_name depuis mon .env symfony
