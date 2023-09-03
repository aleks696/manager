    const generateBtn = document.getElementById("generateBtn");
    const generatedPasswordElement = document.getElementById("generatedPassword");
    const saveBtn = document.getElementById("saveBtn");

    generateBtn.addEventListener("click", () => {
    const passwordLength = parseInt(document.getElementById("passwordLength").value);

    if (isNaN(passwordLength) || passwordLength < 1) {
    alert("Enter a valid password length.");
    return;
}

    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let password = "";

    for (let i = 0; i < passwordLength; i++) {
    const randomIndex = Math.floor(Math.random() * charset.length);
    password += charset.charAt(randomIndex);
}

    generatedPasswordElement.textContent = `Generated password: ${password}`;
    saveBtn.style.display = "block";
});

    saveBtn.addEventListener("click", () => {
    const passwordToSave = generatedPasswordElement.textContent.split(": ")[1];
    alert("Password saved: " + passwordToSave);
    // Здесь можно добавить логику для сохранения пароля на сервере или в базе данных
});
