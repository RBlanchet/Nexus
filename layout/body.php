<div style="position: absolute; bottom: 0">
    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#navbar">Navbar</button>
    <!-- Modal -->
    <div class="modal fade" id="navbar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paramètres de la navbar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="form.php">
                    <div class="modal-body">
                        <div class="md-form">
                            <input type="text" id="form1" class="form-control" name="navbarName">
                            <label for="form1" class="">Nom du site</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="form1" class="form-control" name="navbarLink[]">
                            <label for="form1" class="">Lien</label>
                        </div>
                        <div class="input_fields_wrap">
                        </div>
                        <button class="add_field_button btn btn-outline-primary waves-effect">Ajouter un autre champ</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ok !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#paragraph">Paragraphe</button>
    <!-- Modal -->
    <div class="modal fade" id="paragraph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paramètres du paragraphe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="form.php">
                    <div class="modal-body">
                        <div class="md-form">
                            <input type="text" id="form1" class="form-control" name="paragraph-content">
                            <label for="form1" class="">Contenu</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ok !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form method="POST" action="form.php" style="display: inline-block">
        <button type="submit" class="btn btn-primary btn-rounded" name="container">Container</button>
    </form>
    <form method="POST" action="form.php" style="display: inline-block">
        <button type="submit" class="btn btn-primary btn-rounded" name="container-fluid">Container Fluid</button>
    </form>
    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#input">Input</button>
    <!-- Modal -->
    <div class="modal fade" id="input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paramètres des input</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="form.php" id="inputForm">
                    <div class="modal-body">
                        <div class="md-form">
                            <input type="text" id="form1" class="form-control" name="inputName" required>
                            <label for="form1" class="">Name (Afin que le formulaire recupère les données)</label>
                        </div>
                        <select name="inputType" form="inputForm">
                            <option value="text">Texte</option>
                            <option value="submit">Boutton envoyer</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ok !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form method="POST" action="destroy.php" style="display: inline-block">
        <button type="submit" class="btn btn-danger btn-rounded" name="container">Detruire !</button>
    </form>
</div>


