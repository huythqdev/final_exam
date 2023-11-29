<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lota</title>
    <link rel="icon" href="/assets/Logo/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/home.css" />
    <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
    />
  </head>
  <body>
    <!-- main content web -->
    <div class="main">
      <!-- header -->
      <header class="header">
        <!-- nav-left -->
        <div class="nav-left">
          <a href="" class="logo-header">
            <img src="/assets/Logo/logo.png" alt="" />
          </a>

          <nav class="nav-icon-left">
            <a href="">Trang chủ</a>
            <a href="">Tạo</a>
          </nav>
        </div>

        <!-- nav-middle -->
        <nav class="nav-search">
          <input type="text" placeholder="Tìm kiếm..." />
        </nav>

        <!-- nav-right -->
        <nav class="nav-right">
          <span class="icon-notifi"><i class="fa-solid fa-bell"></i></span>
          <span class="icon-chat"
            ><i class="fa-solid fa-comment-dots"></i
          ></span>
          <span class="icon-person"><i class="fa-solid fa-user"></i></span>
        </nav>
      </header>

      <!-- slider -->
      <div class="slider">
        <div class="slider-img">
          <img src="/assets/pic/banner/travel.png" alt="" />
        </div>
      </div>

      <!-- cart-section -->
      <section class="cart-box">
        <div class="cart-wrap">
          <div class="cart-title">
            <h2>
              Trải nghiệm
              <br />
              <span>Du lịch Việt</span>
            </h2>
          </div>

          <div class="cart-list">
            <div class="select-list" data-cate="type">
              <div class="select-name">
                <span></span>
                <h3 data-holder="Loại hình">Loại hình</h3>
              </div>

              <div class="select-box"></div>
            </div>

            <div class="select-list" data-cate="place">
              <div class="select-name">
                <span></span>
                <h3 data-holder="Địa điểm">Địa điểm</h3>
              </div>

              <div class="select-box"></div>
            </div>

            <div class="select-list" data-cate="time">
              <div class="select-name">
                <span></span>
                <h3 data-holder="Thời gian">Thời gian</h3>
              </div>

              <div class="select-box"></div>
            </div>

            <div class="select-list" data-cate="price">
              <div class="select-name">
                <span></span>
                <h3 data-holder="Mức giá">Mức giá</h3>
              </div>

              <div class="select-box"></div>
            </div>
          </div>
        </div>
      </section>

      <!--  -->
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
