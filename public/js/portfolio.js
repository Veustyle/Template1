const observer4 = new IntersectionObserver(entries => {
   entries.forEach(entry => {

      if (entry.isIntersecting) {
         Array.from(entry.target.children).forEach(child => {
            child.style.opacity = '1';
         })
      } else {
         Array.from(entry.target.children).forEach(child => {
            child.style.opacity = '0';
         })
      }
   })
})
observer4.observe(document.querySelector('.cloud'));