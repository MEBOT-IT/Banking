// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 1500) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, smoothly scroll to the top of the document
function topFunction() {
  // Get the current vertical position of the scroll bar
  const currentScroll = document.documentElement.scrollTop ;

  // If the current position is not at the top, scroll to it
  if (currentScroll > -10) {
    window.requestAnimationFrame(topFunction);
    window.scrollTo(0, currentScroll - (currentScroll / 30));
  }
}

//TIME SHOWER:

function digi(){
  var date=new Date();
  var hrs=date.getHours();
  var min=date.getMinutes();
  var sec=date.getSeconds();
  
  

  document.getElementById("hours").innerHTML=hrs;
  document.getElementById("minutes").innerHTML=min;
  document.getElementById("seconds").innerHTML=sec;

}
  setInterval(digi)
