$(document).ready(function(){
  Materialize.updateTextFields();
})
function edit(id){
        $('#edit_harga')[0].reset(); // reset form on modals
        //$('#modal2').modal('open'); // show bootstrap modal when complete loaded
        var a={}
           a['key'] = "edit";
           a['id'] = id;
           //callAjax(a);
        //Ajax Load data from ajax
        $.ajax({
            url : "submit.php",
            type: "POST",
            data: a,
            dataType: "JSON",
            success: function(data){
                $('[name="id_detil"]').val(data.id_detil_lapangan);
                $('[name="mulai"]').val(data.jam_mulai);
                $('[name="selesai"]').val(data.jam_berakhir);
                $('[name="harga"]').val(data.harga);
            },error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data');
            }
        });
}

function tambah(){
        $.ajax({
              url : "submit.php",
              type: "post",
              data: $("#category").serialize()+"&key=lapangan",
              dataType:"json",
              success:function(result){
                //alert(result.res);
                if(result.status){
                  swal({
                      title: "SUKSES!",
                      text: "Berhasil menambahkan lapangan!",
                      type: "success",
                      confirmButtonText: "OK",
                      closeOnConfirm: false
                  }, function(){
                      window.location.reload();
                  });
                }
              },
              error: function(xhr, Status, err) {
                $("Terjadi error : "+Status);
              }

            });
}

function harga(){
  $.ajax({
        url : "submit.php",
        type: "post",
        data: $("#form_harga").serialize()+"&key=harga",
        dataType:"json",
        success:function(result){
          alert(result.status);
          if(result.status){
            swal({
                title: "SUKSES!",
                text: "Berhasil menambahkan harga!",
                type: "success",
                confirmButtonText: "OK",
                closeOnConfirm: false
            }, function(){
                window.location.reload();
            });
          }
        },
        error: function(xhr, Status, err) {
          $("Terjadi error : "+Status);
        }

      });
}

function callAjax(r){
$.ajax({
      url : "submit.php",
      type: "post",
      data: r,
      dataType:"json",
      success:function(result){
  //alert(result.res);
        if(result.status){
          window.location.reload();
        }
      },
      error: function(xhr, Status, err) {
        $("Terjadi error : "+Status);
      }

    });
}

function simpan_edit(){
  $.ajax({
        url : "submit.php",
        type: "post",
        data: $("#edit_harga").serialize()+"&key=edit_harga",
        dataType:"json",
        success:function(result){
          //alert(result.status);
          if(result.status){
            swal({
                title: "SUKSES!",
                text: "Berhasil Edir Harga!",
                type: "success",
                confirmButtonText: "OK",
                closeOnConfirm: false
            }, function(){
                window.location.reload();
            });
          }
        },
        error: function(result) {
          console.log(result)
        }

      });
}
