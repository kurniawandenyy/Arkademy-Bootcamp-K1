<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>DenyKurniawan | Arkademy</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
  </head>

  <body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
          <!--logo start-->
          <a href="index.php" class="logo"><b>Arkademy<span> Coffe Shop</span></b></a>
          <!--logo end-->
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button>
            </ul>
          </div>
        </header>
        <div class="showback">
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Add</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal style-form" method="get">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <select class="form-control">
                          <option>Raisa Andriana</option>
                          <option>Pevita Pearce</option>
                        </select><br>
                      </div>
                      <div class="col-sm-12">
                        <select class="form-control">
                          <option>Ice Tea</option>
                          <option>Latte</option>
                        </select><br>
                      </div>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Category"><br>
                      </div>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Price"><br>
                      </div>
                      <div class="col-sm-12" align="right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <h1 class="mt" align="center"><i class="fa fa-check-circle-o fa-3x"></i></h1>
                  <h2 align="center">Data Berhasil Dihapus</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Add</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal style-form" method="get">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <select class="form-control">
                          <option>Raisa Andriana</option>
                          <option>Pevita Pearce</option>
                        </select><br>
                      </div>
                      <div class="col-sm-12">
                        <select class="form-control">
                          <option>Ice Tea</option>
                          <option>Latte</option>
                        </select><br>
                      </div>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Category"><br>
                      </div>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Price"><br>
                      </div>
                      <div class="col-sm-12" align="right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->

        <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section class="wrapper">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <thead>
                    <tr>
                      <th> No</th>
                      <th> Cashier</th>
                      <th> Product</th>
                      <th> Category</th>
                      <th> Price</th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1</td>
                      <td> Pevita Pearce</td>
                      <td> Latte</td>
                      <td> Drink</td>
                      <td> Rp. 10.000</td>
                      <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                    <tr>
                      <td> 2</td>
                      <td> Raisa Andriana</td>
                      <td> Cake</td>
                      <td> Food</td>
                      <td> Rp. 15.000</td>
                      <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                    <tr>
                      <td> 3</td>
                      <td> Raisa Andriana</td>
                      <td> Fried Rice</td>
                      <td> Food</td>
                      <td> Rp. 30.000</td>
                     <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                    <tr>
                      <td> 4</td>
                      <td> Pevita Pearce</td>
                      <td> Gudeg</td>
                      <td> Food</td>
                      <td> Rp. 35.000</td>
                      <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                    <tr>
                      <td> 5</td>
                      <td> Joko Purwadi</td>
                      <td> Ice Tea</td>
                      <td> Drink</td>
                      <td> Rp. 55.000</td>
                      <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                    <tr>
                      <td> 6</td>
                      <td> Raisa Andriana</td>
                      <td> Gado-Gado</td>
                      <td> Food</td>
                      <td> Rp. 15.000</td>
                      <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> | 
                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o "></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
          </div>
          <!-- /row -->
        </section>
        <!--main content end-->
        <!--footer start-->
        <!--footer end-->
      </section>
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="lib/jquery/jquery.min.js"></script>

      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
      <script src="lib/jquery.scrollTo.min.js"></script>
      <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="lib/jquery.sparkline.js"></script>
      <!--common script for all pages-->
      <script src="lib/common-scripts.js"></script>
      <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
      <script type="text/javascript" src="lib/gritter-conf.js"></script>
      <!--script for this page-->
      <script src="lib/sparkline-chart.js"></script>
      <script src="lib/zabuto_calendar.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Arkademy!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-zac.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

          return false;
        });
      </script>
      <script type="application/javascript">
        $(document).ready(function() {
          $("#date-popover").popover({
            html: true,
            trigger: "manual"
          });
          $("#date-popover").hide();
          $("#date-popover").click(function(e) {
            $(this).hide();
          });

          $("#my-calendar").zabuto_calendar({
            action: function() {
              return myDateFunction(this.id, false);
            },
            action_nav: function() {
              return myNavFunction(this.id);
            },
            ajax: {
              url: "show_data.php?action=1",
              modal: true
            },
            legend: [{
              type: "text",
              label: "Special event",
              badge: "00"
            },
            {
              type: "block",
              label: "Regular event",
            }
            ]
          });
        });

        function myNavFunction(id) {
          $("#date-popover").hide();
          var nav = $("#" + id).data("navigation");
          var to = $("#" + id).data("to");
          console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
      </script>
    </body>
    </html>