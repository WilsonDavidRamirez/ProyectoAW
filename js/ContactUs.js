$(document).ready(function () {
  $("#btnSubmit").click(function (event) {
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();

    if (firstName.length < 3) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "First Name must have at least 3 characters.",
      });
      return false;
    }

    if (lastName.length < 3) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Last Name must have at least 3 characters.",
      });
      return false;
    }

    if (!email.includes("@")) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Email must contain @ symbol.",
      });
      return false;
    }

    if (!phone.startsWith("09") || phone.length !== 10) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Phone Number must start with 09 and have 10 digits.",
      });
      return false;
    }

    var messageLength = message.trim().length;
    if (messageLength < 10 || messageLength > 250) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Message must have between 10 and 250 characters.",
      });
      return false;
    }

    $.ajax({
      data: {
        PNombre: firstName,
        SNombre: lastName,
        Email: email,
        Telefono: phone,
        Mensaje: message,
      },
      url: "./php/Contact_Us.php",
      type: "post",
      dataType: "json",
      success: function (response) {
        Swal.fire("Success!", response.Resultado, "success");
      },
      error: function (error) {
        Swal.fire("Error!", "An error occurred.", "error");
      },
    });

    return true;
  });
});
