@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Indicaciones para recolección de muestra
@stop

@section('contenido')

<div class="faqs container">
<h3 class="titul" style="font-size:32px; text-align:center">Recomendaciones para la recolección de muestras</h3>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Heces Fecales
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
         <ul>
           <li>Las muestras se obtiene permitiendo que caiga dentro de un recipiente de boca ancha de plástico limpio, seco y con tapa bien ajustada. La muestra no debe de llegar a contaminarse con la orina al laboratorio.</li>
            <li>Al trasladar la muestras al recipiente de transporte, tenga cuidado de seleccionar las partes con mayores mucosidades o sanguinolentas y tener el cuidado de que sea una muestra representativa de diferentes sitios.</li>
            <li>Para estudios parasitológicos es recomendado obtener tres muestras en días alternos, ya que muchos parásitos no aparecen en números consistentes diariamente.</li>
            <li>Tiempo de transporte cuando la muestra es:
                  <ul>
                    <li>Liquida: 30 minutos</li>
                    <li>Suave: 1 hora</li>
                    <li>Sólida: hasta 12 horas</li>
                  </ul>
            </li>
            <li>El aceite mineral, los antibióticos y los antipalúdicos pueden todos, volver inadecuadas las muestras de heces para la identificación de parásitos por un periodo considerable.</li>
         </ul>
          <div class="descargar">
            <a href="document/Indica1Heces.pdf" target="new"><p style="bottom: -20px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoL">
          Helicobacter pylori en heces
        </a>
      </h4>
    </div>
    <div id="collapseTwoL" class="panel-collapse collapse">
      <div class="panel-body">
        <ul>
          <li>
            Las muestras deben ser recogidas en un recipiente limpio y ser llevadas al laboratorio antes de que pasen dos horas. Si esto no es posible, la materia fecal se debe refrigerar (2 - 4°C) y luego llevarla al laboratorio a la mayor brevedad.
          </li>
          <li>
            La muestra no puede ser acuosa o diarreica.
          </li>
        </ul>
          <div class="descargar">
            <a href="document/Indica2Heli.pdf" target="new"><p style="bottom: -20px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Esputo
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Se toman temprano en la mañana; inmediatamente después de levantarse, el paciente deber toser tan profundo como pueda directamente en un recipiente estéril, cuidando que la mezcla no se mezcle con la saliva
      </div>
        <div class="descargar">
            <a href="document/Indica3Esput.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
         Orina de 24Hrs
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
          <ul>
            <li>Vaciar la vejiga descartando la primera muestra de la mañana</li>
            <li>Recolectar toda la orina de las próximas 24 horas en un frasco plástico bien limpio, guardándola en refrigeración mediante el proceso de recolección.</li>
            <li>Al siguiente día vaciar la vejiga a la misma hora que el paso primero y adicionar la muestra a lo recolectado durante 24 horas</li>
            <li>Llevar el volumen total recolectado durante las 24 horas al laboratorio lo más pronto que sea posible.</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica4Orina24.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro">
          Líquido seminal (Espermograma)
        </a>
      </h4>
    </div>
    <div id="collapseCuatro" class="panel-collapse collapse">
      <div class="panel-body">
          <ul>
            <li>Tres a siete días de abstinencia sexual</li>
            <li>Eyacular mediante masturbación directa, no por coito interrumpido. Estar seguro que se colecta la muestra completa.</li>
            <li>La eyaculación debe colectarse en un recipiente limpio y seco.</li>
            <li>Trasladar la muestra al laboratorio inmediatamente ya que debe ser procesada en una hora después de recolectada. Conservarla y trasladarla a temperatura ambiente evitando derrames de la muestra.</li>
            <!--li>Se reciben muestras para espermogramas diariamente sólo por la mañana entre 8:00 y 10:00 a.m.</li-->
            <li> En caso de requerir cultivo de líquido, el frasco deberá estar estéril (solicitarlo en el laboratorio)</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica5Liqsem.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCinco">
          Examen de orina
        </a>
      </h4>
    </div>
    <div id="collapseCinco" class="panel-collapse collapse">
      <div class="panel-body">
          <ul>
            <li>Para la recolección: solicite el recipiente en nuestro laboratorio, en caso de no ser posible prepare el frasco plástico limpio y seco con tapa hermética, lavado con agua y jabón, no usar detergente. Para urocultivo la esterilización del frasco es indispensable (solicitarlo en el laboratorio). En el caso de los urocultivos el paciente debe tomar antibióticos siete días antes del examen.</li>
            <li>Lavar los genitales externos con abundante agua y jabón. No secarse.</li>
            <li>La muestra de orina se toma a medio chorro de pie en el baño directamente en el recipiente. Comience a orinar fuera del frasco y cuando se haya eliminado un poco de orina ponga el frasco y recolecte aproximadamente 50ml. teniendo en cuenta que el borde del mismo no toque los genitales. Termine de orinar fuera del recipiente.</li>
            <li>Cerrar el frasco Herméticamente y transportarlo al laboratorio evitando que se derrame el contenido.</li>
            <li>Si la muestra no va a ser llevada inmediatamente al laboratorio, debe mantenerse refrigerada, no congelar. No excederse de dos horas.</li>
            <li>En niños: lavar los genitales externos procurando que no quede ningún residuo de crema o talco, poner la bolsita recolectora estéril al niño y esperar. Si transcurren dos horas y el bebé no ha orinado, tiene que cambiarse la bolsita por una nueva. Una vez recolectada la muestra, cerrar el orificio de la bolsa doblándola y trasladar al laboratorio. Si no puede ser enviado al laboratorio de inmediato, refrigerar no congelar guardando la bolsa con la muestra en un recipiente para evitar derrames, procurando que no pasen más de dos horas.</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica6Orina.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeis">
          Coprocultivo
        </a>
      </h4>
    </div>
    <div id="collapseSeis" class="panel-collapse collapse">
      <div class="panel-body">
          <ul>
            <li>Recolectar la muestra en un frasco limpio de boca ancha en cantidad aproximada de 1 gramo.</li>
            <li>Cerrar de forma hermética</li>
            <li>Para los cultivos las muestras fecales se deben transportar rápidamente al laboratorio (en menos de una hora), ya que muchas bacterias enteropatógenas no toleran los cambios químicos y de PH que ocurren en las heces cuando estas dejan el cuerpo.</li>
            <li>Se recomienda no haber tomado antibióticos por lo menos siete días antes del examen.</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica7Coproc.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <h3 class="titul" style="font-size:32px;text-align:center">Preparación del paciente previo a la toma de muestras</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSiete">
          Antígeno prostático específico (PSA)
        </a>
      </h4>
    </div>
    <div id="collapseSiete" class="panel-collapse collapse">
      <div class="panel-body">
          <ul>
            <li>Algunos procedimientos médicos tales como masaje, la exploración rectal o la manipulación prostática puede causar aumento en los niveles de antígeno protático especifico circulante</li>
            <li>La relación sexual también interfiere en el resultado por lo que debe esperarse siete días para tomar la muestra de sangre para el análisis.</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica8Antig.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOcho">
          Exudado Otico
        </a>
      </h4>
    </div>
    <div id="collapseOcho" class="panel-collapse collapse">
      <div class="panel-body">
        No debe haber recibido ningún tratamiento local o sistémico con antibióticos por lo menos, siete días antes de la toma de muestra.
      </div>
        <div class="descargar">
            <a href="document/Indica9Exud.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNueve">
          Hemocultivo
        </a>
      </h4>
    </div>
    <div id="collapseNueve" class="panel-collapse collapse">
      <div class="panel-body">
          Presentarse en periodo febril, preferiblemente antes del tratamiento.
      </div>
        <div class="descargar">
            <a href="document/Indica10Hemoc.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDiez">
          Preparación del paciente previo a la extracción de muestras sanguíneas
        </a>
      </h4>
    </div>
    <div id="collapseDiez" class="panel-collapse collapse">
      <div class="panel-body">
          Existen factores que influyen en el estado del paciente y pueden afectar los resultados de sus exámenes, los cuales son resueltos teniendo el conocimiento de los mismos y el apoyo de su laboratorio:
          <ul>
            <li>
              La ansiedad y tensión mental (Stress) son estímulos en la concentración de algunas sustancias sanguíneas. Preséntese en el laboratorio con suficiente tiempo para relajarse y reposar antes de la toma de muestra
            </li>
            <li>El ejercicio o trabajo muscular vigoroso previo a la toma de muestras alteran los niveles de muchos elementos sanguíneos. El ejercicio más suave incluyendo flexión excesiva del antebrazo antes de una punción venosa provoca cambios en iones plasmáticos y enzimas.
              <ul>
                <li>Si se realizan estos ejercicios previos a la toma de muestras, reposar de 10 a 30 minutos antes de la extracción.</li>
              </ul>
            </li>
            <li>En algunas pruebas se requiere ayuna de 12 horas (el agua no rompe el ayuno). Consultar en el laboratorio cuando es necesario este requisito.</li>
            <li>Teniendo en cuenta que la ingestión de etanol induce cambios en la composición de los líquidos corporales y que fumar puede producir resultados equívocos de algunos componentes trate de no ingerir bebidas alcohólicas, ni fumar, 12 horas antes de la toma de muestra.</li>
            <li>Durante la extracción de la sangre evite cambios bruscos de postura.</li>
            <li>Al tener en cuenta estas observaciones es posible, eliminar fuentes de error que en alguna medida interfieren en el resultado de su examen.</li>
          </ul>
            <div class="descargar">
            <a href="document/Indica11Preparac.pdf" target="new"><p style="bottom: -8px;">Descargar en pdf <i class="glyphicon glyphicon-file"></i></p></a>
          </div>
      </div>
    </div>
  </div>
  </div> 
  </div>
@stop