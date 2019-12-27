@extends('layout.app')
@section('content')
@include('include.nav')
   <div class="row" style="margin-top: 4%; width: 100%; margin-left: 0%;">
          <div class="col-12">
            <div class="card" >
            <div class="card-header" style="background-color:#4b862d8c">
                <h3 class="card-title">Recipes have been spent</h3>

                 <div class="card-tools" >
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">

                <table class="table table-head-fixed">
                  <thead>
                   <th>Patient Name</th>
                      <th>National Number</th>
                        <th>Age</th>
                          <th>Time</th>
                      <th>Date of exchange</th>
                      <th>Name Of Docter</th>
                      <th>Reciper</th>
                      

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
                      <td>
                        
                       <div class="container">
  
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" >Reciper</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Reciper</h4>
        </div>
        <div class="modal-body">
          <p>
          <ol type="1">
            <li>A</li>
              <li>B</li>
                <li>C</li>
                  <li>D</li>
                    <li>E</li>
          </ol>
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

                      </td>
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