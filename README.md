# Tri de cartes

## Objectif

Objectif du projet : 

### Etape 1
- Générer  un jeu de carte aléatoire
- Les Melanger
- Et ressortir un certain nombre de cartes exemple ici 10
- Les afficher 

### Etape 2
- Récupere le jeu de carte mélanger et le trier selon certaines forme dans le code. 
- Ici : Pique/Carreau/Coeur/Trefle 

## Organisations

LE projet s'organise essentiellement en découpant les principal fonctionnalités en deux repertoire de service.

### GameGenerator

Comme son nom l'indique, on aura ici toute la partie création et mélange du jeu de base avec :
- DeckGenerator : Genere un jeu de 52 cartes
- GetMyNRandomCard :  mélange le jeu et ressort n cartes voulues
- Game :  le classe main de ce répertoire qui appellera nos deux classes précédentes.

### GameOrdered

Ici, nous passons a l'étape 2, trié notre jeu de carte avec :
- RetrieveColorInGame:  récupérer toutes les cartes d'une couleur données (pique/coeur ect).
- OrderGame:  reordonnee avec un tri basique toutes les cartes selon leur valeur
- GetMyGameOrdered : appelle nos  deux classes précédentes afin de pouvoir recueillir notre jeu trié

### Card

La classe Card est solitude, classe qui s'apparente plus  a une entité que l'on peut utiliser pour générer une carte avec
via un nom/valeur/couleur


### GameController :

Action de base qui  se lance a la racine de votre navigateur en /.
Celle-ci utilise les deux répertoires (deux appels distinces) pour générer notre jeu.


### tests

En derniere partie, nous avons les tests unitaires avec PhpUnit, j'ai tenté de faire un jeu de tests complets
afin  de couvrir le maximum de données.

J'ai essentiellement testé les classes traitant directement avec les données  générées en esperant n'avoir rien oublié.


### Utilisation ?

Rien de bien special 

Pour une utilisation basic :
- symfony server:start
- http://127.0.0.1:8000/

Vous tomberez directement sur la page des cartes avec une version textuel des cartes.
Une partie séparée avec les cartes dans le désordre et une autre triée.

Il n'y a pas d'interface userfriendly n'étant pas assez experimenté dans ce dommaine.
Mais je souhaite fortement monter en compétence sur js/framework js

