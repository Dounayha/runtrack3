function fizzbuzz() {
    for (let compteur = 1; compteur <= 151; compteur++) {
        // Vérification si le nombre est un multiple de 3 et de 5
        if (compteur % 3 === 0 && compteur % 5 === 0) {
            console.log('FizzBuzz'); // Affiche "FizzBuzz" si compteur est multiple de 3 et de 5
        } 
        // Vérification si le nombre est un multiple de 3
        else if (compteur % 3 === 0) {
            console.log('Fizz'); // Affiche "Fizz" si compteur est multiple de 3
        } 
        // Vérification si le nombre est un multiple de 5
        else if (compteur % 5 === 0) {
            console.log('Buzz'); // Affiche "Buzz" si compteur est multiple de 5
        } 
        // Sinon, affiche le nombre lui-même
        else {
            console.log(compteur); 
        }
    }
}

fizzbuzz();
