# Rooli - Your Ultimate Mobility Solution

Welcome to Rooli, the premier platform for seamless vehicle rentals! Whether you're looking for a car, a motorbike, or a scooter, we have a diverse fleet to meet your needs. This project includes a user-friendly web application that allows customers to rent vehicles effortlessly.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- **User Registration and Authentication**: Secure registration and login system.
- **Vehicle Browsing**: View and filter available cars, motorbikes, and scooters.
- **Reservation System**: Rent vehicles with a few clicks.
- **Email Notifications**: Confirmation emails sent upon successful reservation.
- **Timer for Reservations**: Automatic redirection after a specified time period.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Technologies Used

- **Frontend**:
  - HTML, CSS
  - JavaScript
- **Backend**:
  - PHP
  - MySQL
- **Libraries**:
  - jQuery (optional)
- **Others**:
  - Email SMTP (for email notifications)

## Installation

### Prerequisites

- Web server (e.g., Apache)
- PHP (7.0 or higher)
- MySQL
- Composer (optional for dependency management)

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/rooli.git
   cd rooli
   ```
2. **Set up the database:**

   - Create a MySQL database.
   - Import the provided SQL file (`database/rooli.sql`) to set up the necessary tables.

3. **Configure the database connection:**

   - Edit `config/database.php` and update the database credentials.

4. **Start the web server:**

   - Make sure your web server is running and serving the project directory.

5. **Open your browser and navigate to:**

   ```url
   http://localhost/rooli
   ```
## Usage

To make use of this project, adhere to the following steps:

1. **Registration and Login:**
    - Visit the registration page to establish a new account.
    - Log in using your credentials.

2. **Browsing and Renting:**
    - Navigate to the services page to peruse available vehicles.
    - Select a vehicle and proceed to the confirmation page to finalize your rental.

3. **Admin Panel (if applicable):**
    - Access the admin panel to oversee vehicles, users, and reservations.

## Project Structure

```plaintext
rooli/
│
├── components/
│   ├── images/
│   ├── icons/
│   └── videos/
│
├── config/
│   └── database.php
│
├── pages/
│   ├── OurServices.php
│   ├── Register.php
│   ├── SignIn.php
│   ├── confirmation.php
│   ├── signout.php
│   └── motobikes.php
│
├── scripts/
│   └── ReservationDB.php
│
├── styles/
│   ├── index.css
│   ├── navbar.css
│   ├── footer.css
│   └── carstyle.css
│
├── index.php
└── README.md
```
## Contributing

We highly appreciate contributions! To contribute, follow these steps:

1. **Fork the repository.**
2. **Create a new branch** (`git checkout -b feature-branch`).
3. **Implement your changes.**
4. **Commit your modifications** (`git commit -m 'Add some feature'`).
5. **Push to the branch** (`git push origin feature-branch`).
6. **Submit a new Pull Request.**

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For inquiries or feedback, feel free to reach out to us at:

- **Email:** rooli@gmail.com
- **Phone:** +216 28 042 451


