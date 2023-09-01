function toggleDarkMode() {
  var isDarkMode = document.body.classList.toggle('dark-mode');
  
  // Atualizar o valor no armazenamento local
  localStorage.setItem('darkMode', isDarkMode ? 'true' : 'false');
  
  var navbar = document.getElementById('navbar');
  navbar.classList.toggle('navbar-dark');
  navbar.classList.toggle('bg-dark');

  var footer = document.getElementById('footer');
  footer.classList.toggle('footer-dark');
  footer.classList.toggle('bg-dark');

  var darkform = document.getElementById('darkform');
  darkform.classList.toggle('h4-dark');
  darkform.classList.toggle('bg-dark');
}

// Verificar se o modo escuro está habilitado no armazenamento local
var savedDarkMode = localStorage.getItem('darkMode');
if (savedDarkMode === 'true') {
  // Habilitar o modo escuro
  document.body.classList.add('dark-mode');
  var navbar = document.getElementById('navbar');
  navbar.classList.add('navbar-dark');
  navbar.classList.add('bg-dark');

  var footer = document.getElementById('footer');
  footer.classList.add('footer-dark');
  footer.classList.add('bg-dark');

  var darkform = document.getElementById('darkform');
  darkform.classList.add('h4-dark');
  darkform.classList.add('bg-dark');
}
