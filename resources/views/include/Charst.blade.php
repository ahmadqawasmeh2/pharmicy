
    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
     <div class="container-fluid" style="margin-top: 1.4%">
<div class="container">
    <div class="row">
        <div class="col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                <div class="panel-body">
                    <div id="performance2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  
<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var performance = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67],
            Sales = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7,8,99,102,11,22,33,45,54,65,44],
            budget = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];

        $("#performance1").shieldChart({
            primaryHeader: {
                text: "Quarterly Performance"
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#performance2").shieldChart({
            primaryHeader: {
                text: "Sales"
            },
            dataSeries: [{
                seriesType: "bar",
                collectionAlias: "Sales",
                data: Sales

            }]
        });

        $("#performance3").shieldChart({
            primaryHeader: {
                text: "Budget"
            },
            dataSeries: [{
                seriesType: "line",
                collectionAlias: "Budget",
                data: budget
            }]
        });
    });
</script>
<!-- Performance Report - END -->

</div>

</body>
</html>