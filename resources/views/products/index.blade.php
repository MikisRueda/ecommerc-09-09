<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Alkosto - Tecnología, Electrodomésticos y más</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css" />
</head>

<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">ALKOSTO</div>
            <div class="search">
                <input type="text" placeholder="Buscar productos, marcas y más" aria-label="Buscar" />
                <button class="search-btn" aria-label="Buscar">🔍</button>
            </div>
            <nav class="header-actions">
                <a href="#" class="header-link">Ofertas</a>
                <a href="#" class="header-link">Tiendas</a>
                <a href="#" class="header-link">Ingresar</a>
                <a href="#" class="btn-cart">Carrito <span class="cart-count">0</span></a>
            </nav>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-nav">
            <div class="container">
                <div class="nav-menu">
                    <a href="#" class="nav-item">
                        <span class="nav-icon">💻</span>
                        Computadores
                    </a>
                    <a href="#" class="nav-item">
                        <span class="nav-icon">📱</span>
                        Celulares
                    </a>
                    <a href="#" class="nav-item">
                        <span class="nav-icon">🎮</span>
                        Gaming
                    </a>
                    <a href="#" class="nav-item">
                        <span class="nav-icon">📺</span>
                        TV & Audio
                    </a>
                    <a href="#" class="nav-item">
                        <span class="nav-icon">🏠</span>
                        Electrodomésticos
                    </a>
                    <a href="#" class="nav-item">
                        <span class="nav-icon">🔧</span>
                        Herramientas
                    </a>
                    <a href="#" class="nav-item nav-more">Ver más</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Banner -->
    <section class="hero">
        <div class="container">
            <div class="hero-slider">
                <div class="hero-slide active">
                    <div class="hero-content">
                        <div class="hero-text">
                            <span class="hero-badge">Hasta -50%</span>
                            <h1>Gaming Week</h1>
                            <p>Los mejores portátiles gaming con RTX 4060, procesadores Intel i7 y pantallas 144Hz.
                                Potencia real para tus juegos favoritos.</p>
                            <button class="btn-hero">Ver ofertas gaming</button>
                        </div>
                        <div class="hero-image">
                            <img src="https://images.unsplash.com/photo-1593640495253-23196b27a87f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                alt="Gaming Laptop" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Categorías destacadas</h2>
            <div class="categories-grid">
                <a href="#" class="category-card large">
                    <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Computadores" />
                    <div class="category-overlay">
                        <h3>Computadores</h3>
                        <p>Portátiles, escritorio y workstations</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                        alt="Celulares" />
                    <div class="category-overlay">
                        <h3>Celulares</h3>
                        <p>iPhone, Samsung, Xiaomi</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                        alt="Gaming" />
                    <div class="category-overlay">
                        <h3>Gaming</h3>
                        <p>PC, consolas, accesorios</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <img src="https://images.unsplash.com/photo-1461151304267-38535e780c79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                        alt="TV y Audio" />
                    <div class="category-overlay">
                        <h3>TV & Audio</h3>
                        <p>Smart TV, soundbars, audífonos</p>
                    </div>
                </a>
                <a href="#" class="category-card">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                        alt="Electrodomésticos" />
                    <div class="category-overlay">
                        <h3>Electrodomésticos</h3>
                        <p>Neveras, lavadoras, cocinas</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="offers">
        <div class="container">
            <div class="offers-header">
                <h2 class="section-title">Ofertas especiales</h2>
                <div class="offers-tabs">
                    <button class="tab-btn active" data-tab="flash">⚡ Flash</button>
                    <button class="tab-btn" data-tab="finance">💳 0% Interés</button>
                    <button class="tab-btn" data-tab="clearance">🏷️ Liquidación</button>
                </div>
            </div>

            <div class="offers-content">
                <div class="tab-content active" id="flash">
                    <div class="products-grid">
                        <div class="product-card">
                            <div class="product-badges">
                                <span class="badge badge-sale">-36%</span>
                                <span class="badge badge-flash">Flash</span>
                            </div>
                            <img src="https://olimpica.vtexassets.com/arquivos/ids/1296222/1.jpg?v=638421603895330000"
                                alt="HP Victus" />
                            <div class="product-info">
                                <h3>HP Victus 15.6" Ryzen 5</h3>
                                <div class="price-row">
                                    <span class="price-now">$3.499.030</span>
                                    <span class="price-before">$5.499.000</span>
                                </div>
                                <button class="btn-add-cart">Agregar</button>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-badges">
                                <span class="badge badge-sale">-25%</span>
                            </div>
                            <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                                alt="iPhone 15" />
                            <div class="product-info">
                                <h3>iPhone 15 128GB</h3>
                                <div class="price-row">
                                    <span class="price-now">$3.899.000</span>
                                    <span class="price-before">$5.199.000</span>
                                </div>
                                <button class="btn-add-cart">Agregar</button>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-badges">
                                <span class="badge badge-sale">-40%</span>
                            </div>
                            <img src="https://images.unsplash.com/photo-1461151304267-38535e780c79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                                alt="Samsung TV" />
                            <div class="product-info">
                                <h3>Samsung Smart TV 55" 4K</h3>
                                <div class="price-row">
                                    <span class="price-now">$1.799.000</span>
                                    <span class="price-before">$2.999.000</span>
                                </div>
                                <button class="btn-add-cart">Agregar</button>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-badges">
                                <span class="badge badge-sale">-30%</span>
                            </div>
                            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80"
                                alt="MacBook Air" />
                            <div class="product-info">
                                <h3>MacBook Air M2 256GB</h3>
                                <div class="price-row">
                                    <span class="price-now">$4.199.000</span>
                                    <span class="price-before">$5.999.000</span>
                                </div>
                                <button class="btn-add-cart">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="finance">
                    <div class="finance-banner">
                        <h3>🎯 Financiación 0% interés con Davivienda</h3>
                        <p>Difiere tus compras hasta 36 meses sin intereses en productos seleccionados</p>
                    </div>
                </div>

                <div class="tab-content" id="clearance">
                    <div class="clearance-banner">
                        <h3>🔥 Liquidación por renovación de inventario</h3>
                        <p>Últimas unidades con descuentos hasta del 60%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured">
        <div class="container">
            <h2 class="section-title">Productos destacados</h2>
            <div class="featured-grid">
                <div class="featured-card">
                    <img src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Gaming Setup" />
                    <div class="featured-content">
                        <h3>Gaming Setup Completo</h3>
                        <p>PC Gamer + Monitor 144Hz + Accesorios</p>
                        <span class="featured-price">Desde $6.999.000</span>
                        <button class="btn-outline">Ver combo</button>
                    </div>
                </div>

                <div class="featured-card">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Smart Home" />
                    <div class="featured-content">
                        <h3>Hogar Inteligente</h3>
                        <p>Electrodomésticos conectados</p>
                        <span class="featured-price">Desde $2.499.000</span>
                        <button class="btn-outline">Descubrir</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands -->
    <section class="brands">
        <div class="container">
            <h2 class="section-title">Marcas destacadas</h2>
            <div class="brands-grid">
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/43/HP_logo_2008.svg" alt="HP" />
                </div>
                <div class="brand-card">
                    <img src="https://logos-world.net/wp-content/uploads/2020/04/Samsung-Logo.png" alt="Samsung" />
                </div>
                <div class="brand-card">
                    <img src="https://logos-world.net/wp-content/uploads/2020/04/Apple-Logo.png" alt="Apple" />
                </div>
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/LG_logo_%282014%29.svg/2560px-LG_logo_%282014%29.svg.png" alt="LG" />
                </div>
                <div class="brand-card">
                    <img src="https://logos-world.net/wp-content/uploads/2020/04/Sony-Logo.png" alt="Sony" />
                </div>
                <div class="brand-card">
                    <img src="https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo-1995-present.png" alt="ASUS" />
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🚚</div>
                    <h3>Envío gratis</h3>
                    <p>En compras superiores a $199.000</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔄</div>
                    <h3>Cambios y devoluciones</h3>
                    <p>30 días para cambios sin costo</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>Garantía extendida</h3>
                    <p>Protección adicional para tus productos</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💳</div>
                    <h3>Múltiples pagos</h3>
                    <p>Tarjetas, PSE, efectivo y financiación</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Compra</h4>
                    <ul>
                        <li><a href="#">Computadores</a></li>
                        <li><a href="#">Celulares</a></li>
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">TV & Audio</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Servicio al cliente</h4>
                    <ul>
                        <li><a href="#">Centro de ayuda</a></li>
                        <li><a href="#">Garantías</a></li>
                        <li><a href="#">Devoluciones</a></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Mi cuenta</h4>
                    <ul>
                        <li><a href="#">Ingresar</a></li>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Lista de deseos</a></li>
                        <li><a href="#">Mi perfil</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Síguenos</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">📘</a>
                        <a href="#" aria-label="Instagram">📷</a>
                        <a href="#" aria-label="Twitter">🐦</a>
                        <a href="#" aria-label="YouTube">📺</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Alkosto - Todos los derechos reservados</p>
                <p>Vista de muestra para fines educativos</p>
            </div>
        </div>
    </footer>

    <script>
        // Tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.getAttribute('data-tab');

                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                btn.classList.add('active');
                document.getElementById(targetTab).classList.add('active');
            });
        });

        // Simple cart counter
        let cartCount = 0;
        const cartCountEl = document.querySelector('.cart-count');
        const addCartBtns = document.querySelectorAll('.btn-add-cart');

        addCartBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                cartCount++;
                cartCountEl.textContent = cartCount;
                btn.textContent = 'Agregado ✓';
                btn.style.background = 'var(--success)';
                setTimeout(() => {
                    btn.textContent = 'Agregar';
                    btn.style.background = '';
                }, 1500);
            });
        });
    </script>

    <style>
        :root {
            --bg: #0e0f11;
            --card: #16181c;
            --muted: #8d95a5;
            --text: #e8ecf1;
            --accent: #ff3b30;
            --success: #17b26a;
            --brand: #ff6a00;
            --line: #23262d;
            --gradient-brand: linear-gradient(90deg, #ff6a00, #ff3b30);
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, system-ui, Segoe UI, Roboto, Helvetica, Arial, sans-serif
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px
        }

        /* Header */
        .site-header {
            background: #0b0c0f;
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 100
        }

        .header-inner {
            display: grid;
            grid-template-columns: 180px 1fr auto;
            gap: 16px;
            align-items: center;
            padding: 12px 0
        }

        .logo {
            font-weight: 800;
            letter-spacing: 1px;
            background: var(--gradient-brand);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 22px
        }

        .search {
            position: relative;
            display: flex
        }

        .search input {
            width: 100%;
            padding: 12px 50px 12px 14px;
            border-radius: 10px;
            border: 1px solid var(--line);
            background: #0f1115;
            color: var(--text)
        }

        .search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: var(--muted);
            cursor: pointer;
            padding: 8px
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 16px
        }

        .header-link {
            color: var(--text);
            text-decoration: none;
            font-size: 14px
        }

        .btn-cart {
            padding: 8px 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            color: var(--text);
            text-decoration: none;
            position: relative
        }

        .cart-count {
            position: absolute;
            top: -6px;
            right: -6px;
            background: var(--accent);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 999px;
            min-width: 18px;
            text-align: center
        }

        /* Main Navigation */
        .main-nav {
            background: #121418;
            border-bottom: 1px solid var(--line)
        }

        .nav-menu {
            display: flex;
            gap: 24px;
            padding: 14px 0
        }

        .nav-item {
            color: var(--text);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 8px;
            transition: all .2s
        }

        .nav-item:hover {
            background: #1a1d23;
            color: #fff
        }

        .nav-icon {
            font-size: 16px
        }

        .nav-more {
            color: var(--brand);
            font-weight: 600
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #1a1d23 0%, #0f1115 100%);
            padding: 40px 0
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center
        }

        .hero-badge {
            background: var(--gradient-brand);
            color: #fff;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 800;
            margin: 12px 0 16px;
            background: var(--gradient-brand);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent
        }

        .hero p {
            font-size: 18px;
            color: var(--muted);
            line-height: 1.6;
            margin: 0 0 24px
        }

        .btn-hero {
            background: var(--gradient-brand);
            border: none;
            color: #fff;
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: transform .2s
        }

        .btn-hero:hover {
            transform: translateY(-2px)
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 16px
        }

        /* Categories */
        .categories {
            padding: 60px 0
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin: 0 0 32px;
            text-align: center
        }

        .categories-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 16px;
            height: 500px
        }

        .category-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            transition: transform .3s
        }

        .category-card:hover {
            transform: scale(1.02)
        }

        .category-card.large {
            grid-row: 1/3
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .category-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .8), transparent);
            display: flex;
            flex-direction: column;
            justify-content: end;
            padding: 20px;
            color: #fff
        }

        .category-overlay h3 {
            margin: 0 0 4px;
            font-size: 20px;
            font-weight: 700
        }

        .category-overlay p {
            margin: 0;
            color: #cfd5df
        }

        /* Offers */
        .offers {
            padding: 60px 0;
            background: #0b0c0f
        }

        .offers-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px
        }

        .offers-tabs {
            display: flex;
            gap: 8px
        }

        .tab-btn {
            background: #16181c;
            border: 1px solid var(--line);
            color: var(--muted);
            padding: 10px 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: all .2s
        }

        .tab-btn.active {
            background: var(--gradient-brand);
            color: #fff;
            border-color: transparent
        }

        .tab-content {
            display: none
        }

        .tab-content.active {
            display: block
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px
        }

        .product-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 16px;
            transition: transform .2s
        }

        .product-card:hover {
            transform: translateY(-4px)
        }

        .product-badges {
            display: flex;
            gap: 6px;
            margin-bottom: 12px
        }

        .badge {
            font-size: 11px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 999px
        }

        .badge-sale {
            background: rgba(255, 59, 48, .15);
            color: #ff3b30;
            border: 1px solid rgba(255, 59, 48, .35)
        }

        .badge-flash {
            background: rgba(255, 106, 0, .15);
            color: #ff6a00;
            border: 1px solid rgba(255, 106, 0, .35)
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 12px
        }

        .product-info h3 {
            font-size: 16px;
            margin: 0 0 8px;
            color: #fff
        }

        .price-row {
            margin: 8px 0 12px
        }

        .price-now {
            font-size: 18px;
            font-weight: 700;
            color: #fff
        }

        .price-before {
            font-size: 14px;
            color: var(--muted);
            text-decoration: line-through;
            margin-left: 8px
        }

        .btn-add-cart {
            width: 100%;
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: all .2s
        }

        .btn-add-cart:hover {
            background: var(--gradient-brand);
            border-color: transparent;
            color: #fff
        }

        .finance-banner,
        .clearance-banner {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 40px;
            text-align: center
        }

        .finance-banner h3,
        .clearance-banner h3 {
            margin: 0 0 12px;
            font-size: 24px
        }

        .finance-banner p,
        .clearance-banner p {
            margin: 0;
            color: var(--muted)
        }

        /* Featured */
        .featured {
            padding: 60px 0
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px
        }

        .featured-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden
        }

        .featured-card img {
            width: 100%;
            height: 250px;
            object-fit: cover
        }

        .featured-content {
            padding: 20px
        }

        .featured-content h3 {
            margin: 0 0 8px;
            font-size: 20px
        }

        .featured-content p {
            margin: 0 0 12px;
            color: var(--muted)
        }

        .featured-price {
            display: block;
            font-size: 18px;
            font-weight: 700;
            color: var(--brand);
            margin-bottom: 16px
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: all .2s
        }

        .btn-outline:hover {
            border-color: var(--brand);
            color: var(--brand)
        }

        /* Brands */
        .brands {
            padding: 60px 0;
            background: #0b0c0f
        }

        .brands-grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 20px
        }

        .brand-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform .2s
        }

        .brand-card:hover {
            transform: translateY(-2px)
        }

        .brand-card img {
            max-width: 100%;
            height: 40px;
            object-fit: contain;
            filter: brightness(0.8)
        }

        /* Services */
        .services {
            padding: 60px 0
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px
        }

        .service-card {
            text-align: center;
            padding: 24px
        }

        .service-icon {
            font-size: 48px;
            margin-bottom: 16px
        }

        .service-card h3 {
            margin: 0 0 8px;
            font-size: 18px
        }

        .service-card p {
            margin: 0;
            color: var(--muted)
        }

        /* Footer */
        .site-footer {
            background: #0b0c0f;
            border-top: 1px solid var(--line);
            padding: 40px 0 20px
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 32px;
            margin-bottom: 32px
        }

        .footer-section h4 {
            margin: 0 0 16px;
            font-size: 16px;
            color: #fff
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .footer-section li {
            margin-bottom: 8px
        }

        .footer-section a {
            color: var(--muted);
            text-decoration: none;
            transition: color .2s
        }

        .footer-section a:hover {
            color: #fff
        }

        .social-links {
            display: flex;
            gap: 12px
        }

        .social-links a {
            font-size: 24px;
            text-decoration: none
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid var(--line);
            color: var(--muted)
        }

        /* Responsive */
        @media (max-width: 960px) {
            .header-inner {
                grid-template-columns: 1fr auto;
                gap: 10px
            }

            .logo {
                display: none
            }

            .nav-menu {
                overflow-x: auto;
                white-space: nowrap
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center
            }

            .hero h1 {
                font-size: 36px
            }

            .categories-grid {
                grid-template-columns: 1fr;
                height: auto
            }

            .category-card.large {
                grid-row: auto
            }

            .offers-header {
                flex-direction: column;
                gap: 16px
            }

            .products-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .featured-grid {
                grid-template-columns: 1fr
            }

            .brands-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .footer-content {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (max-width: 640px) {
            .products-grid {
                grid-template-columns: 1fr
            }

            .services-grid {
                grid-template-columns: 1fr
            }

            .footer-content {
                grid-template-columns: 1fr
            }

            .hero {
                padding: 20px 0
            }

            .categories,
            .offers,
            .featured,
            .brands,
            .services {
                padding: 40px 0
            }
        }
    </style>
</body>

</html>
