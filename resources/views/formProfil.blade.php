/* A compléter */
/* A compléter */

<div class="col-md-9 well well-md">
    <center><h1>Profil</h1></center>
    /* A compléter */   
    {{ csrf_field() }}
    <div class="form-horizontal">    
        <div class="form-group">
            <label class="col-md-3 control-label">Nom : </label>
            <div class="col-md-3 ">
                /* A compléter */                    
            </div>
            /* A compléter */
            <span class="invalid-feedback" role="alert">
                <strong>/* A compléter */</strong>
            </span>
            /* A compléter */            
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Prénom : </label>
            <div class="col-md-3 ">
				/* A compléter */  
            </div>
            /* A compléter */
            <span class="invalid-feedback" role="alert">
                <strong>/* A compléter */</strong>
            </span>
            /* A compléter */           
        </div> 
        <div class="form-group">
            <label class="col-md-3 control-label">Rue : </label>
            <div class="col-md-5 ">
                /* A compléter */   
                /* A compléter */
                <span class="invalid-feedback" role="alert">
                    <strong>/* A compléter */</strong>
                </span>
                /* A compléter */                
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Code postal : </label>
            <div class="col-md-2">
                /* A compléter */  
            </div>
            /* A compléter */
            <span class="invalid-feedback" role="alert">
                <strong>/* A compléter */</strong>
            </span>
            /* A compléter */
        </div>       
        <div class="form-group">
            <label class="col-md-3 control-label">Ville : </label>
            <div class="col-md-3 ">
                /* A compléter */
                /* A compléter */
                <span class="invalid-feedback" role="alert">
                    <strong>/* A compléter */</strong>
                </span>
                /* A compléter */
            </div>
        </div>   
        <div class="form-group">
            <label class="col-md-3 control-label">Rôle : </label>
            <div class="col-md-3 ">
                /* A compléter */
            </div>
        </div>          
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Valider</button>     
                &nbsp;
                <button type="button" class="btn btn-default btn-primary" 
                    onclick="javascript: window.location = '{{ url('/') }}';">
                    <span class="glyphicon glyphicon-remove"></span> Annuler
                </button>                
            </div>
        </div>
    </div>
    /* A compléter */   
</div>
/* A compléter */

