# FOODMEAL  
**A Modern Restaurant Management Web Platform**  

## 🍽️ Overview  
A full-stack restaurant management system featuring:  
- Customer-facing website with interactive dining features  
- Admin dashboard for complete menu control  

Built with core web technologies to demonstrate PHP/JavaScript integration.

## 🧩 System Components  
| Component | Description | Tech Stack |
|-----------|-------------|------------|
| User Website | Menu browsing & reservations |PHP/HTML5/CSS3/JS |
| Admin Panel | Product/category management | PHP/HTML5/CSS3/JS |
| Database | Menu & order storage | MySQL |

## 🎯 Key Features

### 👨🍳 Customer Interface


**Core Functionalities:**  
- 🍔 Interactive menu with category filtering  
- 🛒 Cart system with quantity controls  
- 📅 Table reservation system  
- 📝 Contact form with PHP validation  

### 🔧 Admin Dashboard (CRUD Operations)


**Management Tools:**  
- ➕ Add/Remove Categories & Menu Items  
- ✏️ Edit Prices/Descriptions in Real-Time  
- 📁 Image Upload System for Dishes  
- 📊 Sales Statistics Dashboard  
- 🔐 Secure Login System with Session Management  

## 🛠️ Technology Stack  

| Layer | Technologies |
|-------|--------------|
| **Frontend** | HTML, CSS, JS |
| **Backend** | PHP 8, MySQLi |
| **Database** | MySQL 5.7+ |

## 🚀 Installation Guide  

### Requirements:
- Web Server (XAMPP/WAMP)
- PHP 7.4+
- MySQL Database

### Setup Steps:
```bash
# Clone Repository
git clone https://github.com/Ob3y1/FOODMEAL.git
cd foodmeal

# Database Setup
mysql -u root -p < database/init.sql

# Configure Connection
nano config/db_config.php
```
```php
// Database Configuration Sample
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'foodmeal');
?>
```

## 📜 License  
**MIT License**  
© 2024 FoodMeal Project. Open-source for educational purposes.

## 📞 Contact  
**Project Maintainer**  
📧 [abymwsy1@gmail.com](mailto:abymwsy1@gmail.com)  
🌐 [Ob3y1](https://github.com/Ob3y1)  

[![PHP Version](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
