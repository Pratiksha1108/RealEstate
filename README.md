
# Real Estate System

## Project Overview
The **Real Estate System** is a web platform designed to help users buy, sell, or rent properties. It provides a range of services, including property search, listing, and management tools, allowing users to seamlessly interact with properties based on their requirements.

## Features
- **Property Search:** Users can search for properties based on various filters such as location, price range, property type, etc.
- **Property Listings:** Property owners can list their properties for sale or rent with detailed descriptions and images.
- **User Management:** Users can sign up, log in, and manage their profiles. Property owners and agents can manage their listings.
- **Responsive Design:** The system is built with a responsive design, making it accessible from both desktop and mobile devices.

## Technologies Used
- **Frontend:**
  - HTML
  - CSS
  - JavaScript
- **Backend:**
  - PHP
  - Postgres SQL (for database management)

## Screenshots

### Home Page:
<img src="https://github.com/user-attachments/assets/09dee147-4b80-4ef4-b57d-a2e637dfb35f" alt="Home Page" width="600"/>

### Property Listings:
<img src="https://github.com/user-attachments/assets/dd126b5e-d5c1-4024-920b-07300c7fa56a" alt="Property Listings" width="600"/>

### Property Details:
<img src="https://github.com/user-attachments/assets/83806175-1f03-444f-a155-6fca9bc38fb4" alt="Property Details" width="600"/>

### Add Property:
<img src="https://github.com/user-attachments/assets/847d663b-ade1-4708-8dfb-9c32f90b61ee" alt="Add Property" width="600"/>

## Installation

### Prerequisites
- A web server such as **Apache** or **Nginx**
- **PHP** installed on the server
- A database like **Postgres** 

### Setup Instructions
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/real-estate-system.git
   ```
2. Navigate to the project directory:
   ```bash
   cd real-estate-system
   ```
3. Import the database:
   - Create a database in MySQL and import the provided `.sql` file located in the `database/` folder.
   ```bash
   mysql -u username -p database_name < database/realestate.sql
   ```
4. Configure the database connection:
   - Open the `config.php` file and set your database connection details:
   ```php
   $host = 'localhost';
   $db = 'realestate';
   $user = 'your-username';
   $password = 'your-password';
   ```
5. Start the server and access the project in your browser:
   ```bash
   php -S localhost:8000
   ```

## Usage
1. Open the application in your browser at `http://localhost:8000`.
2. Register or log in to access property listing features.
3. Explore the property search, view detailed property information, and manage property listings.

## Contributing
Contributions are welcome! Please follow these steps to contribute:
1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add YourFeature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a Pull Request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For any inquiries, please contact me at: 
- Email: pratikshakatkade1108@gmail.com
```

