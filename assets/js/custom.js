$(document).ready(function(){

    /*
      $('#jam_lapangan').DataTable({
        "bPaginate": false,
      "bFilter": false,
      "bInfo": false,
          language: {
              searchPlaceholder: 'Search records',
              sSearch: '',
              sLengthMenu: 'Show _MENU_',
              sLength: 'dataTables_length',
              oPaginate: {
                  sFirst: '<i class="material-icons">chevron_left</i>',
                  sPrevious: '<i class="material-icons">chevron_left</i>',
                  sNext: '<i class="material-icons">chevron_right</i>',
                  sLast: '<i class="material-icons">chevron_right</i>'
          }
          }
      });

      $('#sementara').DataTable({
        "bPaginate": false,
      "bFilter": false,
      "bInfo": false,
          language: {
              searchPlaceholder: 'Search records',
              sSearch: '',
              sLengthMenu: 'Show _MENU_',
              sLength: 'dataTables_length',
              oPaginate: {
                  sFirst: '<i class="material-icons">chevron_left</i>',
                  sPrevious: '<i class="material-icons">chevron_left</i>',
                  sNext: '<i class="material-icons">chevron_right</i>',
                  sLast: '<i class="material-icons">chevron_right</i>'
          }
        },
        "processing" : false,
        "ajax" : {
            "url" : "sementara.php",
            dataSrc : ''
        },
        "columns" : [ {
            "data" : "jam"
        }, {
            "data" : "jam"
        }]
      });*/
      $('.dataTables_length select').addClass('browser-default');


    $(".statuson").click(function(){
    //  alert($(this).attr('id'));

    /*  var id_det_lap = $(this).attr('id');
      $.ajax({
          url : "sementara.php",
          type: "POST",
          data: "id="+id_det_lap+"&key=insert",
          success: function(data){
            alert(data);
          }
      });*/

    })

    $("#pembayaran").click(function(){
      var durasi = "";
      var id = "";
      var tanggal = $("#birthdate").val();

      if($('#durasi').val() != null)
      {
        id = $(".statuson").attr('id');
        durasi = $('#durasi').val();

        $.ajax({
            url : "backend.php",
            type: "POST",
            data: "durasi="+durasi+"&id="+id+"&tanggal="+tanggal,
            success: function(data){


            }
        });
      window.location.href = '?pag=konfirmasi';

      }

    })

    /*$("#birthdate").change(function(){
      var tanggal = $(this).val();
      $.ajax({
          url : "backend.php",
          type: "POST",
          data: "key=tgl&tanggal="+tanggal,
          success: function(data){
          }
      });
    })*/


  });

function pesan(){
  $(this).attr('disabled','disabled');
}
