<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Angkasa Shoes</title>
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

        /* About Section */
        .about-section {
            padding: 50px 20px;
            max-width: 1200px;
            margin: 20px auto;
            background: linear-gradient(to right, #D9E6FF, #FFFFFF);
            border-radius: 8px;
        }

        .about-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .about-section p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-section img {
            max-width: 300px;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
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

    <!-- About Section -->
    <section class="about-section">
        <h1>About Us</h1>
        <p>Welcome to Angkasa Shoes, where we offer high-quality shoes for every occasion. Our mission is to provide stylish, comfortable, and affordable footwear for all our customers. With years of experience, we are committed to offering the best products and excellent customer service.</p>
        <p>At Angkasa Shoes, we believe in creating shoes that not only look great but also provide the comfort and durability you need for everyday wear. From casual sneakers to formal shoes, our collection is designed to cater to all your footwear needs.</p>
        <img src="img/about-us.jpg" alt="Angkasa Shoes Store">
        <p>We are dedicated to making your shopping experience enjoyable, with an easy-to-use website and quick shipping. Thank you for choosing Angkasa Shoes!</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Angkasa Shoes. All Rights Reserved.</p>
    </footer>
</body>
</html>
