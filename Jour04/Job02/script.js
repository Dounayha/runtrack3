function jsonValueKey(jsonString, key) {
    try {
  
        const obj = JSON.parse(jsonString);

     
        if (key in obj) {
            return obj[key];
        } else {
            throw new Error(`La clé "${key}" n'existe pas dans l'objet.`);
        }
    } catch (error) {

        console.error('Erreur:', error.message);
        return null;
    }
}

document.getElementById("fetchValueButton").addEventListener("click", function() {

    const jsonString = `{
        "name": "La Plateforme_",
        "address": "8 rue d'hozier",
        "city": "Marseille",
        "nb_staff": "11",
        "creation": "2019"
    }`;

    const key = "city";
    
    const result = jsonValueKey(jsonString, key);
    document.getElementById("result").textContent = result ? result : "Erreur lors de la récupération de la valeur.";
});