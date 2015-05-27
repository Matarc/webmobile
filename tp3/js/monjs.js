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
                                "login" : login },
                                foncRetourConnexion );
     });
     /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
     // le paramètre data représente la donnée envoyée par le serveur
     // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourConnexion(data){
            if(data.length != 0){
                $("#divconnexion").hide(); // masque la connexion
                $("#linkformoffre").css('display', '');
                //$("#divformulaireoffre").css('display', '');
                 //$.mobile.changePage('vues/formulaireoffre.php');
             }
             else{
             // sinon affichage d'un message dans la div d'id message
                $("#message").css({color:'red'});
                $("#message").html("erreur de login et/ou mdp");
             }
    }

    $('#sliderdepart').live('change', function(){
        switch($(this).slider().val())
        {
            case 'off':
                $('#btnptramassage').css('display', '');
                $('#listinputptramassage').css('display', '');
                $('#labelptramassage').css('display', '');
                break;
            case 'on':
                $('#btnptramassage').css('display', 'none');
                $('#listinputptramassage').css('display', 'none');
                $('#labelptramassage').css('display', 'none');
                break;
        }
    });

    $('#slideroffre').live('change', function(){
        switch($(this).slider().val())
        {
            case 'on':
                $('#labeldate').css('display', '');
                $('#date').css('display', '');
                break;
            case 'off':
                $('#labeldate').css('display', 'none');
                $('#date').css('display', 'none');
                break;
        }
    });
    $('#btnptramassage').click(function(){
        var id = $('#listinputptramassage').children(':input').length;
        $('#listinputptramassage').append('<input data-role="none" type="text" name="ptramassage' + id + '" id="ptramassage' + id + '" value="" /></br>');
    });

    $('#formoffre').validate({
        submitHandler: function(form) {
            var depart_value = $("#sliderdepart").slider().val();
            var offre_value = $("#slideroffre").slider().val();
            var date = offre_value == 'off' ? null : $('#date').val();
            var ptramassage = new Array();
            if (depart_value == 'off')
            {
                var counter_ptramassage = $('#listinputptramassage').children(':input').length;
                console.log(array_input);
                for (var i = 0; i < counter_ptramassage; ++i)
                {
                    var id_input = $('#listinputptramassage').children(':input').attr('id');
                     $('#listinputptramassage').children(':input').remove();
                    //.console.log(array_input[i]);
                    //ptramassage[i] = $('#listinputptramassage')
                }
            }
            /*$(form).ajaxSubmit({
                method: "POST",
                url: "ajax/creeroffre.php",
                data: {

                }
            }),
            success: alertNouvelleOffre*/
        }
    });

function alertNouvelleOffre(data)
{

}
    /***************************************** Page inscription*******************************/
    $("#forminscription").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                method: "POST",
                url: "ajax/enregistreruser.php",
                data: {
                    nom: $("#nom").val(),
                    prenom: $("#prenom").val(),
                    mail: $("#mail").val(),
                    tel: $("#tel").val(),
                    type: $("input[type=radio][name=type]:checked").attr("value")
                },
                success: foncRetourEnregistrement
            });
            return false;
        }
    });

    /*$('#btninscription').click( function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                                /*var nom = $("#nom").val();
                                var prenom = $("#prenom").val();
                                var mail = $("#mail").val();
                                var tel = $("#tel").val();
                                $.post("ajax/enregistreruser.php",{
                                    "nom" : nom,
                                    "prenom" : prenom,
                                     "mail" : mail,
                                     "tel"  : tel,
                                     "type" :  $("input[type=radio][name=type]:checked").attr("value")},
                                    foncRetourEnregistrement );

    });*/
    function foncRetourEnregistrement(data){
                 $("#divinscription").html(data);
    }
   /*********************************** Page offresoffertes************************************/

        $("#lstoffres > li").click( function() {
                          var id = $(this).attr("id");
                          $.post("ajax/traiteroffre.php",{
                                "idOffre" : id
                                },
                                 foncRetourOffre,"json" );
          });
          function  foncRetourOffre(data){
                var nom = data["nom"];
                var prenom = data["prenom"];
                var numeroTel = data["tel"];
                var mail = data["mail"];
                $("#nom").html(nom);
                $("#prenom").html(prenom);
                //Teste si l'offre est au départ du domicile -présence du champ ramassage-
                // On aurait pu le faire sur la présence du champ "depart"
                if(data["ramassage"]){
                    var tabRamassage = data["ramassage"];
                    var champramassage = "<br>Etape(s)possible(s) sur le trajet : <ul>";
                    for(var etape in tabRamassage){
                        champramassage += "<li>" + tabRamassage[etape]['lieu'] + "</li>";
                    }
                    champramassage += "</ul>";
                    $("#ramassage").html(champramassage);
                }
                   var champmail = "mailto:" + mail;
                   var champtel = "tel:" + numeroTel;
                   $("#tel").attr("href", champtel);
                   $("#mail").attr("href", champmail);
         }
  /*********************************** Page gerermesoffres************************************/
         $("#btnSupprimer").click(function(){
                var valeurs=[];
                /* Recherche dans la page tous les input de type checkbox qui sont cochés*/
                $("#pagegerermesoffres input[type=checkbox]:checked").each(function() {
                    /*   récupère chaque id et le met dans le tableau valeurs */
                        var id = $(this).attr("id");
                        valeurs.push(id);
                });
                $.post("ajax/traitersuppression.php",{
                                "lesIdOffres" : valeurs
                                },
                          foncRetourSuppression,"json");
            });
           function foncRetourSuppression(lesIdOffresAsupprimer){
                for(var i = 0; i < lesIdOffresAsupprimer.length; i++){
                   var id = lesIdOffresAsupprimer[i];
            /* Supprime dans la page tous les input d'id récupérés par Ajax ainsi que tous les labels -opérateur virgule-*/
                   $("#pagegerermesoffres input#" + id + ",#pagegerermesoffres label[for=" + id + "]").remove();
                }
           }









}); // fin fonction principale/*


