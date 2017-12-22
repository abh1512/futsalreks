function edit(id){
        $('#lebokno')[0].reset();  //reset form on modals
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
                $('[name="idcar"]').val(data.id_carousel);
                $('[name="idadmin"]').val(data.id_admin);
                $('[name="namanya"]').val(data.nama_carousel);
                $('[name="linknya"]').val(data.link);
            },error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data');
            }
        });
}
