(function ($) {
  // Toggle Password Visibility
  $(".toggle-password").click(function () {
    $(this).toggleClass("zmdi-eye zmdi-eye-off");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

  // Display Errors in Modal Popup
  document.addEventListener('DOMContentLoaded', function () {
    // Check if there are any errors
    if (typeof LaravelErrors !== 'undefined' && LaravelErrors.length > 0) {
      const errorModal = document.getElementById('errorModal');
      const errorMessages = document.getElementById('errorMessages');

      // Clear any previous messages
      errorMessages.innerHTML = '';

      // Display each error in a list item
      LaravelErrors.forEach(function (error) {
        const li = document.createElement('li');
        li.textContent = error;
        errorMessages.appendChild(li);
      });

      // Show the error modal
      errorModal.style.display = 'flex';

      // Close modal when clicking the "x"
      document.getElementById('closeModal').onclick = function () {
        errorModal.style.display = 'none';
      };

      // Close modal when clicking outside of the modal content
      window.onclick = function (event) {
        if (event.target == errorModal) {
          errorModal.style.display = 'none';
        }
      };
    }
  });
})(jQuery);
