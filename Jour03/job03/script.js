$(document).ready(function() {
    const grid = $('#puzzle-grid');
    const message = $('#message');
    const restartButton = $('#restart');
    let pieces = [];
    let emptyIndex = 8; // Dernière case vide (index 8)
  
    const imageSources = [
      './images/1.PNG', './images/2.PNG', './images/3.PNG',
      './images/4.PNG', './images/5.PNG', './images/6.PNG',
      './images/7.PNG', './images/8.PNG', './images/9.PNG'
    ];
  
    const createPuzzle = () => {
      pieces = shuffle([0, 1, 2, 3, 4, 5, 6, 7,'']); // Mélange les pièces
      grid.empty();
      pieces.forEach((piece, index) => {
        const div = $('<div>').addClass('puzzle-piece');
        if (piece !== '') {
          div.css('background-image', `url(${imageSources[piece]})`);
          div.data('index', index);
          div.on('click', function() {
            movePiece(index);
          });
        } else {
          emptyIndex = index;
        }
        grid.append(div);
      });
      message.text('');
      restartButton.hide();
    };
  
    const shuffle = (array) => {
      for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
      }
      return array;
    };
  
    const movePiece = (index) => {
      if (isAdjacent(index, emptyIndex)) {
        [pieces[index], pieces[emptyIndex]] = [pieces[emptyIndex], pieces[index]];
        emptyIndex = index;
        createPuzzle();
        if (isSolved()) {
          message.text('Vous avez gagné !').css('color', 'green');
          $('.puzzle-piece').off('click');  // Désactive les clics après la victoire
          restartButton.show(); // Afficher le bouton Recommencer
        }
      }
    };
  
    const isAdjacent = (index1, index2) => {
      const diff = Math.abs(index1 - index2);
      return diff === 1 || diff === 3;
    };
  
    const isSolved = () => {
      for (let i = 0; i < pieces.length - 1; i++) {
        if (pieces[i] !== i) return false;
      }
      return true;
    };
  
    restartButton.on('click', createPuzzle);
  
    // Initialiser le puzzle au chargement
    createPuzzle();
  });
  