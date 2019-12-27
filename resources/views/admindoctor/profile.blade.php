@extends('layout.app')
@section('content')
@include('include.nav1')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/default-150x150.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">PharmicyOne</h3>

                <p class="text-muted text-center"></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                 
                </ul>

               <div class="text-left">
                   <span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">MyAds</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Ads</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Information</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <section class="content">

      <!-- Default box -->
      <div class="card-body table-responsive p-0" style="height: 300px;">

                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Sales</th>
                      <th>price</th>
                      <th>price To Sale</th>
                      <th>StartTime</th>
                      <th>EndTime</th>
                      <th>Description</th>
                      <th>photos of the product</th>
                       <th>Edit</th>
                     
                      

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ravene</td>
                      <td>yes</td>
                      <td>12.00</td>
                      <td>6.00</td>
                      <td>2.00</td>
                      <td>11.00</td>
                      <td>something beutiful</td>
                      <td>
                      	
                       <div class="container">
  
  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" >Images</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Images</h4>
        </div>
        <div class="modal-body">
        	 <div class="card-body">
                <div class="row">

                   <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                 <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                   <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                   <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                   <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

               <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>

                  <div class="col-md-3">
                      <img src="img/default-150x150.png" class=" img-fluid mb-2" alt="black sample"/>
                  </div>
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

                      </td>

               <td><a class="btn btn-info" href="#timeline" data-toggle="tab">Edit</a></td>
                    </tr>



                    
                   
                  </tbody>
                </table>
              </div>
      <!-- /.card -->

    </section>
                    <!-- /.post -->

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Ads</h3>
            </div>
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

               <div >
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   <div class="">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Information</h3>
            </div>
            <form>
            <div class="card-footer">

            	 <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/default-150x150.png"
                       alt="User profile picture">
               <input type="file" class="btn btn-secondary btn-sm" value="Change profile picture">
                </div>

            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">FullName</label>
                <input type="text" id="inputName" class="form-control" placeholder="FullName">
              </div>

              <div class="form-group">
                <label for="inputDescription">UserName</label>
                 <input type="text" id="inputName" class="form-control" placeholder="UserName">
              </div>

              <div class="form-group">
                <label for="inputStatus">PhoneNumber</label>
                <input type="text" id="inputName" class="form-control" placeholder="PhoneNumber">
              </div>

              <div class="form-group">
                <label for="inputClientCompany">Old Password</label>
                <input type="text" id="inputClientCompany" class="form-control" placeholder="old password">
              </div>

              <div class="form-group">
                <label for="inputClientCompany">New Password</label>
                <input type="text" id="inputClientCompany" class="form-control" placeholder="New password">
              </div>

               <div class="form-group">
                <label for="inputClientCompany">Retype Password</label>
                <input type="text" id="inputClientCompany" class="form-control" placeholder="Retype Password">
              </div>

               <div >
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


@endsection