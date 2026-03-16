# Student Result Management System

## 📌 Project Description

The **Student Result Management System** is a simple web-based application developed using **HTML, CSS, JavaScript, PHP, and MySQL**.
This project allows users to add student marks, calculate total and percentage automatically, and view student results.

## 🚀 Technologies Used

* HTML
* CSS
* JavaScript
* PHP
* MySQL
* XAMPP Server

## ⚙️ Features

* Add student result details
* Automatic calculation of total marks
* Automatic percentage calculation
* View all student results
* Simple and user-friendly interface

## 📂 Project Structure

```
my_project_srm
│
├── index.html
├── add_result.php
├── view_result.php
├── db.php
└── style.css
```

## 🛠️ Setup Instructions

1. Install XAMPP.
2. Start Apache and MySQL in XAMPP Control Panel.
3. Copy the project folder to:

```
C:\xampp\htdocs\
```

4. Open phpMyAdmin and create a database:

```
student_db
```

5. Create a table using the following SQL query:

```sql
CREATE TABLE results (
id INT AUTO_INCREMENT PRIMARY KEY,
rollno VARCHAR(20),
name VARCHAR(50),
subject1 INT,
subject2 INT,
subject3 INT,
total INT,
percentage FLOAT
);
```

6. Run the project in the browser:

```
http://localhost/my_project_srm
```

## 🎯 Purpose

This project was developed to understand the basic concepts of web development, database connectivity, and CRUD operations.

## 👨‍💻 Author

Nani C
