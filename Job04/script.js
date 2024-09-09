// Déclaration de la fonction bisextile
function bisextile(annee) {
    // Vérification si l'année est bissextile
    if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
        return true; // L'année est bissextile
    } else {
        return false; // L'année n'est pas bissextile
    }
}

console.log(bisextile(2024)); // true
console.log(bisextile(2023)); // false
console.log(bisextile(2000)); // true
console.log(bisextile(1900)); // false
