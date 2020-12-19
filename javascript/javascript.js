/*-------FORM HANDLING-------*/
window.addEventListener("click", function() {    

  var requiredInputs = document.querySelectorAll(".required");  
  for (var i=0; i < requiredInputs.length; i++) {
    requiredInputs[i].addEventListener("change", function(e) {
      clean(e.target);
    }); 
  }

  var mainForm = document.getElementById("contact-form");
  mainForm.addEventListener("submit", function(e) {
      
    var requiredInputs = document.querySelectorAll(".required");
    for (var i=0; i < requiredInputs.length; i++){
      if(error(requiredInputs[i])) {
          e.preventDefault();
          requiredInputs[i].classList.add("is-invalid");;
      }
      else {
          clean(requiredInputs[i]);
      }
    }
  });
});

window.addEventListener("load", function() {
  var selecter = "input[type=text], input[type=email]";
  var fields = document.querySelectorAll(selecter);
  for (i = 0; i < fields.length; i++) {
    fields[i].addEventListener("focus", setBackground);
    fields[i].addEventListener("blur", setBackground);
  }
})

function setBackground(x) {
    if (x.type == "focus") {
        x.target.style.backgroundColor = "#FAFAD2";
    }
    else if (x.type == "blur") {
        x.target.style.backgroundColor = "white";
    }
}

function clean(element) {
  element.classList.remove("is-invalid");
}

function error(input) {
  if (input.value == "") {
    return true;
  }
  return false;
}
/*-------FORM HANDLING-------*/


/*-------NAVIGATION MENU ANIMATION-------*/
$(document).ready(function() {

    var handle = function(el) {
      var $el = $(el)
      $el
        .addClass("selected")
        .siblings()
        .removeClass("selected")
  
      $("#nav_indicator")
        .css("left", $el.position().left + "px")
        .css("width", $el.width() + 20 + "px")
        .css("padding-left", $el.css("padding-left"))
        .css("padding-right", $el.css("padding-right"))
    }
    

    // Click handler
    $("ul#nav > li").on("click", function(event) {
      handle(this)
    })
  
    // Initialize nav indicator position
    handle($("ul#nav > li.selected"))
})
/*-------NAVIGATION MENU ANIMATION-------*/
