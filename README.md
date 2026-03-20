# ⚡ Evolink — Site Web Officiel

> **L'énergie qui vous connecte à l'avenir.**  
> Site web professionnel pour Evolink SAS — Paris 75008

[![PHP](https://img.shields.io/badge/PHP-8.1+-blue?logo=php)](https://php.net)
[![HTML5](https://img.shields.io/badge/HTML5-orange?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-blue?logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES2022-yellow?logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

---

## 🏢 Informations société

| Champ | Valeur |
|-------|--------|
| Raison sociale | **Evolink SAS** |
| RCS | 942 623 372 R.C.S. Paris |
| EUID | FR7501.942623372 |
| Siège | 60 Rue François 1er, 75008 Paris |
| Téléphone | 06 66 88 77 66 |
| Site | [www.evolinkpro.com](https://www.evolinkpro.com) |
| Certification | **QUALIPV 500** |

---

## 🚀 Structure du projet

```
evolink/
├── index.php                 # Page d'accueil principale
├── includes/
│   ├── config.php            # Configuration globale (constantes, sessions)
│   ├── navbar.php            # Navigation sticky responsive
│   └── footer.php            # Pied de page avec liens
├── pages/
│   ├── mentions.php          # Mentions légales
│   ├── privacy.php           # Politique de confidentialité RGPD
│   ├── realisations.php      # Portfolio projets
│   └── blog.php              # Blog / actualités
├── api/
│   └── contact.php           # Endpoint POST formulaire (JSON)
├── assets/
│   ├── css/
│   │   ├── main.css          # Styles principaux (variables, layout, composants)
│   │   └── animations.css    # Keyframes, scroll reveal, transitions
│   ├── js/
│   │   ├── main.js           # Navbar, counters, scroll reveal
│   │   ├── animations.js     # Parallax, tilt, cursor glow
│   │   └── form.js           # Formulaire async + validation
│   └── images/
│       └── favicon.svg       # Favicon SVG optimisé
└── storage/
    └── leads/                # Leads JSON (gitignored)
```

---

## 🛠️ Technologies

- **PHP 8.1+** — Backend, routing, mail, API REST
- **HTML5 sémantique** — Accessibilité, SEO structuré
- **CSS3 custom** — Variables CSS, Grid/Flexbox, animations, responsive
- **JavaScript ES2022** — Vanilla JS, IntersectionObserver, Fetch API, async/await
- **Sécurité** — CSRF token, sanitisation XSS, headers sécurisés, honeypot anti-spam

---

## 🌟 Fonctionnalités

- ✅ Design professionnel bleu/blanc — cohérence marque Evolink
- ✅ Entièrement responsive (mobile, tablette, desktop)
- ✅ Formulaire de contact avec validation JS + PHP + envoi email
- ✅ Sauvegarde des leads en JSON local
- ✅ Animations scroll-reveal au défilement
- ✅ Compteurs animés (stats hero)
- ✅ Cartes énergie live (données simulées)
- ✅ Parallax + effet tilt sur les cartes
- ✅ Barre de progression de lecture
- ✅ Menu burger responsive
- ✅ SEO : meta tags, OpenGraph, favicon SVG
- ✅ RGPD : politique de confidentialité complète
- ✅ Mentions légales avec toutes infos RCS

---

## ⚙️ Installation

### Prérequis
- PHP 8.1+
- Serveur web : Apache / Nginx / PHP built-in server

### Démarrage rapide
```bash
git clone https://github.com/votre-compte/evolink.git
cd evolink
php -S localhost:8000
```

Ouvrir : [http://localhost:8000](http://localhost:8000)

### Configuration email
Modifier `includes/config.php` :
```php
define('SITE_EMAIL', 'contact@evolinkpro.com');
```
Configurer votre serveur SMTP ou utiliser un service comme [Brevo](https://brevo.com) / [Mailgun](https://mailgun.com).

### Déploiement (hébergement mutualisé)
1. Uploader tous les fichiers via FTP
2. Pointer le domaine vers le dossier racine
3. Vérifier les permissions : `storage/leads/` en `755`

---

## 🔒 Sécurité

- Headers HTTP sécurisés (`X-Frame-Options`, `X-Content-Type-Options`...)
- Token CSRF sur les formulaires
- Sanitisation des entrées utilisateur (`htmlspecialchars`, `filter_var`)
- Honeypot anti-spam
- Mode debug désactivé en production

---

## 📋 Pages & services couverts

| Service | Statut |
|---------|--------|
| Installations électriques | ✅ |
| Systèmes photovoltaïques (QUALIPV 500) | ✅ |
| Bornes de recharge IRVE | ✅ |
| Pompes à chaleur | ✅ |
| Chauffe-eau thermodynamiques | ✅ |
| Chaudières à condensation | ✅ |
| Fibre optique FTTH | ✅ |
| Énergies renouvelables | ✅ |

---

## 📄 Licence

© 2025 Evolink SAS — Tous droits réservés.  
RCS Paris 942 623 372 — EUID FR7501.942623372
