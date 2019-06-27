import axios from "axios";

const lang = document.getElementById("lang");

lang.addEventListener("click", () => {
  const params = {
    language: lang.dataset.language
  };

  axios
    .post("setLanguage.php", params)
    .then(response => {
      location.reload();
    })
    .catch(error => {
      console.log(error);
    });
});
