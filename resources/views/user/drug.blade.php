@extends('layout.app')
@section('content')
@include('include.nav')
   <div class="row" style="margin-top: 4%; width: 100%; margin-left: 0%;">
          <div class="col-12">
            <div class="card" >
            <div class="card-header" style="background-color:#4b862d8c">
                <h3 class="card-title">Search Drug</h3>

                 <div class="card-tools" >
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">

                <table class="table table-head-fixed">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

@endsection