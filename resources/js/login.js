const inputPasswordUser = document.getElementById("inputPassword");
const eyeButtonPassword = document.getElementById("eyeButtonPassword");
const eyeIconPassword = document.getElementById("eyeIconPassword");

eyeButtonPassword.addEventListener("click", () => {
    if(inputPasswordUser.type === "password") {
        transformInputPassword("fa-eye", "fa-eye-slash", "text");
    } else {
        transformInputPassword("fa-eye-slash", "fa-eye", "password");
    }
});

function transformInputPassword(classToRemove, classToAdd, inputType) {
    eyeIconPassword.classList.remove(classToRemove);
    eyeIconPassword.classList.add(classToAdd);
    inputPasswordUser.type = inputType;
}