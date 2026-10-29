Student Management System

A web-based Student Management System built with PHP, MySQL (MariaDB), and CSS. The project allows users to manage student records through a simple interface, with features for adding, viewing, editing, and deleting records.

Features

- Add Students — Enter and save student details.
- View Students — Display student records in a structured table.
- Edit Records — Update existing student information.
- Delete Records — Remove student records with a confirmation step.
- Form Validation — Apply basic validation to student inputs.
- Database Integration — Use PDO for database operations.
- Responsive Interface — Provide a clean layout with CSS styling.

Tech Stack

- Backend: PHP
- Database: MySQL / MariaDB
- Database Access: PDO
- Frontend: HTML and CSS

Project Structure

File| Description
"add_student.php"| Form for adding student records
"config.php"| Database connection using PDO
"delete_student.php"| Handles student record deletion
"edit_student.php"| Form for editing student records
"list_students.php"| Displays the list of student records
"style.css"| Styles the user interface
"student.sql"| Database schema and exported data
"README.md"| Project documentation
Getting Started

Prerequisites

Make sure the following are installed:

- PHP
- MySQL or MariaDB
- A local development environment such as XAMPP
- A web browser

Installation

1. Clone the repository
   
   git clone https://github.com/guraycha03/student-management-system.git

2. Move the project into your local server directory
   
   For XAMPP, place the project folder inside:
   
   C:\xampp\htdocs\

3. Create the database
   
   - Open phpMyAdmin at "http://localhost/phpmyadmin".
   - Create a database for the project.
   - Import the "student.sql" file into the database.

4. Configure the database connection
   
   Open "config.php" and update the database host, database name, username, and password to match your local MySQL configuration.

5. Run the application
   
   Start Apache and MySQL through the XAMPP Control Panel, then visit:
   
   http://localhost/student-management-system/list_students.php

Usage

Once the application is running, use the interface to:

1. View the list of student records.
2. Add new student information.
3. Edit existing records.
4. Delete records when necessary.

Purpose

This project was developed to practice PHP programming, relational database integration, CRUD operations, and basic web interface development.

License

This project is available for educational and personal learning purposes.
