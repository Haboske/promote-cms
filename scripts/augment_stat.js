//Peux être opti avec tableau
var n = [350, 975, 70, 85]; // Nombre final du compteur
var cpt1 = 0; // Initialisation du compteur
var cpt2 = 0;
var cpt3 = 0;
var cpt4 = 0;
var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node1 =  document.getElementById("compteur1"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
var node2 =  document.getElementById("compteur2");
var node3 =  document.getElementById("compteur3");
var node4 =  document.getElementById("compteur4");
 
function countdown1() {
  node1.innerHTML = ++cpt1;
  if( cpt1 < n[0] ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown1, delta);
  }
}

function countdown2() {
  node2.innerHTML = ++cpt2;
  if( cpt2 < n[1] ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown2, delta);
  }
}

function countdown3() {
  node3.innerHTML = ++cpt3;
  if( cpt3 < n[2] ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown3, delta);
  }
}

function countdown4() {
  node4.innerHTML = ++cpt4;
  if( cpt4 < n[3] ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown4, delta);
  }
}
 
setTimeout(countdown1, delta);
setTimeout(countdown2, delta);
setTimeout(countdown3, delta);
setTimeout(countdown4, delta);