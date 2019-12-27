@extends('layout.app')
@section('content')
@include('include.nav1')

          <!-- left column -->
          <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-search"></i>Search Drug</h3>
              </div>
            
              <form role="form" action="" method="">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Drug Name</label>
                   <input type="text" class="form-control" placeholder="Drug Name">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Caliber</label>
                 <input type="text" class="form-control" placeholder="Caliber">
                </div>
              </div>
            </div>


               <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Dosage</label>
                   <input type="text" class="form-control" placeholder="Dosage">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Quantity</label>
                 <input type="text" class="form-control" placeholder="Quantity">
                </div>
              </div>
            </div>

            

            </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
          </div>



          <div class="row" style="margin-top: 4%; width: 100%; margin-left: 0%;">
          <div class="col-12">
            <div class="card" >
            <div class="card-header" style="background-color:#007bff">
                <h3 class="card-title">Output Search Drug</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                   <th>Drug Name</th>
                      <th>Caliber</th>
                        <th>Dosage</th>
                          <th>Quantity</th>
                            <th>Number of pills per day</th>
                           <th>The number of days</th>
                             <th>Add Drug</th>
                    </tr>
                  </thead>


                  <tbody>
                     <form action="/write" method="">
                    <tr>
                      <td>Ahmad</td>
                      <td>0896465465</td>
                       <td>11</td>
                         <td>11.00</td>

                          <td>
                           <div class="form-group col-md-8">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                          </td>

                           <td>
                            <div class="form-group col-md-8">
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                          </td>
                           

                           <td>
                            <button type="submit" class="btn btn-primary">Add</button>
                          </td>
                    </tr>
                      </form>
                  </tbody>

                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       
@endsection