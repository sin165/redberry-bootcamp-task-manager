const passwordInputs = document.querySelectorAll('input[type="password"]');
passwordInputs.forEach(input => {
    let field = input.parentElement.parentElement;
    let eyeIcon = field.querySelector('.eye');
    let eyeOffIcon = field.querySelector('.eye-off');
    eyeIcon.onclick = () => {
        input.setAttribute('type', 'password');
        eyeIcon.classList.add('hidden');
        eyeOffIcon.classList.remove('hidden');
    };
    eyeOffIcon.onclick = () => {
        input.setAttribute('type', 'text');
        eyeIcon.classList.remove('hidden');
        eyeOffIcon.classList.add('hidden');
    };
})
