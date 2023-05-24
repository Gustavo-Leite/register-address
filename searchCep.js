function searchCep() {
  let nome = document.getElementById('txtNome').value;
  let cep = document.getElementById('txtCep').value;
  if (cep !== "") {
    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
    let req = new XMLHttpRequest();
    req.open("GET", url);
    req.send();

    req.onload = function () {
      if (req.status == 200) {
        let info = JSON.parse(req.response);
        document.getElementById('txtLogradouro').value = info.street;
        document.getElementById('txtBairro').value = info.neighborhood;
        document.getElementById('txtCidade').value = info.city;
        document.getElementById('txtUf').value = info.state;
      } else if (req.status === 404) {
        alert("CEP inválido");
      } else {
        alert("Erro ao fazer a requisição");
      }
    }
  }
}

window.onload = function() {
  let txtCep = document.getElementById("txtCep");
  txtCep.addEventListener("blur", searchCep);
}