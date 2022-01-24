/* A compléter */
/* A compléter */
<div class="container">
    <div class="blanc">
        <h1>Liste des commentaires</h1>
    </div>
    <div class="row col-md-9">
        <div class="row col-md-9">
            <div class="row" style='margin-bottom: 10px;'>
                <label class="col-md-2">Titre : </label>
                <div class="col-md-7">
                    <input type="text" name="titre" 
                           value="/* A compléter */" class="form-control" readonly>
                </div>
            </div>
            <div class="row" style='margin-bottom: 10px;'>
                <label class="col-md-2 control-label">Genre : </label>
                <div class="col-md-5">
                    <input type="text" name="genre" 
                           value="/* A compléter */" class="form-control"  readonly >
                </div>
            </div> 
            @auth
            <div class="row" style='margin-bottom: 10px;'>
                <div class="col-md-6">
                    <button type="button" class="btn btn-default btn-primary" 
                            onclick="javascript: window.location = '/* A compléter */';">
                        <span class="glyphicon glyphicon-plus"></span> Ajouter un commentaire
                    </button>
                </div>           
            </div> 
            @endauth
        </div>    
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 250px;">Libellé</th>
                    <th style="width: 150px;">Lecteur</th>
                    /* A compléter */
                    <th style="width: 50px;">Modifier</th>
                    <th style="width: 50px;">Supprimer</th>
                    /* A compléter */
                    @guest
                    <th style="width: 50px;">consulter</th>
                    @endguest
                </tr>
            </thead>
            /* A compléter */
            <tr>   
                <td> /* A compléter */</td>
                <td> /* A compléter */</td>
                /* A compléter */
                <td style="text-align:center;"><a href="/* A compléter */">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a>
                </td>
                <td style="text-align:center;">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" href="#"
                       onclick="javascript:if (confirm('Suppression confirmée ?'))
                           { window.location ='/* A compléter */'; }">
                    </a>
                </td>  
                /* A compléter */
                @guest
                <td style="text-align:center;"><a href="/* A compléter */">
                        <span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Consulter"></span></a>
                </td>                
                @endguest
            </tr>
            /* A compléter */
            <BR> <BR>
        </table>
    </div>        
    <div class="col-md-6 col-md-offset-3">
        @include('error')
    </div> 
</div>
/* A compléter */