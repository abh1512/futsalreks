$(document).ready(function() {
    $('#erroraktifasi').hide();
    $('#error').hide();
    $('#berhasil').hide();

    $('form').on('submit', function(e){
      var link = $(this).attr("class");
      var tipe = "";
      if(link != "login")
      {
        tipe = link.substr(9);
        link = "register";
      }
      var user = $('#email').val();
      var pass = $('#pass').val();
     $.ajax({
                   url:link+".php",
                   method:"POST",
                   data:$(this).serialize()+"&tipe="+tipe,
                   success:function(data)
                   {
                     var panjang = ""+data;
                     /* if(data == "akun")
                      {
                       $('#erroraktifasi').show().delay(3000).fadeOut();
                      }
                      else if(data == "salah")
                      {
                       $('#error').show().delay(3000).fadeOut();
                      }
                      else if(data == "gagal")
                      {
                       $('#error').show().delay(3000).fadeOut();
                      }
                      else if(data == "ok")
                      {
                       $('#berhasil').show();
                      }
                      else {
                           window.location.href = ""+data;
                      } */
                      if(panjang.length <= 8)
                      {
                        window.location.href = ""+data;
                      }
                      else{
                      alert(data);
                      }
                   }
              })
    return false;
        });
} );
