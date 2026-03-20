<?php
require_once 'includes/config.php';
require_once 'includes/head.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Evolink – Installations électriques, photovoltaïque, bornes de recharge VE, pompes à chaleur, fibre optique. Paris & Île-de-France. QUALIPV 500.">
  <meta name="keywords" content="électricien Paris, photovoltaïque, borne recharge véhicule électrique, pompe à chaleur, fibre optique, énergie renouvelable">
  <meta property="og:title" content="Evolink – L'énergie qui vous connecte à l'avenir">
  <meta property="og:description" content="Expert en électricité, énergies renouvelables et télécommunications. Paris 75008.">
  <meta property="og:url" content="https://www.evolinkpro.com">
  <meta property="og:type" content="website">
  <title>Evolink – L'énergie qui vous connecte à l'avenir</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Bricolage+Grotesque:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/animations.css">
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- HERO -->
<section id="accueil" class="hero">
  <div class="hero__bg-grid"></div>
  <div class="hero__orb hero__orb--1"></div>
  <div class="hero__orb hero__orb--2"></div>
  <div class="container hero__inner">
    <div class="hero__content reveal">
      <div class="hero__badges">
        <span class="badge badge--glow">⚡ Certifié QUALIPV 500</span>
        <span class="badge badge--outline">RCS Paris 942 623 372</span>
      </div>
      <h1 class="hero__title">
        L'énergie qui vous<br>
        <span class="hero__title-accent">connecte à l'avenir</span>
      </h1>
      <p class="hero__subtitle">
        Installations électriques · Photovoltaïque · Bornes IRVE · Pompes à chaleur · Fibre optique
        <br>Paris &amp; Île-de-France
      </p>
      <div class="hero__cta">
        <a href="#contact" class="btn btn--primary btn--lg">
          <span>Demander un devis gratuit</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="#services" class="btn btn--ghost btn--lg">Nos services</a>
      </div>
      <div class="hero__stats">
        <div class="hero__stat">
          <span class="hero__stat-num" data-count="7">0</span>
          <span class="hero__stat-label">Domaines d'expertise</span>
        </div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat">
          <span class="hero__stat-num" data-count="500">0</span>
          <span class="hero__stat-label">Certifié QUALIPV</span>
        </div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat">
          <span class="hero__stat-num" data-count="2025">0</span>
          <span class="hero__stat-label">Fondée à Paris</span>
        </div>
      </div>
    </div>
    <div class="hero__visual reveal reveal--right">
      <div class="hero__card-stack">
        <div class="energy-card energy-card--solar">
          <div class="energy-card__icon">☀️</div>
          <div class="energy-card__info">
            <span class="energy-card__label">Production solaire</span>
            <span class="energy-card__value" id="solar-val">4.2 kWh</span>
          </div>
          <div class="energy-card__pulse"></div>
        </div>
        <div class="energy-card energy-card--ev">
          <div class="energy-card__icon">🔌</div>
          <div class="energy-card__info">
            <span class="energy-card__label">Borne IRVE</span>
            <span class="energy-card__value">22 kW</span>
          </div>
          <div class="energy-card__bar"><div class="energy-card__bar-fill" id="ev-bar"></div></div>
        </div>
        <div class="energy-card energy-card--fiber">
          <div class="energy-card__icon">🌐</div>
          <div class="energy-card__info">
            <span class="energy-card__label">Fibre FTTH</span>
            <span class="energy-card__value" id="fiber-val">1 Gb/s</span>
          </div>
          <div class="energy-card__dot online"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero__scroll-hint">
    <span>Découvrir</span>
    <div class="scroll-arrow"></div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="services">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-eyebrow">Ce que nous faisons</span>
      <h2 class="section-title">Nos expertises</h2>
      <p class="section-desc">De l'installation électrique aux projets d'énergies renouvelables, Evolink couvre l'intégralité de vos besoins avec rigueur et innovation.</p>
    </div>
    <div class="services__grid">

      <div class="service-card reveal" data-delay="0">
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <path d="M24 4L6 26h16v18l20-22H26L24 4z" fill="currentColor" opacity=".9"/>
          </svg>
        </div>
        <h3>Installations électriques</h3>
        <p>Travaux haute et basse tension, tableaux électriques, éclairage public, signalisation lumineuse et réseaux d'énergie.</p>
        <ul class="service-card__list">
          <li>Courant fort & faible</li>
          <li>Éclairage public LED</li>
          <li>Signalisation lumineuse</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

      <div class="service-card service-card--featured reveal" data-delay="100">
        <div class="service-card__badge">QUALIPV 500</div>
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <circle cx="24" cy="24" r="8" fill="currentColor"/>
            <path d="M24 4v4M24 40v4M4 24h4M40 24h4M8.7 8.7l2.8 2.8M36.5 36.5l2.8 2.8M8.7 39.3l2.8-2.8M36.5 11.5l2.8-2.8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Systèmes photovoltaïques</h3>
        <p>Conception, installation et maintenance de panneaux solaires pour particuliers, entreprises et collectivités.</p>
        <ul class="service-card__list">
          <li>Étude & dimensionnement</li>
          <li>Installation & raccordement</li>
          <li>Monitoring & maintenance</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

      <div class="service-card reveal" data-delay="200">
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <rect x="8" y="30" width="32" height="8" rx="2" fill="currentColor" opacity=".8"/>
            <path d="M16 30V20a8 8 0 0116 0v10" stroke="currentColor" stroke-width="2.5"/>
            <circle cx="24" cy="20" r="3" fill="currentColor"/>
          </svg>
        </div>
        <h3>Bornes de recharge IRVE</h3>
        <p>Déploiement d'infrastructures de recharge pour véhicules électriques — domicile, entreprise et espace public.</p>
        <ul class="service-card__list">
          <li>7 kW à 22 kW (AC)</li>
          <li>Wallbox & bornes publiques</li>
          <li>Supervision & pilotage</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

      <div class="service-card reveal" data-delay="0">
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <path d="M12 36c0-6.6 5.4-12 12-12s12 5.4 12 12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            <path d="M24 24V12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            <path d="M18 18l6-6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M8 36h32" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".5"/>
          </svg>
        </div>
        <h3>Pompes à chaleur</h3>
        <p>Installation et entretien de PAC air/eau et air/air pour un chauffage performant et économique toute l'année.</p>
        <ul class="service-card__list">
          <li>PAC air/eau & air/air</li>
          <li>Dimensionnement thermique</li>
          <li>Contrat de maintenance</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

      <div class="service-card reveal" data-delay="100">
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <rect x="14" y="8" width="20" height="32" rx="4" stroke="currentColor" stroke-width="2.5"/>
            <path d="M20 16h8M20 22h8M20 28h5" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
          </svg>
        </div>
        <h3>Chauffe-eau & chaudières</h3>
        <p>Chauffe-eau thermodynamiques et chaudières à condensation — installation, remplacement et entretien.</p>
        <ul class="service-card__list">
          <li>Chauffe-eau thermodynamique</li>
          <li>Chaudière à condensation</li>
          <li>Entretien annuel</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

      <div class="service-card reveal" data-delay="200">
        <div class="service-card__icon-wrap">
          <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
            <circle cx="24" cy="24" r="12" stroke="currentColor" stroke-width="2.5"/>
            <path d="M24 12c-4 4-4 16 0 24M24 12c4 4 4 16 0 24M12 24h24" stroke="currentColor" stroke-width="1.8" opacity=".7"/>
          </svg>
        </div>
        <h3>Fibre optique FTTH</h3>
        <p>Installation de fibre optique et mise en service de box internet pour fournisseurs d'accès à internet.</p>
        <ul class="service-card__list">
          <li>Tirage fibre FTTH/FTTB</li>
          <li>Mise en service box</li>
          <li>Tests & certification</li>
        </ul>
        <a href="#contact" class="service-card__link">Demander un devis →</a>
      </div>

    </div>
  </div>
</section>

<!-- POURQUOI NOUS -->
<section id="apropos" class="why">
  <div class="container why__inner">
    <div class="why__content reveal">
      <span class="section-eyebrow">Pourquoi Evolink</span>
      <h2 class="section-title">Une expertise complète,<br>un interlocuteur unique</h2>
      <div class="why__features">
        <div class="why__feature">
          <div class="why__feature-icon">🏆</div>
          <div>
            <h4>Certifié QUALIPV 500</h4>
            <p>Qualification RGE pour vos installations photovoltaïques — éligible aux aides de l'État.</p>
          </div>
        </div>
        <div class="why__feature">
          <div class="why__feature-icon">⚡</div>
          <div>
            <h4>Multi-expertise</h4>
            <p>Un seul prestataire pour l'électricité, les EnR, la mobilité électrique et le numérique.</p>
          </div>
        </div>
        <div class="why__feature">
          <div class="why__feature-icon">📍</div>
          <div>
            <h4>Paris & Île-de-France</h4>
            <p>Basés au cœur du 8e arrondissement, nous intervenons rapidement sur toute la région.</p>
          </div>
        </div>
        <div class="why__feature">
          <div class="why__feature-icon">🛡️</div>
          <div>
            <h4>Société certifiée RCS</h4>
            <p>SAS immatriculée au RCS de Paris — garantie de sérieux et de pérennité.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="why__card reveal reveal--right">
      <div class="company-card">
        <div class="company-card__header">
          <div class="company-card__logo">E</div>
          <div>
            <h3>Evolink</h3>
            <span>SAS — Paris 8e</span>
          </div>
        </div>
        <div class="company-card__rows">
          <div class="company-card__row">
            <span>RCS</span><strong>942 623 372 Paris</strong>
          </div>
          <div class="company-card__row">
            <span>EUID</span><strong>FR7501.942623372</strong>
          </div>
          <div class="company-card__row">
            <span>Siège</span><strong>60 rue François Ier, 75008</strong>
          </div>
          <div class="company-card__row">
            <span>Certification</span><strong class="badge-qualipv">QUALIPV 500</strong>
          </div>
          <div class="company-card__row">
            <span>Activité</span><strong>Depuis mars 2025</strong>
          </div>
          <div class="company-card__row">
            <span>Site</span><strong><a href="https://www.evolinkpro.com" target="_blank">evolinkpro.com</a></strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-eyebrow">Parlons de votre projet</span>
      <h2 class="section-title">Contactez-nous</h2>
      <p class="section-desc">Devis gratuit, réponse sous 24h. Notre équipe est disponible pour tous vos projets électriques et énergétiques.</p>
    </div>
    <div class="contact__inner">
      <div class="contact__info reveal">
        <div class="contact__info-item">
          <div class="contact__info-icon">📍</div>
          <div>
            <h4>Adresse</h4>
            <p>60 Rue François 1er<br>75008 Paris, France</p>
          </div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon">📞</div>
          <div>
            <h4>Téléphone</h4>
            <p><a href="tel:+33666887766">06 66 88 77 66</a></p>
          </div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon">🌐</div>
          <div>
            <h4>Site web</h4>
            <p><a href="https://www.evolinkpro.com" target="_blank">www.evolinkpro.com</a></p>
          </div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon">✉️</div>
          <div>
            <h4>Email</h4>
            <p><a href="mailto:contact@evolinkpro.com">contact@evolinkpro.com</a></p>
          </div>
        </div>
        <div class="contact__slogan">
          <blockquote>"L'énergie qui vous connecte à l'avenir."</blockquote>
        </div>
      </div>
      <div class="contact__form-wrap reveal reveal--right">
        <form id="contact-form" class="contact__form" action="api/contact.php" method="POST">
          <div class="form__row">
            <div class="form__group">
              <label for="nom">Nom *</label>
              <input type="text" id="nom" name="nom" required placeholder="Votre nom">
            </div>
            <div class="form__group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required placeholder="votre@email.com">
            </div>
          </div>
          <div class="form__group">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone" placeholder="06 XX XX XX XX">
          </div>
          <div class="form__group">
            <label for="service">Service concerné *</label>
            <select id="service" name="service" required>
              <option value="">-- Choisir un service --</option>
              <option value="electricite">Installations électriques</option>
              <option value="photovoltaique">Systèmes photovoltaïques</option>
              <option value="borne-recharge">Bornes de recharge IRVE</option>
              <option value="pompe-chaleur">Pompes à chaleur</option>
              <option value="chauffe-eau">Chauffe-eau / Chaudières</option>
              <option value="fibre">Fibre optique FTTH</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="form__group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="4" required placeholder="Décrivez votre projet..."></textarea>
          </div>
          <div class="form__group form__group--checkbox">
            <input type="checkbox" id="rgpd" name="rgpd" required>
            <label for="rgpd">J'accepte que mes données soient utilisées pour traiter ma demande. <a href="pages/privacy.php">Politique de confidentialité</a></label>
          </div>
          <button type="submit" class="btn btn--primary btn--full">
            <span>Envoyer ma demande</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2L15 22l-4-9-9-4 20-7z"/></svg>
          </button>
          <div id="form-feedback" class="form__feedback" role="alert" aria-live="polite"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
<script src="assets/js/animations.js"></script>
<script src="assets/js/form.js"></script>
</body>
</html>
