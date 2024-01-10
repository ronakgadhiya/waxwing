<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function () {

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
      $.ajax({
          type: 'DELETE',
          url: "contact/"+id,
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
</script>      
