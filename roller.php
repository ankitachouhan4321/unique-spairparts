<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    Roller - Unique Spairparts | Construction Machinery &
    Spare Parts Manufacturer & Wholesaler in Delhi
  </title>
  <meta name="description"
    content="Unique Spairparts is a Delhi-based manufacturer of concrete road paver machines and wholesaler of construction machinery spare parts since 2018." />
  <meta name="keywords"
    content="Unique Spairparts, concrete road paver machine, construction machinery spare parts, road construction machine, Delhi" />

  <link rel="icon" href="img/logo-bg.jpg" type="image/webp" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet" />

  <!-- AOS - light animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>

<body>
  <!-- header start -->

  <?php include "navbar.php"; ?>

  <!-- header end -->
  <!-- Breadcrumb -->
  <section class="inner-breadcrumb">
    <div class="container">
      <div class="breadcrumb-content">
        <h1>Roller</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Our Products
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <div class="container pt-lg-5 pt-3">
    <div class="section-title text-center">Roller</div>
    <p class="text-center">
      Unique Spairparts offers a range of Rollers designed for efficient soil compaction and road construction applications. Our Ride On Rollers are suitable for road development, infrastructure projects, and site preparation, helping contractors and construction professionals achieve uniform compaction and reliable performance.
    </p>
  </div>

  <!-- ================================= PRODUCT SEARCH ================================= -->
  <section class="product-search-section py-4">
    <div class="container">
      <div class="product-search-box">
        <i class="fas fa-search search-icon"></i>

        <input type="text" id="productSearch" class="form-control" placeholder="Search product by name..."
          autocomplete="off" />

        <button type="button" id="clearSearch" class="clear-search" aria-label="Clear search">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <p id="searchResultText" class="search-result-text"></p>
    </div>
  </section>

 

<!-- ========================================= Product Details Section 1 ========================================= -->

<section class="product-details-section py-5 product-item" data-product-name="Ride On Roller">

    <div class="container">

        <div class="row g-5 align-items-start">

            <!-- ================================= LEFT : PRODUCT IMAGE ================================== -->

            <div class="col-md-5">

                <div class="product-gallery sticky-product">

                    <!-- Main Image -->

                    <div class="product-main-image">

                        <img src="img/prod/Roller/1.png" alt="Ride On Roller"
                            class="img-fluid mainProductImage" />

                    </div>

                    <!-- Thumbnail Images -->

                    <div class="product-thumbnails">

                        <div class="product-thumb active">

                            <img src="img/prod/Roller/1.png"
                                alt="Ride On Roller Front View"
                                onclick="changeProductImage(this)" />

                        </div>

                        <div class="product-thumb">

                            <img src="img/prod/Roller/1.1.png"
                                alt="Ride On Roller Side View"
                                onclick="changeProductImage(this)" />

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================= RIGHT : PRODUCT CONTENT ================================== -->

            <div class="col-md-7">

                <div class="product-content">

                    <span class="section-kicker mb-0">
                        Roller
                    </span>

                    <h1 class="product-title">
                        Ride On Roller
                    </h1>

                    <p class="product-model">
                        Model: <strong>FVR850</strong>
                    </p>


                    <!-- ================================= SPECIFICATIONS ================================= -->

                    <div class="product-specifications">

                        <h3>Product Specifications</h3>

                        <div class="table-responsive">

                            <table class="table product-spec-table">

                                <tbody>

                                    <tr>
                                        <th>Operating Weight</th>
                                        <td>800 kg</td>

                                        <th>Drum Width</th>
                                        <td>700 mm</td>
                                    </tr>

                                    <tr>
                                        <th>Engine Power</th>
                                        <td>10 HP</td>

                                        <th>Roller Type</th>
                                        <td>Double Drum</td>
                                    </tr>

                                    <tr>
                                        <th>Fuel Type</th>
                                        <td>Diesel</td>

                                        <th>Model Name/Number</th>
                                        <td>FVR850</td>
                                    </tr>

                                    <tr>
                                        <th>Drive Type</th>
                                        <td>Self</td>

                                        <th>Warranty</th>
                                        <td>12 Months</td>
                                    </tr>

                                    <tr>
                                        <th>Engine Make</th>
                                        <td>Greaves</td>

                                        <th>Battery</th>
                                        <td>Amron</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!-- ================================= PRODUCT DESCRIPTION ================================= -->

                    <button type="button" class="read-more-btn" onclick="toggleDescription(this)">

                        Read More
                        <i class="fas fa-chevron-down"></i>

                    </button>

                    <div class="product-description">

                        <p>
                            The Ride On Roller is designed for
                            compacting soil, sand, gravel, and
                            asphalt surfaces in road construction
                            and repair projects.
                        </p>

                        <p>
                            The FVR850 model features a 10HP
                            diesel engine, 700mm drum width,
                            and 800kg operating weight for
                            effective surface compaction.
                        </p>

                        <p>
                            This double-drum roller supports
                            convenient operation in small
                            construction areas and comes
                            with a 12-month warranty.
                        </p>

                    </div>


                    <!-- ================================= BUTTONS ================================= -->

                    <div class="product-buttons">

                        <button class="border-0 bg-transparent">

                            <a href="https://wa.me/919311341657" class="btn btn-primary-custom">

                                Enquiry Now
                                <i class="fa-brands fa-whatsapp"></i>

                            </a>

                        </button>

                        <button class="border-0 bg-transparent">

                            <a href="tel:+919311341657" class="btn btn-dark-custom">

                                Call Now

                            </a>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



 

  <!-- ================= FOOTER ================= -->

  <?php include 'footer.php'; ?>

  <!-- footer end -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <!-- Counter Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll(".counter");
      let counterStarted = false;
      function runCounters() {
        if (counterStarted) return;
        const section = document.querySelector(".experience-strip");
        const sectionPosition = section.getBoundingClientRect().top;
        if (sectionPosition < window.innerHeight - 100) {
          counterStarted = true;
          counters.forEach((counter) => {
            const target = Number(counter.getAttribute("data-target"));
            const duration = 1800;
            const startTime = performance.now();
            function updateCounter(currentTime) {
              const progress = Math.min(
                (currentTime - startTime) / duration,
                1,
              );
              const value = Math.floor(progress * target);
              counter.textContent = value;
              if (progress < 1) {
                requestAnimationFrame(updateCounter);
              } else {
                counter.textContent = target;
              }
            }
            requestAnimationFrame(updateCounter);
          });
        }
      }
      window.addEventListener("scroll", runCounters);
      runCounters();
    });
  </script>

  <script>
    AOS.init({
      duration: 750,
      once: true,
      offset: 70,
    });

    document.getElementById("year").textContent = new Date().getFullYear();

    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", function () {
      backToTop.classList.toggle("show", window.scrollY > 400);
    });

    backToTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    function showFormMessage() {
      document.getElementById("formMessage").classList.add("show");
    }

    // Close mobile menu after clicking a navigation link
    document
      .querySelectorAll(".navbar-nav .nav-link")
      .forEach(function (link) {
        link.addEventListener("click", function () {
          const nav = document.getElementById("mainNav");
          if (nav.classList.contains("show")) {
            bootstrap.Collapse.getOrCreateInstance(nav).hide();
          }
        });
      });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const productsLink = document.getElementById("productsDropdown");
      const megaDropdown = document.querySelector(".mega-dropdown");

      if (!productsLink || !megaDropdown) return;

      productsLink.addEventListener("click", function (e) {
        if (window.innerWidth <= 991) {
          e.preventDefault();
          e.stopPropagation();

          megaDropdown.classList.toggle("show");

          const isOpen = megaDropdown.classList.contains("show");

          productsLink.setAttribute(
            "aria-expanded",
            isOpen ? "true" : "false",
          );
        }
      });
    });
  </script>
  <script>
    /* =========================================
       CHANGE PRODUCT IMAGE
    ========================================= */

    function changeProductImage(element) {
      if (!element) return;

      // Find the current product section
      const productSection = element.closest(".product-item");

      if (!productSection) return;

      // Find main image only inside this product section
      const mainImage = productSection.querySelector(".mainProductImage");

      if (!mainImage) return;

      // Change main image
      mainImage.src = element.src;

      // Remove active class only from thumbnails
      // inside this product section
      productSection
        .querySelectorAll(".product-thumb")
        .forEach(function (thumb) {
          thumb.classList.remove("active");
        });

      // Add active class to clicked thumbnail
      const clickedThumb = element.closest(".product-thumb");

      if (clickedThumb) {
        clickedThumb.classList.add("active");
      }
    }

    /* =========================================
       READ MORE / READ LESS
    ========================================= */
    function toggleDescription(button) {
      // Find the description belonging to the clicked button
      const description = button.nextElementSibling;

      // Make sure it is the correct element
      if (
        !description ||
        !description.classList.contains("product-description")
      ) {
        return;
      }

      // Toggle this description only
      const isOpen = description.classList.toggle("show");

      // Update only the clicked button
      if (isOpen) {
        button.innerHTML = 'Read Less <i class="fas fa-chevron-up"></i>';
      } else {
        button.innerHTML = 'Read More <i class="fas fa-chevron-down"></i>';
      }
    }
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const searchInput = document.getElementById("productSearch");
      const clearButton = document.getElementById("clearSearch");
      const resultText = document.getElementById("searchResultText");
      const noProducts = document.getElementById("noProductsFound");
      const products = document.querySelectorAll(".product-item");

      searchInput.addEventListener("input", function () {
        const searchValue = this.value.toLowerCase().trim();

        let visibleProducts = 0;

        products.forEach(function (product) {
          const productName = product
            .getAttribute("data-product-name")
            .toLowerCase();

          if (productName.includes(searchValue)) {
            product.style.display = "";

            visibleProducts++;
          } else {
            product.style.display = "none";
          }
        });

        /* Show / hide clear button */
        if (searchValue !== "") {
          clearButton.style.display = "block";
        } else {
          clearButton.style.display = "none";
        }

        /* Result message */
        if (searchValue === "") {
          resultText.textContent = "";
        } else if (visibleProducts > 0) {
          resultText.textContent =
            visibleProducts +
            (visibleProducts === 1 ? " product found" : " products found");
        } else {
          resultText.textContent = "No products found";
        }

        /* No product message */
        if (visibleProducts === 0 && searchValue !== "") {
          noProducts.style.display = "block";
        } else {
          noProducts.style.display = "none";
        }
      });

      /* Clear search */
      clearButton.addEventListener("click", function () {
        searchInput.value = "";

        products.forEach(function (product) {
          product.style.display = "";
        });

        clearButton.style.display = "none";
        resultText.textContent = "";
        noProducts.style.display = "none";

        searchInput.focus();
      });
    });
  </script>
</body>

</html>