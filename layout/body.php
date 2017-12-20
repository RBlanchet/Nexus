<div style="position: absolute; bottom: 0;width: 100vw">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <button type="button" class="btn btn-outline-default btn-rounded" data-toggle="modal" data-target="#navbar">Navbar</button>
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
                                    <button type="submit" class="btn btn-outline-default">Ok !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-default btn-rounded" data-toggle="modal" data-target="#paragraph">Paragraphe</button>
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
                                    <button type="submit" class="btn btn-outline-default">Ok !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <form method="POST" action="form.php" style="display: inline-block">
                    <button type="submit" class="btn btn-outline-default btn-rounded" name="container">Container</button>
                </form>
                <form method="POST" action="form.php" style="display: inline-block">
                    <button type="submit" class="btn btn-outline-default btn-rounded" name="container-fluid">Container Fluid</button>
                </form>
                <button type="button" class="btn btn-outline-default btn-rounded" data-toggle="modal" data-target="#input">Input</button>
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
                                    <button type="submit" class="btn btn-outline-default">Ok !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <form method="POST" action="destroy.php" style="display: inline-block">
                    <button type="submit" class="btn btn-danger btn-rounded" name="container">Detruire</button>
                </form>
                <button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#save">Sauvegarder</button>
                <!-- Modal -->
                <div class="modal fade" id="save" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Paramètres du fichier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="form.php" id="inputForm">
                                <div class="modal-body">
                                    <div class="md-form">
                                        <input type="text" id="form1" class="form-control" name="pageName" required>
                                        <label for="form1" class="">Nom de votre page</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-outline-default">Ok !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#list">Liste des pages</button>
                <!-- Modal -->
                <div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Voici toutes les pages crées</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <?php foreach ($page as $key => $value): ?>
                                        <li style="width: 50%; margin: 10px">
                                            <a href="save/<?= $value; ?>"><?= $value; ?></a>
                                            <form method="POST" action="deletePage.php" style="display: inline-block; float: right; margin-right: 25px">
                                                <input type="hidden" value="<?= $value; ?>" name="pageName">
                                                <button type="submit">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                    <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <form method="POST" action="login/deconnect.php">
                    <button type="submit" class="btn btn-outline-danger waves-effect" style="float: right;">Se deconnecter</button>
                </form>
            </div>
        </div>
    </div>

</div>



