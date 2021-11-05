var user = document.getElementById("username");
var pass = document.getElementById("password");
let button = document.getElementsByClassName("btn")[0];

function checkvalidity() {
  if (user.value == "" || pass.value == "") {
    alert("Please provide Username & Password ");
  }
}
// //
// button.addEventListener("click", () => {
//   console.log("working!");
//   checkvalidity();
// });

button.addEventListener("click", checkvalidity);
