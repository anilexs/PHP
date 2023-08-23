$("#form").submit((e) => {
    var pseudo = $("#pseudo").val();
    var email = $("#email").val();
    var mdp = $("#mdp").val();
    var img = $("#img")[0].files[0];

    if (!img || pseudo == "" || email == "" || mdp == "") {
        e.preventDefault();
        if (!$(".errer404").length) {

            var div = $("<div>").addClass("errer404");
            var div2 = $("<div>").addClass("error");
            var ul = $("<ul>").addClass("li404");
            $(".errer").prepend(div2);
            $(".error").prepend(ul);
            $(".errer").prepend(div);
        }

        if (!$(".pseudo404").length && pseudo == "") {
            var pseudo404 = $("<li>").addClass("pseudo404").text("Merci de remplir le champ 'pseudonyme'.");
            $(".li404").append(pseudo404);
        }else if(!(pseudo == "")){
            $(".pseudo404").remove(); 
        }
        
        if (!$(".email404").length && email == "") {
            var email404 = $("<li>").addClass("email404").text("Merci de renseigner le champ 'email'.");
            $(".li404").append(email404);
        }else if(!(email == "")){
            $(".email404").remove(); 
        }
        
        if (!$(".mdp404").length && mdp == "") {
            var mdp404 = $("<li>").addClass("mdp404").text("Merci de renseigner le mot de passe.");
            $(".li404").append(mdp404);
        }else if(!(mdp == "")){
            $(".mdp404").remove(); 
        }

        if (!img && !$(".img404").length) {
            var img404 = $("<li>").addClass("img404").text("Merci de sélectionner une photo.");
            $(".li404").append(img404);
        } else if (img && $(".img404").length) {
            $(".img404").remove();
        }
}
});

$("#reset").click(() => {
    if ($(".errer404").length) {
        $(".errer").empty(); 
    }
});
