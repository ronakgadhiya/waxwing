<script>
    function changeStatus(_this, id, modal) {
      var status = $(_this).prop('checked') == true ? 1 : 0;
      let _token = $('meta[name="csrf-token"]').attr('content');
  
      $.ajax({
          url: `{{ route ('change-status')}}`,
          type: 'post',
          data: {
              '_token': '{{ csrf_token() }}',
              id: id,
              status: status ,
              modal: modal 
          },
          success: function (result) {
          }
      });
    }
</script>