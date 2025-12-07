# TP – Utiliser PHP CS Fixer avec PhpStorm

Ce document explique **à quoi sert PHP CS Fixer**, **comment l’installer**, **comment l’intégrer dans PhpStorm**, et propose **une démonstration pratique** à intégrer dans votre projet.

---

## 🎯 Objectif du TP

Apprendre à utiliser **PHP CS Fixer** pour :

* corriger automatiquement le style de votre code PHP,
* suivre un standard propre (PSR-12),
* automatiser la mise en forme dans PhpStorm.

---

## ❓ PHP CS Fixer, c’est quoi ?

**PHP CS Fixer** est un outil qui permet de :

* nettoyer et reformater votre code PHP,
* appliquer automatiquement un style cohérent,
* éviter les erreurs de style (indentation, espaces, accolades, etc.),
* respecter les normes standards comme **PSR-12**.

En bref : il rend votre code **plus propre**, **plus lisible**, et **plus professionnel**, en un seul clic ou commande.

---

## 📦 Installation de PHP CS Fixer

### ➤ 1. Installer via Composer (méthode recommandée)

Dans votre projet :

```bash
composer require --dev friendsofphp/php-cs-fixer
```

### ➤ 2. Vérifier l'installation

```bash
vendor/bin/php-cs-fixer -V
```

Vous devriez voir la version afficher.

---

## ⚙️ Configuration : créer le fichier `.php-cs-fixer.php`

À la racine de votre projet, créez ce fichier :

```php
<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor');

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'binary_operator_spaces' => ['default' => 'align'],
    ])
    ->setFinder($finder);
```

Ce fichier définit :

* les dossiers scannés,
* les standards appliqués,
* les règles supplémentaires.

---

## 🧪 Démonstration : Corriger un fichier PHP

### Exemple avant correction :

```php
<?php class test{public function run(){echo "Hello";}}
```

### Commande pour corriger :

```bash
vendor/bin/php-cs-fixer fix
```

### Résultat attendu :

```php
<?php

class Test
{
    public function run()
    {
        echo "Hello";
    }
}
```

---

## 🧰 Intégration avec PhpStorm

### ➤ 1. Aller dans les paramètres

**File > Settings > Tools > External Tools**

### ➤ 2. Ajouter PHP CS Fixer

Cliquez sur **+** puis configurez :

* **Name** : PHP CS Fixer
* **Program** : `vendor/bin/php-cs-fixer.php` (ou le chemin complet)
* **Arguments** :

```
fix $FileDir$/$FileName$
```

* **Working directory** :

```
$ProjectFileDir$
```

### ➤ 3. Utilisation dans PhpStorm

* Clic droit sur un fichier → **External Tools → PHP CS Fixer**
* Ou créer un raccourci clavier : **Settings > Keymap**

---

## 🚀 Bonus : automatiser PHP CS Fixer avec un Git Hook

dans `.git/hooks/pre-commit` :

```bash
#!/bin/sh
vendor/bin/php-cs-fixer fix --quiet
```

Rendre le hook exécutable :

```bash
chmod +x .git/hooks/pre-commit
```

Votre code sera automatiquement corrigé **avant chaque commit**.

---

## 📝 Conclusion

Avec ce TP, vous savez maintenant :

* ce qu'est PHP CS Fixer,
* comment l’installer et le configurer,
* comment l’utiliser en ligne de commande,
* comment l’intégrer dans PhpStorm,
* comment automatiser les corrections.

Votre projet PHP sera désormais **propre, moderne et cohérent** ! 💪

---

Si tu veux, je peux te générer un projet de base avec les bons fichiers déjà prêts (`composer.json`, `.php-cs-fixer.php`, hook Git, etc.).
