# ELEGANT DESIGNERS - Luxury Interior Design Website

> A bespoke, luxury interior design company website inspired by the clean aesthetics of Apple and Tesla. Built entirely with custom HTML5, CSS3, Vanilla JavaScript, PHP, and MySQL.

---

## 🌟 Features

- **Apple-Level Minimal Luxury Aesthetic**: Custom color palette (Gold `#C8A96A`, Deep Black `#111111`, Light Gray `#F5F5F7`, and Pure White `#FFFFFF`), rounded cards, and generous whitespace.
- **Fluid Vanilla JS Animations**:
  - Smooth scroll reveal effects using `IntersectionObserver`
  - Custom gold cursor follower with physics-delayed trailing circle
  - Interactive testimonials slider
  - Fullscreen lightbox gallery for portfolio images
  - Page preloader and top reading progress bar
  - Ripple click effects on luxury buttons
- **Dual Architecture**:
  - **Static Pages (`.html`)**: `index.html`, `about.html`, `portfolio.html`, `services.html`, `contact.html` (viewable directly in any browser without a web server).
  - **Dynamic PHP Pages (`.php`)**: Modular architecture with reusable header, footer, and automated MySQL database submission handling.
- **Secure Contact & Consultation Handling**:
  - Server-side input sanitation & email validation
  - SQL injection prevention using `MySQLi` prepared statements
  - Auto-initialization of database `elegant_designers` and `contact_submissions` table

---

## 📁 Project Structure

```text
interior/
├── index.html            # Static Luxury Homepage
├── about.html            # Static Company Story & Statistics
├── portfolio.html        # Static Portfolio Gallery with Lightbox
├── services.html         # Static Services Showcase
├── contact.html          # Static Contact Form
├── index.php             # Dynamic Modular Homepage
├── about.php             # Dynamic Modular About Page
├── portfolio.php         # Dynamic Modular Portfolio Page
├── services.php          # Dynamic Modular Services Page
├── contact.php           # Dynamic Contact Form & MySQL processor
├── css/
│   ├── style.css         # Design system, typography & animations
│   └── responsive.css    # Responsive media queries
├── js/
│   ├── script.js         # Cursor follower, preloader & lightbox
│   └── scroll.js         # Sticky header & scroll reveals
├── images/               # High-resolution luxury interior photography
├── includes/
│   ├── header.php        # Navigation header template
│   └── footer.php        # Global footer template
└── database/
    ├── config.php        # MySQL connection & auto-table creation
    └── database.sql      # Database schema
```

---

## 🚀 Local Setup & Installation

### Prerequisites
- [WampServer](https://www.wampserver.com/) or [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)

### Steps
1. Clone this repository into your web server's root directory:
   - For WampServer: `C:\wamp\www\interior`
   - For XAMPP: `C:\xampp\htdocs\interior`
2. Start Apache and MySQL in WAMP/XAMPP.
3. Open your browser and navigate to:
   - **Localhost:** `http://localhost/interior/`
   - **Static HTML Preview:** `http://localhost/interior/index.html`
4. The database and tables will automatically initialize on the first contact form visit. You can also manually import `database/database.sql` into phpMyAdmin if desired.

---

## 🛠️ Built With

- **Frontend**: HTML5, CSS3 (Custom Grid & Flexbox, no Bootstrap or Tailwind), Vanilla JavaScript (ES6+)
- **Backend**: PHP 5.3+ / PHP 7+ / PHP 8+
- **Database**: MySQL / MariaDB
- **Typography**: Outfit & Inter (Google Fonts)

---

## 📄 License
This project is open-source and available under the [MIT License](LICENSE).
