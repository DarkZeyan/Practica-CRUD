@extends('layouts.master')
@section('title','La Peste Negra')
@section('header')
    @parent

        <div id="header">
            <div class="alineacion centrar">
                <img src="img/rat.gif" alt="Rata" class="rata flip"
                     style="margin-left: auto; margin-right: 1.2rem;margin-top: 28rem;">
                <h1 class="titulo" style="margin-top: 28rem;">La Peste Negra</h1>
                <img src="img/rat.gif" alt="Rata" class="rata"
                     style="margin-right: auto; margin-left: 1.2rem;margin-top: 28rem;">
            </div>
        </div>
        <a name="parte1"></a>

@stop
@section('navbar')
    @parent
            <li class="nav-item"><a href="#parte1" class="nav-link">¿Qué es?</a></li>
            <li class="nav-item"><a href="#parte2" class="nav-link">Historia</a></li>
            <li class="nav-item"><a href="#parte3" class="nav-link">Antecedentes</a></li>
            <li class="nav-item"><a href="#parte4" class="nav-link">Sintomatologia</a></li>
            <li class="nav-item"><a href="#parte5" class="nav-link">Expansion de la Enfermedad</a></li>
            <li class="nav-item"><a href="#parte6" class="nav-link">Tratamiento</a></li>
            <li class="nav-item"><a href="#parte7" class="nav-link">Consecuencias</a></li>
@endsection
@section('sidebar')
    <thead>
    <th>Contenido</th>
    </thead>
    <tbody>
    <tr>
        <td>
            <a href="#parte1">¿Qué es?</a>

        </td>
    </tr>
    <tr>
        <td>
            <a href="#parte2">Historia</a>
        </td>
    </tr>
    <tr>
        <td> <a href="#parte3">Antecedentes</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="#parte4">Sintomatología</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="#parte5">Expansión de la enfermedad</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="#parte6">Tratamiento</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="#parte7">Consecuencias</a>
        </td>
    </tr>
    </tbody>
@stop
@section('content')
    <h2 class="subtitulo" style="text-align: center; margin-top: 1.5rem;">¿Qué es la Peste Negra?</h2>

    <div class=" texto" style="margin-left: 4rem; margin-right: 4rem;">
        <p>La <strong>peste negra o muerte negra</strong> se refiere a la pandemia de peste más devastadora
            en
            la historia de la
            humanidad que afectó a Eurasia en el siglo XIV y que alcanzó un punto máximo entre 1347 y 1353.
        </p>
        <p>Esta pandemia fue producida por la enfermedad conocida como <a
                href="https://es.wikipedia.org/wiki/Peste_bub%C3%B3nica">Peste bubónica</a>. La peste
            bubónica
            es una infección producida por la bacteria <a
                href="https://es.wikipedia.org/wiki/Yersinia_pestis">Yersinia pestis</a> en la que predomina
            la
            inflamación de
            ganglios infectados en órganos sexuales y ojos (bubones). Cuando predomina la afectación
            pulmonar la
            enfermedad recibe el nombre de peste neumónica.</p>
        <p>La peste bubónica es endémica de Mongolia. De allí por ejemplo la trajeron los musulmanes a
            Europa
            provocando la pandemia y es relativamente frecuente que en tal país surjan brotes aislados por
            ingestión prohibida de carne de marmota.</p>
        <p>​La teoría aceptada sobre el origen de la peste explica que fue un brote causado por una variante
            de
            la bacteria Yersinia pestis.
            Es común que la palabra «<a href="https://es.wikipedia.org/wiki/Peste">peste</a>» se utilice
            como
            sinónimo de «muerte negra», aún cuando aquella
            deriva del latín «pestis», es decir, «<a
                href="https://es.wikipedia.org/wiki/Enfermedad">enfermedad</a>» o «<a
                href="https://es.wikipedia.org/wiki/Epidemia">epidemia</a>», y no del agente patógeno.
        </p>
        <img src="img/peste.jpg" alt="Doctores de la plaga" style="width: 65rem; border: 0.2rem solid white;"
             class="centrar">
        <p class="centrar">
            <small style="margin-top: 0.2rem;">Los médicos durante la muerte negra usaban este atuendo
                basado en
                los cuervos para <br>
                prevenir el contagio. Los infectados literalmente se estaban pudriendo vivos por ello mismo,
                <br>
                el pico de la máscara
                contenía flores aromáticas.
            </small>
        </p>
    </div>
@stop
@section('content2')
    <div class="alineacion">
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-left: auto;  height: auto;">
        <h2 class="subtitulo">
            <a name="parte2"></a>
            Historia de la Peste Negra
        </h2>
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-right: auto; height: auto;">
    </div>

    <div class="texto centrarTexto formatoTexto">

        <p>Para poder conocer cómo se produjo la Peste Negra, primero hay que saber la historia normal de la
            peste bubónica. Como se dijo previamente, la peste bubónica es endémica de Mongolia. Fue debido
            a los
            musulmanes
            que esta
            llegó a Europa, iniciando conocida la pandemia.</p>
        <h3 class="centrar subtitulo2">Primer brote: La plaga de Justiniano</h3>
        <p>La primera epidemia de peste bubónica, fue la que afectó al Imperio Romano de Oriente también
            conocida
            como
            la "<b><i>Plaga de Justiniano</i></b>" nombrada así por el emperador Justiniano I, quien fue
            infectado,
            pero
            sobrevivió gracias a un tratamiento intensivo.</p>
        <p>El resultado de esta pandemia se saldó con la muerte de aproximadamente el 25% de la población
            (brote del
            siglo VI d.C.), unos 50 millones de personas (dos siglos de recurrencias). </p>
        <div>
            <img src="img/pestejustiniana.jpg" alt="Plaga de Justiniano" class="centrar"
                 style="width: 60rem;  border: 0.2rem solid white;">
            <p class="centrar"><small style="margin-top: 0.3rem;">La plaga de Justiniano es el primer brote
                    de peste
                    del que se tiene registro
                    en la historia.</small></p>
        </div>
        <p><a href="https://es.wikipedia.org/wiki/Procopio_de_Cesarea">Procopio</a>, historiador romano,
            escribió en
            el segundo volumen de la <cite>“Historia de las Guerras”</cite> su
            encuentro personal con la enfermedad y observó su efecto sobre el imperio en ascenso. En la
            primavera del año 542 d.C., la plaga llegó a Constantinopla, y se fue extendiendo de puerto a
            puerto
            llegando hasta el Mar Mediterráneo, y posteriormente migró hacia el este por Asia Menor y el
            oeste
            hacia Grecia e Italia. Ya que la enfermedad se propagó por la transferencia de mercancías
            (debido a
            la adquisición de bienes de lujo por parte de Justiniano y los suministros de exportación) la
            capital se
            convirtió en el principal foco de infección de la peste bubónica. Procopio, en su obra “Historia
            Secreta”,
            declaró que Justiniano era un demonio de un emperador que creaba la plaga o que estaba siendo
            castigado por sus pecados.
        </p>
        <h3 class="centrar subtitulo2">Segundo brote, la peste negra.</h3>
        <!--Carrusel-->
        <div style="margin-top: 2rem;">
            <div id="demo" class="carousel slide centrar" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/peste-negra1.jpg" alt="Peste Negra">
                    </div>
                    <div class="carousel-item">
                        <img src="img/peste-negra2.jpg" alt="Peste Negra">
                    </div>
                    <div class="carousel-item">
                        <img src="img/peste-negra3.jpg" alt="Peste Negra">
                    </div>
                    <div class="carousel-item">
                        <img src="img/peste-negra4.jpg" alt="Peste Negra">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <p style="margin-top: 2.5rem;">A finales de la Edad Media (1340-1400 d.C.). Europa experimentó el
            brote
            epidémico más mortífero
            de la historia con la peste negra, la infame pandemia de la peste bubónica, que azotó Europa en
            1347,
            matando a un tercio de la población humana.</p>
        <p>Algunos historiadores creen que la sociedad se volvió más violenta debido a que la tasa de
            mortalidad
            disminuyó la calidad de vida, incrementó la guerra, el crimen, la revuelta popular y las olas de
            flagelantes, así como la persecución.
        </p>
        <p>La peste negra <strong> se originó en Asia Central </strong> (Mongolia, donde es enfermedad
            endémica
            incluso en la
            actualidad) o sus alrededores, llegó a Asia menor a través de los comerciantes musulmanes y
            desde
            Venecia se extendió por Italia y luego a través de otros países europeos. Los historiadores Ibn
            AlWardni
            y Almaqrizi creían que la peste negra se había originado en Mongolia. Los registros chinos
            también tenían un seguimiento sobre un gran brote que ocurrió en Mongolia a principios de la
            década
            de 1330 d.C.
        </p>
        <img src="img/peste-negra5.jpg" alt="El triunfo de la muerte."
             style="width: 40rem; height: auto; float: right; border: 0.2rem solid white; margin-left: 3rem;">
        <p>
            Una investigación publicada en 2002 sugiere que <b>la enfermedad comenzó a principios de 1346
                d.C.
                en la región esteparia, donde era endémica</b> y se extendió desde la costa noroeste del Mar
            Caspio
            en
            el sur de Rusia. Los mongoles cortaron la ruta comercial de la Seda, entre China y Europa. Esto
            frenó
            la propagación de la peste negra, desde el este de Rusia hacia Europa occidental. La epidemia
            comenzó con un ataque por parte de los mongoles que fue lanzado en la última colonia de los
            comerciantes italianos en la región de Caffa, en Crimea.
        </p>
        <p>
            A finales de 1346 d.C., una plaga estalló entre los sitiadores y penetró en la ciudad. Cuando
            llegó la
            primavera, los mercaderes italianos huyeron en sus navíos, sin saber que acarreaban la peste
            negra
            en las pulgas de las ratas de sus navíos, introduciéndola en los puertos a que arribaban. La
            plaga
            inicialmente se extendió a las personas que vivían en las costas del Mar Negro y posteriormente
            hacia
            el resto de Europa. La emigración provocada por el pánico extendió aún más la infección.
        </p>
        <p>
            Había muchas creencias etno-médicas para evitar la muerte por peste negra. Una de las más
            famosas
            fue que al caminar con <b>flores</b> alrededor de su nariz la gente sería capaz de “<b>
                evitar el hedor y el mal
                que les afligió
            </b>”. La gente creía que la peste era un castigo de Dios, y que la única manera de librarse
            de la plaga era ser perdonado por Dios.
        </p>
        <p>Uno de los "métodos" para ser perdonados fue tallar el símbolo de la cruz en la puerta principal
            de una
            casa con las palabras <b>“Señor, ten piedad de nosotros.”</b>
        </p>
        <p><strong>Pistoia</strong>, una ciudad italiana, llegó a promulgar normas y reglamentos para la
            ciudad y
            sus habitantes
            para mantenerlos a salvo de la peste negra. Las reglas establecían que a <b><i> nadie se le
                    permitía
                    visitar
                    ninguna zona infectada por la peste y si algún ciudadano lo hacía, no podría regresar a
                    la
                    ciudad.</i></b>
            Algunas otras reglas eran que ninguna prenda de lino o de lana debía ser importada a la ciudad y
            que
            no se enterrarían cadáveres en ella. A pesar de que la aplicación de estas normas era estricta,
            la
            ciudad finalmente se infectó.
        </p>
        <img src="img/peste-negra6.jpg" alt="Peste Negra"
             style="width: 35rem; height: auto; border: 0.2rem solid white; margin-right: 3.5rem; margin-bottom: 4rem; float: left;">

        <p>Los individuos que no habían sido contagiados con la peste se reunieron en grupos y se
            mantuvieron
            alejados de los enfermos. Los que sí, comían y bebían recursos limitados y no se les permitía
            una
            comunicación oral, porque se tenía la creencia de que sólo con hablar aumentaba la posibilidad
            de
            transmitir la enfermedad.</p>
        <p>Los siglos siguientes fueron marcados por varios brotes localizados o regionales de menor
            gravedad.</p>
        <div style="clear: both;"></div>

    </div>
@stop
@section('content3')
    <div class="alineacion">
        <img src="img/plaguedoc.png" alt="Icono Doctor de la Plaga"
             style="width: 12rem; margin-left: auto;  height: auto;filter: drop-shadow(2px 2px 2px white);">
        <h2 class="subtitulo">
            <a name="parte3"></a>
            Antecedentes
        </h2>
        <img src="img/plaguedoc.png" alt="Icono Doctor de la Plaga" class="flip"
             style="width: 12rem; margin-right: auto; height: auto;filter: drop-shadow(2px 2px 2px white);">
    </div>
    <div class="texto centrarTexto formatoTexto">
        <p>Realmente <b>la Peste Negra no cuenta con antecedentes por su carácter multicontinental</b>. Griegos y
            romanos relataron infinidad de pestilencias, algunas de gran mortalidad y/o morbilidad, como la que
            debió asolar el norte de África hacia 125 a.C. Pero eran epidemias muy localizadas en una ciudad o
            región concreta. La Peste Negra fue un mal que atacó el norte de África, Asia, Oriente Medio y Europa,
            excepto Islandia y Finlandia, con una mortalidad no alcanzada después por las más graves epidemias
            como la viruela, diezmadora en América, o la Gripe española.
        </p>
        <img src="img/Peste-Negra7.jpg" alt="Peste Negra"
             style="border: 0.2rem solid white; width:45rem; float: right; margin-left: 3rem;">
        <p>La <strong>situación política</strong> encontrada por el agente infeccioso fue de relativa estabilidad
            comparada con
            lo vivido siglos antes en Europa y en buena parte de Asia. Por una parte, las grandes migraciones con
            sus saqueos y ataques se habían detenido, los vikingos, vándalos, húngaros o árabes se asentaron
            en distintos territorios de una forma más o menos definitiva</p>
        <p>En Asia, el imperio mongol se había dividido en dos reinos que se despreciaban, indicando la poca
            cohesión interna.
        </p>

        <p>Por su parte, toda la costa mediterránea de África ya no sufría los envites de cristianos en forma de
            cruzada o invasiones provenientes de la península arábiga, pues Bagdad había perdido el poder
            político tras los ataques de Gengis Kan. Con todo, el ambiente político en Europa y Asia distaba mucho
            de ser estable y en paz, entre otros motivos por los acontecimientos vividos en el desmembrado
            imperio mogol, que terminaría arrasando la capital Abasida, y la Guerra de los Cien Años, que se
            solaparía con la epidemia.</p>

        <p>La <strong>situación demográfica</strong> por su parte también aparentaba cierta prosperidad. Tras vivir
            varios años
            de un clima benigno y buenas cosechas, la población en el Viejo Continente aumentó hasta los 80
            millones de habitantes estimados.
        </p>
        <p>A esto también contribuyeron las nuevas técnicas y artes agrarias, Walter de Henley indicaba varias
            como el empleo de caballos en lugar de bueyes, la utilización del arado con reja de hierro y la división
            de la tierra en tres cultivos en lugar de dos, lo que se denomina cultivo de alternancia trienal, Sin
            embargo, esta situación tan benigna cambió hacia 1300 d.C.
        </p>
        <p><strong>La economía</strong> por su parte había recibido cierto empuje debido a las buenas producciones
            agrarias, a
            la reanudación constante de las caravanas comerciales por la Ruta de la Seda gracias al control
            territorial de los mogoles y, dato de gran importancia para la propagación de la enfermedad, la mejora
            de las técnicas de navegación y construcción de navíos, con las que poder transportar cargamentos
            de gran tamaño desde puertos como los existentes en mar Negro o el Mediterráneo, hasta las ciudades
            italianas, Barcelona o Marsella.</p>
        <img src="img/peste-negra8.jpg" alt="Peste Negra"
             style="border: 0.2rem solid white; width:45rem; float: left; margin-right: 2rem;">
        <p>En <strong>el aspecto social</strong> , la llamada <b>época del gótico</b> trajo el crecimiento de las
            ciudades respecto del
            campo, así como el progresivo desprecio a las personas que no vivían en ellas, como eran los
            buhoneros, los pastores trashumantes y los gitanos que aparecen por primera vez en la Historia de
            Occidente. Otro cambio importante en las consecuencias traídas por la peste fueron las costumbres
            de diferenciar a los grupos sociales por la indumentaria. Así la casada, la soltera y la barragana
            pasarían a vestir de forma diferente; también los cristianos de los judíos, para desgracia de estos
            últimos.</p>
        <p>Por lo que a <strong>la ciencia</strong> se refiere, realmente no existía como tal. La medicina poseía
            cierta
            independencia de la filosofía en cuanto a disciplina impartida en las universidades, pero era más
            empírica que científica y seguía influida en buena medida por los conocimientos aportados por Galeno
            de Pérgamo y otros autores griegos y latinos. El "desarrollo" se realizaba de una forma reflexiva,
            partiendo de los textos clásicos, y no científica, basada en la experimentación metodológica.</p>
        <p>
            Por último, la religión seguía unificando a Europa bajo la Iglesia Católica, si bien existía cierta
            desafección debido al traslado de la corte papal a la ciudad francesa de Aviñón y al consentimiento de
            Clemente VI a la hora de perder su autonomía en aras de la seguridad brindada por el rey Felipe VI
            de Francia, como lo habían hecho los tres pontífices anteriores en el Papado de Aviñón. Por otra parte,
            muchos clérigos, obispos e incluso los propios papas eran dados a los placeres mundanos, poseer y
            pasearse con concubinas o aceptar la simonía.

        <p>También hay que considerar que la presencia de las ratas fue un gran punto a favor en la pandemia,
            pues <strong>las pulgas de las ratas</strong> eran las <b>principales transmisoras</b> de la peste,
            así mismo, la presencia
            de
            las ratas se vio potenciada gracias a que la Iglesia católica en aquel tiempo decretó que los gatos
            (cazador natural por excelencia de las ratas) eran seres malignos y utilizados para traer el mal a
            la
            tierra, lo que fomentó que la caza humana a los gatos fuera gravemente alta, trayendo consigo, un
            mayor número de ratas.</p>

        <img src="img/ratas.jpg" alt="Ratas"
             style="width: 35rem; height: auto; border: 0.2rem solid white; margin-bottom: 3rem;" class="centrar">
    </div>
@stop
@section('content4')
    <div class="alineacion">
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-left: auto;  height: auto;">
        <h2 class="subtitulo">
            <a name="parte4"></a>
            Sintomatología
        </h2>
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-right: auto; height: auto;">
    </div>
    <div class="texto centrarTexto formatoTexto">
        <p>Varios
            cronistas de la época indican la brusquedad con la que aparecían los síntomas. Una persona
            <strong>podía estar sana por la mañana y tener fiebre alta por la tarde para morir al llegar la
                noche</strong>. Según la
            literatura médica y de otra índole, los afectados padecían todos o varios de los siguientes síntomas
            según <cite>Giovanni Boccaccio y otros autores</cite>:
        </p>
        <ul>
            <li>Fiebre alta incluso superando los 40 grados.</li>
            <li>Tos y esputos sanguinolentes.</li>
            <li>Sangrado por la nariz y otros orificios.</li>
            <li>Sed aguda.</li>
            <li>Manchas en la piel de color azul o negro debido a pequeñas hemorragias cutáneas.</li>
            <li>Aparición de bubones negros en íngles, cuello, axila, brazos, piernas o tras las orejas, debido
                a la inflamación de los ganglios pertenecientes al sistema linfático.</li>
            <li>Gangrena en la punta de las extremidades.</li>
            <li>Rotura de los bubones supurando líquido con un olor pestilente</li>
        </ul>


        <!-- carrusel sintomas. -->
        <div style="margin-top: 2rem;">
            <div id="demo2" class="carousel slide centrar" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo2" data-slide-to="0" class="active"></li>
                    <li data-target="#demo2" data-slide-to="1"></li>
                    <li data-target="#demo2" data-slide-to="2"></li>

                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/sintomaspeste.jpg" alt="Sintomas Peste Negra">
                    </div>
                    <div class="carousel-item">
                        <img src="img/sintomaspeste2.jpg" alt="Sintomas Peste Negra">
                    </div>
                    <div class="carousel-item">
                        <img src="img/sintomaspeste3.jpg" alt="Sintomas Peste Negra">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo2" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <p style="margin-top: 3rem;">Aún con todo, Giovanni Boccaccio y otros autores describen un tipo de peste
            casi asintomático que
            <strong> provocaba la muerte a las 14 horas</strong> aproximadamente. El calificativo
            <strong>“negra”</strong> se debe a las manchas,
            bubones y al aspecto producido por la gangrena en los dedos de manos y pies. La connotación de mal
            olor que posee la palabra peste la dieron <b>los hedores emanados al romperse los bubones</b>, ganglios
            linfáticos inflamados. Según varios testimonios, el surgimiento de dichos bubones y de las manchas
            negras terminaba con la muerte del paciente en la inmensa mayoría de los casos. Desde notar los
            primeros síntomas hasta producirse la defunción pasaban <b>cinco días</b> habitualmente.
        </p>
        <p>Por medio del ensayo y el error, las autoridades de distintas ciudades llegaron a la conclusión de que
            la enfermedad tardaba no más de 39 días en aparecer y los que lograban sobrevivir no volvían a
            contagiarse nuevamente. Esto se infiere de los cuarenta días que pasaban viajeros y navegantes
            confinados a la llegada de algunas ciudades italianas.
        </p>
        <p><i>Científicos del siglo XXI</i> indican que la enfermedad podría tener un <a
                href="https://es.wikipedia.org/wiki/Per%C3%ADodo_de_incubaci%C3%B3n">periodo de incubación</a> no
            contagioso de <strong>unos diez o doce días.</strong> A este seguiría un periodo de latencia
            asintomático, pero
            contagioso de unos veinte o veintidós días. Posteriormente aparecerían los síntomas y la enfermedad
            mataba en cuatro o cinco días más. De ser así, este periodo de incubación y latencia tan largo sería
            una de las causas que permitió su rápida propagación.</p>
    </div>
@stop
@section('content5')
    <div class="alineacion" style="padding-top: 2rem;">
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-left: auto;  height: auto;">
        <h2 class="subtitulo">
            <a name="parte5"></a>
            Expansión de la enfermedad
        </h2>
        <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
             style="width: 12rem; margin-right: auto; height: auto;">
    </div>
    <div>
        <img src="img/expansion.png" alt="Expansión de la Peste"
             style="width: 75%; height: 80rem; border: 0.3rem solid white; margin-top: 5rem;" class="centrar">
    </div>
    <div class="centrarTexto texto formatoTexto">

        <p>La pandemia calificada a veces como el "<strong>peor desastre biológico de la historia de la
                Humanidad</strong>” posee
            un origen desconocido. En India y China no hay datos de una epidemia especialmente relevante hacia
            el siglo XIV, en este último país la referencia más antigua data del siglo VII, pero como descripción
            sintomática, no epidémica y en la gran Enciclopedia de China no se menciona hasta la década de
            1640, pese a que Lien-Tê Wu atribuye un origen chino a la enfermedad hacia 1346. Por lo tanto, solo
            existen hipótesis sobre si apareció en el desierto de Gobi o en su llamada "patria ancestral", es decir,
            los actuales Yemen, Kenya y Uganda. Los árabes dan referencias de primera mano y en especial Abu
            Halfs Umar Ibn al-Wardi quien indica que la epidemia surgió en la Tierra Oscura, pero sin precisar. El
            también musulmán Muhammad al-Maqrizi es más detallado al indicar su aparición en Kanato a lo largo
            del año 742 de la Hégira (1341-1342 d.C.).</p>
        <p>Es <cite>Gabriele de Mussis</cite> quien da un lugar exacto para constatar la propagación de la plaga
            cuando
            nombra <b>la ciudad de Caffa</b> como el primer foco y cuenta la historia según los ejércitos mongoles
            que
            asediaron el enclave genovés lanzando cadáveres infectados con catapultas dentro de la ciudad para
            propagar la enfermedad y acelerar su caída. Sí se tiene constancia de que la enfermedad salió en
            barco de dicha colonia genovesa en la península de Crimea, en octubre de 1347 y llegó a Mesina a
            finales de dicho año.
        </p>
        <p>Algunos barcos no llevaban a <b>nadie vivo</b> cuando alcanzaban las costas. En 1347 sucedió una guerra
            entre el Reino húngaro y el napolitano, puesto que el rey <strong>Luis I de Hungría</strong> reclamaba
            el trono luego
            del asesinato de su hermano Andrés, quien murió asesinado por su propia esposa, la reina Juana I de
            Nápoles. De esta manera, Luis condujo una campaña militar que coincidió con el estallido de la Peste
            Negra. Ante tanta muerte por la enfermedad, la campaña pronto tuvo que ser suspendida y los
            húngaros regresaron a casa, llevándose consigo varios de ellos la enfermedad, cobrando vidas, como
            la de la propia esposa del rey húngaro. Así, la peste se extendió desde Italia por Europa afectando
            territorios de las actuales Francia, España, Inglaterra (en junio de 1348) y Bretaña, Alemania, Hungría,
            Escandinavia y finalmente el noroeste de Rusia. Se considera que fue la causa de la muerte del
            entonces rey de Castilla Alfonso XI durante el sitio a Gibraltar en 1350. </p>

@stop
@section('content6')
            <div class="alineacion" style="padding-top: 2rem;">
                <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
                     style="width: 12rem; margin-left: auto;  height: auto;">
                <h2 class="subtitulo">
                    <a name="parte6"></a>
                    Tratamiento
                </h2>
                <img src="img/biohazardico.png" alt="Icono Residuos Biologicos"
                     style="width: 12rem; margin-right: auto; height: auto;">
            </div>
            <div class="centrarTexto texto formatoTexto">
                <p>Durante la pandemia, <strong>la medicina moderna estaba prácticamente en pañales.</strong> Al no haber
                    descubierto un
                    antibiótico en aquella época técnicamente la gente no podía hacer nada. Lo más probable es que si
                    había contraído la enfermedad, la gente estaba considerada muerta.</p>
                <p>Los doctores de la peste utilizaban la sangría y otros remedios tales como poner sapos o sanguijuelas
                    sobre los bubos para "rebalancear los humores" como rutinas tradicionales. Los médicos de la peste
                    no podían interactuar con el público en general debido a la naturaleza de su trabajo y la posibilidad de
                    contagiar la enfermedad a otros; también podían ser sujetos de cuarentena.
                </p>
                <p>Unos se entregaron más a Dios al pensar que este les castigaba por un mal comportamiento de la
                    humanidad y muchos otros huían, sin embargo, solían llevar consigo en sus ropas o equipaje la pulga
                    portadora de la enfermedad, por lo que contribuían a su propagación.
                </p>
                <p>La medicina <b>no consiguió hacer nada</b> y no encontraba una explicación a este hecho, y muchos médicos
                    fueron infectados al atender a sus pacientes. Se tomó como una medida aislar a los pacientes
                    infectados durante <b>un periodo de cuarenta días</b> (de donde proviene el término de cuarentena) y
                    hasta
                    entonces, cuando consideraban que ya no era peligroso, no entraban en contacto con él. Lo mismo
                    hicieron con aquellos barcos donde había algún tripulante enfermo, les dejaban cuarenta días en alta
                    mar y si había algún superviviente le dejaban volver.</p>

                <img src="img/medico.jpg" alt="Medico de la peste" class="centrar"
                     style="width: 50rem; border: 0.2rem solid white; margin-bottom: 10rem;">
            </div>
@stop
@section('content7')
            <div class="alineacion" style="padding-top: 2rem;">
                <img src="img/plaguedoc.png" alt="Icono Doctor de la Plaga"
                     style="width: 12rem; margin-left: auto;  height: auto;filter: drop-shadow(2px 2px 2px white);">
                <h2 class="subtitulo">
                    <a name="parte7"></a>
                    Consecuencias
                </h2>
                <img src="img/plaguedoc.png" alt="Icono Doctor de la Plaga" class="flip"
                     style="width: 12rem; margin-right: auto; height: auto;filter: drop-shadow(2px 2px 2px white);">
            </div>
            <div class="texto centrarTexto formatoTexto">
                <p>La información sobre la mortalidad varía ampliamente entre las fuentes, pero se estima que entre el
                    <strong> 30 % y el 60 % de la población de Europa</strong> murió desde el comienzo del brote a la mitad
                    del siglo XIV</p>
                <p><b>Aproximadamente 25 millones de muertes</b> tuvieron lugar <strong>en Europa</strong> junto a otros
                    <strong>40 a 60 millones
                        en África y Asia.</strong> Algunas localidades fueron totalmente despobladas y los pocos
                    supervivientes
                    huyeron y extendieron la enfermedad aún más lejos</p>
                <p>La gran pérdida de población trajo cambios económicos basados en el incremento de la movilidad
                    social según la despoblación erosionaba las obligaciones de los campesinos (ya debilitadas) a
                    permanecer en sus tierras tradicionales. La peste provocó una contracción del área cultivada en
                    Europa, lo que hizo descender profundamente la producción agraria. Esta caída llegó a ser de un 40
                    % en la zona norte de Italia, en el periodo comprendido entre 1340 y 1370.
                </p>
                <p>La repentina escasez de mano de obra barata proporcionó un gran incentivo para la innovación que
                    ayudó a traer el fin de la Edad Media. Algunos argumentan que dio pie al Renacimiento, a pesar de
                    que el Renacimiento ocurriera en algunas zonas (tales como Italia) antes que en otras. A causa de la
                    despoblación, sin embargo, los europeos supervivientes llegaron a ser los mayores consumidores de
                    carne para una civilización anterior a la agricultura industrial.</p>
                <p><strong>La peste negra acabó con un tercio de la población de Europa y se repitió en sucesivas oleadas
                        hasta
                        1490, llegando finalmente a matar a unos 25 millones de personas. </strong>Ninguno de los brotes
                    posteriores
                    alcanzó la gravedad de la epidemia de 1348.</p>
            </div>
            <div>
                <h3 class="subtitulo2 centrar">Numero de muertos por la pandemia</h3>

                <div style="margin-top: 4rem; width: 50%; font-size: 200%;" class="centrar">
                    <table class="table table-dark table-hover" style=" border: 0.2rem solid white;">
                        <thead>
                        <tr>
                            <th>Posición</th>
                            <th>Continente</th>
                            <th>Número de muertos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#1</td>
                            <td>Asia</td>
                            <td>20-30 millones de personas</td>
                        </tr>
                        <tr>
                            <td>#2</td>
                            <td>África</td>
                            <td>20-30 millones de personas.</td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td>Europa</td>
                            <td>25 millones de personas.</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total aproximado de muertos</td>
                            <td>65-85 millones de personas.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
@stop
@section('navfooter')
            <a href="#parte1">¿Qué es?</a>
            <a href="#parte2">Historia</a>
            <a href="#parte3">Antecedentes</a>
            <a href="#parte4">Sintomatología</a>
            <a href="#parte5">Expansión</a>
            <a href="#parte6">Tratamiento</a>
            <a href="#parte7">Consecuencias</a>
@stop
@section('creditosfooter')
            <h4>Página hecha por:
                <br>
                Jorge Eduardo Escobar Bugarini 5°E
            </h4>
@stop
