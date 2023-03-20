
## Lancer le site

Après avoir récupéré le projet sur github : 

- Créer la base de donnée local test-laravel et de créer votre proppre .env
- Dans la console lancer la commande créant la base : php artisan migrate:fresh --seed
- Puis toujours dans 2 consoles, lancer les commandes pour démarrer npm et serv : npm run dev // et dans l'autre // php artisan serve

## Fonctionnement du module

Notre affichage des stars se fait au lien de /stars sur lequel on tombe directement.
Il faut en premier lieu enregistrer un compte pour accèder à l'espace de gestion. <br>
Puis, une fois connecté il est possible d'ajouter, modifier et supprimer des stars. 
