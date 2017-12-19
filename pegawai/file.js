function edit(id){
        $('#edit_harga')[0].reset(); // reset form on modals
        //$('#modal2').modal('open'); // show bootstrap modal when complete loaded

        //Ajax Load data from ajax
        $.ajax({
            url : "submit.php?kode=" + id+"&key=edit",
            type: "POST",
            dataType: "JSON",
            success: function(data){
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
      success:function(data){
      if(data == "ok"){
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
       else
       {
         alert(data);
       }
     }
    });
}

function harga(){
  $.ajax({
      url : "submit.php",
      type: "post",
      data: $("#form_harga").serialize()+"&key=harga",
      success:function(data){
      if(data == "ok"){
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
       else
       {
         swal(
             "GAGAL!",
             "Harga pada jam tersebut sudah ditentukan!",
             "warning"
         )
       }
     }
    });
}
