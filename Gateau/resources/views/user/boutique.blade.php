<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mon gâteaux </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->

    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span
                        class="text-primary font-weight-bold border px-3 mr-1">Mon</span>Gâteaux</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
       
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a> Bonjour : {{Auth::user()->name}} </a> 
            @guest
            <a href="/pagelogin" class="btn border" >Login</a>
        
            <a href="/pageregister" class="btn border">Register</a>
            </div>
            @else
            <a href="/logout" >LogOut</a>
            @endguest
    </div>
</div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">

            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">Mon</span>Gâteaux</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/showindex" class="nav-item nav-link">Home</a>
                            <a href="/boutique" class="nav-item nav-link">E-Boutique</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="/panier" class="nav-item nav-link">Panier</a>
                        </div>
                        {{-- <div class="navbar-nav ml-auto py-0">
                            <a href="/pagelogin" class="nav-item nav-link">Login</a>
                            <a href="/pageregister" class="nav-item nav-link">Register</a>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Shop Start -->


    <div class="input-group-append mx-5" style="width: 50%"  >
        <input type="text" class="form-control main m-0" id="searchgateau" placeholder="Search...">
        <span class="input-group-text bg-transparent text-primary">
            <i class="fa fa-search"></i>
        </span>
    </div>
    <div class="container-fluid pt-5">
     <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
          <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                      
                    <div class="d-flex">
                    <h5 class="font-weight-semi-bold mb-4">Chercher votre produit par categorie</h5>
                </div>
                <ul class="category-list m-0 p-0">
                    @foreach ($categories as $categorie)

                    <li><a href="/filter/{{$categorie->id}}">{{ $categorie->name }}<span class="float-right">
                        </a></li>
                    @endforeach

                </ul>
            </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
           
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3" id="searchResults">
                    <div class="col-12 pb-1">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                        </div>
                    </div>
                    @foreach ($produits as $produit)
                        @csrf
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">

                            <div class="card product-item border-0 mb-4">

                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">


                                    <div
                                        class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid" src="{{ asset($produit->image) }}" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">{{ $produit->name }} </h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>{{ $produit->prix }} DH</h6>
                                            <h6 class="text-muted ml-2"><del></del></h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="/detail/{{ $produit->id }}" class="btn btn-sm text-dark p-0"><i
                                                class="fas fa-eye text-primary mr-1"></i>Voir Detail</a>
                                        {{-- <span href="" class="btn btn-sm text-dark p-0" id="btnAjoutP"><i class="fas fa-shopping-cart text-primary mr-1" type="submit"></i>Ajouter au panier</span> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border border-white px-3 mr-1">Mon</span> gâteaux</h1>
                </a>
                <p>Mon gâteaux vous accompagne pour toutes les occasions : Mariages et autres réceptions, fête du
                    Ramadan, cadeaux d’entreprises et autres idées cadeaux, ou simplement pour une pause-café ou thé…
                </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rue moulay yousef Marakech</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Mon gateaux@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+212 628654547</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- ----------model pour ajouter quantite--------- --}}
   
    {{-- ---------- fin model pour ajouter quantite--------- --}}
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bo </script>
                otstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        const searchitem = document.getElementById('searchgateau');
        const searchgateau = document.getElementById('searchResults');
    
        searchitem.addEventListener("keyup", function() { 
            fetchSearchItemResults();
        });
    
        function fetchSearchItemResults() {
            console.log('Fetching results');
            fetch(`/searchItem?search=${searchitem.value}`)
                .then(res => res.text())
                .then(data => {
                    searchgateau.innerHTML = data;
                })
                .catch(error => console.error('Error while fetching results:', error));
        }
    </script>
</body>

</html>
