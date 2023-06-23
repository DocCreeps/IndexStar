# Index Star

Application d'indexation de différentes Star ( Consultation, Ajout, Edition, Suppression).

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés :

- PHP (version ^8.1)
- Composer (version ^2.5)
- Node.js (version ^19.4)
- Laravel (version 10)

## Installation

1. Clonez ce dépôt sur votre machine locale :

   ```shell
   git clone 'https://github.com/DocCreeps/IndexStar.git` 

2.  Accédez au répertoire du projet :

    `cd IndexStar`

3.  Installez les dépendances PHP via Composer :

    `composer install`

4.  Installez les dépendances JavaScript via npm (ou yarn) :

    `npm install`

5.  Copiez le fichier `.env.example` et renommez-le en `.env` :

    `cp .env.example .env`

6.  Générez une clé d'application Laravel :

    `php artisan key:generate`

7.  Configurez les informations de votre base de données dans le fichier `.env`.

8.  Exécutez les migrations de la base de données :

    `php artisan migrate`

9.  Lancez le serveur de développement :

    `php artisan serve`

10. ExécuteZ le processus de développement des ressources JavaScript et CSS

    `npm run dev`
    
12.  Accédez à l'application dans votre navigateur à l'adresse `http://localhost:8000`.


## Fonctionnalités

-   Fonctionnalité 1 : Ajouter.
-   Fonctionnalité 2 : Editer.
-   Fonctionnalité 3 : Supprimer.
-   Fonctionnalité 4 : Consulter.


## Utilisation de Livewire

Livewire est utilisé dans cette application pour fournir une interactivité côté client. Voici comment utiliser Livewire dans votre projet :

1.  Créez un nouveau composant Livewire :

    `php artisan make:livewire NomDuComposant`

2.  Définissez la logique et les actions du composant Livewire dans la classe générée.

3.  Utilisez le composant Livewire dans vos vues Blade en ajoutant la directive `@livewire('nom-du-composant')`.

    Exemple :
    `<div>
    @livewire('nom-du-composant')
    </div>` 

4.  Livewire gère la communication entre le composant et le serveur via des requêtes Ajax, vous n'avez donc pas besoin de vous soucier de la gestion des formulaires ou de la mise à jour de la page.


Pour plus d'informations sur l'utilisation de Livewire, consultez la documentation officielle de Livewire : [https://laravel-livewire.com/docs](https://laravel-livewire.com/docs).

## Contributions

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez suivre les étapes suivantes :

1.  Forker le dépôt
2.  Créer une nouvelle branche (`git checkout -b feature/ma-nouvelle-fonctionnalite`)
3.  Commiter vos modifications (`git commit -am 'Ajouter une nouvelle fonctionnalité'`)
4.  Pousser la branche (`git push origin feature/ma-nouvelle-fonctionnalite`)
5.  Ouvrir une pull request


