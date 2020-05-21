//Get modal element
var modal = document.getElementById("simpleModal");

//Get open modal button
var modalBtn = document.getElementById("modalBtn");

//Get close button
var closeBtn = document.getElementsByClassName("closeBtn");

//Listen for open click
modalBtn.addEventListener("click", openModal);

//Listen for close click
closeBtn.addEventListener("click", closeModal);

//function to open modal
function openModal() {
    console.log(123);
    modal.style.display = "flex ";
}

//function to close modal
// function closeModal() {
//     // modal.style.display = "none ";
// }
