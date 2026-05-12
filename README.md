# 🚀 FakeSaaS — Apprendre Laravel avec Stripe

> Un faux projet SaaS construit avec Laravel pour monter en compétences sur le framework et intégrer l'API Stripe (abonnements, paiements, webhooks).

---

## 🎯 Objectifs pédagogiques

- Maîtriser la structure d'un projet Laravel (MVC, routing, middleware, Eloquent)
- Implémenter un système d'authentification (Laravel Breeze / Jetstream)
- Intégrer l'API Stripe : produits, prix, abonnements, portail client
- Gérer les webhooks Stripe de façon sécurisée
- Comprendre les plans tarifaires et la logique de feature gating

---

## 🛠️ Stack technique

| Technologie | Rôle |
|---|---|
| **Laravel 11** | Framework PHP backend |
| **MySQL / SQLite** | Base de données |
| **Stripe API** | Paiements & abonnements |
| **Laravel Cashier** | Abstraction Stripe pour Laravel |
| **Blade / Livewire** | Templates & composants réactifs |
| **Tailwind CSS** | Styles |
| **Vite** | Bundler frontend |

---

## ⚙️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/ton-user/fakesaas.git
cd fakesaas
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configurer l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Remplir les variables dans `.env` :

```env
APP_NAME="FakeSaaS"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_DATABASE=fakesaas
DB_USERNAME=root
DB_PASSWORD=

# Stripe
STRIPE_KEY=pk_test_xxxxxxxxxxxx
STRIPE_SECRET=sk_test_xxxxxxxxxxxx
STRIPE_WEBHOOK_SECRET=whsec_xxxxxxxxxxxx
```

### 4. Migrer la base de données

```bash
php artisan migrate --seed
```

### 5. Lancer les serveurs

```bash
php artisan serve
npm run dev
```

---

## 💳 Intégration Stripe

### Plans disponibles (exemple)

| Plan | Prix | Fonctionnalités |
|---|---|---|
| **Starter** | 9 €/mois | 1 projet, 5 utilisateurs |
| **Pro** | 29 €/mois | Projets illimités, 50 utilisateurs |
| **Business** | 79 €/mois | Tout illimité + support prioritaire |

### Configuration des produits Stripe

Les produits et prix sont créés directement dans le dashboard Stripe, puis leurs IDs sont référencés dans `config/stripe.php` :

```php
return [
    'plans' => [
        'starter' => env('STRIPE_PLAN_STARTER'),
        'pro'     => env('STRIPE_PLAN_PRO'),
        'business'=> env('STRIPE_PLAN_BUSINESS'),
    ],
];
```

### Webhooks

Pour tester les webhooks en local, utiliser la CLI Stripe :

```bash
stripe listen --forward-to localhost:8000/stripe/webhook
```

Les événements gérés :
- `customer.subscription.created`
- `customer.subscription.updated`
- `customer.subscription.deleted`
- `invoice.payment_succeeded`
- `invoice.payment_failed`

---

## 📁 Structure du projet

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── BillingController.php      # Gestion abonnements
│   │   ├── DashboardController.php
│   │   └── WebhookController.php      # Réception webhooks Stripe
│   └── Middleware/
│       └── CheckSubscription.php      # Feature gating
├── Models/
│   └── User.php                       # Trait Billable (Cashier)
resources/
├── views/
│   ├── billing/
│   │   ├── index.blade.php            # Page abonnements
│   │   └── success.blade.php
│   └── dashboard.blade.php
routes/
├── web.php
└── stripe.php                         # Routes webhooks
```

---

## 🔐 Feature Gating

L'accès aux fonctionnalités est conditionné au plan actif de l'utilisateur via un middleware dédié :

```php
// routes/web.php
Route::middleware(['auth', 'subscribed:pro,business'])->group(function () {
    Route::get('/advanced-features', [FeatureController::class, 'index']);
});
```

---

## 🧪 Tests

```bash
php artisan test
```

Les tests couvrent :
- Création et annulation d'abonnement
- Réception et validation des webhooks
- Accès restreint selon le plan

---

## 📚 Ressources utiles

- [Documentation Laravel](https://laravel.com/docs)
- [Laravel Cashier (Stripe)](https://laravel.com/docs/cashier-stripe)
- [Stripe API Reference](https://stripe.com/docs/api)
- [Stripe CLI](https://stripe.com/docs/stripe-cli)

---

## 📝 Licence

Ce projet est à but purement éducatif. Aucune utilisation commerciale.
