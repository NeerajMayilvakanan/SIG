let data = [];
function addCart(productID, productPrice, customerID) {
  // let customerID = localStorage.getItem("customerID");
  let Quantity = Number(document.getElementById(productID).value);
  console.log("Product ID : ", productID, "Product Price", productPrice);
  console.log("Quantity : ", Quantity);
  console.log("Customer Id : ", customerID);
  data.push([customerID, productID, Quantity]);
  console.log("Data : ", data);
}

function login(customerID) {
  localStorage.setItem("customerID", customerID);
  localStorage.setItem("login", true);
  console.log("THis is demo  :  ", customerID);
}

function logout() {
  console.log("Logged out");
  window.location.href = "index.php";
}

function navigateToCart() {
  window.location.href = "carts.php";
}

function finalSubmit() {
  const textData = JSON.stringify(data);
  document.getElementById("textData").value = textData;
}
