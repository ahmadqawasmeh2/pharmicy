@extends('layout.app')
@extends('layout.app2')
@section('content')
@include('include.nav')
  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class=" text-center">
              <img src="img/1.jpg" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">paracetamol, 500mg</h2>
            <p>Tablets,chewable tablets,capsules,solution,drops,suppositories,cysts.</p>
            <div class="mb-5" style="margin-top:5%;">
              <div class="input-group mb-3" style="max-width:250px;border-radius: 1%;">
                <label>Quantity:</label>
             <input type="text" class="form-control text-center" value="" placeholder="Quantity" style="margin-left:3%">
              </div>
     <!--   <p><del>$95.00</del>  <strong class="text h4">$55.00</strong></p> -->
            </div>
    <p><a href="" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Request</a></p>

            <div class="mt-5" >
 <ul class="nav nav-pills mb-3 custom-pill"id="pills-tab"role="tablist" style="margin-left: -30%;
 margin-top:15%">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Drug Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Quantity</a>
                </li>
            
              </ul>
              <div class="tab-content" id="pills-tabContent" style="margin-left:-60%;width:140%">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Atc Code:</th>
                      <th>Name Drug</th>
                      <th>Type</th>
                       <th>Packing</th>
                      <th>Effective Material</th>
                       <th>The Royal Company</th>
                      <th>the focus</th>
                    </thead>
                    <tbody>
                     
                      
                      <tr>
                        <th scope="row">N02BE01</th>
                        <td>paracetamol</td>
                        <td>Normal</td>
                         <td>ml60</td>
                          <td>paracetamol 250mg/5ml</td>
                           <td>the arab </td>
                             <td>mg/5ml 250</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            
                  <table class="table custom-table">
                     <thead>
                      <th>Quantity</th>
                      <th>Marginal quantity</th>
                        <th>Price per carton</th>
                     
                    </thead>

                    <tbody>
                      <tr>
                        <td>400</td>
                        <td class="bg-light">200</td>
                         <td class="bg-light">10</td>
                      </tr>
                     
                    </tbody>
                  </table>
            
                </div>
            
              </div>
            </div>

    
          </div>
        </div>
      </div>
    </div>


@endsection