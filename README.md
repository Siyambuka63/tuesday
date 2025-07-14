# Tuesday

## 📌 Description

This is a Laravel-based web application designed to manage tasks in a Kanban board.

## 🚀 Technologies and Frameworks Used

- **Laravel** 10.x (PHP Framework)
- **PHP** 8.1+
- **MySQL** or **SQLite**
- **Vite** (Frontend asset bundler)
- **Blade** (Laravel’s templating engine)
- **Tailwind CSS** (Frontend styling, optional)
- **Node.js** & **npm** (for asset compilation)
- **Composer** (PHP dependency manager)

## ✅ Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.1
- Composer
- MySQL, unless using SQLite

## 🛠️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/Siyambuka63/tuesday.git
   ```

2. **Navigate to the project directory**
   ```bash
   cd your-laravel-project
   ```

3. **Install dependencies**
   ```bash
   composer install
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
