# 🌍 Plateforme Collaborative – Gestion des Associations & Volontaires

## 📌 Description
Cette plateforme est une application **web** développée avec **Symfony** et **MySQL** permettant de gérer :
- Les **associations** et leurs **projets**,
- Les **volontaires** et leurs inscriptions,
- Les **événements**, **dons**, **offres**, et **membres**,
- Un système de **notation**, de **commentaires** et de **messagerie interne**.

L’objectif est de faciliter la **coordination entre les associations et les volontaires**, de centraliser la gestion des activités associatives et de promouvoir l’engagement citoyen.

---

## 🚀 Fonctionnalités Principales
La plateforme comprend les modules suivants :

### 👤 Gestion des Utilisateurs
- Inscription et authentification sécurisée (via **JWT**).
- Rôles distincts : **Administrateur**, **Responsable Association**, **Volontaire**.
- Mise à jour du profil utilisateur et gestion des permissions.

### 🏢 Gestion des Associations & Projets
- Création, édition et suppression d’associations.
- Suivi des projets liés à chaque association.

### 📅 Gestion des Événements
- Création et planification d’événements (par les responsables).
- Inscription des volontaires aux événements.
- Suivi des participants et statistiques de participation.

### 💰 Gestion des Dons
- Enregistrement et suivi des dons financiers ou matériels.
- Historique des dons par projet ou association.

### 💼 Gestion des Offres
- Publication d’offres de bénévolat ou de partenariat.
- Consultation et candidature par les volontaires.

### ⭐ Notation & Commentaires
- Notation des associations, projets et événements.
- Système de commentaires modérés par l’Administrateur.

### 💬 Messagerie Interne
- Échanges de messages entre volontaires, responsables et administrateurs.
- Notifications pour les nouveaux messages et événements.

### 👥 Gestion des Membres
- Suivi des membres actifs dans chaque association.
- Gestion des rôles internes et invitations.

---

## 🧩 Architecture Technique
- **Framework Backend :** Symfony (PHP 8+)
- **Base de Données :** MySQL
- **API d’authentification :** JWT (JSON Web Token)
- **Frontend :** Twig (Symfony) ou intégration avec un framework JS si besoin
- **ORM :** Doctrine

---

## 🧑‍💻 Rôles et Accès

| Rôle                   | Droits Principaux |
|-------------------------|-------------------|
| **Administrateur**      | Gérer utilisateurs, associations, dons, offres, modération des commentaires. |
| **Responsable Association** | Créer/éditer événements, projets, annonces, gérer membres et dons. |
| **Volontaire**          | S’inscrire aux événements, faire des dons, commenter, noter et échanger des messages. |

---

## ⚙️ Installation & Lancement

### 1️⃣ Prérequis
- **PHP** 8.1 ou supérieur
- **Composer** (gestionnaire de dépendances PHP)
- **MySQL** 8+
- **Symfony CLI** (facultatif mais recommandé)

### 2️⃣ Cloner le projet
```bash
git clone https://github.com/votre-repo/plateforme-associations.git
cd plateforme-associations
