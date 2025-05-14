# movie_ticket

 Online Movie Ticket Booking System

This is a web-based PHP application that allows users to view and book movie tickets online. It provides admin and user interfaces for managing movie listings, schedules, and bookings.

---

 Features

 User:

* Register and log in
* View movie listings with showtimes and poster images
* Book tickets for available shows
* View booking history

 Admin:

* Add, update, and delete movies
* Set and manage showtimes
* View all user bookings

---

 Tech Stack

| Technology | Description              |
| ---------- | ------------------------ |
| PHP        | Server-side scripting    |
| MySQL      | Database management      |
| HTML/CSS   | Front-end design         |
| XAMPP      | Local development server |

---

 How to Run Locally

1. **Clone the repository**

```bash
git clone https://github.com/YOUR-USERNAME/Online-Movie-Ticket-Booking-System.git
```

2. **Move the folder to XAMPP's `htdocs`**

```bash
C:\xampp\htdocs\
```

3. **Start Apache and MySQL** via XAMPP control panel

4. **Create the database**

   * Go to [localhost/phpmyadmin](http://localhost/phpmyadmin)
   * Create a new database named `db_movie`
   * Import the SQL file (often named `movie.sql` or found in the project folder)

5. **Configure database connection**

   * Open `config.php`
   * Update the `$user` and `$pass` with your local MySQL credentials if needed

6. **Visit the app in browser**

   * [http://localhost/Online-Movie-Ticket-Booking-System](http://localhost/Online-Movie-Ticket-Booking-System)

---

 Author

* SHUBHI AGNIHOTRI

---

 License

This project is for educational purposes and is freely available to modify and improve.

---


