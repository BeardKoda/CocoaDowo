{{-- <script>
$(function() {
    "use strict";
    $("#type").change(function() {
      var el = $(this) ;
      if(el.val() === "album" ) {
        console.log("yes");
      $("#album").removeAttr('disabled');
      }else if(el.val() === "single" ) {
       console.log("no");
        $("#album").attr('disabled', 'disabled');
      }
    });
    $("#privacy").change(function() {
      var el = $(this) ;
      if(el.val() === "premium" ) {
        console.log("ddsg");
        $("#price").removeAttr('disabled').removeAttr('required');
      }else if(el.val() === "free" ) {
        console.log("woow");
        $("#price").attr('disabled', 'disabled').attr('required', 'required');
      }
    });
});
</script> --}}