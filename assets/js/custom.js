$(document).ready(function(){

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
      });*/
      $('.dataTables_length select').addClass('browser-default');


    $(".statuson").click(function(){
      alert($(this).attr('id'));
      var id_det_lap = $(this).attr('id');
      $.ajax({
          url : "sementara.php",
          type: "POST",
          data: "id="+id_det_lap,
          success: function(data){
            alert(data);
          }
      });

    })

    $("#birthdate").change(function(){
      var tanggal = $(this).val();
      $.ajax({
          url : "backend.php",
          type: "POST",
          data: "tanggal="+tanggal,
          success: function(data){
            alert(data);
          }
      });
    })


  });

function pesan(){
  $(this).attr('disabled','disabled');
}
