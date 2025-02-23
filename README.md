# Applicant Management System

## Project Description
The **Applicant Management System** is a web application built with Laravel that enables users to manage applicant records efficiently. The application includes features like creating, reading, updating, and deleting applicant records, tagging applicants with specific statuses, and authentication to ensure secure access.

### **Features**
1. **Applicant Management**:
   - Create, Read, Update, and Delete (CRUD) functionality for applicant records.
2. **Applicant Status Tags**:
   - Assign the following statuses to applicants:
     - Unviewed
     - Interviewed
     - Hired
     - Onboarding
     - Resign
3. **Authentication**:
   - User authentication ensures secure access to the system.

---

## How to Run the Project Locally

### **Prerequisites**
1. **XAMPP or WAMP**:
   - Install XAMPP or WAMP to set up a local web server.
2. **Composer**:
   - Ensure [Composer](https://getcomposer.org/) is installed for dependency management.
3. **Node.js**:
   - Install [Node.js](https://nodejs.org/) for frontend asset compilation.
4. **Git** (optional):
   - Install Git to clone the repository.

### **Steps to Set Up the Project**

1. **Clone the Repository**:
   If you’re using Git, clone the repository:
   ```bash
   git clone https://github.com/your-repository-url/applicant-management.git
   ```
   
   Alternatively, download the project ZIP file and extract it.

2. **Navigate to the Project Directory**:
   ```bash
   cd applicant-management
   ```

3. **Install Dependencies**:
   Use Composer to install PHP dependencies:
   ```bash
   composer install
   ```
   
   Install Node.js dependencies:
   ```bash
   npm install
   ```

4. **Set Up the Environment File**:
   Create a `.env` file by copying `.env.example`:
   ```bash
   cp .env.example .env
   ```
   
   Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**:
   Create the required database tables:
   ```bash
   php artisan migrate
   ```

7. **Seed the Database (Optional)**:
   Add dummy data to the database (optional):
   ```bash
   php artisan db:seed
   ```

8. **Compile Frontend Assets**:
   ```bash
   npm run dev
   ```

9. **Run the Application**:
   Start the development server:
   ```bash
   php artisan serve
   ```
   
   Open your browser and visit:
   ```
   http://127.0.0.1:8000
   ```

---

## **Project Functionalities**

### **Authentication**
- Users must log in to access the application.
- Login and registration functionality is provided by Laravel Breeze.

### **Dashboard**
- View a list of all applicants.

### **Applicant Management**
1. **Create**: Add a new applicant with their name, email, phone number, resume link, and status.
2. **Read**: View a list of all applicants with their details.
3. **Update**: Edit an applicant’s information and status.
4. **Delete**: Remove an applicant from the system.

### **Applicant Status Tags**
- Tag applicants with specific statuses:
  - Unviewed
  - Interviewed
  - Hired
  - Onboarding
  - Resign

### **Success and Error Messages**
- The system displays appropriate success or error messages for each action.

---

## **Project Purpose**
This project was created to:
- Provide a simple and efficient system for managing applicant records.
- Demonstrate the use of Laravel’s features, including Blade templates and authentication.
- Serve as a foundational project for learning and building more advanced web applications.

---

## **Technical Stack**
1. **Backend**: Laravel 10 (PHP Framework)
2. **Frontend**: Blade Templates & Alpine.js
3. **Database**: MySQL
4. **Authentication**: Laravel Breeze
5. **Styling**: TailwindCSS
6. **Server Requirements**:
   - PHP >= 8.1
   - MySQL >= 5.7

---

## **Contact**
For any questions or feedback, please contact:
- **Email**: enguerra.02012001@gmail.com/franco.enguerra@gmail.com/franklin.neksjob@gmail.com
- **GitHub**: https://github.com/franco02012001

---

**Enjoy managing your applicants effortlessly!**

