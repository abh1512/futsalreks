$(document).ready(function(){
  $('.daftar').click(function(){
    var key = $(this).attr('id');
    $.ajax({
        url : "login.php",
        type: "POST",
        data: $("#form_penyewaan").serialize()+"&key="+key,
        success: function(data){
          alert(data);
/*        if(data == "pegawai")
          {
            window.location.href = ""+data;
          }
          else {
            swal({
                title: "Gagal Masuk",
                text: ""+data,
                type: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OK",
            });
          }
*/
        }
    });
  })
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
    $("#tombol_login").click(function(){

      $.ajax({
          url : "login.php",
          type: "POST",
          data: $("#form_login").serialize(),
          success: function(data){

            if(data == "pegawai")
            {
              window.location.href = ""+data;
            }
            else if(data == "pemilik")
            {
              window.location.href = ""+data;
            }
            else if(data == "customer")
            {
              window.location.href = ""+data;
            }
            else {
              swal({
                  title: "Gagal Masuk",
                  text: ""+data,
                  type: "warning",
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "OK",
              });
            }

          }
      });
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

    $.get("recdisp.php", function(data) {
        timestamp = parseInt(data);
        setInterval(updateClock, 1000);
    });

  });



  var timer2 = "59:59";
  var interval = setInterval(function() {


    var timer = timer2.split(':');
    //by parsing integer, I avoid all extra string processing
    var minutes = parseInt(timer[0], 10);
    var seconds = parseInt(timer[1], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    if (minutes < 0) clearInterval(interval);
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    $('#timer').html(minutes + ':' + seconds);
    timer2 = minutes + ':' + seconds;
  }, 1000);
  var timestamp;

      function updateClock() {
          console.log(timestamp);
          var date = new Date(timestamp*1000); // multiply by 1000 because Date() uses milliseconds

          // ...

          $("#time").html(date.getSeconds());
          timestamp -= 1; // decrement timestamp by 1 second.
      }

function pesan(){
  $(this).attr('disabled','disabled');
}
