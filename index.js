$(document).ready(function(){
  $(document.getElementById("headerDropupButton")).click(function(){
    $(document.getElementById("headerDropup")).slideToggle('slow', 'swing');
  });
});

function closeHeader(){
  $(document.getElementById("headerDropup")).slideToggle('fast', 'linear');
}