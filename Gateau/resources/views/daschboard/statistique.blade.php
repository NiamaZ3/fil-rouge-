<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/cards/card-1/assets/css/card-1.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    
                    <a href="" class="nav-link text-white-50">Mon Gâteaux</a>
                    <img class="close align-self-start" src="" alt="icon">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item active" style="width: 100%;">
                        <a href="/pageproduit" class="sidebar_link">Produit</a>
                    </li>
                   
                    <li class="sidebar_item">
                        <a href="/pagecategorie" class="sidebar_link">Categorie </a>
                    </li>
                    <li class="sidebar_item">
                        <a href="contact.php" class="sidebar_link">Statistique</a>
                    </li>
                  
        </aside>
        <div class="main">
            <nav class="navbar justify-content-space-between pe-4 ps-2">
                <button class="btn open">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar  gap-4">
                    <div class="card new w-auto">
                        <div class="list-group list-group-light">
                            <div class="list-group-item px-3 d-flex justify-content-between align-items-center ">
                                <p class="mt-auto">Notification</p><a href="#"><img src="" alt="icon"></a>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                        </div>
                    </div>
                    <div class="inline"></div>
                 
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <div class="name">Admin</div>

                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                {{-- <form action="{{ route('logout') }}" method="post"> --}}
                                    @csrf
                                <button class="dropdown-item" type="submit">Log out</button></form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        {{-------------------tableau --------------------}}
        <!-- Card 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
          <div class="row gy-4">
            <div class="col-12 col-sm-6">
              <div class="card widget-card border-light shadow-sm">
                <div class="card-body p-4">
                  <div class="row">
                    <div class="col-8">
                      <h5 class="card-title widget-card-title mb-3">Les produits :</h5>
                      <h4 class="card-subtitle text-body-secondary m-0">Nombre de produit</h4>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-end">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex align-items-center mt-3">
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card widget-card border-light shadow-sm">
                  <div class="card-body p-4">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Les commandes  : </h5>
                        <h4 class="card-subtitle text-body-secondary m-0">Nombre de commande </h4>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="card widget-card border-light shadow-sm">
                  <div class="card-body p-4">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Les catégories :</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">Nombre de categories</h4>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="card widget-card border-light shadow-sm">
                  <div class="card-body p-4">
                    <div class="row">
                      <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Les utlisateurs :</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">Nombre d'utilisateur</h4>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </section>
        </body>
        </html>

        {{-------------------tableau --------------------}}  
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="script.js"></script>
</body>

</html>