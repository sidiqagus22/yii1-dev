$(document).ready(function() {
      $('.cedit').click(function(e) {
       e.preventDefault();
       $('#myModal').modal('show');
       var url = $(this).attr('href');
       $.ajax({
             url: url,
             type: 'GET',
             // dataType: 'JSON',
             data: {param1: 'value1'},
             success: function(response){
                 var obj =  $.parseJSON(response);
                 // console.log(obj.message);
                 $('#inputKodepasien').val(obj.kd_pasien);
                 $('#inputNamapasien').val(obj.nama_pasien);
             },
             error: function(xhr, textStatus, errorThrown){
                  // /
             }
       })
      });
      $('.cdel').click(function(e) {
       e.preventDefault();
       var url = $(this).attr('href');
       if(!confirm('apakah benar anda akan menghapus data ini ???')) return false;
       $.ajax({
             url: url,
             type: 'GET',
             // dataType: 'JSON',
             data: {param1: 'value1'},
             success: function(response){
                var obj =  $.parseJSON(response);
                // alert(obj.message);
                window.location.reload();
             },
             error: function(xhr, textStatus, errorThrown){
                  // /
             }
       })
      });
});
