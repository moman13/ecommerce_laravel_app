function markNotificationAsRead(notifiable) {
  if(notifiable!== '0'){
  $.get('/markAsRead');}
}
$("select[name='company']").change(function(){

      var companyId = $(this).val();

      var token = $("input[name='_token']").val();

      $.ajax({

          url: "<?php echo route('sampleRequest.companyData') ?>",

          method: 'POST',

          data: {companyId:companyId, _token:token},

          success: function(data) {
            console.log(data);
            $("input [name='Phone'").html('');

            $("input[name='Phone'").html(data.options);

          }

      });
