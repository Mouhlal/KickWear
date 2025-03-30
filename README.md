# 👟 KickWear - Boutique en ligne  

## 📌 Description  
KickWear est une plateforme e-commerce développée avec **Laravel** et **MySQL**, permettant aux utilisateurs d'explorer et d'acheter des articles de mode (chaussures, vêtements, accessoires). L'application intègre un système de gestion de produits, panier d'achat et paiement sécurisé.  

---

## 🚀 Technologies utilisées  
- **Backend :** Laravel (PHP)  
- **Base de données :** MySQL  
- **Frontend :** Blade + Tailwind CSS / Bootstrap  
- **Autres :**  Authentification Laravel  

---

## 🎯 Fonctionnalités principales  
✔️ Affichage des produits avec images et descriptions  
✔️ Système de panier et gestion des commandes  
✔️ Authentification des utilisateurs (login/register)  

---

## 📦 Installation et exécution  

### 🔹 1. Cloner le projet  
```bash
git clone https://github.com/Mouhlal/KickWear.git
cd --
```

### 🔹 2. Installer les dépendances  
```bash
composer install
npm install
```

### 🔹 3. Configurer la base de données  
Dans le fichier **.env**, modifier la ligne suivante :  
```dotenv
DB_DATABASE=kickwear_db
DB_USERNAME=root
DB_PASSWORD=your_password
```
Puis, exécuter les migrations et ajouter des données factices :  
```bash
php artisan migrate --seed
```

### 🔹 4. Générer la clé d'application  
```bash
php artisan key:generate
```

### 🔹 5. Démarrer le serveur  
```bash
php artisan serve
```

## 👨‍💻 Auteur  
Développé par **Mouhlal** – Développeur Full Stack spécialisé en Laravel, MySQL et React.js.  
