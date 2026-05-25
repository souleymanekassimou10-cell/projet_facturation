# Rapport des corrections

## Objectif

Rendre le projet plus cohérent avec une séparation simple de type MVC et corriger les erreurs qui empêchaient le flux de connexion de fonctionner correctement.

## Changements apportés

- Ajout d'un point d'entrée racine dans [index.php](index.php) pour rediriger automatiquement vers la connexion ou le tableau de bord selon l'état de session.
- Correction du contrôleur d'authentification dans [controllers/Authcontroller.php](controllers/Authcontroller.php) : chemin d'inclusion vers la configuration corrigé, lecture du bon champ de formulaire, vérification des entrées et redirection vers la bonne vue.
- Correction du formulaire de connexion dans [views/login.html](views/login.html) : chemins des assets ajustés, action du formulaire corrigée, nom du champ mot de passe aligné sur le contrôleur et affichage d'un message d'erreur.
- Correction de la configuration base de données dans [config/db.php](config/db.php) : nom de l'application corrigé et options PDO renforcées.
- Ajout d'une vraie page dashboard dans [views/dashboard.php](views/dashboard.php) : vérification de session, affichage du nom et du rôle de l'utilisateur, et intégration Bootstrap.
- Ajout de modèles simples dans [models/client.php](models/client.php) et [models/facture.php](models/facture.php) pour matérialiser la couche modèle.
- Neutralisation de [test.php](test.php) qui contenait une logique d'authentification doublon et incohérente, remplacée par une redirection vers la page de connexion.

## Points encore à surveiller

- Les noms réels des tables `client` et `facture` doivent correspondre au schéma de la base.
- Il faut vérifier que la table `utilisateur` contient bien les colonnes `id`, `nom`, `role`, `email` et `mot_de_passe`.
- Le projet n'a pas encore de routeur, d'autoloading ni de vraie couche service, donc l'architecture reste simple mais plus cohérente qu'avant.
