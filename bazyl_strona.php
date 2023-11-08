<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Firma Introligatorska - Mobile First</title>
  <style>
    /* Style dla wszystkich urządzeń */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline;
    }
    
    nav ul li a {
      color: #fff;
      padding: 10px;
      text-decoration: none;
    }
    
    /* Style dla urządzeń mobilnych */
    @media only screen and (max-width: 600px) {
      nav {
        display: none;
        position: absolute;
        top: 40px;
        left: 0;
        background-color: #333;
        width: 100%;
      }
      
      nav ul li {
        display: block;
        text-align: center;
      }
      
      nav ul li a {
        display: block;
        padding: 10px;
        border-bottom: 1px solid #fff;
      }
      
      .menu-icon {
        display: block;
        background-color: #333;
        color: #fff;
        text-align: right;
        padding: 10px;
      }
    }
    
    /* Style dla rozwijanych banerów */
    .banner {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
      overflow: hidden;
      height: 50px;
      transition: height 0.3s ease-in-out;
    }
    
    .banner:hover {
      height: 150px;
    }
    
    .banner h2 {
      margin: 0;
      padding: 0;
    }
    
    .banner p {
      margin: 10px 0 0 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Firma Introligatorska</h1>
    <a href="#" class="menu-icon">&#9776;</a>
    <nav>
      <ul>
        <li><a href="#">Strona główna</a></li>
        <li><a href="#">Oferta</a></li>
        <li><a href="#">Realizacje</a></li>
        <li><a href="#">Galeria</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
    </nav>
  </header>

  <div class="banner">
    <h2>Lorem Ipsum 1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

  <div class="banner">
    <h2>Lorem Ipsum 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

  <div class="banner">
    <h2>Lorem Ipsum 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

  <script>
    // Kod JavaScript
  const banners = document.querySelectorAll('.banner');

  banners.forEach((banner) => {
    banner.addEventListener('mouseover', () => {
      banner.style.height = '150px';
    });

    banner.addEventListener('mouseout', () => {
      banner.style.height = '50px';
    });
  });
</script>
</body>
</html>
