# TP Factory

Vous allez créer votre premier design pattern à l'aide de PHP.

1. **Structure du projet:**

   Créez un nouveau répertoire pour votre projet et structurez-le comme suit :

   ```
   /Factory
   ├── src
   │   ├── Forme.php
   │   ├── Circle.php
   │   ├── Square.php
   │   └── FormeFactory.php
   ├── vendor (sera généré par Composer)
   ├── composer.json
   └── index.php
   ```

2. **Fichiers du projet:**

   a. **Forme.php:**

   ```php
   <?php
   interface Form {
       public function draw(): void;
   }
   ```

   b. **Circle.php:**

   ```php
   <?php
   class Circle implements Form {
       
   }
   ```

   c. **Square.php:**

   ```php
   <?php
   class Square implements Form {
      
   }
   ```

   d. **FormFactory.php:**

   ```php
   <?php
   class FormFactory {
     
   }
   ```

   e. **composer.json:**

   ```json
   {
       "require": {
           "php": "^8.0"
       },
       "autoload": {
           "psr-4": {
               "Factory\\": "src/"
           }
       }
   }
   ```

   f. **index.php:**

   ```php
   <?php
   require_once __DIR__ . '/vendor/autoload.php';

   use Factory\FormeFactory;

   // Utilisation de la Factory
   try {
       
   } catch (InvalidArgumentException $e) {
       echo "Erreur : " . $e->getMessage();
   }
   ```

3. **Installation des dépendances avec Composer:**

   a. Ouvrez un terminal et placez-vous dans le répertoire de votre projet (`/Factory`).

   b. Exécutez la commande suivante pour installer les dépendances définies dans `composer.json` :

:shell:
   ```bash
   composer install
   ```

   Cela téléchargera les dépendances (dans ce cas, Composer lui-même et PHP) et créera le répertoire `vendor` qui contiendra les fichiers autoload générés.

   c. Après l'installation, vous pouvez exécuter votre script PHP (`index.php`) comme d'habitude.

Avec cette structure, Composer gère les dépendances et l'autoloading des classes, ce qui rend le projet plus organisé et facilite l'ajout de nouvelles classes ou dépendances à l'avenir.