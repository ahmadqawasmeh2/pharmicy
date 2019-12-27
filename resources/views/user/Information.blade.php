
@extends('layout.app')
@section('content')
@include('include.nav')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="">
      <div class="">
        <!-- SELECT2 EXAMPLE -->
        <div class="">
          <!-- left column -->
          <div class="col-md-12" style="margin-top: 1%;">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">  <i class="fas fa-notes-medical"></i>Adding Information Pharmicy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name Pharmicy</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                           <label for="vat" class=" form-control-label">Location</label>
                           <input type="text" id="vat"  class="form-control" placeholder="Location">
                  </div>


                  <div class="form-group">
                           <label for="vat" class=" form-control-label">StartTime</label>
                           <input type="datetime-local" name="time"  class="form-control">
                  </div>

                    <div class="form-group">
                           <label for="vat" class=" form-control-label">End Time</label>
                            <input type="datetime-local" name="time"  class="form-control">
                  </div>



                     <div class="form-group">
                          <label for="vat" class=" form-control-label">Working days</label>
                          <input type="week" name="week" id="camp-week" class="form-control" required>
                     </div>
                     
                      <div class="form-group">
                          <label for="vat" class=" form-control-label">Shifts</label>
                           <select name="select" id="select" class="form-control">
                           <option value="0">Please select</option>
                           <option value="1">Yes</option>
                           <option value="2">No</option>
                           </select>
                     </div>

                     

                     <div class="form-group">
                          <label for="vat" class=" form-control-label">Days Of Shifts And Number Of Hours</label>
                           <textarea type="text" id="vat" placeholder="Description" class="form-control"></textarea> 
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