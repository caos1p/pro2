@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3>



   
  
      <form method="post" action="#" enctype="multipart/form-data">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://1000marcas.net/wp-content/uploads/2019/12/logo-Paypal.png">
            <div class="card-body">
                <h5 class="card-title">Sube una foto</h5>
                <p class="card-text">Sube una imagen...</p>
                <div class="form-group">
                    <label for="image">Nueva imagen</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                </div>
                <input type="button" class="btn btn-primary upload" value="Subir">
            </div>
        </div>
    </form>
   

 
    




<script>
$(document).ready(function() {
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        console.log(files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
        return false;
    });
});
</script>
@endsection