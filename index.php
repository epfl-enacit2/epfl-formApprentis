<!doctype html>
<html lang="fr">
    <head>  
         <meta charset="UTF-8"/>
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="icon" type="image/png" href="img/favicon.png" />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
         <script>
             $(document).ready(function(){
                 $("#all").hide()

                    $("#jb").change(function() {
                      var sele = $("#jb option:selected").text();
                      
                        if((sele=="Polymécanicien-ne CFC")||(sele=="Informaticien-ne CFC")||(sele=="Logisticien-ne CFC")||(sele=="Planificateur-trice éléctricien-ne CFC")||(sele=="Employé-e de commerce CFC")||(sele=="Gardien-ne d'animaux CFC")){
                            $("#all").show(1000)
                            $("#infoOnly").hide(0)
                            if(sele=="Informaticien-ne CFC"){
                                $("#infoOnly").show(1000)
                            }
                        }else if((sele=="Laborantin-e CFC; option biologie")||(sele=="Laborantin-e CFC; option chimie")||(sele=="Laborantin-e en physique CFC")){
                            $("#all").hide(1000)

                            if(confirm("Pour les métiers de laborantins, l'inscription se fait au près de ASSOCIATION, cliquer sur ok pour être rediriger...")){
                                window.location.replace("https://google.com");
                            }else{
                            }
                        }  
                });
                }); 
            </script>      
         <title>Formulaire Apprentissage</title>
    </head>
    <body>
    <div class="form-style-5" >
        <form method ="post" action="cible.php" enctype="multipart/form-data">
            
        <fieldset id="photoTitle">
            <img src="./img/FA.png"/ alt="FA" width="300" height="150" id="FAPic" draggable="false"/>
            <img src="./img/epfl.png"/ alt="EPFL" width="300" height="150" id="epflPic" draggable="false"/>
            <p><h2>Candidature pour un Apprentissage</h2>
            Les champs notés d'un astérisque* doivent être obligatoirement remplis.<p>
        </fieldset> 
         
        <fieldset>  
            <!-- DONNEES APPRENTISSAGE-->
            <legend><span class="number">1</span> Apprentissage</legend>
            
            
            <label for="job">Je suis intéressé par le métier de*: </label>
            <select name ="job" id="jb" required>
                <option value="menu" selected disabled>Choisir un métier...</option>
                <option value="laboBio">Laborantin-e CFC; option biologie</option>
                <option value="laboCh">Laborantin-e CFC; option chimie</option>
                <option value="laboPhy">Laborantin-e en physique CFC</option>
                <option value="polyM">Polymécanicien-ne CFC</option>
                <option value="info">Informaticien-ne CFC</option>
                <option value="logi">Logisticien-ne CFC</option>
                <option value="planElec">Planificateur-trice éléctricien-ne CFC</option>
                <option value="empCom">Employé-e de commerce CFC</option>
                <option value="gardAn">Gardien-ne d'animaux CFC</option>
            </select>
           </fieldset>
           <div id="all">
           <fieldset>
           <div id="infoOnly">
            <label for="filInfo">Filières informatiques:*</label>
            <input type="radio" name="filInfo" value="devIT" />Dévellopement d'application <p>
            <input type="radio" name="filInfo" value="entrIT" />Informatique d'entreprise <p>
            <input type="radio" name="filInfo" value="techIT" />Technique des systèmes <p>
            <input type="radio" name="filInfo" value="dontKnow" />Je ne sais pas <p>
            </div>

            <label for="mpt">Je désire m'inscire en maturité professionelle intégrée*:</label><p>
            <input type="radio" name="mpt" value="MPT-oui" />Oui
            <input type="radio" name="mpt" value="MPT-non" />Non
            <p>
          </fieldset>
          <fieldset>
            
            <legend><span class="number">2</span> Données </legend>
            <fieldset>
            <legend><span class="number">2.1</span> Données personnelles</legend>    
                
               <!-- DONNEES APPRENTIS-->
               <label for="photo">Photo passeport*:</label>
                <input type="file" name="photo" id="photo"/><p>
            <select name="genreApp" >
                <option disabled selected > Choisissez un genre*</option>
                <option value="Homme" >Homme</option>
                <option value="Femme" >Femme</option>
            </select>
            
            <input type="text" name="nameApp" placeholder="Nom *" autocomplete="off" required/>
            <input type="text" name="surnameApp" placeholder="Prénom *" autocomplete="off" required/>
            <input type="text" name="adrApp" placeholder="Adresse *" autocomplete="off" />
            <input type="text" name="NPAApp" placeholder="NPA\Domicile *" autocomplete="off" />
            <input type="tel" name="telApp" placeholder="Téléphone *" autocomplete="off" />
            <input type="tel" name="phoneApp" placeholder="Mobile *" autocomplete="off" />
            <input type="email" name="mailApp" placeholder = "Mail *"autocomplete="off" /> 
            <input type="date" name="birthApp" max="today" />
            <input type="text" name="originApp" placeholder="Lieu d'origine *" autocomplete="off" />
            <input type="text" name="nationApp" placeholder="Nationalité *" autocomplete="off" />
            <input type="text" name="langApp" placeholder="Langue Maternelle *" autocomplete="off" />
            
            <label for="languesApp">Connaissance linguistiques*:</label>
            <input type="checkbox" name="languesApp" value="Français" > Français<p>
            <input type="checkbox" name="languesApp" value="Allemand" >Allemand<p> <!-- check this-->
            <input type="checkbox" name="languesApp" value="Anglais" >Anglais<p>
            <input type="checkbox" name="languesApp" value="Autres" >Autres<p>
        </fieldset>
        <fieldset>
            <legend><span class="number">2.2</span> Réprésentants légaux</legend>    
             (Si vous avez moins de 18 ans.)<p>
                <!-- DONNEES REPRESENTANT 1-->
              Réprésentant 1:<p>
            <select name="genreRep1" >
                <option disabled selected> Choisissez un genre</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
 
            <input type="text" name="nameRep1" placeholder="Nom" autocomplete="off"/>
            <input type="text" name="surnameRep1" placeholder="Prénom" autocomplete="off"/>
             <input type="text" name="adrRep1" placeholder="Adresse" autocomplete="off"/>
            <input type="text" name="NPARep1" placeholder = "NPA\Domicile"autocomplete="off"/>
            <input type="text" name="telRep1" placeholder="Téléphone" autocomplete="off"/>
            
             Réprésentant 2:<p>
                <!-- DONNEES REPRESENTANT 2-->
            <select name="genreRep2" >
                <option disabled selected> Choisissez un genre</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
            
            <input type="text" name="nameRep2" placeholder="Nom" autocomplete="off"/>
            <input type="text" name="surnameRep2" placeholder="Prénom" autocomplete="off"/>
             <input type="text" name="adrRep2" placeholder="Adresse" autocomplete="off"/>
            <input type="text" name="NPARep2" placeholder = "NPA\Domicile"autocomplete="off"/>
            <input type="text" name="telRep2" placeholder="Téléphone" autocomplete="off"/>   
        </fieldset>
         <!-- ACIVITES-->
        <legend><span class="number">3</span> Activités</legend>
        <fieldset>
            <legend><span class="number">3.1</span> Scolarité</legend>
                <table id="scolaire">
                    <tr>
                        <td><input type="text" name="ecole1" placeholder="Ecole" autocomplete="off"/></td>
                        <td><input type="text" name="lieu1" placeholder="Lieu" autocomplete="off"/></td>
                        <td><input type="text" name="niveau1" placeholder="Niveau" autocomplete="off"/></td>
                        <td><input type="text" name="annees1" placeholder="de-à(années)" autocomplete="off"/></td>  
                    </tr>
                    <tr>
                        <td><input type="text" name="ecole2" placeholder="Ecole" autocomplete="off"/></td>
                        <td><input type="text" name="lieu2" placeholder="Lieu" autocomplete="off"/></td>
                        <td><input type="text" name="niveau2" placeholder="Niveau" autocomplete="off"/></td>
                        <td><input type="text" name="annees2" placeholder="de-à(années)" autocomplete="off"/></td>
                    </tr>
                     <tr>
                        <td><input type="text" name="ecole3" placeholder="Ecole" autocomplete="off"/></td>
                        <td><input type="text" name="lieu3" placeholder="Lieu" autocomplete="off"/></td>
                        <td><input type="text" name="niveau3" placeholder="Niveau" autocomplete="off"/></td>
                        <td><input type="text" name="annees3" placeholder="de-à(années)" autocomplete="off"/></td>
                    </tr>
                </table>
                <input type="button" id="addSch" value="Ajouter une ligne"/ onclick="addLsch">
        </fieldset>
        <fieldset>
            <legend><span class="number">3.2</span> Activités professionelles</legend>
            <table id="activites">
                    <tr>
                        <td><input type="text" name="employeur1" placeholder="Employeur" autocomplete="off"/></td>
                        <td><input type="text" name="lieu4" placeholder="Lieu" autocomplete="off"/></td>
                        <td><input type="text" name="activite1" placeholder="Activité" autocomplete="off"/></td>
                        <td><input type="text" name="annees4" placeholder="de-à(années)" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="employeur2" placeholder="Employeur" autocomplete="off"/></td>
                        <td><input type="text" name="lieu5" placeholder="Lieu" autocomplete="off"/></td>
                        <td><input type="text" name="activite1" placeholder="Activité" autocomplete="off"/></td>
                        <td><input type="text" name="annees5" placeholder="de-à(années)" autocomplete="off"/></td>
                    </tr>
                </table>
                <input type="button" id="addPro" value="Ajouter une ligne" onclick="addLpro"/>
        </fieldset>
        <fieldset>
            <legend><span class="number">3.3</span> Stages</legend>
            test test test test test
        </fieldset>
        <!-- ANNEXES-->
        <fieldset>
        </fieldset>
        <legend><span class="number">4</span> Annexes à fournir</legend>
        <label for="CV">CV*:</label>
                <input type="file" name="fichier" id="fichier" required/><p>
        <label for="lettre">Lettre de motivation*:</label>
                <input type="file" name="lettre" id="lettre" required/><p>
                         
        </fieldset> 
        <fieldset>  
            <input type="checkbox" value="conditionsAcc" id="conditions"/>Accepter les <a href="conditions.php">conditions</a><p>
            <input type="submit" value="Terminer">
        </fieldset>
        </div>
        </form>
        </div>
    </body>
    
    <script>
   
    </script>
</html>