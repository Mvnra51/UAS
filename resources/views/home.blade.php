<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa Shoes</title>
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

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(to right, #D9E6FF, #FFFFFF);
            padding: 50px 20px;
            max-width: 1200px;
            margin: 20px auto;
            border-radius: 8px;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #555;
        }

        .btn-primary {
            background: #FFD700;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: #FFC107;
        }

        .hero-image img {
            max-width: 300px;
            border-radius: 10px;
        }

        /* Produk Unggulan */
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
            height: 200px;
            object-fit: cover;
        }

        .product-card h3 {
            padding: 15px;
            font-size: 1.2rem;
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Angkasa Shoes</h1>
            <p>Temukan produk terbaik dengan harga terjangkau dan kualitas tinggi.</p>
            <a href="#" class="btn-primary">Lihat Produk Kami</a>
        </div>
        <div class="hero-image">
            <img src="img/nav.png" alt="Shoes Illustration">
        </div>
    </section>

 <!-- Produk Unggulan --> 
<section class="products">
    <h2>Produk Unggulan</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="img/sneakersporty.png" alt="Sepatu Putih">
            <h3>Sneakers Sporty</h3>
            <p>Sneakers nyaman untuk aktivitas olahraga dan sehari-hari. Tersedia dalam berbagai ukuran.</p>
            <button onclick="showDetails('Sneakers Sporty')">Detail</button>
        </div>
        <div class="product-card">
            <img src="img/cardinalaidan.jpg" alt="Sepatu Formal">
            <h3>Sepatu Formal</h3>
            <p>Sepatu elegan yang cocok untuk acara resmi dan pertemuan bisnis.</p>
            <button onclick="showDetails('Sepatu Formal')">Detail</button>
        </div>
        <div class="product-card">
            <img src="img/casualshoes.jpg" alt="Sepatu Santai">
            <h3>Sepatu Santai</h3>
            <p>Sepatu kasual yang ringan dan nyaman, cocok untuk bersantai atau berjalan-jalan.</p>
            <button onclick="showDetails('Sepatu Santai')">Detail</button>
        </div>
    </div>
</section>

<script>
    // Fungsi untuk menampilkan detail (bisa disesuaikan dengan kebutuhan)
    function showDetails(productName) {
        alert(`Detail untuk: ${productName}`);
    }
</script>



    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Angkasa Shoes. All Rights Reserved.</p>
    </footer>
</body>
</html>
