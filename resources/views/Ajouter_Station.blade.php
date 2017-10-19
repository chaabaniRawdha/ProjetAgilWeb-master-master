

<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <style>
    *{font-size : 14pt ; }
    form {width : 600px ;  margin : 10px auto 10px auto ; }
    label, input, button {display : inline-block ; width : 44% ; height : 30px ; margin :10px 1% 10px 1%    }
    input:invalid {color : red; }
    input:valid {color : lime ; }
</style>
<script src ="jquery.js"></script>
</head>

<body>

<form  action="Ajout" method="post" id="mainForm" onsubmit ="return fenvoi()">
    <div class="form-group">
        <div class="form-row">



            <div class="col-md-6">
                <label for="exampleInputNom">Id Station</label>
                <input class="form-control" id="id" type="text" aria-describedby="nameHelp" required  pattern = '[A-z0-9]{6,8}'  maxlength ='8' placeholder="Nom Station">
            </div>

        </div>
    </div>

        <div class="form-row">
            <div class="col-md-6">
                <label for="exampleInputNom">Nom Station</label>
                <input class="form-control" id="nom" type="text" aria-describedby="nameHelp" required  pattern = '[A-z]{3,15}'  maxlength ='30' placeholder="Nom Station">
            </div>

        </div>
</div>



    <div class="form-row">
        <div class="col-md-6">
            <label for="exampleInputAdresse">Adresse</label>
            <input class="form-control" id="adresse" type="text" required  pattern = '[A-z0-9]'  maxlength ='30'  placeholder="Adresse">
        </div>
    </div>
</div>


        <div class="form-row">
            <div class="col-md-6">
                <label for="exampleInputNom">Nom Gérant</label>
                <input class="form-control" id="nomgerant" type="text" aria-describedby="nameHelp" required  pattern = '[A-z]'  maxlength ='30' placeholder="Nom Station">
            </div>
        </div>

</div>
        <br/>


    <br/>
    <button type ="submit">Ajouter</button>
    <button type ="submit">Vider</button>
   </form>


</div>
</div>

</div>
</div>







<script type="text/javascript">
function fenvoi()
{
var mail1 = $("#id").val();
var mail2 = $("#nom").val();
var passe1= $("#adresse").val();
var passe2= $("#nomgerant").val();

//if(mail1 != mail2) {alert("adresses mail différentes") ; return false ;}
//if(passe1 != passe2) {alert("mots de passe différents") ; return false ;}
}
</script>

</body>