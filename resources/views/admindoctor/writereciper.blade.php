
@extends('layout.app')
@section('content')
@include('include.nav1')
     <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="far fa-edit"></i>Write Recipe</h3>
              </div>
            
              <form role="form" action="" method="">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Patient Name</label>
                   <input type="text" class="form-control" placeholder="Patient Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Age</label>
                 <input type="text" class="form-control" placeholder="Age">
                </div>

                  <div class="form-group">
                  <label>Time</label>
                 <input type="time" class="form-control" disabled>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>ID National</label>
                 <input type="text" class="form-control" placeholder="ID National">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Name Doctor</label>
                <input type="text" class="form-control" disabled>
                </div>

                  <div class="form-group">
                  <label>Date</label>
                <input type="date" class="form-control" disabled>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top: 4%; width: 100%; margin-left: 0%;">
          <div class="col-12">
            <div class="card" >
            <div class="card-header" style="background-color:#007bff">
                <h3 class="card-title"> Recipe</h3>
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
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ahmad</td>
                      <td>0896465465</td>
                       <td>11</td>
                         <td>11.00</td>
                          <td>3</td>
                           <td>5</td>
                     
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection