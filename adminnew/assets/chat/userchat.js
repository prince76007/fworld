
// Procedural way
/**
 * Add a new chat message
 * 
 * @param {string} message
 */
function senduser_message(ids,message) {
  $.ajax({
    url: 'ajax/add_msg.php',
    method: 'post',
    data: {id:ids , msg: message},
    success: function(data) {
      $('#chatMsg').val('');
      getuser_messages();
    }
  }); 
}

/**
 * Get's the chat messages.
 */
function getuser_messages() {
  $.ajax({
    url: 'ajax/get_messages.php',
    method: 'GET',
    success: function(data) {
      $('.msg-wgt-body').html(data);
    }
  });
}






function boot_chat() {
  var chatArea = $('#chatMsg');
  setInterval(getuser_messages, 5000); 
  // Load the messages every 5 seconds

  // Bind the keyboard event
  chatArea.bind('keydown', function(event) {
    // Check if enter is pressed without pressing the shiftKey
    if (event.keyCode === 13 && event.shiftKey === false) {
      var message = chatArea.val();
      var ids = $('#id').val();
      // Check if the message is not empty
      if (message.length !== 0  &&  ids !=='') {
        senduser_message(ids , message);
        event.preventDefault();
      } else {
        alert('Please Select User and Provide a message to send!');
        chatArea.val('');
      }
    }
  });
}

// Initialize the chat
boot_chat();