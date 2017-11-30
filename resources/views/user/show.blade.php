<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Overwatch Stats</title>
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Page level plugin CSS-->
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a href="images/logo.png"></a>
    <a class= titletext  style= color:white>OVERWATCH STATS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">New Alerts:</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#">View all alerts</a>
            </div>
            </li>
            <div class="menu-wrap">
                <nav class="menu">
                    <ul class="clearfix">
                        <li>
                            <a href="#" style= padding-left: 100px>COMP/CASUAL <span class="arrow">&#9660;</span></a>

                            <ul class="sub-menu">
                                <li><a href="comp.html">COMPETITIVE</a></li>
                                <li><a href="casual.html">CASUAL</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Competitive Stats</a>
                <a href="comp.html" style= padding-left:800px>Update Stats</a>
            </li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="mr-5">Competitive Rank</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">{{ $user->overall_stats['competitive']['overall_stats']['comprank'] }}</span>
                        <span class="float-right">
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-percent"></i>
                        </div>
                        <div class="mr-5">Win Rate</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">{{ $user->overall_stats['competitive']['overall_stats']['win_rate'] }}%</span>
                        <span class="float-right">
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="mr-5">K/DA Ratio</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">{{ $user->overall_stats['competitive']['game_stats']['kpd'] }}</span>
                        <span class="float-right">
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="mr-5">Time Played</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">{{ $user->overall_stats['competitive']['game_stats']['time_played'] }} Hours</span>
                        <span class="float-right">
              </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Hero Stats</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Hero</th>
                            <th>Time Played(hrs)</th>
                            <th>Most Eliminations</th>
                            <th>Highest Kill Streak(K/A)</th>
                            <th>Most Damage Done</th>
                            <th>Gold Medals</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Hero</th>
                            <th>Time Played(hrs)</th>
                            <th>Most Eliminations</th>
                            <th>Highest Kill Streak(K/A)</th>
                            <th>Most Damage Done</th>
                            <th>Gold Medals</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <!-- Loop through the stats to get the hero key so we can loop through each stat we want for a hero -->
                        @foreach ($user->heroes_stats['competitive'] as $hero => $data)
                            <tr>
                                <td>{{ $hero }}</td>
                                <td>{{ $user->heroes_playtime['competitive'][$hero] }}</td>
                                <td>{{ empty($user->heroes_stats['competitive'][$hero]['general_stats']['eliminations_most_in_game'])? 0:$user->heroes_stats['competitive'][$hero]['general_stats']['eliminations_most_in_game'] }}</td>
                                <td>{{ empty($user->heroes_stats['competitive'][$hero]['general_stats']['eliminations_most_in_life'])? 0:$user->heroes_stats['competitive'][$hero]['general_stats']['eliminations_most_in_life'] }}</td>
                                <td>{{ empty($user->heroes_stats['competitive'][$hero]['general_stats']['hero_damage_done_most_in_game'])? 0:$user->heroes_stats['competitive'][$hero]['general_stats']['hero_damage_done_most_in_game'] }}</td>
                                <td>{{ empty($user->heroes_stats['competitive'][$hero]['general_stats']['medals_gold'])? 0:$user->heroes_stats['competitive'][$hero]['general_stats']['medals_gold'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">
                Updated: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($user->updated_at))->diffForHumans() }}
                <a type="button" class="btn btn-primary" href="{{ route('user.update', ['region' => $user->region, 'battletag' => $user->battletag]) }}">Update Stats</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-6">
                        <div class="card-header">
                            <i class="fa fa-pie-chart"></i> Stats</div>
                        <div class="card-body">
                            <div id="chart_div"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example DataTables Card-->
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>

        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Data tables -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTable').DataTable();
            } );
        </script>
        <!-- Google Charts -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

            // Load the Visualization API and the corechart package.
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Hero');
                data.addColumn('number', 'Times Played (Hours)');
                data.addRows([
                    //Loop through each hero's play time
                    @foreach ($user->heroes_playtime['competitive'] as $hero => $time)
                        ['{{ $hero }}', {{ $time }}],
                    @endforeach
                ]);

                // Set chart options
                var options = {'title':'Heros Played',
                    'width':500,
                    'height':400};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
    </div>
</body>

</html>
