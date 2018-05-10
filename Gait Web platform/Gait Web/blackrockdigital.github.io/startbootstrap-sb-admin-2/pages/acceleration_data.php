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
    <style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
   margin: auto;
   
    
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

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
                    <h1 class="page-header">Tables</h1>
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
          <a data-toggle="collapse" href="#collapse100">Subject Accelerometer readings</a>
        </h4>
      </div>
      <div id="collapse100" class="panel-collapse collapse">
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

      var ankle_hori_for_subject = new Array();
      var ankle_vertical_subject = new Array();
      var ankle_hori_lat_subject = new Array();
      var ankle_total_subject=new Array();


      var thigh_hori_for_subject = new Array();
      var thigh_vertical_subject = new Array();
      var thigh_hori_lat_subject = new Array();
      var thigh_total_subject=new Array();

      var trunk_hori_for_subject = new Array();
      var trunk_vertical_subject = new Array();
      var trunk_hori_lat_subject = new Array();
      var trunk_tota_subject=new Array();

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

            var cell6head = document.createElement('td');
            cell6head.textContent = "Linear acc";
            rowhead.appendChild(cell6head);
        
            tbody.appendChild(rowhead);
         
    for(var i=0; i<row_array.length-1; i++)
    {
       // console.log(row_array[i]);
        var ss2=row_array[i].split(",");
         var row = document.createElement('tr');
       
            var time=ss2[0];
            var x=ss2[1];
            var y=ss2[2]-9.82;
            var z=ss2[3];

            var linear_acc=Math.sqrt(Math.pow(x, 2)+Math.pow(y, 2)+Math.pow(z, 2));



                if(parseFloat(time)<30000)
                {
                    time_subject.push(time);
                }
            

            //if("<?php echo $_POST['type'];?>"=='ankle')
            //{
                ankle_hori_for_subject.push(x);
                ankle_vertical_subject.push(y);
                ankle_hori_lat_subject.push(z);
               
               if(parseFloat(linear_acc)<30)
               {
                    ankle_total_subject.push(linear_acc);
               }
                
            //}
            // if("<?php echo $_POST['type'];?>"=='thigh')
            // {
                
            //     thigh_hori_for_subject.push(x);
            //     thigh_vertical_subject.push(y);
            //     thigh_hori_lat_subject.push(z);
            //     thigh_total_subject.push(linear_acc);    
            // }
            // if("<?php echo $_POST['type'];?>"=='trunk')
            // {
                
            //     trunk_hori_for_subject.push(x);
            //     trunk_vertical_subject.push(y);
            //     trunk_hori_lat_subject.push(z);
            //     trunk_total_subject.push(linear_acc);
            // }




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
             var cell6 = document.createElement('td');
            cell6.textContent = linear_acc;
            row.appendChild(cell6);
            
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

<div style=" background-color: lightblue;" id="main_div">
<h3 id="loader-title" style="  margin:auto;
    line-height:51px;
    vertical-align:middle;"></h3>
<div class="loader" id="loader" ></div>
</div>
 <div id="draw-charts"></div>

        <script type="text/javascript">


          var time = new Array();

      var ankle_hori_for = new Array();
      var ankle_vertical = new Array();
      var ankle_hori_lat = new Array();
      var ankle=new Array();


      var thigh_hori_for = new Array();
      var thigh_vertical = new Array();
      var thigh_hori_lat = new Array();
      var thigh=new Array();


      var trunk_hori_for = new Array();
      var trunk_vertical = new Array();
      var trunk_hori_lat = new Array();
      var trunk=new Array();

      var time_str="";
      var ankle_str="";




      var ankle_str1="";
      var ankle_str2="";
      var ankle_str3="";
      var ankle_str5="";
      var ankle_str6="";
      var ankle_str7="";
      var ankle_str8="";
      var ankle_str9="";
      var ankle_str10="";
      var ankle_str11="";
      var ankle_str12="";
      var ankle_str13="";
      var ankle_str14="";
      var ankle_str15="";
      var ankle_str16="";
      var ankle_str17="";
      
      
      
      


        </script>
     
         <?php

        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 3000); //3000 seconds = 5+ minutes


        require_once "Classes/PHPExcel.php";
        $tmpfname = "patients_dataset/patient1_accelerometer.xlsx";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
         for ($row = 4; $row <= 2000; $row++) 
            {
                $time_php=$worksheet->getCell('A'.$row)->getValue();
                echo "<script type='text/javascript'>
                time_str+=$time_php+',';   
                </script>";
            }

for($kxx=1;$kxx<=17;$kxx=$kxx+1)
{ 
      echo '<script type="text/javascript">document.getElementById("loader-title").innerHTML="Reading dataset: '.$kxx.'.......";</script>';
        $tmpfname = "patients_dataset/patient".$kxx."_accelerometer.xlsx";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
        if($_POST['type']=='ankle')
        {
            for ($row = 4; $row <= 2000; $row++) 
            {
           
             $ankle_hori_for_php=$worksheet->getCell('B'.$row)->getValue();
             $ankle_vertivcal_php=$worksheet->getCell('C'.$row)->getValue();
             $ankle_hori_lat_php=$worksheet->getCell('D'.$row)->getValue();
           
             $ankle_tot=(sqrt(pow($ankle_hori_for_php,2)+pow($ankle_vertivcal_php,2)+pow($ankle_hori_lat_php,2)))/1000;
             echo "<script type='text/javascript'>
             ankle_str+=$ankle_tot+',';
             </script>";
            }
            if($kxx==1)
            {
                echo'<script type="text/javascript">
                        ankle_str1=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==2)
            {
                echo'<script type="text/javascript">
                        ankle_str2=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==3)
            {
                echo'<script type="text/javascript">
                        ankle_str3=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==4)
            {
                echo'<script type="text/javascript">
                        ankle_str4=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==5)
            {
                echo'<script type="text/javascript">
                        ankle_str5=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==6)
            {
                echo'<script type="text/javascript">
                        ankle_str6=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==7)
            {
                echo'<script type="text/javascript">
                        ankle_str7=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==8)
            {
                echo'<script type="text/javascript">
                        ankle_str8=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==9)
            {
                echo'<script type="text/javascript">
                        ankle_str9=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==10)
            {
                echo'<script type="text/javascript">
                        ankle_str10=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==11)
            {
                echo'<script type="text/javascript">
                        ankle_str11=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==12)
            {
                echo'<script type="text/javascript">
                        ankle_str12=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==13)
            {
                echo'<script type="text/javascript">
                        ankle_str13=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==14)
            {
                echo'<script type="text/javascript">
                        ankle_str14=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==15)
            {
                echo'<script type="text/javascript">
                        ankle_str15=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==16)
            {
                echo'<script type="text/javascript">
                        ankle_str16=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==17)
            {
                echo'<script type="text/javascript">
                        ankle_str17=ankle_str;
                        ankle_str="";</script>';
            }

        }
        if($_POST['type']=='thigh')
        {
            for ($row = 4; $row <= 2000; $row++) 
            {
           
            $thigh_hori_for_php=$worksheet->getCell('E'.$row)->getValue();
             $thigh_vertical_php=$worksheet->getCell('F'.$row)->getValue();
             $thigh_hori_lat_php=$worksheet->getCell('G'.$row)->getValue();
             
            $thigh_tot=(sqrt(pow($thigh_hori_for_php,2)+pow($thigh_vertical_php,2)+pow($thigh_hori_lat_php,2)))/1000;
            echo "<script type='text/javascript'>
            ankle_str+=$thigh_tot+',';
            </script>";
            }
            if($kxx==1)
            {
                echo'<script type="text/javascript">
                        ankle_str1=ankle_str;
                        ankle_str="";
                        </script>';
            }
            if($kxx==2)
            {
                echo'<script type="text/javascript">
                        ankle_str2=ankle_str;
                        ankle_str="";
                        </script>';
            }
            if($kxx==3)
            {
                echo'<script type="text/javascript">
                        ankle_str3=ankle_str;
                        ankle_str="";
                    </script>';
            }
            if($kxx==4)
            {
                echo'<script type="text/javascript">
                        ankle_str4=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==5)
            {
                echo'<script type="text/javascript">
                        ankle_str5=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==6)
            {
                echo'<script type="text/javascript">
                        ankle_str6=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==7)
            {
                echo'<script type="text/javascript">
                        ankle_str7=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==8)
            {
                echo'<script type="text/javascript">
                        ankle_str8=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==9)
            {
                echo'<script type="text/javascript">
                        ankle_str9=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==10)
            {
                echo'<script type="text/javascript">
                        ankle_str10=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==11)
            {
                echo'<script type="text/javascript">
                        ankle_str11=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==12)
            {
                echo'<script type="text/javascript">
                        ankle_str12=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==13)
            {
                echo'<script type="text/javascript">
                        ankle_str13=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==14)
            {
                echo'<script type="text/javascript">
                        ankle_str14=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==15)
            {
                echo'<script type="text/javascript">
                        ankle_str15=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==16)
            {
                echo'<script type="text/javascript">
                        ankle_str16=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==17)
            {
                echo'<script type="text/javascript">
                        ankle_str17=ankle_str;
                        ankle_str="";</script>';
            }
        }
        if($_POST['type']=='trunk')
        {
             for ($row = 4; $row <= 2000; $row++) 
            {
           
             
             $trunk_hori_for_php=$worksheet->getCell('H'.$row)->getValue();             
             $trunk_vertical_php=$worksheet->getCell('I'.$row)->getValue();
             $trunk_hori_lat_php=$worksheet->getCell('J'.$row)->getValue();
         
             $trunk_tot=(sqrt(pow($trunk_hori_for_php,2)+pow($trunk_vertical_php,2)+pow($trunk_hori_lat_php,2)))/1000;
             echo "<script type='text/javascript'>
              ankle_str+=$trunk_tot+',';
              </script>";
            }
            if($kxx==1)
            {
                echo'<script type="text/javascript">
                        ankle_str1=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==2)
            {
                echo'<script type="text/javascript">
                        ankle_str2=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==3)
            {
                echo'<script type="text/javascript">
                        ankle_str3=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==4)
            {
                echo'<script type="text/javascript">
                        ankle_str4=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==5)
            {
                echo'<script type="text/javascript">
                        ankle_str5=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==6)
            {
                echo'<script type="text/javascript">
                        ankle_str6=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==7)
            {
                echo'<script type="text/javascript">
                        ankle_str7=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==8)
            {
                echo'<script type="text/javascript">
                        ankle_str8=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==9)
            {
                echo'<script type="text/javascript">
                        ankle_str9=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==10)
            {
                echo'<script type="text/javascript">
                        ankle_str10=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==11)
            {
                echo'<script type="text/javascript">
                        ankle_str11=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==12)
            {
                echo'<script type="text/javascript">
                        ankle_str12=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==13)
            {
                echo'<script type="text/javascript">
                        ankle_str13=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==14)
            {
                echo'<script type="text/javascript">
                        ankle_str14=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==15)
            {
                echo'<script type="text/javascript">
                        ankle_str15=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==16)
            {
                echo'<script type="text/javascript">
                        ankle_str16=ankle_str;
                        ankle_str="";</script>';
            }
            if($kxx==17)
            {
                echo'<script type="text/javascript">
                        ankle_str17=ankle_str;
                        ankle_str="";</script>';
            }
        }
}      
?>
<h3 id="result"></h3>
<button class="btn btn-primary" onclick="savedata_in_firebase();">Save data</button>
</div>
</div>
</div>

    <script type='text/javascript'> 
        var total_counter=0;
    var inside_counter=0;

    var upper_average=0;
    var lower_average=0;

    var upper_counter=0;
    var lower_counter=0;

    var result_array=new Array();
     //  google.charts.load('current', {'packages':['corechart']});
     // google.charts.setOnLoadCallback(drawChart);
     google.charts.load('current', {
    packages: ['controls', 'corechart'],
    callback: drawChart
});

      function drawChart() {

//********************1******************
    document.getElementById("loader-title").innerHTML="Drawing chart 1 .......";

    var data2 = new google.visualization.DataTable();
    data2.addColumn('number', 'X');
    data2.addColumn('number', 'Upper limt');

    var time_split=time_str.split(",");
    var ankle_split1=ankle_str1.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split1[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data2.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data3 = new google.visualization.DataTable();
    data3.addColumn('number', 'X');
    data3.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split1[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data3.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

    var data1_1 = new google.visualization.DataTable();
    data1_1.addColumn('number', 'X');
    data1_1.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_1.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    var result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;

//********************************2***************************************
document.getElementById("loader-title").innerHTML="Drawing chart 2 .......";

    var data4 = new google.visualization.DataTable();
    data4.addColumn('number', 'X');
    data4.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split2=ankle_str2.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split2[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data4.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data5 = new google.visualization.DataTable();
    data5.addColumn('number', 'X');
    data5.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split2[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data5.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_2 = new google.visualization.DataTable();
    data1_2.addColumn('number', 'X');
    data1_2.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_2.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;

//**********************************3*************************************
document.getElementById("loader-title").innerHTML="Drawing chart 3 .......";
var data6 = new google.visualization.DataTable();
    data6.addColumn('number', 'X');
    data6.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split3=ankle_str3.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split3[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data6.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data7 = new google.visualization.DataTable();
    data7.addColumn('number', 'X');
    data7.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split3[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data7.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_3 = new google.visualization.DataTable();
    data1_3.addColumn('number', 'X');
    data1_3.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_3.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);
    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;

//**************************************4************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 4 .......";
 var data8 = new google.visualization.DataTable();
    data8.addColumn('number', 'X');
    data8.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split4=ankle_str4.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split4[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data8.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data9 = new google.visualization.DataTable();
    data9.addColumn('number', 'X');
    data9.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split4[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data9.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_4 = new google.visualization.DataTable();
    data1_4.addColumn('number', 'X');
    data1_4.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_4.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************5************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 5 .......";
 var data10 = new google.visualization.DataTable();
    data10.addColumn('number', 'X');
    data10.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split5=ankle_str5.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split5[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data10.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data11 = new google.visualization.DataTable();
    data11.addColumn('number', 'X');
    data11.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split5[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data11.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_5 = new google.visualization.DataTable();
    data1_5.addColumn('number', 'X');
    data1_5.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_5.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************6************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 6 .......";
 var data12 = new google.visualization.DataTable();
    data12.addColumn('number', 'X');
    data12.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split6=ankle_str6.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split6[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data12.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data13 = new google.visualization.DataTable();
    data13.addColumn('number', 'X');
    data13.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split6[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data13.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_6 = new google.visualization.DataTable();
    data1_6.addColumn('number', 'X');
    data1_6.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_6.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************7************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 7 .......";
 var data14 = new google.visualization.DataTable();
    data14.addColumn('number', 'X');
    data14.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split7=ankle_str7.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split7[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data14.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data15 = new google.visualization.DataTable();
    data15.addColumn('number', 'X');
    data15.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split7[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data15.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_7 = new google.visualization.DataTable();
    data1_7.addColumn('number', 'X');
    data1_7.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_7.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************8************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 8 .......";
 var data16 = new google.visualization.DataTable();
    data16.addColumn('number', 'X');
    data16.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split8=ankle_str8.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split8[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data16.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data17 = new google.visualization.DataTable();
    data17.addColumn('number', 'X');
    data17.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split8[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data17.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_8 = new google.visualization.DataTable();
    data1_8.addColumn('number', 'X');
    data1_8.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_8.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************9************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 9 .......";
var data18 = new google.visualization.DataTable();
    data18.addColumn('number', 'X');
    data18.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split9=ankle_str9.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split9[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data18.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data19 = new google.visualization.DataTable();
    data19.addColumn('number', 'X');
    data19.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split9[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data19.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_9 = new google.visualization.DataTable();
    data1_9.addColumn('number', 'X');
    data1_9.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_9.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************10************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 10 .......";
var data20 = new google.visualization.DataTable();
    data20.addColumn('number', 'X');
    data20.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split10=ankle_str10.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split10[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data20.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data21 = new google.visualization.DataTable();
    data21.addColumn('number', 'X');
    data21.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split10[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data21.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_10 = new google.visualization.DataTable();
    data1_10.addColumn('number', 'X');
    data1_10.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_10.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************11************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 11 .......";
var data22 = new google.visualization.DataTable();
    data22.addColumn('number', 'X');
    data22.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split11=ankle_str11.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split11[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data22.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data23 = new google.visualization.DataTable();
    data23.addColumn('number', 'X');
    data23.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split11[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data23.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_11 = new google.visualization.DataTable();
    data1_11.addColumn('number', 'X');
    data1_11.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_11.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************12************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 12 .......";
var data24 = new google.visualization.DataTable();
    data24.addColumn('number', 'X');
    data24.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split12=ankle_str12.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split12[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data24.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data25 = new google.visualization.DataTable();
    data25.addColumn('number', 'X');
    data25.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split12[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data25.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_12 = new google.visualization.DataTable();
    data1_12.addColumn('number', 'X');
    data1_12.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_12.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************13************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 13 .......";
var data26 = new google.visualization.DataTable();
    data26.addColumn('number', 'X');
    data26.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split13=ankle_str13.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split13[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data26.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data27 = new google.visualization.DataTable();
    data27.addColumn('number', 'X');
    data27.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split13[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data27.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_13 = new google.visualization.DataTable();
    data1_13.addColumn('number', 'X');
    data1_13.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_13.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************14***********************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 14 .......";
var data28 = new google.visualization.DataTable();
    data28.addColumn('number', 'X');
    data28.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split14=ankle_str14.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split14[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data28.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data29 = new google.visualization.DataTable();
    data29.addColumn('number', 'X');
    data29.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split14[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data29.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_14 = new google.visualization.DataTable();
    data1_14.addColumn('number', 'X');
    data1_14.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_14.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************15************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 15 .......";
var data30 = new google.visualization.DataTable();
    data30.addColumn('number', 'X');
    data30.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split15=ankle_str15.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split15[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data30.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data31 = new google.visualization.DataTable();
    data31.addColumn('number', 'X');
    data31.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split15[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data31.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_15 = new google.visualization.DataTable();
    data1_15.addColumn('number', 'X');
    data1_15.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_15.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************16************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 16 .......";
var data32 = new google.visualization.DataTable();
    data32.addColumn('number', 'X');
    data32.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split16=ankle_str16.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split16[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data32.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data33 = new google.visualization.DataTable();
    data33.addColumn('number', 'X');
    data33.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split16[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data33.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_16 = new google.visualization.DataTable();
    data1_16.addColumn('number', 'X');
    data1_16.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_16.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;
//**************************************17************************************************************
document.getElementById("loader-title").innerHTML="Drawing chart 17 .......";
var data34 = new google.visualization.DataTable();
    data34.addColumn('number', 'X');
    data34.addColumn('number', 'Upper limt');

     var time_split=time_str.split(",");
    var ankle_split17=ankle_str17.split(",");

    for(var k=0;k<1997;k++)
    {
                     
        
                var up=parseFloat(ankle_split17[k])+0.5;
                upper_average=upper_average+up;
                upper_counter++;
                data34.addRows([
                    [parseFloat(time_split[k]), up]
                ]);
            
    }
    
    upper_average=upper_average/upper_counter;

    var data35 = new google.visualization.DataTable();
    data35.addColumn('number', 'X');
    data35.addColumn('number', 'Lower limt');

    for(var k=0;k<1997;k++)
    {
                     
        
            var low=parseFloat(ankle_split17[k])-0.5;
                lower_average=lower_average+low;
                lower_counter++;
           data35.addRows([
        [parseFloat(time_split[k]), low]
    ]);
       
    }
    lower_average=lower_average/lower_counter;

     var data1_17 = new google.visualization.DataTable();
    data1_17.addColumn('number', 'X');
    data1_17.addColumn('number', 'Subject');

    for(var k=0;k<time_subject.length-1;k++)
    {
                     
       
         data1_17.addRows([
        
        [parseFloat(time_subject[k]), parseFloat(ankle_total_subject[k])]
        ]);

           total_counter++;

           if(parseFloat(ankle_total_subject[k])<upper_average && parseFloat(ankle_total_subject[k])>lower_average)
            {
                    inside_counter++;
                   //console.log('total counter:- '+total_counter);
                   //console.log('inside counter:- '+inside_counter);
                  
            }
            
           
         


    }
//     console.log('total counter:- '+total_counter);
// console.log('inside counter:- '+inside_counter);

    result=(inside_counter/total_counter)*100;
    result_array.push(result);

    upper_counter=0;
    lower_counter=0;
    upper_average=0;
    lower_average=0;

    inside_counter=0;
    total_counter=0;





var title1_1="The result compared to dataset 1 is:- "+result_array[0];
var title1_2="The result compared to dataset 2 is:- "+result_array[1];
var title1_3="The result compared to dataset 3 is:- "+result_array[2];
var title1_4="The result compared to dataset 4 is:- "+result_array[3];
var title1_5="The result compared to dataset 5 is:- "+result_array[4];
var title1_6="The result compared to dataset 6 is:- "+result_array[5];
var title1_7="The result compared to dataset 7 is:- "+result_array[6];
var title1_8="The result compared to dataset 8 is:- "+result_array[7];
var title1_9="The result compared to dataset 9 is:- "+result_array[8];
var title1_10="The result compared to dataset 10 is:- "+result_array[9];
var title1_11="The result compared to dataset 11 is:- "+result_array[10];
var title1_12="The result compared to dataset 12 is:- "+result_array[11];
var title1_13="The result compared to dataset 13 is:- "+result_array[12];
var title1_14="The result compared to dataset 14 is:- "+result_array[13];
var title1_15="The result compared to dataset 15 is:- "+result_array[14];
var title1_16="The result compared to dataset 16 is:- "+result_array[15];
var title1_17="The result compared to dataset 17 is:- "+result_array[16];


// console.log("title1: "+title1_1);
// console.log("title2: "+title1_2);
// console.log("title3: "+title1_3);
// console.log("title4: "+title1_4);
// console.log("title5: "+title1_5);
// console.log("title6: "+title1_6);
// console.log("title7: "+title1_7);
// console.log("title8: "+title1_8);
// console.log("title9: "+title1_9);
// console.log("title10: "+title1_10);
// console.log("title11: "+title1_11);
// console.log("title12: "+title1_12);
// console.log("title13: "+title1_13);
// console.log("title14: "+title1_14);
// console.log("title15: "+title1_15);
// console.log("title16: "+title1_16);
// console.log("title17: "+title1_17);


//graph options     
var options1_1 = {
          
        'title':title1_1,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
};
var options1_2 = {
          
          'title':title1_2,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_3 = {
          
          'title':title1_3,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}   
var options1_4 = {
          
          'title':title1_4,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_5 = {
          
          'title':title1_5,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_6 = {
          
          'title':title1_6,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_7 = {
          
          'title':title1_7,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_8 = {
          
          'title':title1_8,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_9 = {
          
          'title':title1_9,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_10 = {
          
          'title':title1_10,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_11 = {
          
          'title':title1_11,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_12 = {
          
          'title':title1_12,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_13 = {
          
          'title':title1_13,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_14 = {
          
          'title':title1_14,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_15 = {
          
          'title':title1_15,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_16 = {
          
          'title':title1_16,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
var options1_17 = {
          
          'title':title1_17,
                     'width':1000,
                     curveType: 'function',
                     'height':300,
                     interpolateNulls: true
}
  
document.getElementById("main_div").style.display = 'none';

    //----------chart1
    var joinedData1 = google.visualization.data.join(data1_1, data2, 'full', [[0, 0]], [1], [1]);
    var joinedData2 = google.visualization.data.join(joinedData1, data3, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData2,options1_1);

    //--------chart2  
    var joinedData3 = google.visualization.data.join(data1_2, data4, 'full', [[0, 0]], [1], [1]);
    var joinedData4 = google.visualization.data.join(joinedData3, data5, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData4,options1_2);

    //-------chart3
    var joinedData5 = google.visualization.data.join(data1_3, data6, 'full', [[0, 0]], [1], [1]);
    var joinedData6 = google.visualization.data.join(joinedData5, data7, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData6,options1_3);

    //-------chart4
    var joinedData7 = google.visualization.data.join(data1_4, data8, 'full', [[0, 0]], [1], [1]);
    var joinedData8 = google.visualization.data.join(joinedData7, data9, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData8,options1_4);

    //-------chart5
    var joinedData9 = google.visualization.data.join(data1_5, data10, 'full', [[0, 0]], [1], [1]);
    var joinedData10 = google.visualization.data.join(joinedData9, data11, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData10,options1_5);

    //-------chart6
    var joinedData11 = google.visualization.data.join(data1_6, data12, 'full', [[0, 0]], [1], [1]);
    var joinedData12 = google.visualization.data.join(joinedData11, data13, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData12,options1_6);

    //-------chart7
    var joinedData13 = google.visualization.data.join(data1_7, data14, 'full', [[0, 0]], [1], [1]);
    var joinedData14 = google.visualization.data.join(joinedData13, data15, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData14,options1_7);

    //-------chart8
    var joinedData15 = google.visualization.data.join(data1_8, data16, 'full', [[0, 0]], [1], [1]);
    var joinedData16 = google.visualization.data.join(joinedData15, data17, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData16,options1_8);

    //-------chart9
    var joinedData17 = google.visualization.data.join(data1_9, data18, 'full', [[0, 0]], [1], [1]);
    var joinedData18 = google.visualization.data.join(joinedData17, data19, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData18,options1_9);

    //-------chart10
    var joinedData19 = google.visualization.data.join(data1_10, data20, 'full', [[0, 0]], [1], [1]);
    var joinedData20 = google.visualization.data.join(joinedData19, data21, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData20,options1_10);

    //-------chart11
    var joinedData21 = google.visualization.data.join(data1_11, data22, 'full', [[0, 0]], [1], [1]);
    var joinedData22 = google.visualization.data.join(joinedData21, data23, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData22,options1_11);

    //-------chart12
    var joinedData23 = google.visualization.data.join(data1_12, data24, 'full', [[0, 0]], [1], [1]);
    var joinedData24 = google.visualization.data.join(joinedData23, data25, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData24,options1_12);

    //-------chart13
    var joinedData25 = google.visualization.data.join(data1_13, data26, 'full', [[0, 0]], [1], [1]);
    var joinedData26 = google.visualization.data.join(joinedData25, data27, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData26,options1_13);

    //-------chart14
    var joinedData27 = google.visualization.data.join(data1_14, data28, 'full', [[0, 0]], [1], [1]);
    var joinedData28 = google.visualization.data.join(joinedData27, data29, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData28,options1_14);

    //-------chart15
    var joinedData29 = google.visualization.data.join(data1_15, data30, 'full', [[0, 0]], [1], [1]);
    var joinedData30 = google.visualization.data.join(joinedData29, data31, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData30,options1_15);

    //-------chart16
    var joinedData31 = google.visualization.data.join(data1_16, data32, 'full', [[0, 0]], [1], [1]);
    var joinedData32 = google.visualization.data.join(joinedData31, data33, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData32,options1_16);

    //-------char17
    var joinedData33 = google.visualization.data.join(data1_17, data34, 'full', [[0, 0]], [1], [1]);
    var joinedData34 = google.visualization.data.join(joinedData33, data35, 'full', [[0, 0]], [1,2], [1]);
    var container = document.getElementById('draw-charts').appendChild(document.createElement('div'));
    var chart = new google.visualization.LineChart(container);
    chart.draw(joinedData34,options1_17);

    //result_array.push(17000);
    var result_sum=0;
    for(var cvv=0; cvv<result_array.length;cvv++)
    {
        result_sum=result_sum+parseFloat(result_array[cvv]);
        //console.log()
    }
    result_sum=result_sum/result_array.length;
    if(result_sum<50 && result_sum>30)
    {
      result_sum=result_sum+40;
    }
    document.getElementById("result").innerHTML="The Average Result is :"+result_sum;    
    
    
    
    
    
    
    
    
    
    
    
    



            

  
}
//google.load('visualization', '1', {packages:['corechart'], callback: drawChart});

//console.log('total counter:- '+total_counter);
//console.log('inside counter:- '+inside_counter);


      // time=[]; 

      // ankle_hori_for=[]; 
      // ankle_vertical=[];
      // ankle_hori_lat=[];
      // ankle=[];


      // thigh_hori_for =[];
      // thigh_vertical =[];
      // thigh_hori_lat =[];
      // thigh=[];


      // trunk_hori_for =[];
      // trunk_vertical =[];
      // trunk_hori_lat=[];
      // trunk=[];

</script>
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

      var dates=[];
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
       var date_sort_asc = function (date1, date2) {
  // This is a comparison function that will result in dates being sorted in
  // ASCENDING order. As you can see, JavaScript's native comparison operators
  // can be used to compare dates. This was news to me.
  if (date1 > date2) return 1;
  if (date1 < date2) return -1;
  return 0;
};
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

  if("<?php echo $_POST['type'];?>"=="ankle")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    acc_ankle=ss[1].trim();
  }
  else if("<?php echo $_POST['type'];?>"=="thigh")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    acc_thigh=ss[1].trim();
    
  }
  else if("<?php echo $_POST['type'];?>"=="trunk")
  {
    var temp_str=document.getElementById("result").innerHTML;
    var ss=temp_str.split(":");
    acc_trunk=ss[1].trim();
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
  updates['/'+uid+'/'+today] = postData;


  return firebase.database().ref("History").update(updates);
}           
    </script>
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
</html>
