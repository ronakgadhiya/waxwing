<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function () { 
  $('#InquiryForm').submit(function(e){
   // console.log('gftrbfrjyug');
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
          url: "{{route('inquiry.add')}}",
          type: "post",
          data: formData,
          contentType : false,
          processData: false,
          success: function (response) {
              $('#InquiryForm')[0].reset();
              Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Thanks Inquiry',
                  showConfirmButton: false,
                  timer: {{ config('constants.websetting.sweatalertdelytime') }}
              })
          },
      });
  });
});

function chechdataInquiry(){
  $('#InquiryForm')[0].reset();
  $("#id").val('');
  $("#response").hide();
  $("#response").html('');
  $('#edit').text("Add");
}
</script>      
