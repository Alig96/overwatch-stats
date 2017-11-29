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
                        <div class="mr-5">Most Played Hero</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">"playtime_competitive"</span>
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
                        <tr>
                            <td>Ana</td>
                            <td>{{ $user->heroes_playtime['competitive']['ana'] }}</td>
                            <td>{{ $user->heroes_stats['competitive']['ana']['general_stats']['eliminations_most_in_game'] }}</td>
                            <td>{{ $user->heroes_stats['competitive']['ana']['general_stats']['eliminations_most_in_life'] }}</td>
                            <td>{{ $user->heroes_stats['competitive']['ana']['general_stats']['hero_damage_done_most_in_game'] }}</td>
                            <td>{{ $user->heroes_stats['competitive']['ana']['general_stats']['medals_gold'] }}</td>
                        </tr>
                        <tr>
                            <td>Bastion</td>
                            <td>"competitive_bastion_time_played"</td>
                            <td>"competitive_bastion_eliminations_most_in_game"</td>
                            <td>"competitive_bastion_eliminations_most_in_life"</td>
                            <td>"competitive_bastion_all_damage_done_most_in_game"</td>
                            <td>"competitive_bastion_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>D.Va</td>
                            <td>"competitive_dva_time_played"</td>
                            <td>"competitive_dva_eliminations_most_in_game"</td>
                            <td>"competitive_dva_eliminations_most_in_life"</td>
                            <td>"competitive_dva_all_damage_done_most_in_game"</td>
                            <td>"competitive_dva_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Doomfist</td>
                            <td>"competitive_doomfist_time_played"</td>
                            <td>"competitive_doomfist_eliminations_most_in_game"</td>
                            <td>"competitive_doomfist_eliminations_most_in_life"</td>
                            <td>"competitive_doomfist_all_damage_done_most_in_game"</td>
                            <td>"competitive_doomfist_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Genji</td>
                            <td>"competitive_genji_time_played"</td>
                            <td>"competitive_genji_eliminations_most_in_game"</td>
                            <td>"competitive_genji_eliminations_most_in_life"</td>
                            <td>"competitive_genji_all_damage_done_most_in_game"</td>
                            <td>"competitive_genji_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Hanzo</td>
                            <td>"competitive_hanzo_time_played"</td>
                            <td>"competitive_hanzo_eliminations_most_in_game"</td>
                            <td>"competitive_hanzo_eliminations_most_in_life"</td>
                            <td>"competitive_hanzo_all_damage_done_most_in_game"</td>
                            <td>"competitive_hanzo_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Junkrat</td>
                            <td>"competitive_junkrat_time_played"</td>
                            <td>"competitive_junkrat_eliminations_most_in_game"</td>
                            <td>"competitive_junkrat_eliminations_most_in_life"</td>
                            <td>"competitive_junkrat_all_damage_done_most_in_game"</td>
                            <td>"competitive_junkrat_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Lucio</td>
                            <td>"competitive_lucio_time_played"</td>
                            <td>"competitive_lucio_eliminations_most_in_game"</td>
                            <td>"competitive_lucio_eliminations_most_in_life"</td>
                            <td>"competitive_lucio_all_damage_done_most_in_game"</td>
                            <td>"competitive_lucio_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Mccree</td>
                            <td>"competitive_mccree_time_played"</td>
                            <td>"competitive_mccree_eliminations_most_in_game"</td>
                            <td>"competitive_mccree_eliminations_most_in_life"</td>
                            <td>"competitive_mccree_all_damage_done_most_in_game"</td>
                            <td>"competitive_mccree_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Mei</td>
                            <td>"competitive_mei_time_played"</td>
                            <td>"competitive_mei_eliminations_most_in_game"</td>
                            <td>"competitive_mei_eliminations_most_in_life"</td>
                            <td>"competitive_mei_all_damage_done_most_in_game"</td>
                            <td>"competitive_mei_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Mercy</td>
                            <td>"competitive_mercy_time_played"</td>
                            <td>"competitive_mercy_eliminations_most_in_game"</td>
                            <td>"competitive_mercy_eliminations_most_in_life"</td>
                            <td>"competitive_mercy_all_damage_done_most_in_game"</td>
                            <td>"competitive_mercy_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Orisa</td>
                            <td>"competitive_orisa_time_played"</td>
                            <td>"competitive_orisa_eliminations_most_in_game"</td>
                            <td>"competitive_orisa_eliminations_most_in_life"</td>
                            <td>"competitive_orisa_all_damage_done_most_in_game"</td>
                            <td>"competitive_orisa_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Pharah</td>
                            <td>"competitive_pharah_time_played"</td>
                            <td>"competitive_pharah_eliminations_most_in_game"</td>
                            <td>"competitive_pharah_eliminations_most_in_life"</td>
                            <td>"competitive_pharah_all_damage_done_most_in_game"</td>
                            <td>"competitive_pharah_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Reaper</td>
                            <td>"competitive_reaper_time_played"</td>
                            <td>"competitive_reaper_eliminations_most_in_game"</td>
                            <td>"competitive_reaper_eliminations_most_in_life"</td>
                            <td>"competitive_reaper_all_damage_done_most_in_game"</td>
                            <td>"competitive_reaper_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Reinhardt</td>
                            <td>"competitive_reinhardt_time_played"</td>
                            <td>"competitive_reinhardt_eliminations_most_in_game"</td>
                            <td>"competitive_reinhardt_eliminations_most_in_life"</td>
                            <td>"competitive_reinhardt_all_damage_done_most_in_game"</td>
                            <td>"competitive_reinhardt_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Roadhog</td>
                            <td>"competitive_roadhog_time_played"</td>
                            <td>"competitive_roadhog_eliminations_most_in_game"</td>
                            <td>"competitive_roadhog_eliminations_most_in_life"</td>
                            <td>"competitive_roadhog_all_damage_done_most_in_game"</td>
                            <td>"competitive_roadhog_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Soldier:76</td>
                            <td>"competitive_soldier76_time_played"</td>
                            <td>"competitive_soldier76_eliminations_most_in_game"</td>
                            <td>"competitive_soldier76_eliminations_most_in_life"</td>
                            <td>"competitive_soldier76_all_damage_done_most_in_game"</td>
                            <td>"competitive_soldier76_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Sombra</td>
                            <td>"competitive_sombra_time_played"</td>
                            <td>"competitive_sombra_eliminations_most_in_game"</td>
                            <td>"competitive_sombra_eliminations_most_in_life"</td>
                            <td>"competitive_sombra_all_damage_done_most_in_game"</td>
                            <td>"competitive_sombra_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Symmetra</td>
                            <td>"competitive_symmetra_time_played"</td>
                            <td>"competitive_symmetra_eliminations_most_in_game"</td>
                            <td>"competitive_symmetra_eliminations_most_in_life"</td>
                            <td>"competitive_symmetra_all_damage_done_most_in_game"</td>
                            <td>"competitive_symmetra_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Torbjorn</td>
                            <td>"competitive_torbjorn_time_played"</td>
                            <td>"competitive_torbjorn_eliminations_most_in_game"</td>
                            <td>"competitive_torbjorn_eliminations_most_in_life"</td>
                            <td>"competitive_torbjorn_all_damage_done_most_in_game"</td>
                            <td>"competitive_torbjorn_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Tracer</td>
                            <td>"competitive_tracer_time_played"</td>
                            <td>"competitive_tracer_eliminations_most_in_game"</td>
                            <td>"competitive_tracer_eliminations_most_in_life"</td>
                            <td>"competitive_tracer_all_damage_done_most_in_game"</td>
                            <td>"competitive_tracer_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Widowmaker</td>
                            <td>"competitive_widowmaker_time_played"</td>
                            <td>"competitive_widowmaker_eliminations_most_in_game"</td>
                            <td>"competitive_widowmaker_eliminations_most_in_life"</td>
                            <td>"competitive_widowmaker_all_damage_done_most_in_game"</td>
                            <td>"competitive_widowmaker_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Winston</td>
                            <td>"competitive_winston_time_played"</td>
                            <td>"competitive_winston_eliminations_most_in_game"</td>
                            <td>"competitive_winston_eliminations_most_in_life"</td>
                            <td>"competitive_winston_all_damage_done_most_in_game"</td>
                            <td>"competitive_winston_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Zarya</td>
                            <td>"competitive_zarya_time_played"</td>
                            <td>"competitive_zarya_eliminations_most_in_game"</td>
                            <td>"competitive_zarya_eliminations_most_in_life"</td>
                            <td>"competitive_zarya_all_damage_done_most_in_game"</td>
                            <td>"competitive_zarya_medals_gold"</td>
                        </tr>
                        <tr>
                            <td>Zenyatta</td>
                            <td>"competitive_zenyatta_time_played"</td>
                            <td>"competitive_zenyatta_eliminations_most_in_game"</td>
                            <td>"competitive_zenyatta_eliminations_most_in_life"</td>
                            <td>"competitive_zenyatta_all_damage_done_most_in_game"</td>
                            <td>"competitive_zenyatta_medals_gold"</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-pie-chart"></i> Stats</div>
                        <div class="card-body">
                            <canvas id="myPieChart" width="100%" height="100"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>
            </div>
            <!-- Example DataTables Card-->
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2017</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/sb-admin-charts.min.js"></script>
    </div>
</body>

</html>
