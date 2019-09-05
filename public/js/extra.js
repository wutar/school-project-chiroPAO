$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    Console.log($(this));
    $(this).ekkoLightbox();
  });

  $("#showButton").click(function(){
    $("#form").toggleClass("hidden");
  });
  $('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
});
