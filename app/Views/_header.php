 <!-- START HEADER -->
 <header class="header_wrap fixed-top header_with_topbar">

     <div class="bottom_header dark_skin main_menu_uppercase">
         <div class="container">

             <nav class="navbar navbar-expand-lg">
                 <a class="navbar-brand px-2" href="<?= base_url() ?>">
                     <img class="logo_light" src="<?= base_url() ?>/public/client/assets/images/logo_light.png" alt="logo">
                     <img class="logo_dark" src="<?= base_url() ?>/public/client/assets/images/thiet-ke-logo-thoi-trang-08.jpg" alt="logo">
                 </a>
                 <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false">
                     <span class="ion-android-menu"></span>
                 </button>
                 <!-- <div class="pr_search_icon">
            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i
                    class="linearicons-magnifier"></i></a>
        </div> -->
                 <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                     <ul class="navbar-nav">
                         <li><a class="nav-link nav_item" href="<?= base_url() ?>">Trang chủ</a></li>
                         <li class="dropdown">
                             <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Thể loại</a>
                             <div class="dropdown-menu">
                                 <ul>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/ao">Áo</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/quan-dai">Quần Dài</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/vay-dam">Váy Đầm</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/tui-xach">Túi Xách</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/giay">Giầy</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/vi">Ví</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/kinh">Kính</a></li>
                                     <li><a class="dropdown-item nav-link nav_item" href="<?= base_url() ?>/loai-hang/day-lung">Dây Lưng</a></li>
                                 </ul>
                             </div>
                         </li>
                         <li><a class="nav-link nav_item" href="<?= base_url() ?>/about">Giới thiệu</a></li>
                         <li><a class="nav-link nav_item" href="<?= base_url() ?>/contact">Liên hệ</a></li>
                     </ul>
                 </div>
                 <ul class="navbar-nav attr-nav align-items-center">
                     <li>
                         <?php session_start(); ?>
                         <?php if ($_SESSION['customer']) : ?>
                             Chào mừng, <?= $_SESSION['customer']["fullname"] ?>
                             <a href="<?= base_url() ?>/login/logout" class="btn btn-fill-out checkout">Đăng xuất</a>
                         <?php else : ?>

                         <?php endif; ?>
                     </li>
                     <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                         <div class="search_wrap">
                             <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                             <form action="<?= base_url() ?>/search">
                                 <input type="text" placeholder="Tìm kiếm.." class="form-control" id="search_input" name="key" required>
                                 <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                             </form>
                         </div>
                         <div class="search_overlay"></div>
                     </li>
                     <li><a class="nav-link " href="<?= base_url() ?>/login"><i class="ti-user"></i></a></li>
                     <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">0</span></a>
                         <div class="cart_box dropdown-menu dropdown-menu-right">
                             <ul class="cart_list">

                             </ul>
                             <div class="cart_footer">
                                 <p class="cart_total"></p>
                                 <p class="cart_buttons"><a href="<?= base_url() ?>/checkout" class="btn btn-fill-out checkout">Thanh toán</a></p>
                             </div>
                         </div>
                     </li>
                 </ul>
             </nav>

         </div>
     </div>
 </header>
 <!-- END HEADER -->