# Guya Resi - Site Vitrine

Ce projet est le site vitrine officiel du groupe résidentiel **Guya Resi**, situé à Abidjan (Angré Nouveau CHU). Il a été conçu pour offrir une expérience utilisateur haut de gamme, moderne et fluide, permettant aux visiteurs de découvrir les résidences, les équipements et de réserver facilement.

## 🚀 Fonctionnalités Principales

- **Design "One-Page" Premium** : Navigation fluide avec défilement vers les différentes sections (Accueil, Nos Résidences, Services, Contact).
- **Galerie Maçonnée (Masonry)** : Mise en valeur intelligente et élégante des photos des résidences grâce à CSS Grid et `object-cover`.
- **Réservation Rapide** : Intégration d'un bouton de réservation direct vers **WhatsApp** avec message pré-rempli.
- **Responsive Design** : Interface parfaitement adaptée aux mobiles, tablettes et ordinateurs.

## 🛠️ Stack Technique

- **Framework PHP :** [Laravel 11](https://laravel.com)
- **Framework CSS :** [Tailwind CSS v4](https://tailwindcss.com) (Thème et design system personnalisés)
- **Environnement de Dev :** Docker via [Laravel Sail](https://laravel.com/docs/sail)
- **Runtime :** PHP 8.4

## 📦 Installation & Déploiement Local

L'environnement de développement est géré par **Docker (Laravel Sail)** pour garantir la compatibilité et la simplicité d'installation.

### Prérequis
- Docker Desktop installé et en cours d'exécution.
- Composer installé localement (ou utiliser une image Docker).

### Étapes d'installation

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/yvesleopoldbeugre/guya-resi.git
   cd guya-resi
   ```

2. **Installer les dépendances PHP :**
   ```bash
   composer install
   ```

3. **Configurer l'environnement :**
   ```bash
   cp .env.example .env
   ```
   *(Assurez-vous que les ports dans `.env` sont libres, par défaut `APP_PORT=8001` et `VITE_PORT=5174` pour ce projet afin d'éviter les conflits).*

4. **Démarrer les conteneurs Docker (Sail) :**
   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Générer la clé d'application et migrer la base de données :**
   ```bash
   ./vendor/bin/sail artisan key:generate
   ./vendor/bin/sail artisan migrate
   ```

6. **Compiler les ressources front-end (Vite) :**
   *Note : Le projet utilise temporairement le CDN de Tailwind v4 pour le prototypage rapide. Pour une compilation locale complète :*
   ```bash
   ./vendor/bin/sail npm install
   ./vendor/bin/sail npm run build
   # ou pour le mode développement :
   ./vendor/bin/sail npm run dev
   ```

7. **Accéder au site :**
   Ouvrez votre navigateur et rendez-vous sur : [http://localhost:8001](http://localhost:8001)

## 🎨 Design System

Le fichier de base `app.blade.php` intègre un thème personnalisé avec les couleurs de la marque :
- **Or (Gold) :** `#D4AF37`
- **Anthracite :** `#1A1A1A`
- **Typographie :** *Playfair Display* (Titres) et *Inter* (Textes de corps).

## 📝 Licence

Ce projet est la propriété de Guya Resi. Tous droits réservés.
