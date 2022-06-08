const volume = document.querySelector("#devis_volume");
if (volume.value != "") {
  localStorage.setItem("volume", volume.value);
} else {
  document.querySelector("#devis_volume").value =
    localStorage.getItem("volume");
}
volume.addEventListener("change", function () {
  localStorage.setItem("volume", volume.value);
});

const nom = document.querySelector("#devis_nom");
if (nom.value == "") {
  nom.value = localStorage.getItem("nom");
}
nom.addEventListener("change", function () {
  localStorage.setItem("nom", nom.value);
});

const prenom = document.querySelector("#devis_prenom");
if (prenom.value == "") {
  prenom.value = localStorage.getItem("prenom");
}
prenom.addEventListener("change", function () {
  localStorage.setItem("prenom", prenom.value);
});

const email = document.querySelector("#devis_email");
if (email.value == "") {
  email.value = localStorage.getItem("email");
}
email.addEventListener("change", function () {
  localStorage.setItem("email", email.value);
});

const telephone = document.querySelector("#devis_telephone");
if (telephone.value == "") {
  telephone.value = localStorage.getItem("telephone");
}
telephone.addEventListener("change", function () {
  localStorage.setItem("telephone", telephone.value);
});

const villeDepart = document.querySelector("#devis_villeDeDepart");
if (villeDepart.value == "") {
  villeDepart.value = localStorage.getItem("villeDepart");
}
villeDepart.addEventListener("change", function () {
  localStorage.setItem("villeDepart", villeDepart.value);
});

const dateDepart = document.querySelector("#devis_dateDeDepart");
if (dateDepart.value == "") {
  dateDepart.value = localStorage.getItem("dateDepart");
}
dateDepart.addEventListener("change", function () {
  localStorage.setItem("dateDepart", dateDepart.value);
});

const dateArrivee = document.querySelector("#devis_dateArrivee");
if (dateArrivee.value == "") {
  dateArrivee.value = localStorage.getItem("dateArrivee");
}
dateArrivee.addEventListener("change", function () {
  localStorage.setItem("dateArrivee", dateArrivee.value);
});

const adresseDepart = document.querySelector("#devis_adresseDeDepart");
if (adresseDepart.value == "") {
  adresseDepart.value = localStorage.getItem("adresseDepart");
}
adresseDepart.addEventListener("change", function () {
  localStorage.setItem("adresseDepart", adresseDepart.value);
});

const codePostalDepart = document.querySelector("#devis_codePostalDeDepart");
if (codePostalDepart.value == "") {
  codePostalDepart.value = localStorage.getItem("codePostalDepart");
}
codePostalDepart.addEventListener("change", function () {
  localStorage.setItem("codePostalDepart", codePostalDepart.value);
});

const etageDepart = document.querySelector("#devis_etageDeDepart");
if (etageDepart.value == "") {
  etageDepart.value = localStorage.getItem("etageDepart");
}
etageDepart.addEventListener("change", function () {
  localStorage.setItem("etageDepart", etageDepart.value);
});

const villeArrivee = document.querySelector("#devis_villeArrivee");
if (villeArrivee.value == "") {
  villeArrivee.value = localStorage.getItem("villeArrivee");
}
villeArrivee.addEventListener("change", function () {
  localStorage.setItem("villeArrivee", villeArrivee.value);
});

const adresseArrivee = document.querySelector("#devis_adresseArrivee");
if (adresseArrivee.value == "") {
  adresseArrivee.value = localStorage.getItem("adresseArrivee");
}
adresseArrivee.addEventListener("change", function () {
  localStorage.setItem("adresseArrivee", adresseArrivee.value);
});

const codePostalArrivee = document.querySelector("#devis_codePostalArrivee");
if (codePostalArrivee.value == "") {
  codePostalArrivee.value = localStorage.getItem("codePostalArrivee");
}
codePostalArrivee.addEventListener("change", function () {
  localStorage.setItem("codePostalArrivee", codePostalArrivee.value);
});

const etageArrivee = document.querySelector("#devis_etageArrivee");
if (etageArrivee.value == "") {
  etageArrivee.value = localStorage.getItem("etageArrivee");
}
etageArrivee.addEventListener("change", function () {
  localStorage.setItem("etageArrivee", etageArrivee.value);
});

const message = document.querySelector("#devis_message");
if (message.value == "") {
  message.value = localStorage.getItem("message");
}
message.addEventListener("change", function () {
  localStorage.setItem("message", message.value);
});

const ascenseurDepart = document.querySelector("#devis_ascenseurDepart");
ascenseurDepart.addEventListener("change", function () {
  localStorage.setItem("ascDepart", ascenseurDepart.value);
});
for (let i = 0; i < ascenseurDepart.length; i++) {
  if (ascenseurDepart[i].value === localStorage.getItem("ascDepart")) {
    ascenseurDepart[i].selected = true;
  }
}

const ascenseurArrivee = document.querySelector("#devis_ascenseurArrivee");
ascenseurArrivee.addEventListener("change", function () {
  localStorage.setItem("ascenseurArrivee", ascenseurArrivee.value);
});
for (let i = 0; i < ascenseurArrivee.length; i++) {
  if (ascenseurArrivee[i].value === localStorage.getItem("ascenseurArrivee")) {
    ascenseurArrivee[i].selected = true;
  }
}
