# 🔐 PHP Login & Signup System

This is a secure and beginner-friendly **Login and Signup Authentication System** built using **PHP**, **MySQL**, **HTML**, and **CSS**, developed as **Task 2** of my **Main Flow Internship**. It allows users to register, log in, and access a protected dashboard with proper session management.

---

## 📁 Project Structure

login_signup_system/
├── index.php # Login Page
├── register.php # Signup Page
├── dashboard.php # Protected dashboard after login
├── logout.php # Ends user session
├── config.php # Database connection setup
├── style.css # Styling for login/signup forms
└── users.sql # SQL file to create 'users' table


---

## 💡 Features

- ✅ User registration with input validation
- ✅ Secure password hashing using PHP’s `password_hash()`
- ✅ Login authentication with session control
- ✅ Protected dashboard accessible after login
- ✅ Clean and simple UI with CSS styling
- ✅ Logout functionality to destroy session
- ✅ Local development with XAMPP and phpMyAdmin

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: MySQL (phpMyAdmin)  
- **Local Server**: XAMPP (Apache + MySQL)  
- **Editor**: Visual Studio Code  
- **Version Control**: Git & GitHub

---

## 🚀 How to Run This Project

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/index.html)
2. Place the project folder in:
3. Open **XAMPP Control Panel**, start both:
- ✅ Apache
- ✅ MySQL
4. Go to your browser and open:
5. Create a new database:
6. Import the file `users.sql` from the project folder to create the `users` table
7. Now go to:
8. Try registering a new user and logging in — it's ready to go!

---

## 🧾 Database Schema (users.sql)

```sql
CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(100) NOT NULL UNIQUE,
 email VARCHAR(100) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL
);

🎯 Main Flow Internship – Task 2
GitHub: CodeWizard123-cloud

🌟 Connect With Me
If you liked this project or learned something, feel free to star ⭐ the repo and drop your feedback
