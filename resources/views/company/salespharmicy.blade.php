@extends('layout.app')
@section('content')
@include('include.slider')
<section>
	<div class="container">
<div class="invoice p-3 mb-3" style="margin-top:1.9%">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                   <i class="fas fa-file-prescription"></i>   Dar Dawa
                    <small class="float-right">Date:12/12/2019</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Ahmad</strong><br>
                    Jordan<br>
                   Irbid<br>
                    Phone: 079534485<br>
                    Email: info@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Ahmad</strong><br>
                    Jordan<br>
                   Irbid<br>
                    Phone: 079534485<br>
                    Email: info@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Bill Number #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Num</th>
                      <th>Name Product</th>
                      <th>Quantity</th>
                      <th>Order ID</th>
                      <th>Name Of The Delegate</th>
                      <th>Country</th>
                       <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Revanen</td>
                      <td>40</td>
                      <td>4F3S8J</td>
                      <td>Ahmad</td>
                       <td>Irbid</td>
                        <td>12/3/2020 3.00Pm</td>
                    </tr>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>250.30 Jd</td>
                      </tr>
                      <tr>
                        <th>Sales Tax (16%)</th>
                        <td>10.34 Jd</td>
                      </tr>
                      <tr>
                        <th>Quantity:</th>
                        <td>40 per cartoin</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>265.24 Jd</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
             
 </section>
                <div class="col-12" style="margin-top:-5.9%;">
      <button type="button" class="btn btn-primary float-right" style="margin-right:5%;" onclick="printPage()">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
            </div>
              <script type="text/javascript">
         function printPage(){

   var tableData ='<table border="1">'+ document.getElementsByTagName('section')[0].innerHTML+'</table>';
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

@endsection