/* A compléter */
/* A compléter */

<div class="col-md-12 well well-sm">
    <center><h1>/* A compléter */}</h1></center>
    /* A compléter */     
    <div class="form-horizontal">    
        <div class="form-group">
            <input type="hidden" name="id_manga" value="/* A compléter */"/>
            <input type="hidden" name="id_commentaire" value="/* A compléter */"/>
            <label class="col-md-3 control-label">Titre : </label>
            <div class="col-md-3">
                <input type="text" name="titre" 
                       value="/* A compléter */" class="form-control" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Genre : </label>
            <div class="col-md-3">
                <input type="text" name="genre" 
                       value="/* A compléter */" class="form-control"  readonly >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Scenariste : </label>
            <div class="col-md-3">
                <input type="text" name="genre" 
                       value="/* A compléter */ /* A compléter */" class="form-control"  readonly >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Dessinateur : </label>
            <div class="col-md-3">
                <input type="text" name="genre" 
                       value="/* A compléter */ /* A compléter */" class="form-control"  readonly >
            </div>
        </div>     
        <div class="form-group">
            <label class="col-md-3 control-label">Prix : </label>
            <div class="col-md-3">
                <input type="text" name="prix" value="/* A compléter */" class="form-control"   readonly >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Couverture : </label>
            <div class="col-md-3">               
                <img src='{{ URL::to('/') }}/images//* A compléter */' class='img-responsive imgReduite' 
                     alt='/* A compléter */' />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Commentaire : </label>
            <div class="col-md-5">
                <textarea id="lib_commentaire" row="2" name="lib_commentaire" class="form-control" required autofocus /* A compléter */>/* A compléter */</textarea>
            </div>
        </div>        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-default btn-primary" /* A compléter */>
                    <span class="glyphicon glyphicon-ok"></span> Valider
                </button>
                &nbsp;
                <button type="button" class="btn btn-default btn-primary" 
                        onclick="javascript: window.location = '/* A compléter */';">
                    <span class="glyphicon glyphicon-remove"></span> Annuler
                </button>
            </div>           
        </div>
        <div class="col-md-6 col-md-offset-3">
            @include('error')
        </div>        
    </div>
    /* A compléter */
</div>
/* A compléter */