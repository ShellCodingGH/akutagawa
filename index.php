<script>

var output = $('#output')

$(window).scroll(function(){
  var scrollTop = window.pageYOffset 
  output.html("You have scrolled the page by: " + scrollTop +'px')

})

</script>

