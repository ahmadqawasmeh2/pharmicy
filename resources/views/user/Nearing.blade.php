@extends('layout.app')
@section('content')
@include('include.nav')
   <div class="row" style="margin-top: 4%; width: 100%; margin-left: 0%;">
          <div class="col-12">
            <div class="card" >
            <div class="card-header" style="background-color:#4b862d8c">
                <h3 class="card-title">Medicine Nearing Complete</h3>

                 <div class="card-tools" >
                  <div class="input-group input-group-sm" style="width: 150px;">
                   
        		 <div class="btn-group">
 <button type="button" class="btn " style="background-color:#4b862d8c;margin-left:45%;">Filter</button>
  <button type="button"class="btn dropdown-toggle"data-toggle="dropdown" style="background-color:#4b862d8c;">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Expiration</a>
                      <a class="dropdown-item" href="#">The Quantity Expire</a>
                    </div>
                  </div>

                  </div>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                      <th>Name</th>
                      <th>Date Expiration </th>
                      <th>Quantity</th>
                      <th>Order Number</th>
                      <th>Date</th>
                      <th>Marginal quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ahmad</td>
                      <td>0896465465</td>
                       <td>11</td>
                         <td>11.00</td>
                      <td>11-7-2022</td>
                      <td>AhmadAl-Qawasmeh</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

@endsection