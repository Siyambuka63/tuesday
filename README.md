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

## 🗂️ Project Structure
Below is an overview of the key directories and files that make up the application:

### 📁 `app/Http`
#### 📂  **Controllers**
* `Controller.php`: Base controller for the application.
* `TaskController.php`: Handles task-related logic such as creating, updating, deleting, and displaying tasks.
* `UserController.php`: Handles user sign up and login

#### 📂 **Middleware**
* `Authenticate.php`: Ensures users are authenticated before accessing certain routes.

### 📁 `app/Models`
* `Task.php`: Represents the tasks table in the database. Includes fields like title, description, status, priority, assigned_to, and role.
* `User.php`: Represents the users table for authentication and user management.

### 📁 `database`
* `database.sqlite`: Database file, if using SQLite.
  
#### 📂 Factories
* `TaskFactory.php`: Generates fake task data.
* `UserFactory`: Generates fake user data.

#### 📂 Migrations
* `2025_06_16_141705_create-tasks-table.php`: Creates the tasks table.

#### 📂 Seeders
* `DatabaseSeeder.php`: Calls other seeders to populate the database.

### 📁 `resources/views`
#### 📂 Components
* `dashboard.blade.php`: Main dashboard layout.
* `task-card.blade.php`: Represents an individual task card on the dashboard.

#### 📂 Partials
* `_addtask.blade.php`: Modal partial for adding new tasks.
* `_header.blade.php`: Partial for header bar.
* `_task.blade.php`:   Partial for displaying a single task.
* `_tasks.blade.php`: Partial for the main section.

#### 📂 Tasks
* `create.blade.php`: Page to create new tasks.
* `index.blade.php`: Displays a list of tasks.
* `show.blade.php`: Shows details of a single task.

#### 📂 Users
* `login.blade.php`: User login form page.
* `signup.blade.php`: User registration form page.

### 📁 `routes`
* `web.php`: Defines all web routes for the application, including task and user-related routes.

### ⚙️ Configuration
* `.env`: Environment configuration file for database and application settings.
* `vite.config.js`: Configuration for Vite asset bundler.
