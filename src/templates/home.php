<?php
$pageTitle = 'Home';
$pageDescription = "Page d'accueil";

$styleCSS = '<link rel="stylesheet" href="/css/home2.css">';
$pageJS = '<script src="/js/home2.js" type="module"></script>';
?>


<!---------- ENTETE ---------->
<div id="top" class="body-home">

   <div class="intro">
      <h1>Steven</h1>
      <div id="line"></div>
      <h2>Dév Full-Stack</h2>
   </div>

   <div class="container">

      <div class="container-infos">
         <div class="infos">
            <p>33 ans</p>
            <p><svg><use href="img/sprite.svg#localisation"></use></svg> Paris</p>
            <p><svg><use href="img/sprite.svg#phone"></use></svg> 06 62 59 09 73</p>
            <p><svg><use href="img/sprite.svg#mail"></use></svg> sd-developper@gmail.com</p>
         </div>
         <div class="button">
            <a href="/parcours">Voir le CV</a>
         </div>
      </div>

      <div class="typed-div"">
         <p class="typed"></p>
         <p class="typed2"></p>
         <p class="typed3"></p>
         <p class="typed4"></p>
         <p class="typed5"></p>
         <p class="typed6"></p>
      </div>

   </div>

</div>

<!---------- FORMATIONS & LANGUAGES ---------->
<div class="languages-formations">


<!-- LANGAGES -->
<div style="border: 1px solid black; padding: 10px; overflow: hidden">
   <section id="langages">

      <h3>Langages & Frameworks</h3>

      <div>
         <div class="bar"><img src="/img/html.png" alt="html-icon"> HTML</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 92%; background-color: #E44D26">93%</div>
         </div>
      </div>

      <div>
         <div class="bar"><img src="/img/css.png" alt="html-icon"> CSS</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 80%; background-color: #2449D8">80%</div>
         </div>
      </div>


      <div>
         <div class="bar"><img src="/img/bootstrap.png" alt="html-icon"> Bootstrap</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 71%; background-color: #523B76">71%</div>
         </div>
      </div>


      <div>
         <div class="bar"><img src="/img/php.png" alt="html-icon"> Php</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 70%; background-color: #7175AA">70%</div>
         </div>
      </div>

      <div>
         <div class="bar"><img src="/img/js.png" alt="html-icon"> Javascript</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 65%; background-color: #FED201">65%</div>
         </div>
      </div>

      <div>
         <div class="bar"><img src="/img/python.png" alt="html-icon"> Python</div>
         <div class="progress">
            <div class="progress-bar-animated" role="progressbar" style="width: 50%; background-color: #346D9F">50%</div>
         </div>
      </div>
   </section>
</div>



<!-- FORMATIONS -->
<div style="border: 1px solid black; padding: 10px; overflow: hidden">
   <section id="formation">
      <h3>Formations</h3>

      <div>
         <div id="autodidacte">
            <h4><svg><use href="/img/sprite.svg#university"></use></svg> Apprentissage autodidacte</h4>


            <div class="counter">

               <div class="data">
                  <div class="counter-value" data-count="1847">0</div>
                  <span>Heures de code</span>
               </div>

               <div class="data">
                  <div class="counter-value" data-count="500000">0</div>
                  <span>Lignes de code</span>
               </div>

            </div>
         </div>
      </div>


      <div>
         <div id="grafikart">
            <h4><svg><use href="/img/sprite.svg#university"></use></svg> Grafikart.fr</h4>

            <div class="counter">

               <div class="data">
                  <div class="counter-value" data-count="457">0</div>
                  <span>Cours Suivis</span>
               </div>

               <div class="data">
                  <div class="counter-value" data-count="127">0</div>
                  <span>Exercices</span>
               </div>

            </div>
         </div>
      </div>

      <div>
         <div id="opp">
            <h4><svg><use href="/img/sprite.svg#university"></use></svg> Udemy.com</h4>

            <div class="counter">

               <div class="data">
                  <div class="counter-value" data-count="47">0</div>
                  <span>Cours Suivis</span>
               </div>

               <div class="data">
                  <div class="counter-value" data-count="17">0</div>
                  <span>Certificats</span>
               </div>

            </div>
         </div>
      </div>
</div>
   </section>
</div>

<div class="arrow">
   <a href="#top"><svg><use href="/img/sprite.svg#arrowup"></use></svg></a>
</div>