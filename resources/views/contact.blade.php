<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Angkasa Shoes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        /* Navbar */
        header {
            background: #0078FF;
            color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #FFD700;
        }

        /* Contact Section */
        .contact-section {
            padding: 50px 20px;
            max-width: 1200px;
            margin: 20px auto;
            background: linear-gradient(to right, #D9E6FF, #FFFFFF);
            border-radius: 8px;
        }

        .contact-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-section p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-width: 600px;
        }

        .contact-form button {
            background: #FFD700;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #FFC107;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background: #0078FF;
            color: #fff;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">Angkasa Shoes</div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <h1>Contact Us</h1>
        <p>Have any questions or feedback? We'd love to hear from you! Please fill out the form below and we'll get in touch with you as soon as possible.</p>

        <!-- Contact Form -->
        <form class="contact-form" action="/submit-contact" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Angkasa Shoes. All Rights Reserved.</p>
    </footer>
</body>
</html>
