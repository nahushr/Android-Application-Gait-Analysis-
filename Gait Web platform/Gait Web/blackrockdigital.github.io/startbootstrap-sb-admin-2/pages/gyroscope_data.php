<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Mar 2018 19:52:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gait Analysis</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://www.gstatic.com/firebasejs/4.12.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-messaging.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBbVyNdikE6btPfel494cCTdZvvHyIx3h4",
            authDomain: "gait-analysis-1dd9a.firebaseapp.com",
            databaseURL: "https://gait-analysis-1dd9a.firebaseio.com",
            projectId: "gait-analysis-1dd9a",
            storageBucket: "gait-analysis-1dd9a.appspot.com",
            messagingSenderId: "881833087103"
        };
        firebase.initializeApp(config);
        //console.log(firebase);
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gait Analysis</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
              
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="tables.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAISSURBVFhH7ZbLahRBFEBn4QskRhduomTnA6KCJiCiK92L+C1ilkFMcO0DFVHyH4kawQea7FQw2apkZzSiCWShnlMzBc041V096eUcOKRvza1b/bjVndaAGhzDSXyKn/BXR48du45HsXEm8Dn+zfQZnsFtsxPv4R+08Bo+xsvo3djb0eMr+ATNMdc5d3EH9sUBjFf9G6dxH1YxjOZuYrwb+7EWu9CJFviMp7EXr/FV+/A/fARfMJ5ErTtxB51ogREHErj4y/ZhTw5hPInbDuRgw/n8NjBeedmVdnMQ36C7QsbRWtbMasx462+GqE3VlUZc/CM6f9GBDjPo2HyISjiOJn7DnIYr4uIf0PmehHHExrSmvx1xIIUvEpPcanUoLu7f4uKRWfT3ayFK4C0yyT2dS87ichXNmQtRghU0Kfd1mru4WNO85RAl+IkmDYWouvuX0Pz32Gvx4nxrmusaSeLba0+Iqrv/Lb7D1JUX51vT2q6RZBVNOhyiZhlFa38NUYLYhH5smsbGtnZpE95Akx6GqFkeobWnQpTgFJr0HX15NIVfw3W09pgDZbxAE319Rup8C6Q7/xZacyFEFVxAPxxbeNYBqNoN3RTzz6G1rHnegRweoGdsx55woE9OYtxZ9x3IxX9I3ONOtB8uYl0u4Q+0ho/EmrWwCZ1oge3oo+i7oX17uSV7Fc7RR7kbBwwYUEKr9Q+QeLq0QW7JuQAAAABJRU5ErkJggg=="> Accelerometer</a>
                        </li>
                        <li>
                            <a href="gyroscope.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALMSURBVFhH7Za5zw1RGIevIBGitC+FnUaNTqiImtDQSQShJCT+CELQfWILkRB7K7bGEktQKyyxFnbPM9+8+cZkZs7Mbd1f8mTuOfPOWd/l9gYaqKNmwja4DE/hS84ruAg7YRaUNQluwY2s1Yemw1H4AX8SfIPjMAOUkz8G3921o6vWwWeIwU/BelgIE3LmwUY4Cz9B23ewBWJyny6mk3bAL3CAMzAHUnIxV8Bvgr4md+dO/hsewC5YDG00Gd5ALGAzdJL39wn8+GH+FBdzAqZCnYp3/jZ/eh3hE62kw/nhaXDn/tbb9QF/v4bVUKX7oI2LmAJX8/YxaCXDSEdyMu98Cbjz77ASroMDej37oKzbcA+8BqVPxHiz7UjJOHeCk1lrWENgn5OPgb0QIXkYRkOTjA5tt2ethC6Bxhuy1rA8So/d/j12oLXwFew7B+OgTptAO5NVUs9B4wVZa0SrwGP3OI0QtQLeg/YXoO4k5oM2L7JWQuH9E7PWvzoAvnPny+xAS+ED2H8IRkFZ48H3OnJScax+VJaDHwTfO6mTq+UQ37nIstyM79xcUi9BY723Sh6zx62Nx+81KK/F6/GavK6iTNvaP8taCYUT6jh10uF0PO3cuQ6pdFD7dFgdN2SdsL+VE5r/NTZ0muRJHAFtDUlDcyxEnjB0QyY0+7ZmrYRMFiYNjzOuIer5zaw1In1iP0TBcnKTlUnL5GUSm5u3XaRlvZWs5w5oVTOjRW6/A1UyLUeecPF6u79N4+fz30ZIa1k4LCB+GAUlVVItUBYqd669PMqfRkxTAauUJTQGchFFp2qSJXs3uGAX41WugU4qltTgGtSFZlHaRIQ4ubWlk4qT+/RvVVyHAxodhqgTxV+yRWCo6e1Rsj9C552rYj2PO9cnrOcxeBN6uw43DfqS9dxFVDmc/xUsqSYUC4vebnp9kvcZ553++Qz0v6vX+wv/ifSwo+UsgAAAAABJRU5ErkJggg=="> Gyroscope</a>
                        </li>
                        <li>
                            <a href="stepcounter_data.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF8SURBVFhH7Za/K0VhGICvhPzIxGJRUjIapChGJjsGk8EfoKwiYpOykcFiVDYbi5KF0WBClEUG8vN5jnNy0r11697z3eU89XS/7+32ve93vve75xZyciqgETfwNnYtjgXDhN//XMVg3KFJh3EkHvskgpEUYPKaFFDsCFYwGDacZ540oeNgTTiIJ/iGye6fcBObMDMacBnfMf3o025hJvThOZrkM/5UG1CG0MK0x0A1acMHNOENjsZjTbOLxnaiWRWZQxe+wHYDUKwAd17qeCriEl1kKpr9UmrhdUwfUanvlc0YuoA/POlrVvHC5XKAJrL70wQrYByPsCua/XGPFtAfzWqA990CPJoBA6FpxmO0iGecwODYlHtoEV6/WQxCJ17hIdbhElrEK3ZgprTgGZrQ5kxwbGw+mmVEPbprE12jTyJhGo2fRrOM2EaTPGKvgRSt+IJf2G2g2iygyf0P4MuoGPvodxajWRWZxA90dzMGSuBVtADfHTk5ZVAo/AC14Xh53eDAqAAAAABJRU5ErkJggg=="> Step Counter</a>
                        </li>


                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                      <?php
                      if($_POST['type']=='knee'){ echo ' Gyroscope Knee bent Analysis';}
                        if($_POST['type']=='fore') echo ' Gyroscope Fore bent Analysis';
                          if($_POST['type']=='lateral') echo ' Gyroscope Lateral bent Analysis';
                      ?>

                   </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Subject Gyroscope readings</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <button id="btnExport" onclick="javascript:xport.toCSV('testTable');"> Export to CSV</button>
         <table name="disasterdisplay" id="testTable" class="table table-striped table-bordered table-hover"></table>


                   
                               <script type="text/javascript">

                                var acc_data='';
                                 
    // var url = document.location.href,
    //     params = url.split('?')[1].split('&'),
    //     data = {}, tmp;
    // for (var i = 0, l = params.length; i < l; i++) {
    //      tmp = params[i].split('=');
    //      data[tmp[0]] = tmp[1];
    // }
    //document.getElementById('here').innerHTML = data.name;
    //console.log(decodeURIComponent(data.name));
    var acc_data_php= "<?php echo $_POST['data'];?>";
    acc_data=decodeURIComponent(acc_data_php);
    //console.log(acc_data);
 

 //console.log(acc_data);
var row_array = new Array();

 var time_subject = new Array();

      var knee_X = new Array();
      var knee_Y = new Array();
      var knee_Z = new Array();
      var knee_total=new Array();


    var ss = acc_data.split("::");  
    for (var i in ss) {  
        //console.log(ss[i]);
        row_array.push(ss[i]);

    }

var table = document.getElementById('testTable');
        var tbody = document.createElement('tbody');
            var rowhead = document.createElement('tr');

            var cellhead0 = document.createElement('td');
            cellhead0.textContent = "Time";
            rowhead.appendChild(cellhead0);

            var cellhead = document.createElement('td');
            cellhead.textContent = "X";
            rowhead.appendChild(cellhead);

            var cell2head = document.createElement('td');
            cell2head.textContent = "Y";
            rowhead.appendChild(cell2head);

            var cell5head = document.createElement('td');
            cell5head.textContent = "Z";
            rowhead.appendChild(cell5head);

            // var cell6head = document.createElement('td');
            // cell6head.textContent = "Linear acc";
            // rowhead.appendChild(cell6head);
        
            tbody.appendChild(rowhead);
         
    for(var i=0; i<row_array.length-1; i++)
    {
       // console.log(row_array[i]);
        var ss2=row_array[i].split(",");
         var row = document.createElement('tr');
       
            var time=ss2[0];
            var x=ss2[1];
            var y=ss2[2];
            var z=ss2[3];

            //var linear_acc=Math.sqrt(Math.pow(x, 2)+Math.pow(y, 2)+Math.pow(z, 2));

            time_subject.push(time);

            //if("<?php echo $_POST['type'];?>"=='ankle')
            //{
                knee_X.push(x);
                knee_Y.push(y);
                knee_Z.push(z);


             //   console.log(time+","+x+","+y+","+z);
              



    // loop inner array
        // create td element
         var cell0 = document.createElement('td');
            cell0.textContent = time;
            row.appendChild(cell0);
            var cell = document.createElement('td');
            cell.textContent = x;
            row.appendChild(cell);
            var cell2 = document.createElement('td');
            cell2.textContent = y;
            row.appendChild(cell2);
            var cell5 = document.createElement('td');
            cell5.textContent = z;
            row.appendChild(cell5);
            //  var cell6 = document.createElement('td');
            // cell6.textContent = linear_acc;
            // row.appendChild(cell6);
            
    //append tr to tbody
        
        
        tbody.appendChild(row);
// append tbody to table
       
    }
     table.appendChild(tbody);
    
                               </script>
        <div class="panel-footer">Footer</div>
      </div>
    </div>
  </div>




 <script type="text/javascript">
  if("<?php echo $_POST['gender'];?>"=="male" && "<?php echo $_POST['type'];?>"=="knee")
  {
      var upper_limit=25.4;
      var lower_limit=10;
  }
  else if("<?php echo $_POST['gender'];?>"=="female" && "<?php echo $_POST['type'];?>"=="knee")
  {
       var upper_limit=29.8;
      var lower_limit=9.4;
  }

  else if("<?php echo $_POST['gender'];?>"=="male" && "<?php echo $_POST['type'];?>"=="fore")
  {
var upper_limit=17;
      var lower_limit=-6.2;
  }
  else if("<?php echo $_POST['gender'];?>"=="female" && "<?php echo $_POST['type'];?>"=="fore")
  {
var upper_limit=8.9;
      var lower_limit=-4.5;
  }

  else if("<?php echo $_POST['gender'];?>"=="male" && "<?php echo $_POST['type'];?>"=="lateral")
  {
var upper_limit=6.6;
      var lower_limit=-1.2;
  }
  else if("<?php echo $_POST['gender'];?>"=="male" && "<?php echo $_POST['type'];?>"=="lateral")
  {
    var upper_limit=3.9;
      var lower_limit=0.1;
  }
else
{
  var upper_limit=0;
  var lower_limit=0;
} 
var total_points=0;
var inner_points=0;
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
    var data2 = new google.visualization.DataTable();
    data2.addColumn('number', 'X');
    data2.addColumn('number', 'Dataset');

  
    
   for (var i = 0; i < time_subject.length-1; i++)
   {

            if("<?php echo $_POST['type'];?>"=="knee" || "<?php echo $_POST['type'];?>"=="lateral" )
            {
              //console.log(parseFloat(Math.abs(knee_X[i])));
              if(parseFloat(Math.abs(knee_X[i]))>lower_limit && parseFloat(Math.abs(knee_X[i]))<upper_limit)
              {
                inner_points++;
              }
                 data2.addRows([
              
        [parseFloat(time_subject[i]), parseFloat(Math.abs(knee_X[i]))]
    ]);
                 total_points++;
            
            }
            if("<?php echo $_POST['type'];?>"=="fore")
            {
              if(parseFloat(Math.abs(knee_Y[i]))>lower_limit && parseFloat(Math.abs(knee_Y[i]))<upper_limit)
              {
                inner_points++;
              }
                  data2.addRows([
        [parseFloat(time_subject[i]), parseFloat(Math.abs(knee_Y[i]))]
    ]);
                  total_points++;
               
            }

         
  }

var result=(inner_points/total_points)*100;
    var result_str="The result is: "+result+"%";
    document.getElementById('result').innerHTML=result_str;




   
   var data3 = new google.visualization.DataTable();
    data3.addColumn('number', 'X');
    data3.addColumn('number', 'Upper limt');

  




  













    


   for (var i = 0; i < time_subject.length-1; i++)
   {
        data3.addRows([
        [parseFloat(time_subject[i]), parseFloat(upper_limit)]
    ]);
  }
 var data4 = new google.visualization.DataTable();
    data4.addColumn('number', 'X');
    data4.addColumn('number', 'Lower limt');

  for (var i = 0; i < time_subject.length-1; i++)
   {
          data4.addRows([
        [parseFloat(time_subject[i]), parseFloat(lower_limit)]
    ]);
  }    
       
  
    
  var options = {
          
          explorer: {
            axis: 'horizontal',
            keepInBounds: true,
            maxZoomIn: 8.0
          },
        curveType: 'function'

          
        };
    
    
  
    
 
    var joinedData1 = google.visualization.data.join(data2, data3, 'full', [[0, 0]], [1], [1]);
    var joinedData2 = google.visualization.data.join(joinedData1, data4, 'full', [[0, 0]], [1,2], [1]);
    //var final_joinedData = google.visualization.data.join(joinedData1, joinedData2, 'full', [[0,0]],[1,2],[1,2]);


    
    var chart = new google.visualization.LineChart(document.querySelector('#chart_div'));
    chart.draw(joinedData2, {
        interpolateNulls: true
    },options);
}

    </script>
        <div id="chart_div" style="width: 100%; height: 400px"></div>
        <h3 id="result"></h3>
      </br>
      <button class="btn btn-primary" onclick="savedata_in_firebase();">Save data</button>
                        
    
            </div>
          
        </div>


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<script src="sweetalert2.js"></script>
    <script type="text/javascript">
      var userId="";

      var acc_ankle="";
      var acc_thigh="";
      var acc_trunk="";

      var gyr_ankle="";
      var gyr_fore="";
      var gyr_lateral="";

      var pedo="";
      function savedata_in_firebase()
      {
        var database=firebase.database();
        var ref=database.ref("History");
        ref.on("value",gotData,errData);

        userId="<?php echo $_POST['uid'];?>";

        //get acc,gyr,pedo data first and then update that data
      }
      function gotData(data){
        //console.log("hello");
        var user_x,user_y;
        var history=data.val();
              for(x in history)
              {
                for(y in history[x])
                {
                  // if(x==userId)
                  // {
                  //   acc_ankle=history[x][y].acc_ankle;
                  //   acc_thigh=history[x][y].acc_thigh;
                  //   acc_trunk=history[x][y].acc_trunk;

                  //   gyr_ankle=history[x][y].gyr_ankle;
                  //   gyr_fore=history[x][y].gyr_fore;
                  //   gyr_lateral=history[x][y].gyr_lateral;

                  //   pedo=history[x][y].pedo;
                  //   break;
                  // }
                  if(x==userId)
                  {
                    user_x=x;
                  }
  
                var ss3=y.split("_")
                //console.log(y);
                //console.log(res);
                //console.log(parseInt(ss3[2])+","+(parseInt(ss3[1])-1)+","+parseInt(ss3[0]));
                var d = new Date(parseInt(ss3[2]),(parseInt(ss3[1])-1),parseInt(ss3[0]));
                dates.push(d);

                }
              }
              dates.sort(date_sort_asc);
              var dd = dates[dates.length-1].getDate();
              var mm = dates[dates.length-1].getMonth()+1; //January is 0!

              var yyyy = dates[dates.length-1].getFullYear();
                if(dd<10){
                    dd='0'+dd;
                } 
                if(mm<10){
                    mm='0'+mm;
                } 
                var user_y = dd+'_'+mm+'_'+yyyy;
                console.log(user_x+","+user_y);
                    acc_ankle=history[user_x][user_y].acc_ankle;
                    acc_thigh=history[user_x][user_y].acc_thigh;
                    acc_trunk=history[user_x][user_y].acc_trunk;

                    gyr_ankle=history[user_x][user_y].gyr_ankle;
                    gyr_fore=history[user_x][user_y].gyr_fore;
                    gyr_lateral=history[user_x][user_y].gyr_lateral;

                    pedo=history[x][y].pedo;
              console.log(writeNewPost(userId));

              swal(
  'Data Saved!',
  'You saved the data for today!',
  'success'
);

       }
        function errData(err) {
                    // body...
                    console.log(err);
        }    
        function writeNewPost(uid) {
  // A post entry.


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today = dd+'_'+mm+'_'+yyyy;

  if("<?php echo $_POST['type'];?>"=="knee")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    gyr_ankle=ss[1].trim();
  }
  else if("<?php echo $_POST['type'];?>"=="fore")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    gyr_fore=ss[1].trim();
    
  }
  else if("<?php echo $_POST['type'];?>"=="lateral")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    gyr_lateral=ss[1].trim();
  }
  var postData = {
    acc_ankle: acc_ankle,
    acc_thigh: acc_thigh,
    acc_trunk: acc_trunk,
    gyr_ankle: gyr_ankle,
    gyr_fore: gyr_fore,
    gyr_lateral: gyr_lateral,
    pedo: pedo
  };

  // Get a key for a new Post.
 // var newPostKey = firebase.database().ref("History").child(uid).push().key;

  // Write the new post's data simultaneously in the posts list and the user's post list.
  var updates = {};
  //updates['/posts/' + newPostKey] = postData;
  updates['/' + uid+'/'+today] = postData;


  return firebase.database().ref("History").update(updates);
}           
    </script>
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#testTable').DataTable({
            responsive: true
        });
    });
    </script>
    <script type="text/javascript">
        var xport = {
  _fallbacktoCSV: true,  
  toXLS: function(tableId, filename) {   
    this._filename = (typeof filename == 'undefined') ? tableId : filename;
    
    //var ieVersion = this._getMsieVersion();
    //Fallback to CSV for IE & Edge
    if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
      return this.toCSV(tableId);
    } else if (this._getMsieVersion() || this._isFirefox()) {
      alert("Not supported browser");
    }

    //Other Browser can download xls
    var htmltable = document.getElementById(tableId);
    var html = htmltable.outerHTML;

    this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls'); 
  },
  toCSV: function(tableId, filename) {
    this._filename = (typeof filename === 'undefined') ? tableId : filename;
    // Generate our CSV string from out HTML Table
    var csv = this._tableToCSV(document.getElementById(tableId));
    // Create a CSV Blob
    var blob = new Blob([csv], { type: "text/csv" });

    // Determine which approach to take for the download
    if (navigator.msSaveOrOpenBlob) {
      // Works for Internet Explorer and Microsoft Edge
      navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
    } else {      
      this._downloadAnchor(URL.createObjectURL(blob), 'csv');      
    }
  },
  _getMsieVersion: function() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf("MSIE ");
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
    }

    var trident = ua.indexOf("Trident/");
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf("rv:");
      return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
    }

    var edge = ua.indexOf("Edge/");
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
    }

    // other browser
    return false;
  },
  _isFirefox: function(){
    if (navigator.userAgent.indexOf("Firefox") > 0) {
      return 1;
    }
    
    return 0;
  },
  _downloadAnchor: function(content, ext) {
      var anchor = document.createElement("a");
      anchor.style = "display:none !important";
      anchor.id = "downloadanchor";
      document.body.appendChild(anchor);

      // If the [download] attribute is supported, try to use it
      
      if ("download" in anchor) {
        anchor.download = this._filename + "." + ext;
      }
      anchor.href = content;
      anchor.click();
      anchor.remove();
  },
  _tableToCSV: function(table) {
    // We'll be co-opting `slice` to create arrays
    var slice = Array.prototype.slice;

    return slice
      .call(table.rows)
      .map(function(row) {
        return slice
          .call(row.cells)
          .map(function(cell) {
            return '"t"'.replace("t", cell.textContent);
          })
          .join(",");
      })
      .join("\r\n");
  }
};

    </script>
   

</body>


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Mar 2018 19:52:45 GMT -->
</html>
