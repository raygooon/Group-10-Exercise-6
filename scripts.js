function openModal(modalId) {
    document.getElementById(modalId).style.display = "flex";
}
function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
function handleModal(response) {   
    closeModal('modal1');
    closeModal('modal2');
    closeModal('modal3');
    closeModal('modal4');
}
