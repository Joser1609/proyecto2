let signUp = document.getElementById("signUp");
let signIn  = document.getElementById("signIn");
let nameInput = docunent.getElementById("nameInput");
let title = document.getElementById("title");
{}
signIn.onclick = function(){
    nameInput.style.maxHeight = "0";
    title.innerHTML = "Login";
    signUp.classList.add("disable");
    signIn.classList.remove("disable");
}

signUp.onclick = function() {
    nameInput.style.maxHeight = "60px";
    title.innerHTML = "Registro";
    signUp.classList.remove("disable");
    signIn.classList.add("disable");
}
document.addEventListener('DOMContentLoaded', () => {
    const menuLinks = document.querySelectorAll('.menu a, .dropdown-content a');
    const fieldGroups = document.querySelectorAll('.field-group');

    // Agregar evento click a cada enlace
    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Ocultar todos los grupos de campos
            fieldGroups.forEach(group => group.classList.remove('active'));

            // Mostrar el grupo relacionado con el enlace
            const targetId = link.getAttribute('data-target');
            const targetGroup = document.getElementById(targetId);
            if (targetGroup) {
                targetGroup.classList.add('active');
            }
        });
    });
});
