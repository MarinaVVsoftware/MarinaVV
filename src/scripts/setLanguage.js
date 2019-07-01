import request from "./request";

const lang = document.getElementById("lang");

lang.addEventListener("click", () => {
  const params = {
    language: lang.dataset.language
  };

  request("setLanguage.php", params)
    .then(response => {
      location.reload();
    })
    .catch(error => {
      console.log(error);
    });
});
