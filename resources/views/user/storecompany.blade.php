@extends('layout.app')
@extends('layout.app2')
@section('content')
@include('include.nav')

  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Search by Name</h3>
           <input type="text" class="form-contro" placeholder="Search by Name">
           <button class="btn btn-secondary" type="button" id="Sea">
                   <i class="fa fa-search"></i>
           </button>
           </div>
        </div>

    
        <div class="row" style="margin-top: 7%;"> 
          <div class="col-sm-6 col-lg-4 text-center item mb-4" style="width: 90%">
            <span class="tag">Sale</span>
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol </a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
         <div class="col-sm-6 col-lg-4 text-center item mb-4">
          
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol </a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
          
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol </a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
    
         <div class="col-sm-6 col-lg-4 text-center item mb-4">
            
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol </a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
         <div class="col-sm-6 col-lg-4 text-center item mb-4">
          
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
         <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>

        
       <div class="col-sm-6 col-lg-4 text-center item mb-4">
         
            <a href="/shopsingle"> <img src="img/1.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="/shopsingle">paracetamol</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    

@endsection