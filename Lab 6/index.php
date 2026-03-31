<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HShop — Modern Commerce</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- ═══════════════════════════════ TOP BAR ═══════════════════════════════ -->
  <div class="topbar">
    <span>Free shipping on orders over $75 · Use code <strong>HSHOP20</strong> for 20% off</span>
  </div>

  <!-- ═══════════════════════════════ HEADER ════════════════════════════════ -->
  <header class="header">
    <div class="header-inner container">

      <!-- Logo -->
      <a href="#" class="logo">
        <span class="logo-mark">H</span>
        <span class="logo-text">Shop</span>
      </a>

      <!-- Navigation -->
      <nav class="nav">
        <a href="#" class="nav-link">New In</a>
        <a href="#" class="nav-link">Men</a>
        <a href="#" class="nav-link">Women</a>
        <a href="#" class="nav-link">Accessories</a>
        <a href="#" class="nav-link">Sale <span class="badge">−40%</span></a>
      </nav>

      <!-- Search Bar (FUNCTIONAL — implement your own logic here) -->
      <div class="search-wrapper" id="searchWrapper">
        <div class="search-bar">
          <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
          <input
            type="text"
            class="search-input"
            id="searchInput"
            placeholder="Search products…"
            autocomplete="off"
          />
          <button class="search-clear" id="searchClear" aria-label="Clear search">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
          </button>
        </div>

        <!-- ── SEARCH DROPDOWN (populate this via JS) ── -->
        <div class="search-dropdown" id="searchDropdown">

          <div class="dropdown-section-label">Suggested Products</div>

          <!-- Product Result Item — repeat this structure dynamically -->

          <div class="dropdown-footer">
            <a href="#" class="view-all-link">View all results <span>→</span></a>
          </div>
        </div>
        <!-- ── END DROPDOWN ── -->
      </div>

      <!-- Header Actions -->
      <div class="header-actions">
        <button class="icon-btn" aria-label="Account">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
          </svg>
        </button>
        <button class="icon-btn" aria-label="Wishlist">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </button>
        <button class="icon-btn cart-btn" aria-label="Cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/>
          </svg>
          <span class="cart-count">3</span>
        </button>
      </div>

    </div>
  </header>

  <!-- ══════════════════════════════ HERO SECTION ═══════════════════════════ -->
  <section class="hero">
    <div class="hero-inner container">
      <div class="hero-text">
        <p class="hero-eyebrow">Spring / Summer 2026</p>
        <h1 class="hero-heading">Wear What<br /><em>Moves</em> You.</h1>
        <p class="hero-sub">Curated essentials for the modern wardrobe. Timeless quality, minimal aesthetic.</p>
        <div class="hero-cta-group">
          <a href="#" class="btn btn-primary">Shop Now</a>
          <a href="#" class="btn btn-ghost">View Lookbook</a>
        </div>
      </div>
      <div class="hero-img-block">
        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&q=85" alt="Hero model" class="hero-img" />
        <div class="hero-pill">New Arrivals →</div>
      </div>
    </div>
  </section>

  <!-- ═════════════════════════════ CATEGORIES ══════════════════════════════ -->
  <section class="categories section">
    <div class="container">
      <h2 class="section-title">Shop by Category</h2>
      <div class="category-grid">
        <a href="#" class="cat-card cat-card--lg">
          <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=600&q=80" alt="Women" />
          <div class="cat-overlay">
            <span class="cat-label">Women</span>
            <span class="cat-count">240 items</span>
          </div>
        </a>
        <a href="#" class="cat-card">
          <img src="https://images.unsplash.com/photo-1550246140-5119ae4790b8?w=400&q=80" alt="Men" />
          <div class="cat-overlay">
            <span class="cat-label">Men</span>
            <span class="cat-count">185 items</span>
          </div>
        </a>
        <a href="#" class="cat-card">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&q=80" alt="Accessories" />
          <div class="cat-overlay">
            <span class="cat-label">Accessories</span>
            <span class="cat-count">98 items</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════ FEATURED PRODUCTS ══════════════════════ -->
  <section class="featured section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured This Week</h2>
        <a href="#" class="section-link">View all →</a>
      </div>
      <div class="product-grid">

        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&q=80" alt="Sneakers" />
            <span class="product-tag">New</span>
            <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
          </div>
          <div class="product-info">
            <span class="product-cat">Men · Footwear</span>
            <h3 class="product-name">UltraRun Pro</h3>
            <div class="product-price-row">
              <span class="price">$129.00</span>
              <div class="stars">★★★★★ <small>(42)</small></div>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Bag" />
            <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
          </div>
          <div class="product-info">
            <span class="product-cat">Women · Bags</span>
            <h3 class="product-name">Leather Tote</h3>
            <div class="product-price-row">
              <span class="price">$189.00</span>
              <div class="stars">★★★★☆ <small>(18)</small></div>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&q=80" alt="Watch" />
            <span class="product-tag product-tag--sale">−15%</span>
            <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
          </div>
          <div class="product-info">
            <span class="product-cat">Accessories · Watches</span>
            <h3 class="product-name">Chronograph Watch</h3>
            <div class="product-price-row">
              <span class="price">$212.00</span>
              <span class="price-original">$249.00</span>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&q=80" alt="T-Shirt" />
            <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
          </div>
          <div class="product-info">
            <span class="product-cat">Men · Tops</span>
            <h3 class="product-name">Essential Cotton Tee</h3>
            <div class="product-price-row">
              <span class="price">$39.00</span>
              <div class="stars">★★★★★ <small>(91)</small></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ════════════════════════════════ BANNER ═══════════════════════════════ -->
  <section class="promo-banner section">
    <div class="container">
      <div class="promo-inner">
        <div class="promo-text">
          <p class="promo-eyebrow">Limited Time</p>
          <h2 class="promo-heading">Summer Sale — Up to 40% Off</h2>
          <p class="promo-sub">Selected styles. While stocks last. No code needed at checkout.</p>
          <a href="#" class="btn btn-primary">Shop the Sale</a>
        </div>
        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&q=80" alt="Sale" class="promo-img" />
      </div>
    </div>
  </section>

  <!-- ════════════════════════════ TRUST SIGNALS ════════════════════════════ -->
  <section class="trust section">
    <div class="container">
      <div class="trust-grid">
        <div class="trust-item">
          <div class="trust-icon">🚚</div>
          <h4>Free Shipping</h4>
          <p>On all orders over $75</p>
        </div>
        <div class="trust-item">
          <div class="trust-icon">↩</div>
          <h4>Easy Returns</h4>
          <p>30-day hassle-free returns</p>
        </div>
        <div class="trust-item">
          <div class="trust-icon">🔒</div>
          <h4>Secure Checkout</h4>
          <p>256-bit SSL encryption</p>
        </div>
        <div class="trust-item">
          <div class="trust-icon">✦</div>
          <h4>HShop Rewards</h4>
          <p>Earn points on every order</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════ NEWSLETTER ════════════════════════════ -->
  <section class="newsletter section">
    <div class="container">
      <div class="newsletter-inner">
        <h2>Stay in the Loop</h2>
        <p>Get early access to new drops, exclusive deals, and style inspiration.</p>
        <div class="newsletter-form">
          <input type="email" placeholder="Enter your email address" />
          <button class="btn btn-primary">Subscribe</button>
        </div>
        <small>No spam. Unsubscribe anytime.</small>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════ FOOTER ══════════════════════════════ -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#" class="logo">
            <span class="logo-mark">H</span>
            <span class="logo-text">Shop</span>
          </a>
          <p class="footer-tagline">Modern commerce for modern people. Quality, curated, delivered.</p>
          <div class="social-links">
            <a href="#" aria-label="Instagram">IG</a>
            <a href="#" aria-label="Twitter">TW</a>
            <a href="#" aria-label="Pinterest">PT</a>
            <a href="#" aria-label="TikTok">TK</a>
          </div>
        </div>
        <div class="footer-col">
          <h5>Shop</h5>
          <ul>
            <li><a href="#">New In</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Men</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Sale</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Help</h5>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Shipping & Returns</a></li>
            <li><a href="#">Size Guide</a></li>
            <li><a href="#">Order Tracking</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h5>Company</h5>
          <ul>
            <li><a href="#">About HShop</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Affiliates</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 HShop. All rights reserved.</p>
        <div class="footer-legal">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <div class="search-overlay" id="searchOverlay"></div>

  <script>
    // ═══════════════════════════════════════════════════════════════
    // SEARCH BAR — UI BEHAVIOUR ONLY (open/close/clear dropdown)
    // Replace the dropdown population logic with your own DB query.
    // ═══════════════════════════════════════════════════════════════
    const searchInput   = document.getElementById('searchInput');
    const searchClear   = document.getElementById('searchClear');
    const searchDropdown = document.getElementById('searchDropdown');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchWrapper = document.getElementById('searchWrapper');

    function openDropdown() {
      searchDropdown.classList.add('active');
      searchOverlay.classList.add('active');
      searchWrapper.classList.add('open');
    }

    function closeDropdown() {
      searchDropdown.classList.remove('active');
      searchOverlay.classList.remove('active');
      searchWrapper.classList.remove('open');
    }

    searchInput.addEventListener('focus', () => {
      if (searchInput.value.length >= 0) openDropdown();
    });

    searchInput.addEventListener('input', (event) => {
      searchClear.style.opacity = searchInput.value ? '1' : '0';
          let searchText= searchInput.value;
          document.getElementById("searchDropdown").innerHTML= "<div class='dropdown-section-label'>Loading...</div>";
          document.getElementById("searchDropdown").style.display= "block";
      // Ajax Request 
        const xhr=new XMLHttpRequest();
        xhr.open("GET", "search.php?q=" + searchText,true);
        xhr.send();
        xhr.onreadystatechange= function(){
          if(this.readyState==4 && this.status==200){
            const res= JSON.parse(this.responseText);
            let allItemsHtml= "";
            res.forEach(function(item){
              const itemHTML= `
              <a href="#" class="dropdown-item">
            <div class="item-img-wrap">
              <img src="${item.image_url}" alt="${item.name}" class="item-img" />
            </div>
            <div class="item-info">
              <span class="item-name">${item.name}</span>
              <span class="item-category">${item.category}</span>
            </div>
            <span class="item-price">$${item.price}</span>
          </a>
              `;
              allItemsHtml += itemHTML;
            });
            document.getElementById("searchDropdown").innerHTML= allItemsHtml;
          }
        };

    });

    searchClear.addEventListener('click', () => {
      searchInput.value = '';
      searchClear.style.opacity = '0';
      searchInput.focus();
    });

    searchOverlay.addEventListener('click', closeDropdown);

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeDropdown();
    });
  </script>

</body>
</html>
