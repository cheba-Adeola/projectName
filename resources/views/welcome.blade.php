@extends('layouts.app')

@section('content')
<div class="container">
      <h1>Les derniers appareils publiés</h1>
      <div class="m-3 row">
                   <div class="md-3 col col-sm mb-3">
                  
                        <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('/images/img8.jfif')}}" alt="Card image cap">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                        </div>
                  </div>
                  <div class="md-3 col col-sm mb-3">
                        <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('/images/img7.jfif')}}" alt="Card image cap">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                        </div>
                  </div>
                  <div class="md-3 col col-sm mb-3">
                        <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('/images/img6.jfif')}}" alt="Card image cap">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                        </div>
                  </div>
                  <div class="md-3 col col-sm">
                        <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('/images/img5.jfif')}}" alt="Card image cap">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                        </div>
                  </div>
                  <div class="md-3 col col-sm">
                        <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('/images/img4.jfif')}}" alt="Card image cap">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                        </div>
                  </div>
            <div class="md-3 col col-sm">
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/img3.jfif')}}" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                  </div>
            </div>
            <div class="md-3 col col-sm">
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/img2.jfif')}}" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                  </div>
            </div>
            <div class="md-3 col col-sm">
                  <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/img1.jfif')}}" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                  </div>
                  
            </div>
      </div>
</div>
@endsection