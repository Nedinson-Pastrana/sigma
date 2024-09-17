$('.login-content [data-toggle="flip"]').click(function() {
    $('.login-box').toggleClass('flipped');
    return false;
});

var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#formLogin")) {
        let formLogin = document.querySelector("#formLogin");
        formLogin.onsubmit = function(e) {
            e.preventDefault();

            let strIdentificacion = document.querySelector('#txtIdentificacion').value;
            let strPassword = document.querySelector('#txtPassword').value;

            // Limpiar estados anteriores
            document.querySelectorAll('.form-control').forEach(input => input.classList.remove('is-invalid', 'shake'));
            document.querySelectorAll('.invalid-feedback').forEach(feedback => feedback.style.display = 'none');

            let valid = true;

            // Validar campos vacíos
            if (strIdentificacion === "") {
                let inputUser = document.querySelector('#txtIdentificacion');
                inputUser.classList.add('is-invalid', 'shake');
                inputUser.nextElementSibling.style.display = 'block';
                valid = false;
            }

            if (strPassword === "") {
                let inputPass = document.querySelector('#txtPassword');
                inputPass.classList.add('is-invalid', 'shake');
                inputPass.nextElementSibling.style.display = 'block';
                valid = false;
            }

            // Si la validación inicial falla, detener el proceso
            if (!valid) {
                // Remover la clase shake después de 0.5 segundos para que la animación pueda ejecutarse de nuevo si hay otro error
                setTimeout(() => {
                    document.querySelectorAll('.shake').forEach(input => input.classList.remove('shake'));
                }, 500);
                return false;
            } else {
                divLoading.style.display = "flex";
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url + '/Login/loginUser';
                var formData = new FormData(formLogin);
                request.open("POST", ajaxUrl, true);
                request.send(formData);
                request.onreadystatechange = function() {
                    if (request.readyState != 4) return;
                    if (request.status == 200) {
                        var objData = JSON.parse(request.responseText);
                        if (objData.status) {
                            window.location = base_url + '/dashboard';
                        } else {
                            // Mostrar errores y agregar shake cuando las credenciales son incorrectas
                            let inputUser = document.querySelector('#txtIdentificacion');
                            let inputPass = document.querySelector('#txtPassword');
                            
                            inputUser.classList.add('is-invalid', 'shake');
                            inputUser.nextElementSibling.style.display = 'block';
                            
                            inputPass.classList.add('is-invalid', 'shake');
                            inputPass.nextElementSibling.style.display = 'block';
                            inputPass.value = ""; // Limpiar campo de contraseña

                            // Remover la clase shake después de 0.5 segundos
                            setTimeout(() => {
                                document.querySelectorAll('.shake').forEach(input => input.classList.remove('shake'));
                            }, 500);
                        }
                    } else {
                        console.error("Error en el proceso");
                    }
                    divLoading.style.display = "none";
                    return false;
                }
            }
        }
    }
}, false);
