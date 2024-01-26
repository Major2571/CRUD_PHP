
// Prompt para confirmar exclusão 
function verifyDelete(id) {
  let result = confirm(
    "Você tem certeza que deseja deletar o usuário com id: " + id + " ?"
  );

  if (result) {
    window.location.replace("./index.php?a=deleteUser&id=" + id);
  }
}


// Formatação do ao digitar o telefone
const inputPhone = document.getElementById("phone");
inputPhone.addEventListener("input", function (e) {
  let phoneNumber = inputPhone.value.replace(/\D/g, "");

  if (phoneNumber.length > 2) {
    phoneNumber = `(${phoneNumber.substring(0, 2)}) ${phoneNumber.substring(
      2
    )}`;
  }
  if (phoneNumber.length > 9) {
    phoneNumber = `${phoneNumber.substring(0, 10)}-${phoneNumber.substring(10)}`;
  }
  inputPhone.value = phoneNumber;
});
