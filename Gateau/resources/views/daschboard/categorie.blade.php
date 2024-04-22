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
       
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    
                    <a href="" class="nav-link text-white-50"> Mon Gâteaux</a>
                    <img class="close align-self-start" src="" alt="icon">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item active" style="width: 100%;">
                        <a href="/pageproduit" class="sidebar_link">Produit</a>
                    </li>
                    <li class="sidebar_item">
                            <a href="/pagecommande" class="sidebar_link">Tous les Commandes</a>
                     </li>
                     <li class="sidebar_item">
                        <a href="/pagecommande" class="sidebar_link">Les Commandes Valider</a>
                 </li>
                    <li class="sidebar_item">
                        <a href="/pagecategorie" class="sidebar_link">Categorie </a>
                    </li>
                    <li class="sidebar_item">
                        <a href="/pagestati" class="sidebar_link">Statistique</a>
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
        <a id="btnAdd" title="Ajouter Une Produit">
            Ajouter une nouvelle categorie
          </a>
        <div class="table-container">
         
        <table class="table caption-top" >

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $categorie)
    <tr>
      <td>{{$categorie->id}}</td>
      <td>{{$categorie->name}}</td>
      <td></td>
      <td>
      <button class="text-red-600" data-bs-toggle="modal" data-bs-target="#updateCategory{{$categorie->id}}">Modifier</button>
      {{-- --------------- update modal -------- --}}
<div class="modal fade" id="updateCategory{{$categorie->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="updatecategorie/{{$categorie->id}}" method="POST">
            @csrf
                <div class="modal-body">
                    
                    <input type="text" class="form-control" name="name" value="{{$categorie->name}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
</div>
      <a href="/deletecategorie/{{$categorie->id }}" class="text-red-600 hover:text-red-800" >Supprimer</a>

      </td>
    </tr>
    @endforeach 
</table>

</div>
{{-- <a href="" id="btnAdd" title="Ajouter Une Produit">
    Ajouter une nouvelle categorie
  </a> --}}
    </body>
    </html>

 
{{-- --------------- add modal -------- --}}
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="insertCategorie" method="POST">
                    @csrf

                    <div class="modal-header">						
                        <h4 class="modal-title">Ajouter Categorie</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group" >
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>		
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- ---------------  fin add modal -------- --}}

{{-- --------------- update modal -------- --}}
{{-- <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Modifier cette categorie</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div> --}}


{{-- --------------- fin update modal -------- --}}


        {{------------------- fin tableau --------------------}}  
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("btnAdd").addEventListener("click", function() {
            var myModal = new bootstrap.Modal(document.getElementById('addEmployeeModal'));
            myModal.show();
          });
     </script>
{{-- 
     <script>
        document.getElementById("btnupdate").addEventListener("click", function() {
            var myModal = new bootstrap.Modal(document.getElementById('editEmployeeModal'));
            myModal.show();
          });
     </script> --}}




</body>

</html>