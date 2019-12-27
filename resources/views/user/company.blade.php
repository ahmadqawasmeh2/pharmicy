@extends('layout.app')
@section('content')
@include('include.nav')


<section  style="margin-top:1%;">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0" >
        	<div class="card-header">

        		 <div class="btn-group">
                    <button type="button" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Top Rated</a>
                      <a class="dropdown-item" href="#">Less evaluation</a>
                    </div>
                  </div>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
          <div class="row d-flex align-items-stretch">
               <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch" style="margin-top: 1%;">
              <div class="card bg-light">
                <a href="/storecompany">
                <div class="card-header text-muted border-bottom-0">
                  Dar AlDawa Plant
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Monther Nabih Nabulsi</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Dar Al Dawa for Development and Investment (known as: Dar Al Dawa) is a public company listed on the ASE since January 2011. Dar Al Dawa operates </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Wadi Saqra Street - POBox 9364 Amman 11191 Jordan</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone:+962 6 5728115</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="img/default-150x150.png" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                </a>
                <div class="card-footer">
                  <div class="text-right" >
                    <a href="/compose" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>



@endsection