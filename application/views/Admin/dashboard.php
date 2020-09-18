<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                
                  <div class="card-header card-header-warning card-header-icon">
                    <a href="<?php echo base_url('Admin/Admin_controller/userlist');?>">
                      <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                      </div>

                      <p class="card-category">Total Users</p>
                      <h3 class="card-title">
                        <?php 
                          if($total_users){
                              echo $total_users;
                          }else{
                            $total_users = 0;
                            echo $total_users;
                          }
                        ?>
                        <small>+</small>
                      </h3>
                    </a>
                  </div>
               
                <div class="card-footer">
                  <div class="stats">
                    
                    <b><a href="#">Date: <?php echo  date("Y/m/d");?></a></b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">

                  <a href="<?php echo base_url('Admin/Admin_controller/all_notice');?>">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Total Notices</p>
                    <h3 class="card-title">
                      <?php 
                            if($total_notices){
                                echo $total_notices;
                            }else{
                              $total_notices = 0;
                              echo $total_notices;
                            }
                      ?>
                    </h3>
                  </a>


                </div>
                <div class="card-footer">
                  <div class="stats">
                   <b><a href="#">Date: <?php echo  date("Y/m/d");?></a></b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <a href="<?php echo base_url('Admin/Admin_controller/allEvent');?>">
                    <div class="card-icon">
                     <i class="material-icons">library_books</i>
                    </div>
                    <p class="card-category">All Events</p>
                    <h3 class="card-title">
                      <?php 
                              if($total_events){
                                  echo $total_events;
                              }else{
                                $total_events = 0;
                                echo $total_events;
                              }
                        ?>
                    </h3>
                  </a>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <b><a href="#">Date: <?php echo  date("Y/m/d");?></a></b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <a href="<?php echo base_url('Admin/Admin_controller/allProgram');?>">
                    <div class="card-icon">
                       <i class="material-icons">content_paste</i>
                    </div>
                    <p class="card-category">All Programs</p>
                    <h3 class="card-title">
                      <?php 
                                if($total_programs){
                                    echo $total_programs;
                                }else{
                                  $total_programs = 0;
                                  echo $total_programs;
                                }
                          ?>
                    </h3>
                </a>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <b><a href="#">Date: <?php echo  date("Y/m/d");?></a></b>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-md-6">
              <div class="card card-chart" style="padding-top: 20px; padding-bottom: 20px;">
                <div id="userChart" style="height: 300px; width: 100%;"></div>
                <script src="<?php echo base_url('resource/assets/charts.js');?>"></script>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card card-chart" style="padding-top: 20px; padding-bottom: 20px;">
                <div id="otherChart" style="height: 300px; width: 100%;"></div>
              </div>
            </div>



           


          </div>


          




        </div>
      </div>

      
<?php 
  $total_active_members = $total_active_members;
  if($total_active_members == 0){
    $total_active_members = 0;
  }

  $not_active_mambers = $not_active_mambers;
  if($not_active_mambers == 0){
    $not_active_mambers = 0;
  }

  $active_not_active_not_mambers = $active_not_active_not_mambers;

  if($active_not_active_not_mambers == 0){
    $active_not_active_not_mambers = 0;
  }

?>







<script>
var  total_active_members = parseInt('<?php echo $total_active_members; ?>');

var  not_active_mambers = parseInt('<?php echo $not_active_mambers; ?>');

var  active_not_active_not_mambers = parseInt('<?php echo $active_not_active_not_mambers; ?>');






var total_users = parseInt('<?php echo $total_users; ?>');
var total_notices = parseInt('<?php echo $total_notices; ?>');
var total_events = parseInt('<?php echo $total_events; ?>');
var total_programs = parseInt('<?php echo $total_programs; ?>');

</script>


<script>
window.onload = function() {

var chart = new CanvasJS.Chart("userChart", {
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Users"
  },
  data: [{
    type: "pie",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}%",
    showInLegend: "true",
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - {y}%",
    dataPoints: [
      { y: total_active_members, label: "Active Members" },
      { y: not_active_mambers, label: "Not Active Members" },
      { y: active_not_active_not_mambers, label: "Others" }
    ]
  }]
});
chart.render();


var chart = new CanvasJS.Chart("otherChart", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Users, Notice, Events, Programs"
  },
  axisY: {
    title: "Total"
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "Total",
    dataPoints: [      
      { y: total_users, label: "Users" },
      { y: total_notices,  label: "Notices" },
      { y: total_events,  label: "Events" },
      { y: total_programs,  label: "Programs" }
    ]
  }]
});
chart.render();

}


</script>

