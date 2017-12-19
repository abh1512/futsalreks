
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
