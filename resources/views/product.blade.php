<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Angkasa Shoes</title>
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

        /* Products Section */
        .products {
            text-align: center;
            margin: 50px auto;
            padding: 0 20px;
        }

        .products h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .product-card p {
            font-size: 0.9rem;
            color: #666;
            margin: 5px 0;
        }

        .product-card .price {
            font-size: 1rem;
            color: #28a745;
            font-weight: bold;
            margin: 5px 0;
        }

        .product-card .date {
            font-size: 0.8rem;
            color: #999;
            margin: 5px 0;
        }

        .product-card .buy-btn {
            display: inline-block;
            margin: 10px 0 15px;
            background: #0078FF;
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .product-card .buy-btn:hover {
            background: #0056b3;
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

    <!-- Products Section -->
    <section class="products">
        <h2>Products</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="img/sneakerscasual.jpg" alt="Sneakers Kasual">
                <h3>Sneakers Kasual</h3>
                <p>Fox | Other</p>
                <p class="price">$400.0</p>
                <p class="date">2024-12-19</p>
                <a href="#" class="buy-btn">Buy</a>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="img/SOVELLA Rachel Boots.jpg" alt="SOVELLA Rachel Boots">
                <h3>SOVELLA Rachel Boots</h3>
                <p>SOVELLA | Shoes</p>
                <p class="price">$400.0</p>
                <p class="date">2024-12-18</p>
                <a href="#" class="buy-btn">Buy</a>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="img/Vantela.jpg" alt="Ventela Moe">
                <h3>Ventela Moe</h3>
                <p>Ventela | Shoes</p>
                <p class="price">$200.0</p>
                <p class="date">2024-12-18</p>
                <a href="#" class="buy-btn">Buy</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Angkasa Shoes. All Rights Reserved.</p>
    </footer>
</body>
</html>
