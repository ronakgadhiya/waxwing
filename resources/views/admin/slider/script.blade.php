<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
$(document).ready(function () {
  $('#Form').submit(function(e){
      e.preventDefault();
      $("#response").hide();
      $("#response").html('');
      var formData = new FormData(this);
      var routeUrl = "{{route('slider.store')}}";
      var routeMethod = "post";
      if($('#id').val() != '')
      {
          routeUrl = "/admin/slider/"+$('#id').val()+"";
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
              $('#dataTableBuilder').DataTable().ajax.reload();
              $('#Modal').modal("toggle");
              $('#Form')[0].reset();
              Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: response,
                  showConfirmButton: false,
                  timer: {{ config('constants.websetting.sweatalertdelytime') }}
              })
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
                  $('#Modal').scrollTop(0);
                });
              }
          }
      });
  });
});

function actionedit(id) {
  $.get("sliderbyid/"+id,function (data) {
    $('#edit').text("Edit");
    $("#response").hide();
    $("#response").html('');
    
    $("#id").val(data[0].id );
    $("#name").val(data[0].name);
    $(".image").html('');
    if(data[0].img != null){
      $(".image").html('<div style="position: relative;"><span class="spanremovebtn" onclick="deleteimage('+data[0].id+',\'slider\',\'img\')" >X</span><img src="/uplods/slider/'+data[0].img+'" class="img-fluid rounded" style="width: 100%;" ></div>');
    }
    $("#Modal").modal("toggle");
  });
} 

function deleteimage(id,modal,field){        
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
        $.ajax({
            type: 'GET',
            url: '/admin/image/'+id+'/'+modal+'/'+field,
            data: {_token:$("input[name=_token]").val()},
            success: function (response) {
            $(".image").html('');
            $('#dataTableBuilder').DataTable().ajax.reload();
            Swal.fire(
          'Deleted!',
          '{{ config('constants.error.3') }}',
          'success'
        )
      }
      });
    }
  })
}

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
          url: "slider/"+id,
          data: {_token: '{{ csrf_token() }}'},
          success: function (response) {
          $('#dataTableBuilder').DataTable().ajax.reload();
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
  $(".image").html('');
  $("#response").hide();
  $("#response").html('');
  $('#edit').text("Add");
}
</script>      
