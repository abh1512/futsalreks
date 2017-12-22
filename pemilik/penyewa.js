var bulan_off = [];
var jumlah_off = [];
var jumlah_on = [];
<?php
  $er3=mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
    WHERE id_transaksi LIKE 'on%' and id_lapangan LIKE '$gedung_id%'
    GROUP BY sDate ORDER BY sDate DESC");
   while($r3=mliSelect($er3)){
  ?>;
  jumlah_on.push(<?=$r3->iCount?>);
  <?php
   }
   ?>
  <?php
 $er=mysqli_query($con,"SELECT DATE_FORMAT(tgl_sewa, '%b') AS sDate, COUNT(id_transaksi) AS iCount FROM transaksis
   WHERE id_transaksi LIKE 'off%' and id_lapangan LIKE '$gedung_id%'
   GROUP BY sDate ORDER BY sDate DESC");
  while($r=mliSelect($er)){
    ?>
     bulan_off.push("<?=$r->sDate?>");
     jumlah_off.push(<?=$r->iCount?>);
    <?php
     }
     ?>
var data2 = {
    labels: bulan_off,
    datasets: [{
       label: "Offline Transaction",
       fillColor: "#00ACC1",
       strokeColor: "transparent",
       highlightFill: '#9575CD',
       highlightStroke: '#B3B3B3',
       data:jumlah_off,
       },
       {
       label: 'Online Transaction',
       fillColor: '#9575CD',
       strokeColor: 'transparent',
       highlightFill: '#9575CD',
       highlightStroke: '#B3B3B3',
       data: jumlah_on,
       }]
};
var ctx2 = document.getElementById("chart2").getContext("2d");
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
    tooltipCornerRadius: 2,
    legend:{
      display: true
    }
});
