# OpenJet - Technical Test : Back-End

## Consignes

**Durée du test**: 1h

**Exercice** :

Implémenter et utiliser partiellement le `SyliusResourceBundle` au sein d'un projet Symfony.

- Forkez ce repo dans votre compte GitHub.
- Votre developpement partira de `master`. Travaillez sur une branche dérivée de celle-ci et faites une Pull Request en fin de session (votre branche -> `master`). Puis faites un mail à alexandre.bongard@openjet.com et frederic.bourbigot@openjet.com.

## Ressources

Créer un projet Symfony (standard édition) et y ajouter `sylius/resource-bundle` dans les dépendances composer afin de gérer un CRUD complet sur une entité (index, show, create, update, delete) depuis une interface graphique (HTML) mais également via une API (JSON).

### Contraintes

- Mapping et services en `xml` ;
- Routing en `yml` ;
- Créer la classe d'entité dans un dossier `Model` ;
- Loader l'entité via le resource-bundle et non directement via la configuration de doctrine ;
- Ne pas coder de controller, ni d’action de controller ;
- Gérer les 5 actions ci dessus via interface graphique et API.

Il est inutile :

- De supprimer le code auto généré par le projet Symfony ;
- D'avoir une entité avec 500 attributs (`id`, `name`, etc. +2/3 suffisent).


Bonus : une page de dashboard avec les liens serait la bienvenue.

### Aide

N'utilisez pas une version de développement du `sylius/resource-bundle`.
