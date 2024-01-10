<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
let editor_data;
ClassicEditor.create( document.querySelector( '#desc' ), {
  removePlugins: [ 'Image'],
  toolbar: [
    'heading',
    '|',
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'code',
    'subscript',
    'superscript',
    'removeFormat',
    '|',
    'alignment:left',
    'alignment:right',
    'alignment:center',
    'alignment:justify',
    '|',
    'link',
    'bulletedList',
    'numberedList',
    'blockQuote',
    '|',
    'insertTable',
    '|',
    'undo',
    'redo'
  ]
} )
.then( editor => {
  editor_data = editor;
} )
.catch( error => {
} );

</script>
<script>
$(document).ready(function () {
  $('#Form').submit(function(e){
      e.preventDefault();
      $("#response").hide();
      $("#response").html('');
      var formData = new FormData(this);
      var routeUrl = "{{route('faq.store')}}";
      var routeMethod = "post";
      if($('#id').val() != '')
      {
          routeUrl = "/admin/faq/"+$('#id').val()+"";
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
  $.get("faqbyid/"+id,function (data) {
    $('#edit').text("Edit");
    $("#response").hide();
    $("#response").html('');
    
    $("#id").val(data[0].id );
    $("#name").val(data[0].name);
    editor_data.setData('');
    $("#desc").val(data[0].desc);
    $("#Modal").modal("toggle");
    if(data[0].desc!="")
    {
        editor_data.setData(data[0].desc);
    }
  });
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
          url: "faq/"+id,
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

function chechdata(){
  $('#Form')[0].reset();
  $("#id").val('');
  $("#response").hide();
  $("#response").html('');
  $('#edit').text("Add");
  editor_data.setData('');
}
</script>      
