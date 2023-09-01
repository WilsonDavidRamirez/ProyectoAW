$(document).ready(function () {
  $("#btnSubmit2").click(function (event) {
    event.preventDefault();

    var formData = new FormData();

    var firstName = $("#txtName").val();
    var phone = $("#txtPhone").val();
    var address = $("#txtAddress").val();
    var email = $("#txtEmail").val();
    var city = $("#txtCity").val();
    var puesto = $("#puesto").val();
    var selectedFile = $("#cv").prop("files")[0];

    if (firstName.length < 3) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "First Name must have at least 3 characters.",
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

    if (address.length < 8) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Address must have at least 8 characters.",
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

    if (city.length < 8) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "City must have at least 8 characters.",
      });
      return false;
    }

    if (selectedFile == null) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Select your CV.",
      });
      return false;
    }

    formData.append("firstName", firstName);
    formData.append("phone", phone);
    formData.append("address", address);
    formData.append("email", email);
    formData.append("city", city);
    formData.append("puesto", puesto);
    formData.append("selectedFile", selectedFile);

    $.ajax({
      data: formData,
      url: "./php/Work_with_us.php",
      type: "post",
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (response) {
        Swal.fire("Success!", response.Resultado, "success");
      },
      error: function (error) {
        Swal.fire("Error!", "An error occurred.", "error");
      },
    });

    setTimeout(function () {
      location.reload();
    }, 3000);

    return true;
  });
});
