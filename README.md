# User-Status-web-Page
This is a simple web-based CRUD project using PHP and MySQL. Users can be added through a form, and their status can be toggled (0 or 1) directly from a dynamic table using JavaScript (AJAX)

# PHP User Status Toggle Project

This project is a simple PHP-MySQL web app that allows you to:
- Add users with a name and age
- View users in a dynamic HTML table
- Toggle each user's status (0/1) using a button, without reloading the page

---

## 🔧 Technologies Used

- **HTML**: Frontend structure
- **CSS**: (optional) Basic styling
- **JavaScript (Fetch API)**: For toggling status using AJAX
- **PHP**: Backend logic
- **MySQL**: Database to store user data

---

## 📷 Project Screenshots

<img width="1911" height="908" alt="لقطة شاشة 2025-07-12 011951" src="https://github.com/user-attachments/assets/b01e9e61-beca-4ee7-bd10-a1f2bbd9ea01" />

<img width="1605" height="558" alt="لقطة شاشة 2025-07-12 011927" src="https://github.com/user-attachments/assets/36990196-4f5d-4cd2-8959-9ae6f4bdb76c" />

Result:
<img width="1914" height="959" alt="لقطة شاشة 2025-07-12 011902" src="https://github.com/user-attachments/assets/2c6b25c4-ccb6-4f82-aa5b-5d1f68436d70" />


How to Run Locally

  1  Install XAMPP

   2 Copy the project folder to:
    C:\xampp\htdocs\user_toggle_app

   3 Start Apache and MySQL from XAMPP Control Panel

   4 Open phpMyAdmin and run the SQL below to create your database
   CREATE DATABASE user_data;

USE user_data;

CREATE TABLE users1 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  status TINYINT(1) DEFAULT 0
);

5 Open the app in your browser:
http://localhost/user_toggle_app/

🧠 Features

    Add new users

    View all users in real time

    Toggle status (Active/Inactive) using AJAX

    No page reload needed

/////////////////////////

    Created by Hashim Hassan Althumali 
