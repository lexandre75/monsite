<?php include('header.html'); ?>
<div class="row">
    <h1>Creer un formulaire</h1>
    <!-- form input mask -->
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Informations Generales</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom du formulaire</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input class="form-control" name="name" placeholder="Nom du formulaire">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea name="description" class="form-control" rows="3" placeholder="Description du formulaire"></textarea>
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Categorie</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control select_multiple_category">
                                <option>Choose option</option>
                                <option>Les Erreurs PHP</option>
                                <option>Gestion des variables</option>
                                <option>Gestion de l'ouput</option>
                                <option>Transtipage</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sous categorie</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control select_multiple_subcategory">
                                <option>Choose option</option>
                                <option>Les Erreurs PHP</option>
                                <option>Gestion des variables</option>
                                <option>Gestion de l'ouput</option>
                                <option>Transtipage</option>
                            </select>
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /form input mask -->

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Options du formulaires</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nombre du question total</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input class="form-control" name="name" placeholder="Nombre de question par session">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Bonne reponse min</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input class="form-control" name="name" placeholder="Bonne reponse minimum pour passer le questionnaire avec succès">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Niveau</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" id="range" value="" name="range" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="">
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> Connaissance
                                </label>
                            </div>
                            <div class="">
                                <label>
                                    <input type="checkbox" class="js-switch" value="debug" checked /> Debbugage
                                </label>
                            </div>
                            <div class="">
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> Algorythme
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /form input mask -->

    <!-- form input knob -->
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Question quick view</h2>
                &nbsp;
                <a class="btn btn-default" href="#">Nouvelle question</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Question</th>
                        <th>Nombre de reponse</th>
                        <th>Multiple</th>
                        <th>Ouverte</th>
                        <th>Category / Subcategory</th>
                        <th>Type</th>
                        <th>Niveau</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Comment faire taire lalya cissé le gros bebe ? </td>
                        <td>3</td>
                        <td>Oui</td>
                        <td>Oui</td>
                        <td>Les erreurs / Gestion</td>
                        <td>Connaissance</td>
                        <td>5</td>
                        <td>
                            <!-- delete -->
                            <button data-toggle="confirmation" type="button" class="btn btn-xs btn-danger">
                                <span class="fa fa-trash"></span>&nbsp;
                            </button>
                            <!-- view -->
                            <button type="button" class="btn btn-xs">
                                <span class="fa fa-edit"></span>
                            </button>
                            <!-- edit -->
                            <button type="button" class="btn btn-xs">
                                <span class="fa fa-eye"></span>&nbsp;
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Peux t on faire taire lalya cisse ? </td>
                        <td>3</td>
                        <td>Non</td>
                        <td>Non</td>
                        <td>Les erreurs / Gestion</td>
                        <td>Algorythme</td>
                        <td>5</td>
                        <td>
                            <!-- delete -->
                            <button data-toggle="confirmation" type="button" class="btn btn-xs btn-danger">
                                <span class="fa fa-trash"></span>&nbsp;
                            </button>
                            <!-- view -->
                            <button type="button" class="btn btn-xs">
                                <span class="fa fa-edit"></span>
                            </button>
                            <!-- edit -->
                            <button type="button" class="btn btn-xs">
                                <span class="fa fa-eye"></span>&nbsp;
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /form input knob -->

</div>
<!-- /Datatables -->
<?php include('footer.html'); ?>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

<!-- bootstrap confirmation -->
<script type="text/javascript" src="../vendors/bootstrap/boostrap-confirmation.js"></script>

<script>
    $(document).ready(function() {
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 1,
            max: 5,
            from: 1,
            to: 2,
            type: 'double',
            step: 1,
            prefix: "",
            grid: true
        });
    });

    $('[data-toggle="confirmation"]').confirmation({});
</script>
<!-- /Ion.RangeSlider -->

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>
