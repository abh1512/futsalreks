function edit(id){
        $('#haha')[0].reset();  //reset form on modals
        //$('#editModal').modal('open'); // show bootstrap modal when complete loaded
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
                $('[name="idgedung2"]').val(data.id_gedung);
                $('[name="namagedung2"]').val(data.nama);
                $('[name="alamatgedung2"]').val(data.alamat);
                $('[name="idpemilik2"]').val(data.id_pemilik);
            },error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data');
            }
        });
}

function pakett(){
  swal({
      title: "Hai Owner!",
      text: "Anda Sedang Menikmati Fitur Bisnis Limited",
      imageUrl: "../assets/images/thumbs-up.jpg"
  });
}
