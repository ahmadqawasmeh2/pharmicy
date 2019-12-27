  @extends('layout.app')
@section('content')
@include('include.slider')
<div class="wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row" style="margin-top: 1%;">

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"> <i class="fab fa-cloudscale"></i> </span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-success">
              <span class="info-box-icon"><i class="fas fa-pills"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Drug</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"> <i class="fas fa-sort-amount-up-alt"></i> </span>

              <div class="info-box-content">
                <span class="info-box-text">Amount of consumption</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-danger">
              <span class="info-box-icon"><i class="fas fa-sort-amount-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Available quantity</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>


             <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #007bff">
                <h3 class="card-title">WareHouses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th> Name Drug</th>
                      <th>Name Warehouses</th>
                      <th>Country</th>
                      <th>Production Date</th>
                       <th>Expiry date</th>
                      <th>Name Pharmicy</th>
                      <th>Quantity</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>Ahmad</td>
                      <td>Revainen</td>
                      <td>Dar</td>
                      <td>Irbid</td>
                      <td>11-7-2019</td>
                       <td>11-7-2022</td>
                       <td>pharmicy one</td>
                        <td>40</td>
                         <td>50jd</td>
                    </tr>
                  </tbody>
                </table>
              </div>
               
              <!-- /.card-body -->
            </div>
              <div class="col-12" style="margin-top:-.9%">
      <button type="button" class="btn btn-block bg-gradient-info btn-lg "onclick="printPage()">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
         <script type="text/javascript">
         function printPage(){
   var tableData ='<table border="1" >'+ document.getElementsByTagName('table')[0].innerHTML+'</table>';
                var data ='<input type="submit" value="Export Pdf" onclick="window.print()">'+tableData;       
                myWindow=window.open('','','width=800,height=600');
                myWindow.innerWidth = 900;
                myWindow.innerHeight = 500;
                myWindow.screenX = 0;
                myWindow.screenY = 0;
                myWindow.document.write(data);
                myWindow.focus();
            };
        </script>

            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    </div>
    </div>
</div>
</div>



@endsection