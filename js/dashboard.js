document.addEventListener('DOMContentLoaded', function () {
  const showPopupBtn = document.getElementById('showPopup');
  const submitBtn = document.getElementById('submitBtn');
  const popup = new bootstrap.Modal(document.getElementById('popup'));

  showPopupBtn.addEventListener('click', function () {
    popup.show();
  });

  submitBtn.addEventListener('click', function () {
    // Obtener los valores de los campos de entrada
    const comments = document.getElementById('comments').value;
    const price = document.getElementById('price').value;
    const developmentTime = document.getElementById('developmentTime').value;

    // Aquí puedes agregar la lógica para enviar los datos (por ejemplo, mediante una solicitud AJAX)
    // y luego cerrar automáticamente el pop-up
    enviarDatos(comments, price, developmentTime);

    // Cerrar el pop-up automáticamente
    popup.hide();
  });

  // Función para enviar datos (puedes personalizar según tus necesidades)
  function enviarDatos(comments, price, developmentTime) {
    // Aquí puedes implementar la lógica para enviar los datos, por ejemplo, con una solicitud AJAX
    console.log('Enviando datos:');
    console.log('Comentarios:', comments);
    console.log('Precio:', price);
    console.log('Tiempo de Desarrollo:', developmentTime);
  }
});