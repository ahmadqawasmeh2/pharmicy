
@extends('layout.app')
@section('content')
@include('include.nav')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
   
          <!-- left column -->
          <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus"></i>Adding Ads</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                     <label for="vat" class=" form-control-label">Sales</label>
                        <select name="select" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                       </select>
                  </div>

                  <div class="form-group">
                           <label for="vat" class=" form-control-label">price</label>
                           <input type="number" id="vat"  class="form-control">
                  </div>


                  <div class="form-group">
                          <label for="vat" class=" form-control-label">price To Sale</label>
                          <input type="number" id="vat"class="form-control">
                  </div>

                     <div class="form-group">
                          <label for="vat" class=" form-control-label">StartTime</label>
                          <input type="date" id="vat"class="form-control">
                  </div>

                  <div class="form-group">
                          <label for="vat" class=" form-control-label">EndTime</label>
                          <input type="date" id="vat"class="form-control">
                  </div>
                   <div class="form-group">
                          <label for="vat" class=" form-control-label">Description</label>
                          <textarea type="text" id="vat" placeholder="Description" class="form-control"></textarea> 
                     </div>

                    <div class="form-group">
                          <label for="customFile">Upload photos of the product </label>
                           <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" multiple>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
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