/** 
 @todo fonction générique de pour récupéré en base les infos du callculateur de volume 

 async function showElementsSalon( string $link) {
  let html = "";
  const element = await fetch($link)
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsSalon) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary ">${elementsSalon.nom}</div>
                    <div class="card-body">
                    <img src="${elementsSalon.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsSalon.id})" >-</button>
                    <section id="element${elementsSalon.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsSalon.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
 */

async function showElementsSalon() {
  let html = "";
  const element = await fetch("/element/salon")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsSalon) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary ">${elementsSalon.nom}</div>
                    <div class="card-body">
                    <img src="${elementsSalon.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsSalon.id})" >-</button>
                    <section id="element${elementsSalon.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsSalon.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsSalleAmanger() {
  let html = "";
  const element = await fetch("/element/salleAmanger")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsSalleAmanger) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsSalleAmanger.nom}</div>
                    <div class="card-body">
                    <img src="${elementsSalleAmanger.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsSalleAmanger.id})" >-</button>
                    <section id="element${elementsSalleAmanger.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsSalleAmanger.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsChambre() {
  let html = "";
  const element = await fetch("/element/chambre")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsChambre) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsChambre.nom}</div>
                    <div class="card-body">
                    <img src="${elementsChambre.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsChambre.id})" >-</button>
                    <section id="element${elementsChambre.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsChambre.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsBureau() {
  let html = "";
  const element = await fetch("/element/bureau")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsBureau) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary ">${elementsBureau.nom}</div>
                    <div class="card-body">
                    <img src="${elementsBureau.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsBureau.id})" >-</button>
                    <section id="element${elementsBureau.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsBureau.id})" >+</button>
                    </div>
                    </div>
                    </div>
                    
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsCuisine() {
  let html = "";
  const element = await fetch("/element/cuisine")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsCuisine) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsCuisine.nom}</div>
                    <div class="card-body">
                    <img src="${elementsCuisine.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsCuisine.id})" >-</button>
                    <section id="element${elementsCuisine.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsCuisine.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsSalleDeBain() {
  let html = "";
  const element = await fetch("/element/salleDeBain")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsSalleDeBain) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary ">${elementsSalleDeBain.nom}</div>
                    <div class="card-body">
                    <img src="${elementsSalleDeBain.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsSalleDeBain.id})" >-</button>
                    <section id="element${elementsSalleDeBain.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsSalleDeBain.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsGarage() {
  let html = "";
  const element = await fetch("/element/garage")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsGarage) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsGarage.nom}</div>
                    <div class="card-body">
                    <img src="${elementsGarage.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsGarage.id})" >-</button>
                    <section id="element${elementsGarage.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsGarage.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsExterieur() {
  let html = "";
  const element = await fetch("/element/exterieur")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsExterieur) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsExterieur.nom}</div>
                    <div class="card-body">
                    <img src="${elementsExterieur.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsExterieur.id})" >-</button>
                    <section id="element${elementsExterieur.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsExterieur.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
async function showElementsDivers() {
  let html = "";
  const element = await fetch("/element/divers")
    .then((resultat) => resultat.json())
    .then((json) => json.elements);

  element.forEach(
    (elementsDivers) =>
      (html += `<div>
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center bg-primary">${elementsDivers.nom}</div>
                    <div class="card-body">
                    <img src="${elementsDivers.icone}" alt="">
                    <hr>
                    <div class="d-flex justify-content-around" >
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="moinsVolume(${elementsDivers.id})" >-</button>
                    <section id="element${elementsDivers.id}" >0</section>
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="plusVolume(${elementsDivers.id})" >+</button>
                    </div>
                    </div>
                    </div>
                </div>`)
  );
  document.querySelector("#elements").innerHTML = html;
}
function roundUsing(func, number, prec) {
  var tempnumber = number * Math.pow(10, prec);
  tempnumber = func(tempnumber);
  return tempnumber / Math.pow(10, prec);
}
async function plusVolume(id) {
  const positif = parseFloat(document.querySelector("#volume").innerHTML);
  if (positif >= 0) {
    const volumeElement = await fetch("/element/" + id)
      .then((resultat) => resultat.json())
      .then((json) => json.volume);
    const getVolumeElement = parseFloat(volumeElement);
    let getVolume = parseFloat(document.querySelector("#volume").innerHTML);
    const totalVolume = getVolume + getVolumeElement;
    const totalArrondi = roundUsing(Math.floor, totalVolume, 1);
    document.querySelector("#volume").innerHTML = totalArrondi + " " + "M³";
    document.querySelector("#lienVolume").href = "/devis/" + totalArrondi;
    let getQuantite = parseFloat(
      document.querySelector("#element" + id).innerHTML
    );
    let getTotalQuantite = getQuantite + 1;
    document.querySelector("#element" + id).innerHTML = getTotalQuantite;
  }
}
async function moinsVolume(id) {
  const positif = parseFloat(document.querySelector("#volume").innerHTML);
  const quantiteElement = document.querySelector("#element" + id);
  const volumeElement = await fetch("/element/" + id)
    .then((resultat) => resultat.json())
    .then((json) => json.volume);
  if (positif - volumeElement >= 0 && quantiteElement.innerHTML > 0) {
    const getVolumeElement = parseFloat(volumeElement);
    let getVolume = parseFloat(document.querySelector("#volume").innerHTML);
    const totalVolume = getVolume - getVolumeElement;
    const totalArrondi = roundUsing(Math.floor, totalVolume, 1);
    document.querySelector("#volume").innerHTML = totalArrondi + " " + "M³";
    document.querySelector("#lienVolume").href = "/devis/" + totalArrondi;
    let getQuantite = parseFloat(
      document.querySelector("#element" + id).innerHTML
    );
    let getTotalQuantite = getQuantite - 1;
    document.querySelector("#element" + id).innerHTML = getTotalQuantite;
  }
}
showElementsSalon();
