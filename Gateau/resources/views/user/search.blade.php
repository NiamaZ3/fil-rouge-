@foreach ($produits as $produit )
                        @csrf
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        
                        <div class="card product-item border-0 mb-4">
                           
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">

                                
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid" src="{{ asset($produit->image) }}" alt="">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3">{{$produit->name}} </h6>
                                    <div class="d-flex justify-content-center">
                                        <h6>{{$produit->prix}} DH</h6><h6 class="text-muted ml-2"><del></del></h6>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="/detail/{{$produit->id }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Voir Detail</a>
                                    <span href="" class="btn btn-sm text-dark p-0" id="btnAjoutP"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter au panier</span>
                                </div>
                            </div>
                            
                    </div>
                </div>
                    @endforeach