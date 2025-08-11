document.addEventListener('DOMContentLoaded', (event) => {
   let buttonToggle = document.querySelector('.header__nav-menu .navbar-toggler')
   let navbarCollapse = document.querySelector('.header__nav-menu #navbarSupportedContent')

   let navbarHamburguerIcon = document.querySelector('.header__nav-menu .header__nav-menu__hamburguer')
   let navbarCloseIcon = document.querySelector('.header__nav-menu .header__nav-menu__close')

   buttonToggle.addEventListener('click', (event) => {
      if (navbarCollapse.classList.contains('d-block')) {
         navbarCollapse.classList.remove('d-block')

         navbarHamburguerIcon.classList.add('d-block')
         navbarHamburguerIcon.classList.remove('d-none')

         navbarCloseIcon.classList.add('d-none')
         navbarCloseIcon.classList.remove('d-block')

         return
      }

      navbarCollapse.classList.add('d-block')

      navbarHamburguerIcon.classList.add('d-none')
      navbarHamburguerIcon.classList.remove('d-block')

      navbarCloseIcon.classList.add('d-block')
      navbarCloseIcon.classList.remove('d-none')
   })
})
