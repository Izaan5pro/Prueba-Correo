function sendMessage() {
      const messageInput = document.getElementById("messageInput");
      const message = messageInput.value;

      if (message.trim() !== "") {
        // Aquí podrías implementar la lógica para enviar el mensaje por correo electrónico
        alert("Mensaje enviado:\n\n" + message);
        messageInput.value = "";
      } else {
        alert("Por favor, escribe un mensaje antes de enviar.");
      }
    }