# Quels sont les avantages et inconvénients d'une approche objet ?
La programmation orientée objet offre de nombreux avantages. Parmi eux :

La possibilité de réutiliser le code dans différents projets. Les classes ainsi créées pourront avoir une nouvelle vie dans une application tierce.
Une conception de l'algorithme plus claire et organisée. Le programmeur identifie chaque élément de son programme comme un objet ayant son contexte, ses propriétés et des actions qui lui sont propres.
Un code modulaire. Chaque type d'objet possède son propre contexte et ne peut agir avec d'autres suivant des interfaces bien précises. Cela permet d'isoler chaque module et d'en créer séparemment de nouveaux qui viendront s'ajouter à l'application.Cette approche est particulièrement employée dans le cas de projets répartis entre pusieurs développeurs.
Possibilité de s'adapter aux design patterns (motifs de conception) pour une meilleure structuration du code.
Il existe cependant quelques inconvénients à l'utilisation de la programmation par objet :

Une application orientée objet mal conceptualisée sera difficilement maintenable et modulaire.
La programmation par objet nécessite généralement plus de ressources et de temps d'exécution qu'un code procédural.
Remarque : la programmation par objet n'est pas synonyme de bonne programmation. Il existe d'excellents développeurs capables de produire du bon code procédural, maintenable, structuré et modulaire. Mais il existe aussi des développeurs en programmation objet qui produisent du mauvais code suite à un manque de conceptualisation.

## Qu'est-ce qu'un objet ?
### Définition
Un "objet" est une représentation d'une chose matérielle ou immatérielle du réel à laquelle on associe des propriétés et des actions.

Par exemple : une voiture, une personne, un animal, un nombre ou bien un compte bancaire peuvent être vus comme des objets.

### Attributs
Les « attributs » (aussi appelés « données membres ») sont les caractères propres à un objet.

Une personne, par exemple, possèdent différents attributs qui lui sont propres comme le nom, le prénom, la couleur des yeux, le sexe, la couleur des cheveux, la taille...

### Méthodes
Les « méthodes » sont les actions applicables à un objet.

Un objet personne, par exemple, dispose des actions suivantes : manger, dormir, boire, marcher, courir...

### Qu'est-ce-qu'une classe ?
Une « classe » est un modèle de données définissant la structure commune à tous les objets qui seront créés à partir d'elle. Plus concrètement, nous pouvons percevoir une classe comme un moule grâce auquel nous allons créer autant d'objets de même type et de même structure qu'on le désire.

Par exemple, pour modéliser n'importe quelle personne, nous pourrions écrire une classe Personne dans laquelle nous définissons les attributs (couleurs des yeux, couleurs des cheveux, taille, sexe...) et méthodes (marcher, courir, manger, boire...) communs à tout être humain.

### Qu'est-ce-qu'une instance ?
Une instance est une représentation particulière d'une classe.

Lorsque l'on crée un objet, on réalise ce que l'on appelle une « instance de la classe ». C'est à dire que du moule, on en extrait un nouvel objet qui dispose de ses attributs et de ses méthodes. L'objet ainsi créé aura pour type le nom de la classe.

Par exemple, les objets Hugo, Romain, Nicolas, Daniel sont des instances (objets) de la classe Personne.

Remarque : une classe n'est pas un objet. C'est un abus de langage de dire qu'une classe et un objet sont identiques.
