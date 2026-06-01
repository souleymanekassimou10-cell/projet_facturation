document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const loginError = document.getElementById('login-error');

    if (params.get('error') === '1' && loginError) {
        loginError.classList.remove('d-none');
    }

    const togglePassword = document.getElementById('togglePassword');
    const input = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (!togglePassword || !input || !icon) {
        return;
    }

    togglePassword.addEventListener('click', function () {
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('bi-eye', 'bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('bi-eye-slash', 'bi-eye');
        }
    });
});