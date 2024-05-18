# phpProjects

# PHP Registration Form with Data Storage and Retrieval

This repository contains the code for a PHP registration form that allows users to submit their information, which is then stored in a database. Users can also view the submitted data by clicking the "View Submitted Data" button and the data will be displayed on the tabular format with a unique registration number for every registration.

## Features

- Registration Form: Users can fill out a registration form with fields for name, gender, date of birth, address, mobile number, email, education qualification, and ID proof details.
- Data Storage: Submitted data is stored in a MySQL database for future reference.
- Data Retrieval: Users can view the submitted data by clicking the "View Submitted Data" button, which displays the stored information in a tabular format.

## Setup Instructions

1. Install XAMPP: If you haven't already, download and install [XAMPP](https://www.apachefriends.org/index.html) or a similar local server environment that includes Apache, MySQL, and PHP.

2. Clone the Repository: Clone this repository to your local machine using Git.

    ```bash
    git clone https://github.com/yourusername/php-registration-form.git
    ```

3. Create Database: Create a database in phpMyAdmin (in case of XAMPP) or similar environment and add the number of sections; name, gender, dob, address, number, email, edu_quali, doc_name, doc_no as in the registration form.

4. Configure Database Connection: Open the `db_connect.php` file and update the database connection details (host, username, password, database name) according to your MySQL setup.

5. Start Local Server: Start the Apache and MySQL servers from your XAMPP control panel or similar software.

6. Run the Application: Navigate to the project directory in your web browser (typically `http://localhost/php-registration-form/`) to access the registration form.

7. Register: Fill out the registration form and submit your details. The data will be stored in the database.

8. View Submitted Data: Click the "View Submitted Data" button to see the stored information in a tabular format.


## File Structure

- `application.php`: Contains the HTML and PHP code for the registration form.
- `styles.css`: Contains CSS styles for styling the registration form and data table.
- `register.php`: Handles form submission and stores data in the database.
- `view_data.php`: Retrieves and displays the submitted data from the database.
- `db_connect.php`: Establishes a connection to the MySQL database.

## Technologies Used

- HTML: For structuring the web page.
- CSS: For styling the registration form and data table.
- PHP: For server-side form handling and database interaction.
- MySQL: For storing the submitted data.

## Contributing

Contributions are welcome! If you have any suggestions, improvements, or bug fixes, feel free to open an issue or submit a pull request.
