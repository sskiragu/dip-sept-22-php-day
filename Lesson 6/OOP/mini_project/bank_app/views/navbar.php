<style>
        /* styles.css */

/* Navigation Menu */
.nav-menu {
  list-style: none;
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.nav-menu li {
  margin: 0 10px;
}

.nav-menu li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.nav-menu li a:hover {
  color: #f00;
}

/* Button Styles */
.button {
  display: inline-block;
  padding: 5px 20px;
  background-color: green;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.button:hover {
  background-color: green;
}

    </style>
<nav>
    <div class="top-nav">
    <ul class="nav-menu">
        <li><a href="../views/home.php">Home</a></li>
        <li><a href="../views/about.php">About</a></li>
        <li><a href="../views/services.php">Services</a></li>
        <li><a href="../views/blog.php">Blog</a></li>
        <li><a href="../views/contacts.php">Contacts</a></li>
        <li><a href="login.php" class="button" style="color: white">Login</a></li>
        <li><a href="register.php" class="button" style="color: white">Register</a></li>
    </ul>
    </div>
</nav>