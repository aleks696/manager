





// document.addEventListener("DOMContentLoaded", () => {
//     const generateBtn = document.getElementById("generateBtn");
//     const generatedPasswordElement = document.getElementById("generatedPassword");
//     const saveBtn = document.getElementById("saveBtn");
//
//     generateBtn.addEventListener("click", () => {
//         const passwordLength = parseInt(document.getElementById("passwordLength").value);
//
//         if (isNaN(passwordLength) || passwordLength < 1) {
//             alert("Enter a valid password length.");
//             return;
//         }
//
//         const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_?";
//         let password = "";
//
//         for (let i = 0; i < passwordLength; i++) {
//             const randomIndex = Math.floor(Math.random() * charset.length);
//             password += charset.charAt(randomIndex);
//         }
//
//         generatedPasswordElement.textContent = ` ${password}`;
//         saveBtn.style.display = "block";
//     });
// });
    // saveBtn.addEventListener("click", () => {
    //     const passwordToSave = generatedPasswordElement.textContent;
    //
    //     fetch('/savePassword', {
    //         method: 'POST',
    //         headers: {
    //             'Content-Type': 'application/json',
    //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //         },
    //         body: JSON.stringify({ password: passwordToSave })
    //     })
    //         .then(response => response.json())
    //         .then(data => {
    //             alert(data.message);
    //         })
    //         .catch(error => {
    //             alert("Failed to save password. Please try again.");
    //         });
    //
    // });

