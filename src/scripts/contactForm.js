import axios from "axios";
import Swal from "sweetalert2";

const form = document.getElementById("contactForm");

try {
  if (form) {
    form.addEventListener("submit", e => {
      const name = form.name.value;
      const boat = form.boat.value;
      const email = form.email.value;
      const slora = form.slora.value;
      const phone = form.phone.value;
      const requirements = form.req.value;

      axios
        .post("./sendMail.php", {
          name,
          boat,
          email,
          slora,
          phone,
          requirements
        })
        .then(response => {
          console.log(response);
          if (response.data === 1) {
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
} catch (er) {}
