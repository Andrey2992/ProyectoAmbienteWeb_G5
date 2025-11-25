<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="brand">LA VACA</div>
        <div class="header-links">
            <a href="index.php">Inicio</a>
            <a href="categorias.php">Categorias</a>
            <a href="login.php">Login</a>
            <a href="carrito.php"><i class="bi bi-cart-fill"></i></a>
        </div>
  </header>
    <div class="container">
        <div class="cart-section">
            <h1>Shopping Cart</h1>
            <div class="items-count"><span id="itemCount">3</span> Items</div>

            <div id="cartItems">
                <div class="cart-item" data-id="1" data-price="44">
                    <div class="item-image">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect width="50" height="50" rx="5" fill="#4a1f3a"/>
                            <path d="M15 20h20v15H15z" fill="#2d1123"/>
                        </svg>
                    </div>
                    <div class="item-details">
                        <div class="item-label">Shirt</div>
                        <div class="item-name">Cotton T-shirt</div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn decrease">−</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn increase">+</button>
                    </div>
                    <div class="item-price">€44.00</div>
                    <button class="remove-btn">×</button>
                </div>

                <div class="cart-item" data-id="2" data-price="44">
                    <div class="item-image">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect width="50" height="50" rx="5" fill="#d4d4d4"/>
                            <path d="M15 20h20v15H15z" fill="#b8b8b8"/>
                        </svg>
                    </div>
                    <div class="item-details">
                        <div class="item-label">Shirt</div>
                        <div class="item-name">Cotton T-shirt</div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn decrease">−</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn increase">+</button>
                    </div>
                    <div class="item-price">€44.00</div>
                    <button class="remove-btn">×</button>
                </div>

                <div class="cart-item" data-id="3" data-price="44">
                    <div class="item-image">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect width="50" height="50" rx="5" fill="#1a1a1a"/>
                            <path d="M15 20h20v15H15z" fill="#000"/>
                        </svg>
                    </div>
                    <div class="item-details">
                        <div class="item-label">Shirt</div>
                        <div class="item-name">Cotton T-shirt</div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn decrease">−</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn increase">+</button>
                    </div>
                    <div class="item-price">€44.00</div>
                    <button class="remove-btn">×</button>
                </div>
            </div>

            <a href="index.php" class="back-link">
                <span>←</span>
                Back to shop
            </a>
        </div>

        <div class="summary-section">
            <h2>Summary</h2>
            
            <div class="summary-row">
                <span class="summary-label">Items <span id="summaryItemCount">3</span></span>
                <span class="summary-value" id="subtotal">€132.00</span>
            </div>

            <div class="shipping-section">
                <div class="summary-label" style="margin-bottom: 15px;">SHIPPING</div>
                <select class="shipping-select" id="shippingSelect">
                    <option value="5">Standard Delivery - €5.00</option>
                    <option value="10">Express Delivery - €10.00</option>
                    <option value="15">Next Day Delivery - €15.00</option>
                </select>
            </div>

            <div class="promo-section">
                <div class="summary-label" style="margin-bottom: 15px;">GIVE CODE</div>
                <div class="promo-input-wrapper">
                    <input type="text" class="promo-input" id="promoInput" placeholder="Enter your code">
                    <button class="promo-btn" id="promoBtn">→</button>
                </div>
                <div id="promoMessage" style="margin-top: 10px; font-size: 12px;"></div>
            </div>

            <div class="total-section">
                <div class="total-row">
                    <span>TOTAL PRICE</span>
                    <span id="totalPrice">€137.00</span>
                </div>
            </div>

            <button class="checkout-btn" id="checkoutBtn">CHECKOUT</button>
        </div>
    </div>
    <script src="js/carrito.js"></script>
</body>
</html>