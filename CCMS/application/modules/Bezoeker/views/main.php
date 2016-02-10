<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Smoelenboek - Home</title>
        <link href="<?= base_url('vendor/components/bootstrap/css/bootstrap.css') ?>" rel="stylesheet"/>
        <link href="<?= base_url('vendor/onokumus/metismenu/src/metisMenu.css') ?>" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width"/>
    </head>
    <body>
        <section class="container">
            <header class="row navbar-inverse" id="heading" data-role="header">
                <div class="col-lg-3">
                    <img src="<?= base_url('assets/images/logo.png') ?>" class="img-responsive" />
                </div>
                <div class="col-lg-9">
                    <h3 class="text-muted"><p>Wij zijn een school voor ICT bestaande uit twee afdelingen.</p><br />
                        <p>De afdeling <strong>ICT beheer</strong> en de afdeling <strong>Applicatieontwikkeling</strong>. Onze school heeft ongeveer 30 collega's verdeeld over bijde afdelingen</p></h3>
                </div>
            </header>
            <main class="row">
                <div class="col-lg-3" data-role="navigation">
                    <ul class="metismenu nav nav-stacked">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active"><a href="<?= base_url('inloggen') ?>">Inloggen</a></li>
                    </ul>
                </div>

                <content class="col-lg-9">
                    <form class="container-fluid" action="<?= base_url('inloggen') ?>" method="POST">
                        <div class="row">
                            <h4>Inloggen</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <h5>Gebruikersnaam</h5>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <h5>Wachtwoord</h5>
                            </div>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-default pull-right" type="submit">Login</button>
                            <button class="btn btn-default" type="reset">Reset</button>
                        </div>
                    </form>
                </content>
            </main>
            <footer class="row footer " id="footer" data-role="footer">
                <div class="col-lg-12 text-right navbar-default">
                    <h5>&copy;afdeling applicatieontwikkelaar Tinwerf 10, 2544 ED Den Haag. Telefoon:088 666 3600</h5>
                </div>
            </footer>
        </section>
        <script src="<?= base_url('vendor/components/jquery/jquery.js') ?>"></script>
        <script src="<?= base_url('vendor/components/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('vendor/onokumus/metismenu/src/metisMenu.js') ?>"></script>
        <script>
            jQuery('.metismenu').metisMenu();
        </script>
    </body>
</html>
