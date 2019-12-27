@extends('layout.app')
@section('content')
@include('include.slider')
  
 <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">  <i class="fas fa-warehouse"></i>Enter The Warehouses</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">FullName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="FullName">
                  </div>


                  <div class="form-group">
                     <label for="vat" class=" form-control-label">Country</label>
                        <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Irbid</option>
                        <option value="2">Amman</option>
                       </select>
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