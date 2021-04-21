# Install projet
```bash
 symfony new Book --full --version=5.2
```

# Premiere execution
```bash
 symfony serve
```

# Premier controller
```bash
 # Test console
 symfony console
 # Puis
 symfony console make:controller
```

## Premier probleme
A ce stade, pas de DB configurée.
Avec la route vers le controller Book, on a une erreur:
- `Environment variable not found: "DATABASE_URL"`
## Solution provisoire ?
Configurer la DB:
```bash
# Dans le fichier .env
 DATABASE_URL="mysql://db_user:@127.0.0.1:3306/db_books_eyrolles"
# Depuis le terminal
 symfony console doctrine:database:create
```
# Taper l'adresse : http://localhost:8000/book
>> On arrive sur le bon controller qui lance sa vue.
# Test profiler
Barre du bas, tester l'onglet rooting.
```bash
# Voir les routes, les noms de routes avec leurs méthodes.
 symfony console debug:router
```
# Controller et routes
## Annotations
Ici avec nom de route préfixé par app_ et méthode HTTP.
```php
    #[Route('/book', name: 'book', methods={"GET"})]
```
## Méthodes et types de réponses:
1. render() permet d'aller vers une vue html
2. On peut aussi avoir d'autres types de réponses. (voir la méthode `message()`)
## Routes et wildcards:
L'art et la manière de gérer les paramètres des méthodes.

# Twig
Voir le code autour du controller Book.
## Exemple de code:
```php
{% block body %}
    {% for d in data %}
        {% if loop.index0 == 0 %}
            <p style="text-align:center;font-size:30px;background-color:fuchsia">{{ d.name }} {{ d.action }}</p>
        {% else %}
            <p style="text-align:center;font-size:30px">{{ d.name }} {{ d.action }}</p>
        {% endif %}
    {% endfor %}
{% endblock %}
```
__NB__:
- {% %} pour éxecuter
- {{ }} pour afficher
#
# Entity:
## Créer une entité
```bash
 # Test console et mot clé = doctrine (ORM)
 symfony console
 symfony console make:entity
```