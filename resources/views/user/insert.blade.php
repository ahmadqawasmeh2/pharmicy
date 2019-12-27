@extends('layout.app')
@section('content')
@include('include.nav')

 <section class="">
      <div class="">
        <!-- SELECT2 EXAMPLE -->
        <div class="">
          <!-- left column -->
          <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="far fa-clipboard"></i></i>Insert Drug</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled="">
                  </div>

                  <div class="form-group">
                           <label for="vat" class=" form-control-label">Medicament Name</label>
                           <input type="text" id="vat"  class="form-control" placeholder="Medicament Name">
                  </div>

                   <div class="form-group">
                          <label for="vat" class=" form-control-label">Order Number</label>
                          <input type="number" id="vat"class="form-control">
                    </div>

                  <div class="form-group">
                          <label for="vat" class=" form-control-label">Pharmacy Quantity</label>
                          <input type="number" id="vat"class="form-control">
                  </div>

                   <div class="form-group">
                          <label for="vat" class=" form-control-label">Expiration medication</label>
                            <input type="date" id="vat"class="form-control">
                     </div>
   
                    
                     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   
          

             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


@endsection