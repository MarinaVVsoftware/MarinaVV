import axios from "axios";

function request(url, params) {
  return axios.post(url, params).then(data => {
    return data.data;
  });
}

export default request;
