<!-- START HEADER -->
<header class="header_wrap">
    {{-- <div class="top-header light_skin bg_dark d-none d-md-block">
      <div class="custom-container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-8">
            <div class="header_topbar_info">
              <div class="header_offer">
                <span>Free Ground Shipping Over $250</span>
              </div>
              <div class="download_wrap">
                <span class="me-3">Download App</span>
                <ul class="icon_list text-center text-lg-start">
                  <li>
                    <a href="#"><i class="fab fa-apple"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-android"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-windows"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-4">
            <div
              class="d-flex align-items-center justify-content-center justify-content-md-end"
            >
              <div class="lng_dropdown">
                <select name="countries" class="custome_select">
                  <option
                    value="en"
                    data-image="assets/images/eng.png"
                    data-title="English"
                  >
                    English
                  </option>
                  <option
                    value="fn"
                    data-image="assets/images/fn.png"
                    data-title="France"
                  >
                    France
                  </option>
                  <option
                    value="us"
                    data-image="assets/images/us.png"
                    data-title="United States"
                  >
                    United States
                  </option>
                </select>
              </div>
              <div class="ms-3">
                <select name="countries" class="custome_select">
                  <option value="USD" data-title="USD">USD</option>
                  <option value="EUR" data-title="EUR">EUR</option>
                  <option value="GBR" data-title="GBR">GBR</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="middle-header dark_skin">
      <div class="custom-container">
        <div class="nav_block">
          <a class="navbar-brand" href="index.html">
            <img
              class="logo_light ms-3"
              src="assets/images/logo-1.png" style="max-width: 15% !important"
              alt="logo"
            />
            <img
              class="logo_dark ms-3" style="max-width: 15% !important"
              src="assets/images/logo-1.png"
              alt="logo"
            />
          </a>
          <div class="product_search_form rounded_input">
            <form>
              <div class="input-group">
                <div class="input-group-prepend">

                </div>
                <input
                  class="form-control rounded-start-circle"
                  placeholder="Recherche..."
                  required=""
                  type="text"
                />
                <button type="submit" class="search_btn2">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </div>
          <ul class="navbar-nav attr-nav align-items-center">
            <li>
              <a href="#" class="nav-link"
                ><i class="linearicons-user"></i
              ></a>
            </li>
            <li>
              <a href="#" class="nav-link"
                ><i class="linearicons-heart"></i
                ><span class="wishlist_count">0</span></a
              >
            </li>
            <li class="dropdown cart_dropdown">
              <a
                class="nav-link cart_trigger"
                href="#"
                data-bs-toggle="dropdown"
                ><i class="linearicons-bag2"></i
                ><span class="cart_count">2</span
                ><span class="amount"
                  ><span class="currency_symbol">XOF </span>159.00</span
                ></a
              >
              <div
                class="cart_box cart_right dropdown-menu dropdown-menu-right"
              >
                <ul class="cart_list">
                  <li>
                    <a href="#" class="item_remove"
                      ><i class="ion-close"></i
                    ></a>
                    <a href="#"
                      ><img
                        src="assets/images/cart_thamb1.jpg"
                        alt="cart_thumb1"
                      />Variable product 001</a
                    >
                    <span class="cart_quantity">
                      1 x
                      <span class="cart_amount">
                        <span class="price_symbole">$</span></span
                      >78.00</span
                    >
                  </li>
                  <li>
                    <a href="#" class="item_remove"
                      ><i class="ion-close"></i
                    ></a>
                    <a href="#"
                      ><img
                        src="assets/images/cart_thamb2.jpg"
                        alt="cart_thumb2"
                      />Ornare sed consequat</a
                    >
                    <span class="cart_quantity">
                      1 x
                      <span class="cart_amount">
                        <span class="price_symbole">$</span></span
                      >81.00</span
                    >
                  </li>
                </ul>
                <div class="cart_footer">
                  <p class="cart_total">
                    <strong>Subtotal:</strong>
                    <span class="cart_price">
                      <span class="price_symbole">$</span></span
                    >159.00
                  </p>
                  <p class="cart_buttons">
                    <a href="#" class="btn btn-fill-line view-cart"
                      >View Cart</a
                    ><a href="#" class="btn btn-fill-out checkout"
                      >Checkout</a
                    >
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div
      class="bottom_header dark_skin main_menu_uppercase border-top border-bottom"
    >
      <div class="custom-container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-3">
            <div class="categories_wrap">
              <button
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navCatContent"
                aria-expanded="false"
                class="categories_btn"
              >
                <i class="linearicons-menu"></i><span>Toutes Categories </span>
              </button>
              <div id="navCatContent" class="nav_cat navbar nav collapse">
                <ul>
                  <li class="dropdown-mega-menu">
                    <a
                      class="dropdown-item nav-link"
                      href="#"
                      ><i class="flaticon-tv"></i> <span>Profil</span></a
                    >
                  </li>
                  <li class="dropdown-mega-menu">
                    <a
                      class="dropdown-item nav-link"
                      href="#"
                      ><i class="flaticon-responsive"></i>
                      <span>Mes commandes</span></a
                    >
                  </li>
                  <li class="dropdown-mega-menu">
                    <a
                      class="dropdown-item nav-link"
                      href="#"
                      ><i class="flaticon-camera"></i> <span>Mon panier</span></a
                    >
                  </li>
                  <li class="dropdown-mega-menu">
                    <a
                      class="dropdown-item nav-link"
                      href="#"
                      ><i class="flaticon-chat"></i>
                      <span>Commentaires</span></a
                    >
                  </li>
                  <li>
                    <ul class="more_slide_open">
                      <li>
                        <a
                          class="dropdown-item nav-link nav_item"
                          href="login.html"
                          ><i class="flaticon-setting"></i>
                          <span>Paramètres</span></a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item nav-link nav_item"
                          href="https://bestwebcreator.com/shopwise/demo/register.html"
                          ><i class="flaticon-help"></i>
                          <span>Aide!</span></a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="more_categories">Paramètres avancés</div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-6 col-9">
            <nav class="navbar navbar-expand-lg">
              <button
                class="navbar-toggler side_navbar_toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSidetoggle"
                aria-expanded="false"
              >
                <span class="ion-android-menu"></span>
              </button>
              <div class="pr_search_icon">
                <a href="javascript:;" class="nav-link pr_search_trigger"
                  ><i class="linearicons-magnifier"></i
                ></a>
              </div>
              <div
                class="collapse navbar-collapse mobile_side_menu"
                id="navbarSidetoggle"
              >
                <ul class="navbar-nav">
                  <li class="dropdown">
                    <a class="nav-link active" href="#">Accueil</a>
                  </li>
                  <li class="dropdown dropdown-mega-menu">
                    <a
                      class="dropdown-toggle nav-link"
                      href="#"
                      data-bs-toggle="dropdown"
                      >Nos produits</a
                    >
                    <div class="dropdown-menu">
                      <ul class="mega-menu d-lg-flex">
                        <li class="mega-menu-col col-lg-3">
                          <ul>
                            <li class="dropdown-header">Femmes</li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-list-left-sidebar.html"
                                >Boucles d'oreilles</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-left-sidebar.html"
                                >Chaînes ou coliers</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-right-sidebar.html"
                                >Bracelets</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-list.html"
                                >Bagues</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-list.html"
                                >Épingle à cheveux</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu-col col-lg-3">
                          <ul>
                            <li class="dropdown-header">Hommes</li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-cart.html"
                                >Boutons vêtements</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="checkout.html"
                                >Montres</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="wishlist.html"
                                >Porte-monaies</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu-col col-lg-3">
                          <ul>
                            <li class="dropdown-header">Enfants</li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-product-detail.html"
                                >Bracelets</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu-col col-lg-3">
                          <ul>
                            <li class="dropdown-header">Accessoires</li>
                            <li>
                              <a
                                class="dropdown-item nav-link nav_item"
                                href="shop-product-detail.html"
                                >Déco-chaussures</a
                              >
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <div class="d-lg-flex menu_banners row g-3 px-3">
                        <div class="col-lg-6">
                          <div class="header-banner">
                            <div class="sale-banner">
                              <a class="hover_effect1" href="#">
                                <img
                                  src="assets/images/shop_banner_img7.jpg"
                                  alt="shop_banner_img7"
                                />
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="header-banner">
                            <div class="sale-banner">
                              <a class="hover_effect1" href="#">
                                <img
                                  src="assets/images/shop_banner_img8.jpg"
                                  alt="shop_banner_img8"
                                />
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="nav-link nav_item" href="contact.html">À propos</a>
                  </li>
                  <li>
                    <a class="nav-link nav_item" href="contact.html">Contactez-nous</a>
                  </li>
                </ul>
              </div>
              <div class="contact_phone contact_support me-3">
                <a
                    class="btn btn-fill-out btn-radius staggered-animation text-uppercase px-3 py-2"
                    href="shop-left-sidebar.html"
                    data-animation="slideInLeft"
                    data-animation-delay="1.5s"
                    > Se connecter</a
                >
              </div>
              <div class="contact_phone contact_support">
                <i class="linearicons-phone-wave"></i>
                <span>123-456-7689</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->
