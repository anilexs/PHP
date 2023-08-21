$('input[type="text"]').keyup(function(e) {
        if (e.keyCode === 8 && this.value.length === 0) { // Vérifier la touche Suppr (8) et longueur de 0
            $(this).prev('input[type="text"]').focus(); // Passer à l'input précédent
        } else if (this.value.length === this.maxLength) {
            $(this).next('input[type="text"]').focus();
        }
    });