function jourTravaille(date) {
    const joursFeries2024 = [
        new Date(2024, 0, 1),    
        new Date(2024, 3, 1),    
        new Date(2024, 4, 1),    
        new Date(2024, 4, 8),    
        new Date(2024, 4, 9),    
        new Date(2024, 5, 20),   
        new Date(2024, 6, 14),  
        new Date(2024, 7, 15),   
        new Date(2024, 9, 1),    
        new Date(2024, 10, 11),  
        new Date(2024, 11, 25)  
    ];

    const jourDuMois = date.getDate();
    const moisDeLAnnee = date.getMonth() + 1; // Les mois sont de 0 à 11, donc on ajoute 1
    const anneeDuJour = date.getFullYear();

    // Vérification si c'est un week-end (samedi = 6, dimanche = 0)
    if (date.getDay() === 0 || date.getDay() === 6) {
        console.log(`Non, ${jourDuMois} ${moisDeLAnnee} ${anneeDuJour} est un week-end`);
        return;
    }

    // Vérification si c'est un jour férié
    for (let compteur = 0; compteur < joursFeries2024.length; compteur++) {
        const jourFerie = joursFeries2024[compteur];
        if (
            jourFerie.getDate() === jourDuMois &&
            jourFerie.getMonth() === date.getMonth() &&
            jourFerie.getFullYear() === anneeDuJour
        ) {
            console.log(`Le ${jourDuMois} ${moisDeLAnnee} ${anneeDuJour} est un jour férié`);
            return;
        }
    }

    // Si ce n'est ni un week-end ni un jour férié
    console.log(`Oui, ${jourDuMois} ${moisDeLAnnee} ${anneeDuJour} est un jour travaillé`);
}

// Exemples de tests
jourTravaille(new Date(2024, 0, 1)); // Jour férié (1er janvier)
jourTravaille(new Date(2024, 4, 8)); // Jour férié (8 mai)
jourTravaille(new Date(2024, 6, 14)); // Jour férié (14 juillet)
jourTravaille(new Date(2024, 6, 20)); // Week-end (20 juillet, samedi)
jourTravaille(new Date(2024, 6, 22)); // Jour travaillé (22 juillet)
