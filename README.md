# Joint Heal

Joint Heal is a dynamic website developed for physiotherapy clinic. It serves both anonymous visitors and registered users. Public features include general information about services, therapists, and contact options. Authenticated users gain access to appointment booking, medical history, and personalized treatment updates.

The website is built using HTML, CSS, JavaScript, and PHP. It is intended to run locally on a XAMPP environment, leveraging Apache as the web server and MySQL for database functionality. The project includes session-based authentication, secure form handling, and modular PHP scripting.

## Description

This project is a web-based platform for managing and showcasing 
the services of a physiotherapy clinic. It allows both visitors and 
registered users to interact with the site. Visitors can access public 
content such as clinic information, available services, therapist profiles, and contact forms. 

Registered users have access to additional features such as:
- Booking appointments
- Viewing scheduled appointments
- Purchasing clinic treatment plans

The system is designed to reduce manual administrative tasks and 
streamline patient engagement by moving key interactions online. 
This improves accessibility, reduces paperwork, and provides a better 
experience for both patients and clinic staff.

The application is developed using:
- **HTML5** for semantic structure
- **CSS3** for responsive layout and styling
- **JavaScript** for interactive client-side behavior
- **PHP** for server-side logic, session management, and form handling
- **MySQL** for data storage,

-The frontend interactivity is enhanced using    **jQuery** and **AJAX**,enabling dynamic content updates without page reloads


The project runs in a local development environment using **XAMPP**, 
which provides the required Apache and PHP backend.


## Features

- Responsive website layout accessible on desktop and mobile devices
- Public access to clinic information, services, and therapist profiles
- Secure user registration and login system
- Appointment booking system for registered users
- Dashboard to view scheduled appointments
- Online purchase of clinic treatment plans
- Contact form with backend email handling 
- Session-based access control to restrict private pages
- Clean and modular code using PHP includes for maintainability


## Installation

1. Download and install XAMPP
2. Extract the Project File
3. Copy the Project file to the root 'htdocs'
4. Start the APACHE server and the MySQL server
5. Open the phpMyAdmin and import the testing-php.sql file to your database.
6. Now access the project by pasting this link in the browser:
   http://localhost/DoctorsAppointment/Home.php

## Requirements

To run this project locally, ensure the following software and environment 
components are installed:

### System Requirements
- Operating System: Windows, macOS, or Linux
- Local server environment: XAMPP

### Software Requirements
- **Apache** (provided by XAMPP)
- **PHP** ≥ 7.4
- **MySQL**

### Optional Tools
- **phpMyAdmin** (included in XAMPP for database management)
- **Git** (for cloning the repository)
- **Modern web browser** (Chrome, Firefox, Edge, etc.)
- **Code editor** (e.g., Visual Studio Code, Sublime Text)

### Project Files
- The entire project folder should be placed in the XAMPP `htdocs` directory.
- SQL file (`testing-php.sql`) must be imported into MySQL via phpMyAdmin.

## Usage


The Joint Heal website is designed with clear user interaction flows for 
both general visitors and authenticated users. Below are the main usage 
patterns and interaction rules implemented in the application:

### Navigation and User Interface Behavior
- The **navigation bar (navbar)** is visible on all pages except:
  - **Login**
  - **Signup**
  - **Edit Profile**  
  This exclusion helps users focus solely on authentication or profile 
  updates in those views.
  
- The navbar contains links to all major site pages. A prominently 
styled **“Book an Appointment”** button is placed on the homepage to 
emphasize its importance.
-The **footer** is used to render the frontend footer section across all pages, 
ensuring consistent layout and inclusion of closing HTML elements and scripts.
- A **menu button** on the right side of the navbar opens a side panel 
  showing:
  - User login status
  - Quick access to clinic-related information

### Public Page Access
- **Our Services**: Displays all available services offered by the clinic 
with visual content for clarity.
- **Doctors**: Shows a list of clinic doctors along with their departments. 
    Users can browse each doctor’s schedule to book suitable appointments.
- **More** Dropdown: Includes additional informational and functional pages:
  - Pricing (clinic plans)
  - About Us
  - Contact Us
  - FAQ
  - Patient Reviews
  - My Appointments *(visible only to logged-in users)*

### Authenticated User Access
Only **logged-in users** have access to:
- Booking appointments
- Purchasing clinic treatment plans
- Viewing and managing their own appointments
- Accessing their profile and editing it

### Appointment Booking Logic
The booking system enforces the following rules:
- **Time Slot Restriction**:
  - Appointments are fixed to **20-minute intervals** (e.g., 10:00, 10:20, 10:40).
  - Appointments can only be scheduled between **9:00 AM** and **4:40 PM**.
  
- **Day Restriction**:
  - **Saturdays and Sundays are disabled** — users cannot book on weekends.

- **Validation Rules**:
  - The system prevents users from selecting invalid or mismatched 
    combinations of **doctors and departments**.
  - A suitable error message appear for any mismatch or wrong input.

These rules ensure clinic scheduling is both efficient and consistent with 
operational constraints.

## Project Structure

DoctorsAppointment/
├── images/          -> Contains all static image   assets used in the website
├── aboutUs.php      -> Page detailing clinic's background and mission
├── Appointment.php  -> Handles appointment booking interface and logic
├── contactUs.php    -> Contact form and clinic contact information
├── db.php           -> Database connection configuration file
├── Doctors.php      -> Lists doctors with associated departments
├── editProfile.php  -> Allows users to update their profile information
├── faq.php          -> Frequently Asked Questions page
├── footer.php       -> Reusable footer component
├── functionalities.js  -> JavaScript file for dynamic front-end interactions
├── Home.css         -> Primary CSS stylesheet for the website
├── Home.php         -> Homepage with navigation and main layout
├── Login.php        -> User login form and authentication handler
├── Logout.php       -> Handles session termination and logout
├── myAppointments.php -> Displays user's booked appointments (requires login)
├── navbar.php       -> Reusable navigation bar component
├── OurServices.php  -> Shows all available clinic services with visuals
├── PatientReviews.php -> Displays feedback and testimonials from patients
├── Pricing.php      -> Lists treatment plans and pricing options
├── profile.php      -> Displays the user's profile information
├── Signup.php       -> User registration form
├── testing-php.sql  -> SQL script for creating and initializing the database
└── TimeTable.php    -> Shows doctor availability and scheduling



## Configuration


Before running the project, configure the necessary environment 
variables and connection settings:

### 1. Database Configuration
- Open the file `db.php`
- Update the following variables to match your XAMPP setup:

 
In php :

host = "localhost"      usually localhost
user = "root"           'default' XAMPP MySQL user
password = ""           'default' is empty
database = "testing-php" name of your database

## Known
Working on an easier time selection in the appointment file.
## Author / Contact

- Names: Karim Rahal and Sarah Dhainy
- Email: karim.rahal@lau.edu / sarah.dhainy@lau.edu
- GitHub: https://github.com/Karim-rahal

## Acknowledgments

- [jQuery](https://jquery.com/) – Used for DOM manipulation, form validation, 
and AJAX-based submission in FAQ and Contact Us sections.
- AJAX – Implemented using jQuery to handle asynchronous form submissions 
without page reloads.

## Referencing

During the development of this project, various AI tools and YouTube tutorials were referenced to support learning and problem-solving. These resources were used for:

- Understanding form restrictions and validation techniques in HTML
- Debugging server-side issues in PHP and MySQL
- Exploring advanced CSS styling and layout concepts
- Reviewing multiple form implementations to design custom-tailored solutions

No complete or direct code was copied from any source. All implementations were written from scratch after understanding the relevant concepts. External assistance was sought only for topics that are not commonly known or require best practices.
