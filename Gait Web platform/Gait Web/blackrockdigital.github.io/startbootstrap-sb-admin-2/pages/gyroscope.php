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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
                    <h1 class="page-header">Gyroscope Readings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
            <div class="row">
                <div class="col-lg-12">
                    <form action="gyroscope_data.php" method="POST" id="my_cust_form">
                        <input type="hidden" name="data" id="data">
                        <input type="hidden" name="type" id="type">
                        <input type="hidden" name="uid" id="uid">
                        <input type="hidden" name="gender" id="gender">
                    </form>
                         <table name="disasterdisplay" id="table" class="table table-striped table-bordered table-hover"></table>

                   
                                  <script>

 var database=firebase.database();
      var ref=database.ref("Users");
      ref.on("value",gotData,errData);
      var age = new Array();
      var gyr_ankle = new Array();
      var gyr_thigh = new Array();

      var gyr_trunk = new Array();

      var email = new Array();
      var height = new Array();
      var patient_name = new Array();
      var weight = new Array();
      var gender = new  Array();
      var uid = new  Array();
      var countr = 0;
         var no_rows_counter=1;
        function gotData(data){
        console.log("hello");
        var users=data.val();
              for(x in users){
               uid.push(x);
                  age.push(users[x].age);
                 gyr_ankle.push(users[x].gyr_ankle);
                                  gyr_trunk.push(users[x].gyr_trunk);

                 gyr_thigh.push(users[x].gyr_thigh);

                  email.push(users[x].email);
                  height.push(users[x].height);
                  patient_name.push(users[x].name);
                  weight.push(users[x].weight);
                  gender.push(users[x].gender);
                  countr++;
                
            }
           disptable(uid,age, gyr_ankle,gyr_thigh, gyr_trunk,email,height,patient_name,weight,gender);
           loadlistners();
        }
        function loadlistners()
        {
            // for(var ks=(patient_name.length-1); ks>=0; ks--)
            // {
            //     var idd="but"+ks;
            //     console.log(idd);
            //      document.getElementById(idd).addEventListener("click", function(){
            //         alert(document.getElementById(idd).id);
            //         alert(document.getElementById(idd).value);
            //     });
            // }

            var btns1 = document.querySelectorAll('.button1');

Array.prototype.forEach.call(btns1, function addClickListener(btn1) {
  btn1.addEventListener('click', function(event) {
    // code here to handle click
    var but_id=btn1.id;
    var ss2=btn1.value.split("^^");
    var btn_value=ss2[2];
  
              document.getElementById("uid").value=ss2[1];
              document.getElementById("gender").value=ss2[0];
              document.getElementById("data").value=encodeURIComponent(btn_value);
              document.getElementById("type").value="knee";

              document.getElementById("my_cust_form").submit();

    console.log(btn_value);
  });
});


 var btns2 = document.querySelectorAll('.button2');

Array.prototype.forEach.call(btns2, function addClickListener(btn2) {
  btn2.addEventListener('click', function(event) {
    // code here to handle click
    var but_id=btn2.id;
    var ss2=btn2.value.split("^^");
    var btn_value=ss2[2];
  
              document.getElementById("uid").value=ss2[1];          
              document.getElementById("gender").value=ss2[0];
              document.getElementById("data").value=encodeURIComponent(btn_value);
              document.getElementById("type").value="fore";
              document.getElementById("my_cust_form").submit();

    console.log(btn_value);
  });
});


 var btns3 = document.querySelectorAll('.button3');

Array.prototype.forEach.call(btns3, function addClickListener(btn3) {
  btn3.addEventListener('click', function(event) {
    // code here to handle click
    var but_id=btn3.id;
    var ss2=btn3.value.split("^^");
    var btn_value=ss2[2];

              document.getElementById("uid").value=ss2[1]; 
              document.getElementById("gender").value=ss2[0];
              document.getElementById("data").value=encodeURIComponent(btn_value);
              document.getElementById("type").value="lateral";
              document.getElementById("my_cust_form").submit();

    console.log(btn_value);
  });
});

        }
       
            function errData(err) {
                    // body...
                    console.log(err);
                }
        
        
        function disptable(uid,age, gyr_ankle, gyr_thigh, gyr_trunk,email,height,patient_name,weight,gender)
        {
        //console.log(img);
        var table = document.getElementById('table');
        var tbody = document.createElement('tbody');
            var rowhead = document.createElement('tr');
            var cellhead = document.createElement('td');
            cellhead.textContent = "Name";
            cellhead.style.textStyle = "bold"
            rowhead.appendChild(cellhead);
            var cell2head = document.createElement('td');
            cell2head.textContent = "Age";
            rowhead.appendChild(cell2head);
            var cell5head = document.createElement('td');
            cell5head.textContent = "Weight";
            rowhead.appendChild(cell5head);
            var cell6head = document.createElement('td');
            cell6head.textContent = "Height";
            rowhead.appendChild(cell6head);
             var cell7head = document.createElement('td');
            cell7head.textContent = "Email";
            rowhead.appendChild(cell7head);

             var cell11head = document.createElement('td');
            cell11head.textContent = "Gender";
            rowhead.appendChild(cell11head);

             var cell8head = document.createElement('td');
            cell8head.textContent = "Gyroscope knee";
            rowhead.appendChild(cell8head);

             var cell9head = document.createElement('td');
            cell9head.textContent = "Gyroscope fore";
            rowhead.appendChild(cell9head);

             var cell10head = document.createElement('td');
            cell10head.textContent = "Gyroscope lateral";
            rowhead.appendChild(cell10head);
            tbody.appendChild(rowhead);
         
// loop array
        for (i = (patient_name.length - 1) ; i >=0 ; i--) {
        var row = document.createElement('tr');
    // loop inner array
        // create td element
            var cell = document.createElement('td');
            cell.textContent = patient_name[i];
            row.appendChild(cell);
            var cell2 = document.createElement('td');
            cell2.textContent = age[i];
            row.appendChild(cell2);
            var cell5 = document.createElement('td');
            cell5.textContent = weight[i];
            row.appendChild(cell5);
            var cell6 = document.createElement('td');
            // if(img[i]==undefined)
            // {
            //   img[i] = "ImUnavail.jpg";
            // }
            cell6.textContent = height[i];
            row.appendChild(cell6);

               var cell7 = document.createElement('td');
            cell7.textContent = email[i];
            row.appendChild(cell7);


               var cell23 = document.createElement('td');
            cell23.textContent = gender[i];
            row.appendChild(cell23);


               var cell8 = document.createElement('td');
               var button1=document.createElement('button')
               button1.innerHTML="View More";
               button1.id="but1"+i;
               button1.value=gender[i]+"^^"+uid[i]+"^^"+gyr_ankle[i];
               button1.className="button1 btn btn-primary";
               //button.onclick="myfunc(this.id,this.val);";
            //cell8.textContent = acc_data[i];
            cell8.appendChild(button1);
            row.appendChild(cell8);


            var cell9 = document.createElement('td');
               var button2=document.createElement('button')
               button2.innerHTML="View More";
               button2.id="but2"+i;
               button2.value=gender[i]+"^^"+uid[i]+"^^"+gyr_thigh[i];
               button2.className="button2 btn btn-primary";
               //button.onclick="myfunc(this.id,this.val);";
            //cell8.textContent = acc_data[i];
            cell9.appendChild(button2);
            row.appendChild(cell9);


            var cell10 = document.createElement('td');
               var button3=document.createElement('button')
               button3.innerHTML="View More";
               button3.id="but3"+i;
               button3.value=gender[i]+"^^"+uid[i]+"^^"+gyr_trunk[i];
               button3.className="button3 btn btn-primary";
               //button.onclick="myfunc(this.id,this.val);";
            //cell8.textContent = acc_data[i];
            cell10.appendChild(button3);
            row.appendChild(cell10);
    //append tr to tbody
        tbody.appendChild(row);
        }
// append tbody to table
        table.appendChild(tbody);
// append table to container
        }
  Array.prototype.uniques = function() {
  var arr = [];
  for(var i = 0; i < this.length; i++) {
      if(!arr.includes(this[i])) {
          arr.push(this[i]);
      }
  }
  return arr;
  }















// var database = firebase.database();
// var ref=database.ref('Users');
// ref.on('value',gotData,errData);

// function gotData(data)
// {
    //console.log(data.val());
 //    var keys_arr = [];
 //    var age_arr = [];
 //    var data_arr = [];
 //    var name_arr = [];
 //    var email_arr = [];
 //    var height_arr = [];
 //    var weight_arr = [];
 //    var time_arr=[];
 //    var x_arr=[];
 //    var y_arr=[];
 //    var z_arr=[];


 //    var scores=data.val();
 //    console.log(scores);
 //    var keys=Object.keys(scores);//array of all the keys
 //    console.log(keys);
 // var x = document.createElement("TABLE");
 //    x.setAttribute("id", "myTable");
 //    document.body.appendChild(x);
 //    for(var i=0;i<keys.length;i++)
 //    {
 //        var k=keys[i];
 //        var age=scores[k].age;
 //        var data=scores[k].data;
 //        data = data.slice(0, -2);

 //        var email=scores[k].email;
 //        var height=scores[k].height;
 //        var name=scores[k].name;
 //        var weight=scores[k].weight;

 //        keys_arr.push(k);
 //        age_arr.push(age);
 //        data_arr.push(data);
 //        name_arr.push(name);
 //        email_arr.push(email);
 //        height_arr.push(height);
 //        weight_arr.push(weight);

 //        var ss = data.split("::");


 //        //creating panels  
 //        // var div=document.createElement('div');
 //        // div.className='panel panel-default';

 //        // var div2=document.createElement('div');
 //        // div2.className='panel-heading';
 //        // div.appendChild(div2);

 //        // var a=document.createElement('a');
 //        // a.id='anchor_tag';
 //        // $("#anchor_tag").collapse('toggle');
 //        // a.href='#collapse'+i;
 //        // a.innerHTML=name;
 //        // div2.appendChild(a);

 //        // var div3=document.createElement('div');
 //        // div3.id='collapse'+i;
 //        // div3.className='panel-collapse collapse panel-body';
 //        // div.appendChild(div3);

 //        var table=document.createElement('table');
 //        table.width='100%';
 //        table.className='table table-striped table-bordered table-hover';
 //        table.id='dataTables-example';
 //        //div3.appendChild(table);

 //        var thead=document.createElement('thead');
 //        table.appendChild(thead);

 //        var tr=document.createElement('tr');
 //        thead.appendChild(tr);

 //        var th1=document.createElement('th');
 //        var th2=document.createElement('th');
 //        var th3=document.createElement('th');
 //        var th4=document.createElement('th');
 //        var th5=document.createElement('th');

 //        th1.innerHTML='Time';
 //        th2.innerHTML='X';
 //        th3.innerHTML='Y';
 //        th4.innerHTML='Z';
 //        th5.innerHTML='linear acc';

 //        thead.appendChild(th1);
 //        thead.appendChild(th2);
 //        thead.appendChild(th3);
 //        thead.appendChild(th4);
 //        thead.appendChild(th5);


 //        var tbody=document.createElement('tbody');
 //        table.appendChild(tbody);






       

        

 //        for (var i in ss) {  
 //             var row=ss[i];  

 //             var data2=row.split(",");
 //             time_arr.push(data2[0]);
 //             x_arr.push(data2[1]);
 //             y_arr.push(data2[2]);
 //             z_arr.push(data2[3]);
               
 //        } 




 //        //console.log(age+","+data+","+email+","+height+","+name+","+weight);
 //        console.log("data");
       


 //        // var age=scores[k].age;
 //        // var height=scores[k].height;
 //        // var weight=scores[k].weight;
 //        // var name=scores[k].name;


 //    }
 //     //console.log("Data");
 //        for (i = 0; i < time_arr.length; i++) { 
 //           // console.log(time_arr[i]+","+x_arr[i]+","+y_arr[i]+","+z_arr[i]);
 //            //document.getElementById("table_body").innerHTML="<tr><td>"+time_arr[i]+"</td>  <td>"+x_arr[i]+"</td>  <td>"+y_arr[i]+"</td>  <td>"+z_arr[i]+"</td>  <td>xx</td></tr>";
 //            tr=document.createElement('tr');

 //            td1=document.createElement('td');
 //            td1.innerHTML=time_arr[i];

 //            td2=document.createElement('td');
 //            td2.innerHTML=x_arr[i];

 //            td3=document.createElement('td');
 //            td3.innerHTML=y_arr[i];

 //            td4=document.createElement('td');
 //            td4.innerHTML=z_arr[i];

 //            td5=document.createElement('td');
 //            td5.innerHTML=z_arr[i];

 //            tr.appendChild(td1);
 //            tr.appendChild(td2);
 //            tr.appendChild(td3);
 //            tr.appendChild(td4);
 //            tr.appendChild(td5);


 //            //table_body=document.getElementById("table_body");
 //            tbody.appendChild(tr);
 //        }

    
// }
// function  errData(err) {
//     console.log('Error!');
//     console.log(err);
    
// }



</script>
 
    
            </div>
          
        </div>


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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
        $('#table').DataTable({
            responsive: true
        });
    });
    </script>
   

</body>


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Mar 2018 19:52:45 GMT -->
</html>
