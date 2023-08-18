function createSakura() {
  const sakura = document.createElement('div');
  sakura.classList.add('sakura');
  document.body.appendChild(sakura);

  const startX = Math.random() * window.innerWidth;
  const delay = Math.random() * 5;

  sakura.style.left = startX + 'px';
  sakura.style.animationDuration = Math.random() * 4 + 5 + 's';
  sakura.style.animationDelay = delay + 's';

  sakura.addEventListener('animationiteration', () => {
    sakura.style.left = Math.random() * window.innerWidth + 'px';
  });
}

for (let i = 0; i < 30; i++) {
  createSakura();
}

setTimeout(function() {
        $('#help').animate({
          'right': '0px' 
        }, 3000);
        
      }, 1000); 

$(document).ready(function() {
  // Créer une nouvelle div avec la classe 'bubble'
  var nouvelleDiv = $('<div>Je suis une nouvelle div</div>');
  nouvelleDiv.addClass('bubble');

  // Créer le contenu des boutons avec les icônes et les actions spécifiques
  var button1 = $('<button><i class="fas fa-circle-xmark" style="color: #ff0000;"></i></button>');
  var button2 = $('<button><i class="fas fa-circle-xmark" style="color: #ff0000;"></i></button>');
  var button3 = $('<button><i class="fas fa-circle-xmark" style="color: #ff0000;"></i></button>');

  // Ajouter les actions aux boutons (remplacez les actions par ce que vous souhaitez faire)
  $('#hellpExcla').click(function() {
    $('#hellpExcla').toggle();
    $('#help').animate({
          'right': '0px' 
        }, 3000);
  });
  button1.click(function() {
    // Action pour le bouton 1
    console.log("Clic sur le bouton 1");
  });

  button2.click(function() {
    // Action pour le bouton 2
    console.log("Clic sur le bouton 2");
  });

  button3.click(function() {
  //   var newImagePath = '../img/silicacry.jpg';
  // $('#help').attr('src', newImagePath);

    setTimeout(function() {
      $('#hellpExcla').toggle();
      }, 3000); 

    $('#help').animate({
          'right': '-250px' 
        }, 3000);
  });

  // Ajouter les boutons à la nouvelle div
  nouvelleDiv.append(button1, button2, button3);

  // Ajouter la nouvelle div à la fin du body après 5 secondes
  setTimeout(function() {
    $('body').append(nouvelleDiv);
  }, 5000);
});

 var nouvelleDiv = $('<div>Je suis une nouvelle div</div>');
      nouvelleDiv.addClass('bubble');

      setTimeout(function() {
        $('body').append(nouvelleDiv);
      }, 5000);
