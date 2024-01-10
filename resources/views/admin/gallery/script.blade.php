<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function () {
  $('#Form').submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);
      var routeUrl = "{{route('gallery.store')}}";
      var routeMethod = "post";
      if($('#id').val() != '')
      {
          routeUrl = "/admin/gallery/"+$('#id').val()+"";
          formData.append(['_method'], 'PUT');
      }
      $.ajax({
          headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
          url: routeUrl,
          type: routeMethod,
          data: formData,
          contentType : false,
          processData: false,

          success: function (response) {
            if (response != 0) {
                console.log(response[0]);
                $(".addimg").append('<div class="col-md-2 border-primary mb-4" id="galleryimg_'+response[0].id+'" style="position: relative;"><img src="{{asset('uplods/gallery')}}/'+response[0].img+'" alt="..." class="img-fluid rounded" style="width: 100%;"><button type="button" class="btn btn-danger btn-sm" onclick="actiondelete('+response[0].id+')" style="position: absolute; top: 0px;right: 12px;"><i class="bx bx-trash-alt me-0"></i></button></div>');
                $('#Modal').modal("toggle");
                $('#Form')[0].reset();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Added Successfully',
                    showConfirmButton: false,
                    timer: {{ config('constants.websetting.sweatalertdelytime') }}
                })
              } else {
                $('#Modal').modal("toggle");
                $('#Form')[0].reset();
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Opps !! Try Again',
                    showConfirmButton: false,
                    timer: {{ config('constants.websetting.sweatalertdelytime') }}
                })
              }
          },
          error :function( data ) {
              if( data.status === 422 ) {
                var errors = $.parseJSON(data.responseText);
                $.each(errors, function (key, value) {
                $('#response').addClass("alert alert-danger");
                  if($.isPlainObject(value)) {
                    $.each(value, function (key, value) {                  
                    // console.log(key+ " " +value);
                    $('#response').show().append(value+"<br/>");
                    });
                  }
                  else{
                    $('#response').show().append(value+"<br/>"); 
                  }
                });
              }
          }
      });
  });
});

function actiondelete(id){         
  Swal.fire({
    title: '{{ config('constants.websetting.sweatalertdeletmsg1') }}',
    text: "{!! config('constants.websetting.sweatalertdeletmsg2') !!}",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      console.log(id);
      $.ajax({
          type: 'DELETE',
          url: "gallery/"+id,
          data: {_token: '{{ csrf_token() }}'},
          success: function (response) {
            $("#galleryimg_"+id).remove();
          Swal.fire(
          'Deleted!',
          '{{ config('constants.error.3') }}',
          'success'
        )}
      });
    }
  })
}

function chechdata(){
  $('#Form')[0].reset();
  $("#id").val('');
  $("#response").hide();
  $("#response").html('');
  $('#edit').text("Add");
}
</script>      
