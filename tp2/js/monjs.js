$(function(){
   /*********************************** Page connexion************************************/

    $('#btnconnexion').click( function(e) {
                        // les deux lignes annulent le comportement par défaut du clic
                        // c'est à dire href="#" qui provoquerait un rappel de la même page
                          e.preventDefault();
                          e.stopPropagation();
                          var mdp = $("#mdp").val(); //récupère le contenue de la zone d'id mdp
                          var login = $("#login").val();
                          /* appel d'une fonction ajax */
                          // elle prend 3 arguments :
                          // 1- le nom de la fonction php qui sera exécutée
                          // 2- la liste des arguments à fournir à cette fonction
                          // 3- le nom de la fonction JS qui sera exécutée au "retour" du serveur
                          $.post("ajax/traiterconnexion.php",{
                              // valorise les deux arguments passés à la fonction traiterconnexion
                                "mdp" : mdp,
                                "login" : login},
                                foncRetourConnexion);
      });
     /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
     // le paramètre data représente la donnée envoyée par le serveur
     // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourConnexion(data){
            if(data.length != 0){
            // charge la page (data-role=page) du même document dont l'id  est le sélecteur indiqué
                $.mobile.changePage("#pagemenuaccueil");
             }
             else{
             // sinon affichage d'un message dans la div d'id message
                $("#message").html("erreur de login et/ou mdp");
             }
    }

    /***************************************** Page inscription*******************************/

    $('#btninscription').click( function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                                var nom = $("#nom").val();
                                var prenom = $("#prenom").val();
                                var mail = $("#mail").val();
                                var tel = $("#tel").val();
                                $.post("ajax/enregistreruser.php",{
                                    "nom" : nom,
                                    "prenom" : prenom,
                                    "mail" : mail,
                                    "tel"  : tel,
                                    "type" :  $("input[type=radio][name=type]:checked").attr("value")},
                                    foncRetourEnregistrement);

     });

    function foncRetourEnregistrement(data){
                 $("#divinscription").html(data);
    }

    $("#lstoffres > li").click(function(){
        var id = $(this).attr("id");
        $.get("ajax/traiteroffre.php", {"id" : id}, retourOffre);
    });


    /*$("#nav_offres_depart, #btn_offres_depart, #nav_offres_arrive, #btn_offres_arrive").click(function(){
        var type_offre;
        console.log('On entre dans le click');
        switch($(this).attr("id"))
        {
            case "nav_offres_depart":
            case "btn_offres_depart":
                console.log('DEPART');
                type_offre = "offres_depart";
                break;
            case "nav_offres_arrive":
            case "btn_offres_arrive":
                console.log('ARRIVE');
                type_offre = "offres_arrive";
                break;
            default:
                console.log('DEFAULT CA PUE ');
        }
        console.log('On arrive avant le get : ' + type_offre);
        $.get("ajax/traiteroffre.php", {"type_offre" : type_offre}, function(data){console.log(data);});
    });*/

    function retourOffre(data){
        console.log("On arrive ici ");
        console.log(data);
        data = JSON.parse(data);
        console.log("---------------------------------");
        if (data != null)
        {
            $('#offre_nom').html(data['nom']);
            $('#offre_prenom').html(data['prenom']);
            $('#btn_appeler').attr("href", "tel:" + data['tel']);
            $('#btn_contacter').attr("href", "mailto:" + data['mail']);
            if (("ramassage" in data))
            {
                $("#offre_etapes").html("</br>Etape(s) possible(s) sur le trajet :");
                $('#liste_etapes').empty();
                for (var cnt = 0; cnt < data.ramassage.length; ++cnt)
                {
                    console.log("Etape : " + data.ramassage[cnt]['lieu']);
                    $('#liste_etapes').append("<li>" + data.ramassage[cnt]['lieu'] + "</li>");
                }
            }
        }
    };

    $("#btn_supprimer").click(function(){
        console.log("Bouton supprimer : ");
        $('label[class*="ui-checkbox-on"]').parent().remove();
        $.post('ajax/traitersuppression.php');
    });
}); // fin fonction principale/*


