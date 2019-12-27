@extends('layout.app')
@section('content')
@include('include.slider')


    <!-- Main content -->
    <section class="content" style="margin-top:1.9%">

      <!-- Default box -->
      <div class="card">
        <div class="card-header" style="background-color: #39cccc">
          <h3 class="card-title">Information Representative</h3>
        </div>
        <div class="card-body">
         
              <div class="row">
               <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-primary">
              <span class="info-box-icon"><i class="fab fa-cloudscale"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Sale Today</span>
                <span class="info-box-number">41Jd</span>
              </div>
            </div>
          </div>


                 <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-success">
              <span class="info-box-icon"><i class="fas fa-file-contract"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Monthly Sale</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </div>


               <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><i class="fas fa-weight"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Sale</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </div>


           <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-danger">
              <span class="info-box-icon"><i class="far fa-envelope"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Messages</span>
                <span class="info-box-number">41</span>
              </div>
            </div>
          </div>
         </div>



              <div class="row">
                <div class="col-12">
                  <center><h4>Representative</h4></center>
                  
                </div>
              </div>
            </div>

            <div class="col-md-10" style="margin-left:2%;">
              <h3 class="text-primary"><i class="fas fa-user-tie"></i> Ahmad</h3>
              <p class="text-muted"><strong>About</strong>:Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
          
              <p class="text-muted"><strong><i class="fas fa-lg fa-building"></i>Address</strong>:Irbid</p>
             
              
            
      <p class="text-muted"><strong><i class="fas fa-lg fa-phone"></i>Phone Number</strong>:+962794563148</p>
              
              <br>


            <div class="text-muted">
                <h3 class="text-primary"><i class="fas fa-warehouse"></i>The Name Of The Warehouse</h3>
                  <b class="d-block"><i class="fas fa-file-signature"></i>Dar Dawa</b>
               <br>
                <h3 class="text-primary"><i class="fas fa-thumbtack"></i>Location Of The Warehouse</h3>
                  <b class="d-block"><i class="fas fa-search-location"></i>Irbid</b>
               
              </div>

              <div class="text-center mt-5 mb-3" style="margin-left:11%;">
                  <button type="button" class="btn btn-block bg-gradient-info btn-lg " data-toggle="modal" data-target="#myModal" >Rating</button>
                <a href="#" class="btn btn-block bg-gradient-danger btn-lg">Block User</a>
              </div>
            </div>
 
            </div>
          </div>
    </section>

@include('include.rating')
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Rating</h4>
        </div>
          <form>
        <div class="modal-body">
       <div id="basic" style="font-size: 2em;"></div>
     </div>
      <div class="modal-footer">
      
          <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
       <script>
  $("#basic").rating({
        "click": function (e) {
            console.log(e);
            $("#basicInput").val(e.stars);
        }
    });
 
  </script>
    @endsection