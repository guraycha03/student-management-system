
# Student Management System

A web-based Student Management System built with PHP, MySQL (MariaDB), and CSS. This project allows users to add, view, edit, and delete student records through a simple interface.

## Features

- Add new student records
- View student records in a table
- Edit existing student information
- Delete records with confirmation
- Basic form validation
- Database operations using PDO
- Clean and responsive CSS styling

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL / MariaDB
- **Database Access:** PDO
- **Frontend:** HTML and CSS

## Project Structure

| File | Description |
|---|---|
| `add_student.php` | Form for adding student records |
| `config.php` | Database connection using PDO |
| `delete_student.php` | Handles student record deletion |
| `edit_student.php` | Form for editing student records |
| `list_students.php` | Displays student records |
| `style.css` | Styles the user interface |
| `student.sql` | Database schema and exported data |
| `README.md` | Project documentation |

## Getting Started

### Prerequisites

- PHP
- MySQL or MariaDB
- XAMPP or another local PHP server
- A web browser

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/guraycha03/student-management-system.git
```

**2. Set up the project**

For XAMPP, place the project folder inside:

```text
C:\xampp\htdocs\
```

**3. Create the database**

- Open [phpMyAdmin](http://localhost/phpmyadmin).
- Create a database for the project.
- Import the `student.sql` file into the database.

**4. Configure the database connection**

Open `config.php` and update the database host, database name, username, and password according to your local MySQL configuration.

**5. Run the application**

Start Apache and MySQL in the XAMPP Control Panel, then open:

```text
http://localhost/student-management-system/list_students.php
```

## Usage

1. View existing student records.
2. Add new student information.
3. Edit student records when needed.
4. Delete records when necessary.

## Purpose

This project was developed to practice PHP programming, database integration, CRUD operations, and basic web development.

## License

For educational and personal learning purposes.
