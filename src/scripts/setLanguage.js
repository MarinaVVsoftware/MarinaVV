import axios from "axios";

const language = document.getElementById("lang");
language.addEventListener("click", () => {
  const getLang = JSON.parse(lang.dataset.lang);
  const params = {
    lang: getLang
  };

  axios.post("setLanguage.php", params).then(response => {
    location.reload();
  });
});
