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
