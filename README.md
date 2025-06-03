# Flight Tracker

## Overview
The Flight Tracker is a web application designed to help users track and manage their commercial aviation flights. Users can add new flights, view a list of their flights, and delete flights they no longer wish to keep in their records.

## Quick Start
Install dependencies and launch a local server with PHP's built-in server:

```bash
composer install
php -S localhost:8000 -t public
```

Open <http://localhost:8000> in your browser to see the app.


## Project Structure
```
flight-tracker
├── public
│   ├── index.php          # Entry point of the application
│   └── css
│       └── styles.css     # Styles for the website
├── src
│   ├── controllers
│   │   └── FlightController.php  # Handles flight-related actions
│   ├── models
│   │   └── Flight.php     # Represents a flight entity
│   ├── views
│       └── flights
│           └── index.php  # Displays the list of flights
├── config
│   └── database.php       # Database connection configuration
├── vendor                 # Composer dependencies
├── composer.json          # Composer configuration
└── README.md              # Project documentation
```

## Setup Instructions
1. **Clone the Repository**
   ```
   git clone https://github.com/yourusername/flight-tracker.git
   cd flight-tracker
   ```

2. **Install Dependencies**
   Make sure you have Composer installed. Run the following command to install the project dependencies:
   ```
   composer install
   ```

3. **Configure Environment**
   Copy the provided `.env.example` file to `.env` and update the values with
   your database credentials:
   ```bash
   cp .env.example .env
   ```
   The application reads the following environment variables:
   - `DB_HOST` – database server hostname
   - `DB_NAME` – name of the database
   - `DB_USER` – database user
   - `DB_PASSWORD` – database password

4. **Run the Application**
   You can use a local server like XAMPP or MAMP to run the application. Place the project in the server's root directory and navigate to `http://localhost/flight-tracker/public/index.php` in your web browser.

## Environment Variables
The application expects the following variables to be set, either in your shell
environment or in a `.env` file:

- `DB_HOST` – database server hostname
- `DB_NAME` – name of the database
- `DB_USER` – database user
- `DB_PASSWORD` – database password

## Usage
- **View Flights**: The application will display a list of all flights you have added.
- **Add Flight**: You can add a new flight through the provided form (to be implemented in the view).
- **Delete Flight**: Each flight will have an option to delete it from the records.

## Contributing
Feel free to submit issues or pull requests if you would like to contribute to the project.

