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

    return true;
  });
});
