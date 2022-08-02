<?php
$header_title = "Dashboard";
require_once('components/header.php');
?>

<!-- Main Block here-->
<div class="row">


    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">App Statistics</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-body ">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                <div class="legend">
                    <i class="fa fa-circle text-info"></i> Installed
                    <i class="fa fa-circle text-danger"></i> Uninstalled
                </div>
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Daily App Statistics
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Traffic Statistics</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-body ">
                <div id="chartPreferences2" class="ct-chart ct-perfect-fourth"></div>
                <div class="legend">
                    <i class="fa fa-circle text-info"></i> Website
                    <i class="fa fa-circle text-danger"></i> Mobile App
                </div>
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Total Website Hits: 20000
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Today</h4>
                <p class="card-category">All about today!</p>
            </div>
            <div class="card-body">
                <div class="time">
                    <center>
                        <iframe src="https://nepalicalendar.rat32.com/clockwidget/nepali-clock-widget-unite-nepal.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:305px; height:190px;" allowtransparency="true"></iframe>
                </div>
                </center>
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Working Platform
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Website Analytics</h4>
                <p class="card-category">Live Website Analytics!</p>
            </div>
            <div class="card-body">
                Total Hits Today: 2000 <br>
                Total Hits this month: 2000 <br>
                Total Hits this year: 2000 <br>
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Supported by Sugar Statistics Engine!
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Mobile App Analytics</h4>
                <p class="card-category">Live Website Analytics!</p>
            </div>
            <div class="card-body">
                API Hits Today: 2000 <br>
                Total API Hits this month: 2000 <br>
                Total API Hits this year: 2000 <br>
                <hr>
                <div class="stats">
                    <i class="fa fa-clock-o"></i> Supported by Sugar Statistics Engine!
                </div>
            </div>
        </div>
    </div>
    


</div>


<?php
include_once('components/footer.php');
?>

<script src="/assets/js/plugins/chartist.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js

        var dataPreferences = {
            series: [
                [25, 30, 20, 25]
            ]
        };

        var optionsPreferences = {
            donut: true,
            donutWidth: 40,
            startAngle: 0,
            total: 100,
            showLabel: false,
            axisX: {
                showGrid: false
            }
        };

        Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences);

        Chartist.Pie('#chartPreferences', {
            labels: ['53%', '36%'],
            series: [53, 36]
        });

        Chartist.Pie('#chartPreferences2', dataPreferences, optionsPreferences);

        Chartist.Pie('#chartPreferences2', {
            labels: ['20%', '80%'],
            series: [20, 80]
        });


    });
</script>