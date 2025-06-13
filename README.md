# 📧 PHP Mailer - Secure Email Sending Form  

A simple and secure PHP-based mail sending form using **PHPMailer**. Perfect for contact forms with SMTP support.

## 🛠 Prerequisites  
- [XAMPP](https://www.apachefriends.org/download.html) (Windows/Linux/macOS)
- PHP ≥ 7.0 (included in XAMPP)
- SMTP credentials (Gmail/Outlook/etc.)

## 🚀 Quick Setup

### 1. Install XAMPP

# Download from:
https://www.apachefriends.org/download.html
2. Start Services
Open XAMPP Control Panel

Start these services:


[✔] Apache
[✔] MySQL (optional)
3. Deploy Project
Move the project folder to XAMPP's htdocs:


# Windows:
C:\xampp\htdocs\your-mailer-folder\

# Linux/macOS:
/opt/lampp/htdocs/your-mailer-folder/
4. Configure SMTP
Edit config.php:

php
// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your@gmail.com');
define('SMTP_PASS', 'your-password');
5. Access the Form
Open in browser:

http
http://localhost/your-mailer-folder/
🔧 Features
Feature	Description
SMTP Support	Works with Gmail, Outlook, etc.
Spam Protection	Honeypot field + reCAPTCHA optional
File Uploads	With MIME type validation
❓ Troubleshooting
# Apache won't start?
1. Check for port conflicts (Skype/TeamViewer)
2. Run XAMPP as Administrator

# Emails not sending?
php
// Enable debug mode in config.php:
define('DEBUG_MODE', true);

# 📜 License
MIT License - Free for commercial use.


