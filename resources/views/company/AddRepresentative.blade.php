@extends('layout.app')
@section('content')
@include('include.slider')
  
 <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-tie"></i>Add Representative</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form">
                <div class="card-body">
                   <div class="form-group">
                     <label for="vat" class=" form-control-label">Type  User</label>
                        <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Supervisor</option>
                        <option value="2">Supervisor</option>
                       </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">FullName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="FullName">
                  </div>

                  <div class="form-group">
                     <label for="vat" class=" form-control-label">UserName</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="UserName">
                  </div>


                  <div class="form-group">
                           <label for="vat" class=" form-control-label">PhoneNumber</label>
                           <input type="number" id="vat"  class="form-control" placeholder="+962****">
                  </div>

                   <div class="form-group">
                           <label for="vat" class=" form-control-label">Password</label>
                           <input type="Password" id="vat"  class="form-control" placeholder="Password">
                  </div>


                   <div class="form-group">
                           <label for="vat" class=" form-control-label">Retype Password</label>
                           <input type="Password" id="vat"  class="form-control" placeholder="Retype Password">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>

@endsection