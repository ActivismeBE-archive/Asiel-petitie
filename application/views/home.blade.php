@layout('layouts/frontend')

@section('content')
    <div style="margin-bottom: -22px;" class="row">
        <div class="col-sm-12">
            <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                <div class="panel-body">
                    {{-- --}}
                        <div class="col-sm-12">
                            <span class="pull-right">
                                <strong>{{ $count }}</strong> Email's verzonden
                            </span>
                        </div>
                    {{-- --}}

                    <div class="col-md-9">

                        <h3>Meneer de Staatssecretaris, Excellentie.</h3>

                        <p>
                            Bij het aanvaarden van Uw ambt hebt U een eed gezworen.
                            Daarin zweert U de Grondwet te respecteren.
                            Door die eed ontving U de parlementaire onschendbaarheid waarvan U geniet, en hebt U het recht verworven om Uw ambt uit te oefenen.
                            Die uitoefening van Uw ambt is echter voorwaardelijk. Ze is bepaald door de eed die U hebt afgelegd.
                        </p>

                        <p>
                            Uw recente uitspraken over de rechterlijke macht in dit land:
                        </p>

                        <blockquote>
                            Hoe rechters de trias politica schenden door Uw beleid te vernietigen en U te dwingen de wet te volgen
                            is op zichzelf zowat de grofste schending van de trias politica die men zich kan inbeelden.
                        </blockquote>

                        <p>
                            Het is vanzelfsprekend daardoor een overtreding van Uw eed, wat de scheiding der machten is één van de pijlers van onze democratische Grondwet.
                        </p>

                        <p>
                            Als onafhankelijke burgers van dit land aanvaarden wij dat niet. En wij verordenen U,
                            uit hoofde van Uw ambtseed, de wet na te leven, zoals deze U door een onafhankelijke rechtbank is opgelegd.
                        </p>

                        <p>
                            Het zou U ook sieren indien U zich voor deze volstrekt antidemocratische uithaal naar de onafhankelijkheid van de rechterlijke macht publiek zou verontschuldigen.
                            Dat laatste laten we aan Uw eigen goede manieren over.
                        </p>

                        <p>
                            Hoogachtend, <strong>[uw naam]</strong> wonend te <strong>[Uw stad]</strong>
                        </p>

                        <hr>

                        {{-- Signature field --}}
                        <form id="signature" method="post" class="form-horizontal" action="{{ base_url('signature/insert') }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    Uw naam: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" v-model="signature.name" class="form-control" name="name" placeholder="Naam">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    Uw Email: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="email" v-model="signature.email" class="form-control" name="email" placeholder="Uw email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    Wonend te: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" v-model="signature.city" class="form-control" name="city" placeholder="Wonende te">
                                </div>
                            </div>

                            {{-- Button's --}}
                            <div class="form-group" v-if="! submitted">
                                <div class="col-md-offset-2 col-sm-9">
                                    <button type="submit" v-attr="disabled: errors" class="btn btn-sm btn-success">Tekenen</button>
                                    <button type="reset" class="btn btn-sm btn-danger">Formulier legen</button>
                                </div>
                            </div>
                        </form>
                        {{-- /Siçgnature field --}}

                    </div>

                    {{-- Social integration --}}
                        <div class="col-sm-3">
                            <div class="pull-right" style="margin-top:20px;">

                                <div id="fb-root"></div>
                                <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8&appId=1658071114490262";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>

                                <div class="fb-share-button" data-href="http://www.asiel.activisme.be" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.asiel.activisme.be%2F&amp;src=sdkpreparse">
                                        Delen
                                    </a>
                                </div>

                                <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                            </div>
                        </div>
                    {{-- Social integration --}}
                </div>
            </div>
        </div>
    </div>
@endsection