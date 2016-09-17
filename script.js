$(document).ready(function () {
    

    $('#createAc').click(function () {
        window.open("https://guests.epfl.ch/", '_blank');
    });

    $('#connectB').click(function () {
        document.location.href = "form.php";
    });

    $('#infoFilieres').click(function () {
        window.open("https://www.ict-berufsbildung.ch/fr/formation-professionnelle/formation-initiale-ict/", '_blank');
    });
    $('#retourHome').click(function () {
        document.location.href = "https://apprentis.epfl.ch/";
    });

    $('#addSch').click(function () {
        var i = $('#scolaire > tbody').children().size() + 1;
        if (i < 6) {
            $('#scolaire').append('<tr><td><input type="text" name="ecole' + i + '" placeholder="Ecole" autocomplete="off"/></td><td><input type="text" name="lieuEcole' + i + '" placeholder="Lieu" autocomplete="off"/></td> <td><input type="text" name="niveauEcole' + i + '" placeholder="Niveau" autocomplete="off"/></td><td><input type="text" name="anneesEcole' + i + '" placeholder="de-à(années)" autocomplete="off"/></td></tr>');
            if (i == 5) {
                $('#addSch').hide(750);
            }
        }
    });

    $('#addPro').click(function () {
        var y = $('#activites > tbody').children().size() + 1;
        if (y < 4) {
            $('#activites').append('<tr><td><input type="text" name="employeurPro' + y + '" placeholder="Employeur" autocomplete="off"/></td><td><input type="text" name="lieuPro' + y + '" placeholder="Lieu" autocomplete="off"/></td><td><input type="text" name="activitePro' + y + '" placeholder="Activité" autocomplete="off"/></td><td><input type="text" name="anneesPro' + y + '" placeholder="de-à(années)" autocomplete="off"/></td></tr>');
            if (y == 3) {
                $('#addPro').hide(750);
            }
        }
    });

    $('#addStage').click(function () {
        var x = $('#stages > tbody').children().size() + 1;
        if (x < 6) {
            $('#stages').append('<tr><td><input type="text" name="activiteStage' + x + '" placeholder="Métier" autocomplete="off"></td><td><input type="text" name="entrepriseStage' + x + '" placeholder="Entreprise" autocomplete="off"></td></tr>');
            if (x == 4) {
                $('#addStage').hide(750);
            }
        }
    });
    $('#addInputFile').click(function () {
        var z = $('#newCertifZone > tbody').children().size() + 2;
        var zoneId = z + 5;
        $("*").off();
        $.getScript("script.js");
        if (z < 10) {
            $('#newCertifZone').append('<tr><td><label class="file" title="" id="certifLabel' + z + '"><input type="file" name="certifs' + z + '" id="certifs' + z + '" onchange="changeTitleFile(this)" /></label><div class="mdl-tooltip mdl-tooltip--large" for= "certifLabel' + z + '">Formats autorisés: pdf </div><p></p><section id="formatErrorZone' + zoneId + '"></section></td></tr>');
            componentHandler.upgradeDom();
            if (z == 8) {
                $('#addInputFile').hide(750);
            }
        }
    });

    $("#jb").change(function () {
        var selectedFormation = $("#jb option:selected")[0].value;
        var infoPeople = ["informaticien"];
        var polyPeople = ["polyMecanicien"];
        var laborantPeople = ["laborantinChimie", "laborantinPhysique", "laborantinBiologie"];
        var globalPeople = ["polyMecanicien", "informaticien", "logisticien", "planificateurElectricien", "employeCommerce", "gardienAnimaux", "interactiveMediaDesigner", "electronicien"];

        if (globalPeople.indexOf(selectedFormation) != -1) {
            $("#all").show(1000);
            $("#infoOnly").hide(0);
            $("#polyOnly").hide(0);
            $("#dejaCandAnnee").hide(0);

            if (infoPeople.indexOf(selectedFormation) != -1) {
                $("#infoOnly").show(1000);
            }
            if (polyPeople.indexOf(selectedFormation) != -1) {
                $("#polyOnly").show(1000);
            }
        } else if (laborantPeople.indexOf(selectedFormation) != -1) {
            $("#all").hide(1000);

            if (confirm("Pour les métiers de laborantins, l'inscription se fait auprès de l'AVML, cliquer sur ok pour être redirigé-e.")) {
                window.location.replace("https://wp.unil.ch/avml/");
            } else { }
        }
    });

    //CREATE 1 FUNCTION ONLY

    $("#photo").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#photo").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone1").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone1").html('');
        }
    });
    $("#idCard").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#idCard").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone2").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone2").html('');
        }
    });
    $("#cv").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#cv").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone3").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone3").html('');
        }
    });
    $("#lettre").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#lettre").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone4").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone4").html('');
        }
    });
    $("#gimchLabel").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#gimchLabel").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone6").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone6").html('');
        }
    });

    $("#certifs1").change(function () {
        console.log("change certif 1")
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs1").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone5").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone5").html('');
        }
    });

    $("#certifs2").change(function () {
        console.log("change certif 2");
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs2").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone7").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone7").html('');
        }
    });
    $("#certifs3").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs3").val().split('.').pop().toLowerCase()) == -1) {

            $("#formatErrorZone8").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone8").html('');
        }
    });
    $("#certifs4").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs4").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone9").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone9").html('');
        }
    });
    $("#certifs5").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs5").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone10").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone10").html('');
        }
    });
    $("#certifs6").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs6").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone11").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone11").html('');
        }
    });
    $("#certifs7").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs7").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone12").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone12").html('');
        }
    });
    $("#certifs8").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs8").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone13").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone13").html('');
        }
    });
    $("#certifs9").change(function () {
        var fileExtension = ['pdf'];
        if (fileExtension.indexOf($("#certifs9").val().split('.').pop().toLowerCase()) == -1) {
            $("#formatErrorZone14").html('<p class ="errorMsgs">Format invalide</p>');
        } else {
            $("#formatErrorZone14").html('');
        }
    });

    $("#maj1").change(function () {
        $("#representants").show(1000);
    });
    $("#maj2").change(function () {
        $("#representants").hide(1000);
    });

    $("#dejaCand1").change(function () {
        $("#dejaCandAnnee").hide(750);
        $("#dejaCandAnnee").val("");
        $("#dejaCandError").html("");
    });
    $("#dejaCand2").change(function () {
        $("#dejaCandAnnee").show(750);
    });

    $("#birthApp").change(function () {
        userDate = new Date(document.getElementById("birthApp").value);
        now = new Date();
        birthDate = userDate.getTime();
        currentDate = now.getTime();
        currentDays = currentDate / 24 / 60 / 60 / 1000;
        userDays = birthDate / 24 / 60 / 60 / 1000;
        currentDays = Math.floor(currentDays);
        userDays = Math.floor(userDays);
        douzeAns = Math.floor(currentDays - 4383);

        if (currentDays <= userDays) {
            document.getElementById('errorMsg').innerHTML = '<p class ="errorMsgs">Date invalide';

        } else if (userDays > douzeAns) {
            document.getElementById('errorMsg').innerHTML = '<p class ="errorMsgs">Date invalide, trop jeune';
        }
        else {
            document.getElementById('errorMsg').innerHTML = '';
        }
    });
    $("#dejaCandAnnee").change(function () {
        var currentYear = (new Date).getFullYear();
        if (currentYear < $("#dejaCandAnnee").val()) {
            $("#dejaCandError").html('<p class ="errorMsgs">Date invalide');
        } else {
            $("#dejaCandError").html("");
        }
    });
    $("#anneeFin").change(function () {
        var currentYear = (new Date).getFullYear();
        if (currentYear < $("#anneeFin").val()) {
            $("#anneeFinError").html('<p class ="errorMsgs">Date invalide');
        } else {
            $("#anneeFinError").html("");
        }
    });

});
function changeTitleFile(objFile) {
    objFile.parentNode.setAttribute('title', objFile.value.replace(/^.*[\\/]/, ''));
}