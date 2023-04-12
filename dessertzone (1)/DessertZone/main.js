// jslint es6

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
// Add a JavaScript function to show/hide the reply form 

function showReplyForm(commentId) {
  var form = document.getElementById('reply-form-' + commentId);
  form.style.display = (form.style.display === 'none') ? 'block' : 'none';
}

//customize
$(document).ready(function() {
  $('form').submit(function(event) {
    var fileInput = $('input[type="file"]');
    var file = fileInput[0].files[0];
    var descriptionInput = $('input[name="description"]');
    var description = descriptionInput.val();
    var errors = [];

   

    if (!description) {
      errors.push("Please enter a description.");
    }

    if (errors.length > 0) {
      alert(errors.join("\n"));
      event.preventDefault();
    }
  });
});


