# Tuesday

## 📌 Description

This is a Laravel-based web application designed to manage tasks in a Kanban board.
It allows users to create, edit, delete, and view tasks with features such as assigning roles, setting priorities, and tracking statuses.

## 🚀 Technologies and Frameworks Used

- **Laravel** 10.x (PHP Framework for back-end dev)
- **PHP** 8.1+ (required for Laravel 10)
- **MySQL** or **SQLite** (DB options for tasks & user data.)
- **Vite** (Frontend asset bundler for compiling styles and JS)
- **Blade** (Laravel’s templating engine for views)
- **Tailwind CSS** (Frontend styling framework, optional)
- **Node.js** & **npm** (for asset compilation & front-end dependencies)
- **Composer** (PHP dependency manager)

## ✅ Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.1
- Composer
- MySQL, unless using SQLite
- Node.js & npm

## 🛠️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/Siyambuka63/tuesday.git
   ```

2. **Navigate to the project directory**
   ```bash
   cd tuesday
   ```

3. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

4. **Create a copy of the `.env` file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Set up the database**
   * If using SQLite, in the database folder create a file `database.sqlite`
   
   **OR**
     
   * Create a database using MySQL, then open .env and update your DB credentials:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```
     
8. **Run database migrations**
   ```bash
   php artisan migrate
   ```

9. **Seed the database**
   ```bash
   php artisan db:seed
   ```

10. **Run the development server**
    ```bash
    php artisan serve
    ```

## 👥 How to Use the Application
### 🧾 User Registration
* Visit `/register` to create a new user account.
* You’ll need to enter your name, email, and a secure password.

### 🔐 Login
* Go to `/login` to sign into the platform.

### 📝 Tasks
After logging in, you can:
* Create new tasks (title, description, status, assignee, priority, due date and role)
* Edit or delete your tasks
* View your tasks

11. **🗂️ Project Structure**
Key Files and Directories

**Controllers**
* TaskController.php: Handles task-related logic such as creating, updating, deleting, and displaying tasks.
* Controller.php: Base controller for the application.

**Models**
* Task.php: Represents the tasks table in the database. Includes fields like title, description, status, priority, assigned_to, and role.
* User.php: Represents the users table for authentication and user management.

**Views**
* create.blade.php: Form for creating new tasks.
* index.blade.php: Displays a list of tasks.
* show.blade.php: Shows details of a single task.
* task-card.blade.php: Displays individual task cards.
* _addtask.blade.php: Partial view for adding tasks.
* _tasks.blade.php: Partial view for listing tasks.

**Database**
* 2025_06_16_141705_create-tasks-table.php: Creates the tasks table.
* 2025_07_05_212946_add_role_to_tasks_table.php: Adds the role column to the tasks table.
* database.sqlite: SQLite database file (if using SQLite).

**Configuration**
* .env: Environment configuration file for database and application settings.
* vite.config.js: Configuration for Vite asset bundler.
