$(document).ready(function() {

  var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
   var pieChart       = new Chart(pieChartCanvas);
   var PieData        = [<?php
   include '"../lib/settings.php"';
   require_once "../lib/function.php";
   $query = mysqli_query($koneksi,"SELECT prodi.nama_prodi, count(*) as jumlah FROM favourite INNER JOIN prodi ON favourite.prodi = prodi.kode_prodi GROUP BY favourite.prodi ORDER BY jumlah DESC LIMIT 1");
   $row = mysqli_fetch_array($query);
   $query1 = mysqli_query($koneksi,"SELECT prodi.nama_prodi, count(*) as jumlah FROM favourite INNER JOIN prodi ON favourite.prodi = prodi.kode_prodi GROUP BY favourite.prodi ORDER BY jumlah DESC LIMIT 1,1");
   $row1 = mysqli_fetch_array($query1);

 $query2 = mysqli_query($koneksi,"SELECT prodi.nama_prodi, count(*) as jumlah FROM favourite INNER JOIN prodi ON favourite.prodi = prodi.kode_prodi GROUP BY favourite.prodi ORDER BY jumlah DESC LIMIT 2,1");
   $row2 = mysqli_fetch_array($query2);
 $query3 = mysqli_query($koneksi,"SELECT prodi.nama_prodi, count(*) as jumlah FROM favourite INNER JOIN prodi ON favourite.prodi = prodi.kode_prodi GROUP BY favourite.prodi ORDER BY jumlah DESC LIMIT 3,1 ");
   $row3 = mysqli_fetch_array($query3);

   echo "{
     value    : '".$row3[1]."',
     color    : '#f56954',
     highlight: '#f56954',
     label    : '".$row3[0]."'
   },
   {
     value    : '".$row1[1]."',
     color    : '#00a65a',
     highlight: '#00a65a',
     label    : '".$row1[0]."'
   },
   {
     value    : '".$row2[1]."',
     color    : '#f39c12',
     highlight: '#f39c12',
     label    : '".$row2[0]."'
   },
   {
     value    : '".$row[1]."',
     color    : '#00c0ef',
     highlight: '#00c0ef',
     label    : '".$row[0]."'
   }";?>

   ]
   var pieOptions     = {
     //Boolean - Whether we should show a stroke on each segment
     segmentShowStroke    : true,
     //String - The colour of each segment stroke
     segmentStrokeColor   : '#fff',
     //Number - The width of each segment stroke
     segmentStrokeWidth   : 2,
     //Number - The percentage of the chart that we cut out of the middle
     percentageInnerCutout: 50, // This is 0 for Pie charts
     //Number - Amount of animation steps
     animationSteps       : 100,
     //String - Animation easing effect
     animationEasing      : 'easeOutBounce',
     //Boolean - Whether we animate the rotation of the Doughnut
     animateRotate        : true,
     //Boolean - Whether we animate scaling the Doughnut from the centre
     animateScale         : false,
     //Boolean - whether to make the chart responsive to window resizing
     responsive           : true,
     // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
     maintainAspectRatio  : true,
     //String - A legend template
     legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
   }
   //Create pie or douhnut chart
   // You can switch between pie and douhnut using the method below.
   pieChart.Doughnut(PieData, pieOptions)
    /*{
      var a={}
      a['key'] = "off";
        $.ajax({
            url : "load_chart_data.php",
            type: "POST",
            data: a,
            dataType: "JSON",
            success: function(data){
            //  console.log(data['iCount']);
                var bulan_off = [];
                var jumlah_off= [];

                for(var i in data){
                  //console.log(data[i]);
                  bulan_off.push(data['iCount']);
                  jumlah_off.push(data['sDate']);
                }
                console.log(jumlah_off);
            },error: function (data){
                alert('Error get data');
            }
        });
    }
    {
      var a={}
      a['key'] = "on";
      $.ajax({
          url : "load_chart_data.php",
          type: "POST",
          data: a,
          dataType: "JSON",
          success: function(data){
            //console.log(data);
            var bulan_on = [];
            var jumlah_on =[];
            for(var i in data){
              bulan_on.push(data[i].iCount);
              jumlah_on.push(data[i].sDate);
            }
          },error: function (data){
              alert('Error get data');
          }
      });
    }



    var ctx2 = document.getElementById("chart2").getContext("2d");
    var data2 = {
        labels: bulan_off,
        datasets: [
            {
                label: "Offline Transaction",
                fillColor: "#9575CD",
                strokeColor: "transparent",
                highlightFill: "#9575CD",
                highlightStroke: "#B3B3B3",
                data: jumlah_off
            },
            {
                label: "Online Transaction",
                fillColor: "#33AC71",
                strokeColor: "transparent",
                highlightFill: "#33AC71",
                highlightStroke: "#B3B3B3",
                data: jumlah_on
            }
        ]
    };

    var chart2 = new Chart(ctx2).Bar(data2, {
        scaleBeginAtZero : true,
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.05)",
        scaleGridLineWidth : 1,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: false,
        barShowStroke : true,
        barStrokeWidth : 2,
        barDatasetSpacing : 1,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true,
        scaleOverride: true,
        scaleSteps: 6,
        scaleStepWidth: 15,
        scaleStartValue: 0,
        barValueSpacing: 20,
        tooltipCornerRadius: 2
    });*/
});
