# Registration Form and CGPA Calculator

This project is a simple web application built using *PHP* that allows users to register and calculate their CGPA. It is designed to demonstrate backend form handling, data validation, and basic computation in PHP.

---

## Features

- *Registration Form*
  - User-friendly registration form.
  - Input validation for all fields (e.g., name, email, password).

- *CGPA Calculation*
  - Allows users to input grades for multiple courses.
  - Automatically calculates and displays the CGPA.

- *Responsive Design*
  - Optimized for desktop, tablet, and mobile devices.

---

## Technologies Used

- *Frontend*: HTML, CSS
- *Backend*: PHP
- *Database*: MySQL (for storing user registration data)

---

## Installation

To set up the project locally, follow these steps:

1. Clone the repository:

   bash
   git clone https://github.com/yourusername/registration-cgpa-calculator.git
   

2. Move into the project directory:

   bash
   cd registration-cgpa-calculator
   

3. Set up the database:

   - Import the database.sql file into your MySQL server.
   - Update the database connection details in the config.php file.

4. Start a local PHP server:

   bash
   php -S localhost:8000
   

5. Open your browser and navigate to:

   
   http://localhost:8000
   

---

## File Structure

plaintext
registration-cgpa-calculator/
├── index.php          # Main landing page
├── register.php       # Registration form handling
├── cgpa.php           # CGPA calculation page
├── config.php         # Database configuration file
├── assets/            # Contains CSS and images
│   ├── style.css      # Styling for the application
├── database.sql       # Database schema
└── README.md          # Project documentation


---

## Usage

1. Navigate to the *Registration Form*:
   - Fill out the registration form with valid details.
   - Submit the form to save the data into the database.

2. Navigate to the *CGPA Calculator*:
   - Enter grades for your courses.
   - Submit to calculate and view your CGPA.

---

## Screenshots

### Registration Form
![Registration Form Screenshot](assets/registration-form-screenshot.png)

### CGPA Calculator
![CGPA Calculator Screenshot](assets/cgpa-calculator-screenshot.png)

---

## Contributing

Feel free to fork this repository and submit pull requests. All contributions are welcome!

---
