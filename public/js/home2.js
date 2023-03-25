import { my_Typed2 } from "/js/functions.js";

// TEXTE QUI S'ÉCRIT TOUT SEUL
const phrasesTyped = [
   'Développeur Web Full-Stack Autodidacte',
   'HTML, CSS (+Bootstrap)',
   'PHP (+Symfony), SQL',
   'Javascript (+ReactJS)',
   'IDE : PHPStorm',
   'Outils : Git, Composer, Webpack',
]
const arrayLiensTyped = Array.from(document.querySelectorAll('.typed-div p'));
my_Typed2(arrayLiensTyped, phrasesTyped);


// EFFETS APPARITION
const observer = new IntersectionObserver(entries => {
   entries.forEach(entry => {
      if(entry.isIntersecting) {
         entry.target.style.transform = 'translateX(0px)';
      } else {
         entry.target.style.transform = 'translateX(-200px)';

      }
   })
})
observer.observe(document.querySelector('h2'));
observer.observe(document.querySelector('#langages'));

const observer2 = new IntersectionObserver(entries => {
   entries.forEach(entry => {
      if(entry.isIntersecting) {
         entry.target.style.transform = 'translateX(0px)';
      } else {
         entry.target.style.transform = 'translateX(200px)';

      }
   })
})
observer2.observe(document.querySelector('h1'));
observer2.observe(document.querySelector('#formation'));



// COMPTEUR LIVE
const observer3 = new IntersectionObserver(entries => {
   entries.forEach(entry => {
      if (entry.isIntersecting) {
         let compteur = 0;

         $(window).scroll(function() {
            const top = $(`.counter`).offset().top - window.innerHeight;

            if (compteur == 0 && $(window).scrollTop() > top) {
               $(`.counter-value`).each(function() {
                  let $this = $(this);
                  let countTo = $this.attr('data-count');
                  $({
                     countNum: $this.text()
                  }).animate({
                        countNum: countTo
                     },
                     {
                        duration: 8000,
                        easing: 'swing',
                        step: function() {
                           $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                           $this.text(this.countNum);
                        }
                     });
               });
               compteur = 1;
            }
         });
      }
   })
})
observer3.observe(document.querySelector('#formation'))