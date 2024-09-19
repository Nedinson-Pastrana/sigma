// script.js

(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
      const storedTheme = getStoredTheme()
      if (storedTheme) {
          return storedTheme
      }
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = theme => {
      document.documentElement.setAttribute('data-bs-theme', theme)
      // Update button icon based on theme
      const buttonIcon = document.querySelector('.toggle-button .icon');
      if (buttonIcon) {
          buttonIcon.classList.toggle('fa-sun', theme === 'light');
          buttonIcon.classList.toggle('fa-moon', theme === 'dark');
      }
  }

  const toggleTheme = () => {
      const currentTheme = getStoredTheme() || getPreferredTheme()
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark'
      setStoredTheme(newTheme)
      setTheme(newTheme)
  }

  // Set the theme on page load
  window.addEventListener('DOMContentLoaded', () => {
      const theme = getStoredTheme() || getPreferredTheme()
      setTheme(theme)

      document.querySelector('.toggle-button').addEventListener('click', toggleTheme)
  })

  // Update theme when system preference changes
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      const storedTheme = getStoredTheme()
      if (!storedTheme) {
          setTheme(getPreferredTheme())
      }
  })
})()

// aplica efecto y funcionalidad del boton del modo oscuro

// Referencias al body y al botón
const body = document.body;
const button = document.querySelector('.toggle-button');
const icon = button.querySelector('i'); // Asumiendo que el ícono está dentro del botón

// Función para guardar el tema en localStorage
function setStoredTheme(theme) {
    localStorage.setItem('theme', theme);
}

// Función para aplicar el tema y actualizar el ícono del botón
function applyTheme(theme) {
    if (theme === 'dark') {
        body.classList.add('dark-mode');
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon'); // Cambia a icono de luna para modo oscuro
    } else {
        body.classList.remove('dark-mode');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun'); // Cambia a icono de sol para modo claro
    }
}

// Al cargar la página, se aplica el tema almacenado
document.addEventListener('DOMContentLoaded', () => {
    const storedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(storedTheme);
});

// Manejar el clic en el botón para alternar el modo oscuro
button.addEventListener('click', () => {
    // Determinar el tema actual y alternar
    const currentTheme = body.classList.contains('dark-mode') ? 'dark' : 'light';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    
    // Aplicar el nuevo tema y actualizar el ícono
    applyTheme(newTheme);
    
    // Guardar la nueva preferencia en localStorage
    setStoredTheme(newTheme);
    
    // Efecto de ondas
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');
    button.appendChild(ripple);

    const rect = button.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    ripple.style.width = ripple.style.height = `${size}px`;

    setTimeout(() => {
        ripple.remove();
    }, 400);
});
