<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishingPro Store - Perlengkapan Mancing Eksklusif</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1e3c72;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo::before {
            content: "🎣";
            font-size: 2rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 25px;
        }

        .nav-links a:hover {
            color: #1e3c72;
            background: rgba(30, 60, 114, 0.1);
        }

        .cart-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
            font-size: 1.5rem;
            color: #1e3c72;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff4757;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #1e3c72;
            color: white;
        }

        .btn-primary:hover {
            background: #0f2142;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: #1e3c72;
            border: 2px solid #1e3c72;
        }

        .btn-secondary:hover {
            background: #1e3c72;
            color: white;
        }

        .btn-add-cart {
            background: #27ae60;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-add-cart:hover {
            background: #219a52;
        }

        /* Hero Section */
        .hero {
            padding: 4rem 0;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .search-bar {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            background: white;
            border-radius: 50px;
            padding: 0.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .search-bar input {
            flex: 1;
            border: none;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            border-radius: 50px;
            outline: none;
        }

        .search-bar button {
            background: #1e3c72;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            background: white;
            margin: 2rem 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .content-tabs {
            display: flex;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .tab {
            flex: 1;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .tab.active {
            background: white;
            border-bottom-color: #1e3c72;
            color: #1e3c72;
        }

        .tab-content {
            padding: 2rem;
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Product Cards */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            border: 1px solid #eee;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .product-image {
            height: auto;
            background: linear-gradient(45deg, #667eea, #764ba2);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff4757;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .product-badge.premium {
            background: #ffa502;
        }

        .product-badge.exclusive {
            background: #7bed9f;
            color: #333;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .product-brand {
            color: #1e3c72;
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .product-description {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .price-current {
            font-size: 1.3rem;
            font-weight: bold;
            color: #27ae60;
        }

        .price-original {
            text-decoration: line-through;
            color: #999;
            font-size: 1rem;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #ffa500;
            margin-bottom: 1rem;
        }


        /* Category Filter */
        .category-filter {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border: 2px solid #1e3c72;
            background: transparent;
            color: #1e3c72;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: #1e3c72;
            color: white;
        }

        /* Featured Section */
        .featured-section {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            text-align: center;
        }

        .featured-title {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .featured-description {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        /* Cart Section */
        .cart-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .cart-item-image {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .cart-item-info {
            flex: 1;
        }

        .cart-item-title {
            font-weight: bold;
            margin-bottom: 0.3rem;
        }

        .cart-item-price {
            color: #27ae60;
            font-weight: bold;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background: #1e3c72;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-total {
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
            margin-top: 1rem;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .total-final {
            font-size: 1.2rem;
            font-weight: bold;
            color: #27ae60;
            border-top: 1px solid #ddd;
            padding-top: 0.5rem;
        }

        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 2rem 0;
            text-align: center;
            color: #666;
            margin-top: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .search-bar {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .content-tabs {
                flex-direction: column;
            }

            .category-filter {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">FishingPro Store</div>
            <ul class="nav-links">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#joran">Joran</a></li>
                <li><a href="#reel">Reel</a></li>
                <li><a href="#aksesoris">Aksesoris</a></li>
                <li><a href="#promo">Promo</a></li>
            </ul>
            <div class="cart-section">
                <div class="cart-icon">
                    🛒
                    <span class="cart-count">3</span>
                </div>
                <a href="#" class="btn btn-primary">Masuk</a>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Perlengkapan Mancing Eksklusif</h1>
            <p>Jual beli joran, reel, dan aksesoris mancing premium dari brand terpercaya dunia</p>
            <div class="search-bar">
                <input type="text" placeholder="Cari joran, reel, atau aksesoris mancing...">
                <button type="button">🔍 Cari</button>
            </div>
        </div>
    </section>

    <main class="container">
        <div class="main-content">
            <div class="content-tabs">
                <div class="tab active" data-tab="products">🛍️ Produk Terbaru</div>
                <div class="tab" data-tab="bestseller">🏆 Best Seller</div>
                <div class="tab" data-tab="cart">🛒 Keranjang (3)</div>
            </div>

            <div class="tab-content active" id="products">
                <div class="featured-section">
                    <h2 class="featured-title">🎯 Flash Sale Minggu Ini!</h2>
                    <p class="featured-description">Diskon hingga 50% untuk semua produk eksklusif. Buruan sebelum kehabisan!</p>
                    <a href="#" class="btn btn-secondary">Lihat Semua Promo</a>
                </div>

                <div class="category-filter">
                    <button class="filter-btn active">Semua</button>
                    <button class="filter-btn">Joran</button>
                    <button class="filter-btn">Reel</button>
                    <button class="filter-btn">Umpan</button>
                    <button class="filter-btn">Aksesoris</button>
                    <button class="filter-btn">Tas & Box</button>
                </div>

                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/ste.png" class="product-image">
                            <div class="product-badge exclusive">EKSKLUSIF</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Reel Shimano Stella SW7000</div>
                            <div class="product-description">Reel spinning premium untuk mancing di laut</div>
                            <div class="product-price">
                                <span class="price-current">Rp 19.899.000</span>
                                <span class="price-original">Rp 19.300.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.9/5 (127 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/lur.png" class="product-image">
                            <div class="product-badge premium">PREMIUM</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Dovar Armajoint 190SF</div>
                            <div class="product-description">Lure Hardbody Buat Trolling, Casting, 500g</div>
                            <div class="product-price">
                                <span class="price-current">Rp 1.299.000</span>
                                <span class="price-original">Rp 1.650.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.8/5 (89 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/spin.png" class="product-image">
                            <div class="product-badge">TERLARIS</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Shimano Catana Z4X</div>
                            <div class="product-description">Joran Casting, Popping, Jiging</div>
                            <div class="product-price">
                                <span class="price-current">Rp 13.299.000</span>
                                <span class="price-original">Rp 13.399.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐ 4.6/5 (156 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/re.png" class="product-image">
                            <div class="product-badge exclusive">EKSKLUSIF</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Shimano Fiorella GX14000</div>
                            <div class="product-description">Reel Elektrik Untuk Predator Monster</div>
                            <div class="product-price">
                                <span class="price-current">Rp 26.899.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.9/5 (234 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/game.png" class="product-image">
                            <div class="product-badge premium">PREMIUM</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Shimano Kalia Beast Pro 180cm</div>
                            <div class="product-description">Joran Trolling premium untuk predator besar</div>
                            <div class="product-price">
                                <span class="price-current">Rp 23.299.000</span>
                                <span class="price-original">Rp 23.999.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 5.0/5 (45 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="pho/pe.png" class="product-image">
                            <div class="product-badge">TERLARIS</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Ocea 8+ PE 4 Braid</div>
                            <div class="product-description">Benang PE Kuat eksklusif 800M</div>
                            <div class="product-price">
                                <span class="price-current">Rp 2.199.000</span>
                                <span class="price-original">Rp 2.799.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.7/5 (178 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="bestseller">
                <h2>🏆 Produk Terlaris Bulan Ini</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            🎣
                            <div class="product-badge">SOLD 500+</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Shimano</div>
                            <div class="product-title">Joran Shimano FX Series</div>
                            <div class="product-description">Joran terlaris untuk pemula dan profesional</div>
                            <div class="product-price">
                                <span class="price-current">Rp 1.299.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.8/5 (523 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            🎯
                            <div class="product-badge">SOLD 350+</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Daiwa</div>
                            <div class="product-title">Reel Spinning Daiwa Crossfire</div>
                            <div class="product-description">Reel entry level dengan performa maksimal</div>
                            <div class="product-price">
                                <span class="price-current">Rp 799.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐ 4.5/5 (378 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            🪝
                            <div class="product-badge">SOLD 800+</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Yamashita</div>
                            <div class="product-title">Umpan Squid Jig Yamashita</div>
                            <div class="product-description">Umpan artificial terbaik untuk cumi-cumi</div>
                            <div class="product-price">
                                <span class="price-current">Rp 89.000</span>
                            </div>
                            <div class="product-rating">⭐⭐⭐⭐⭐ 4.9/5 (892 review)</div>
                            <button class="btn btn-add-cart">+ Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="cart">
                <h2>🛒 Keranjang Belanja Anda</h2>
                
                <div class="cart-item">
                    <div class="cart-item-image">🎣</div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">Joran Shimano Catana FX 270cm</div>
                        <div class="cart-item-price">Rp 1.899.000</div>
                    </div>
                    <div class="quantity-control">
                        <button class="quantity-btn">-</button>
                        <span>1</span>
                        <button class="quantity-btn">+</button>
                    </div>
                </div>

                <div class="cart-item">
                    <div class="cart-item-image">🎯</div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">Reel Daiwa Ninja 2500A</div>
                        <div class="cart-item-price">Rp 1.299.000</div>
                    </div>
                    <div class="quantity-control">
                        <button class="quantity-btn">-</button>
                        <span>1</span>
                        <button class="quantity-btn">+</button>
                    </div>
                </div>

                <div class="cart-item">
                    <div class="cart-item-image">🧰</div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">Tackle Box Maguro Pro 3 Layer</div>
                        <div class="cart-item-price">Rp 299.000</div>
                    </div>
                    <div class="quantity-control">
                        <button class="quantity-btn">-</button>
                        <span>1</span>
                        <button class="quantity-btn">+</button>
                    </div>
                </div>

                <div class="cart-total">
                    <div class="total-row">
                        <span>Subtotal:</span>
                        <span>Rp 3.497.000</span>
                    </div>
                    <div class="total-row">
                        <span>Ongkir:</span>
                        <span>Rp 25.000</span>
                    </div>
                    <div class="total-row">
                        <span>Diskon:</span>
                        <span>-Rp 349.700</span>
                    </div>
                    <div class="total-row total-final">
                        <span>Total:</span>
                        <span>Rp 3.172.300</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                        💳 Checkout Sekarang
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 FishingPro Store - Toko Perlengkapan Mancing Eksklusif Terpercaya</p>
            <p>Prototype untuk mata kuliah Interaksi Manusia dan Komputer</p>
        </div>
    </footer>

    <script>
        let cartItems = 3;

        // Tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                tab.classList.add('active');
                
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Search functionality
        document.querySelector('.search-bar button').addEventListener('click', () => {
            const searchTerm = document.querySelector('.search-bar input').value;
            if (searchTerm.trim()) {
                alert(`Mencari produk: "${searchTerm}"\n\nHasil pencarian akan ditampilkan di sini pada implementasi sebenarnya.`);
            }
        });

        // Add to cart functionality
        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const productTitle = btn.closest('.product-info').querySelector('.product-title').textContent;
                const productPrice = btn.closest('.product-info').querySelector('.price-current').textContent;
                
                cartItems++;
                document.querySelector('.cart-count').textContent = cartItems;
                
                // Animation effect
                btn.textContent = '✓ Ditambahkan!';
                btn.style.background = '#27ae60';
                setTimeout(() => {
                    btn.textContent = '+ Tambah ke Keranjang';
                    btn.style.background = '#27ae60';
                }, 2000);
                
                alert(`Produk ditambahkan ke keranjang!\n\n${productTitle}\n${productPrice}`);
            });
        });

        // Product card click
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('click', (e) => {
                const productTitle = card.querySelector('.product-title').textContent;
                const productPrice = card.querySelector('.price-current').textContent;

                alert(`Anda memilih:\n\n${productTitle}\n${productPrice}`);
            });
        });
    </script>
</body>
</html>