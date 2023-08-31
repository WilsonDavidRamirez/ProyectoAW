document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contacUS");
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Evita que el formulario se envíe normalmente

    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    const messageContent = `
                First Name: ${firstName}
                Last Name: ${lastName}
                Email: ${email}
                Phone Number: ${phone}
                Message: ${message}
            `;

    alert(messageContent); // Muestra los datos en un alert
  });
});

/*

jQuery.validator.addMethod(
  "lettersonly",
  function (value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  },
  "Enter only letters"
);

jQuery.validator.addMethod(
  "startsWith09",
  function (value, element) {
    return this.optional(element) || /^09/.test(value);
  },
  'Phone number should start with "09".'
);

$(function () {
  $("form[name='contacUS']").validate({
    rules: {
      firstName: {
        required: true,
        minlength: 3,
        maxlength: 50,
        lettersonly: true,
      },

      lastName: {
        required: true,
        minlength: 3,
        maxlength: 50,
        lettersonly: true,
      },

      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        startsWith09: true,
      },

      email: {
        required: true,
        //validemail: true,
      },
      message: {
        required: true,
      },
    },
    // Mensajes especificos de error de validacion
    messages: {
      firstName: {
        required: "Enter your name",
      },
      lastName: {
        required: "Enter your last name",
      },
      phone: {
        required: "Please enter your mobile number",
        minlength: "Your mobile number must be 10 digits long",
        maxlength: "Your mobile number must be 10 digits long",
      },
      email: {
        required: "Please enter an email address",
      },
      message: {
        required: "Write your message",
      },
    },
    submitHandler: function (form) {
      $("#exampleModal").modal("show");
      $("#exampleModal").on("hidden.bs.modal", function () {
        form.submit();
      });
    },
  });
});

$(function () {
  $("form[name='work']").validate({
    rules: {
      txtName: {
        required: true,
        minlength: 3,
        maxlength: 50,
        lettersonly: true,
      },
      txtPhone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        startsWith09: true,
      },
      txtEmail: {
        required: true,
        validemail: true,
      },
      txtCity: {
        required: true,
        minlength: 3,
        maxlength: 50,
        lettersonly: true,
      },
      txtAddress: {
        required: true,
        minlength: 3,
        maxlength: 50,
      },
      cv: {
        required: true,
      },
    },
    // Mensajes especificos de error de validacion
    messages: {
      firstName: {
        required: "Enter your name",
      },
      txtPhone: {
        required: "Please enter your mobile number",
        minlength: "Your mobile number must be 10 digits long",
        maxlength: "Your mobile number must be 10 digits long",
      },
      txtEmail: {
        required: "Please enter an email address",
      },
      txtCity: {
        required: "Enter your City",
      },
      txtAddress: {
        required: "Enter your Address",
      },
      cv: {
        required: "The Curriculum is necessary",
      },
    },
    submitHandler: function (form) {
      $("#exampleModal").modal("show");
      $("#exampleModal").on("hidden.bs.modal", function () {
        form.submit();
      });
    },
  });
});

*/
