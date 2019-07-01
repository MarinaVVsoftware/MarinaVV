import request from "./request";
import Swal from "sweetalert2";

const form = document.getElementById("contactForm");

try {
  if (form) {
    form.addEventListener("submit", e => {
      const params = {
        name: form.name.value,
        boat: form.boat.value,
        email: form.email.value,
        slora: form.slora.value,
        phone: form.phone.value,
        requirements: form.req.value
      };

      request("./sendMail.php", params).then(response => {
        console.log(response);
        if (response === 1) {
          Swal.fire({
            type: "success",
            title: "Exitoso",
            terxt: "Tu mensaje se ha enviado exitosamente."
          });
        } else {
          Swal.fire({
            type: "error",
            title: "Error",
            text:
              "Necesitamos la información completa para saber los servicios y ponernos en concato con usted."
          });
        }
      });

      e.preventDefault();
      form.reset();
    });
  }
} catch (error) {}
