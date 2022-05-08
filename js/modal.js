var modalOnloadSelectors = $('[data-toggle="modal-onload"]');

// Custom functions
// =====================================

// Close a modal
function modalClose(modalEl) {
  modalEl.modal('hide');
}

// Open a modal & apply any duration settings
function modalOpen(modalEl) {
  var duration = modalEl.data('duration') || null,
  progressBar = modalEl.data('progress-bar') || 'shown', //hidden or shown
  modalProgressBar = null;
  modalEl.modal();

  // Duration modal is open for, default is manual close
  if (duration !== null) {
    // Progress bar in modal
    if (progressBar === 'shown') {
      modalProgressBar = $('<div class="modal-progress"></div>');
      modalEl.find('.modal-content').append(modalProgressBar);
      var i = 2;
      var modalDurationProgress = setInterval(function() {
        modalProgressBar.width(i++ +'%');
      }, duration/100);
    }
    
    // Actual durations
    setTimeout(function() {
      modalClose(modalEl);
      clearInterval(modalDurationProgress);
    }, duration);
  }
}

// Trigger modals on page load
// =====================================
$(document).ready(function(){
  modalOnloadSelectors.each(function() {
    var modalEl = $(this),
    delay = modalEl.data('delay') || null;
    
    // Delay modal opening
    if (delay !== null) {
      setTimeout(function() {
        modalOpen(modalEl);
      }, delay);
    }
    else {
      // No delay trigger direct
      modalOpen(modalEl);
    }
  });
});
