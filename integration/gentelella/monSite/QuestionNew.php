<?php include('header.html'); ?>
<div class="row">
    <h1>Creer une question</h1>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">La question</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea name="description" class="form-control" rows="3" placeholder="Formulez la question"></textarea>
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
                    <br/>

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
                <h2>Les réponses</h2>
                &nbsp;
                <a class="btn btn-default" href="#">Ajouter une réponse</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left">

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="">
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> Ouverte
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="">
                                <label>
                                    <input type="checkbox" class="js-switch" checked /> Multiple
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback responseCollection">

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-1">Reponse 1</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <textarea name="description" class="form-control" rows="3" placeholder="Intitulé de la réponse"></textarea>
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="">
                                    <label>
                                        <input type="checkbox" class="js-switch" /> Vrai
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
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
