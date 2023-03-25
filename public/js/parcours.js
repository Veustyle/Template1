const observer = new IntersectionObserver(entries => {
   entries.forEach(entry => {
      if(entry.isIntersecting) {
         entry.target.style.transform = 'translateY(0px)';
      } else {
         entry.target.style.transform = 'translateY(200px)';

      }
   })
})
observer.observe(document.querySelector('#parcours'))