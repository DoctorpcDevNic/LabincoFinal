@extends('templates.unidadestemplate')
@section('titulo')
Laboratorio Inmaculada - Preguntas frecuentes
@stop

@section('contenido')

<h3 class="titul container" style="font-size:32px; text-align:center">Preguntas Frecuentes</h3>

<div class="faqs container">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          ¿Cuántas horas tengo que tener de ayuno para realizarme exámenes de sangre?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
       Para exámenes como la glucosa (azúcar) ayuno de 12 a 14 horas al igual que para el perfil de lípidos.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          ¿Debo ir en ayunas al Laboratorio Clínico siempre que deba  realizarme algún tipo de análisis?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        De preferencia sí, especialmente para la glicemia y el perfil de lípidos. Sin embargo, hay estudios en los que no es necesario el ayuno, por lo que si tiene alguna duda al respecto, antes de visitar nuestro Laboratorio, contáctenos y le indicaremos cuales son las recomendaciones que usted debe tomar en consideración antes de cualquier prueba.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          ¿Si me tomo una taza de café sin azúcar o consumo chicle u otros alimentos sin azúcar, sigo en ayunas?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        El paciente no sigue en ayuno si se consume este tipo de bebidas alimentos ó chicle. El ayuno es estricto.  Sólo el agua no rompe este estado y si se consume debe ser en cantidad moderada.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro">
          ¿Qué es el perfil de lípidos?
        </a>
      </h4>
    </div>
    <div id="collapseCuatro" class="panel-collapse collapse">
      <div class="panel-body">
        Es el examen que evidencia el estado de los lípidos en el organismo y está compuesto por el colesterol total, el HDL-colesterol (colesterol bueno), LDL-colesterol (colesterol malo) y los triglicéridos.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeis">
          ¿Todas las pruebas de laboratorio requieren de cita o puedo acudir a cualquier día y hora?
        </a>
      </h4>
    </div>
    <div id="collapseSeis" class="panel-collapse collapse">
      <div class="panel-body">
        No se requiere de cita
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSiete">
          ¿Deseo saber si soy diabético que examen debo realizarme?
        </a>
      </h4>
    </div>
    <div id="collapseSiete" class="panel-collapse collapse">
      <div class="panel-body">
        La glicemia es el examen que le permite saber los niveles de azúcar en la sangre.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOcho">
          ¿Deseo saber si tengo anemia, que examen debo hacerme?
        </a>
      </h4>
    </div>
    <div id="collapseOcho" class="panel-collapse collapse">
      <div class="panel-body">
        El hemograma nos permite conocer los niveles de glóbulos rojos, hemoglobina y hematocrito en la sangre, para descartar la presencia de anemia.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNueve">
          ¿Quiero hacerme exámenes de chequeo, que me recomienda?
        </a>
      </h4>
    </div>
    <div id="collapseNueve" class="panel-collapse collapse">
      <div class="panel-body">
        Para un chequeo general se recomienda la glicemia, perfil de lípidos, ácido úrico, hemograma, examen general de orina y examen de heces.  Para varones mayores de 40 años se sugiere el Antígeno Prostático Específico (PSA total).
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDiez">
          ¿Con qué frecuencia debo realizarme un chequeo de laboratorio?
        </a>
      </h4>
    </div>
    <div id="collapseDiez" class="panel-collapse collapse">
      <div class="panel-body">
        Es apropiado hacerse exámenes de laboratorio al menos una vez al año, o en el plazo que según su condición de salud, sea determinado por su médico.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOnce">
          ¿Qué exámenes de chequeo se recomiendan para niños?
        </a>
      </h4>
    </div>
    <div id="collapseOnce" class="panel-collapse collapse">
      <div class="panel-body">
        Un hemograma, glicemia, examen general de orina y examen de heces son los análisis más apropiados para los niños, si no media una situación especial de salud, en donde el médico del niño sea el que refiere el análisis a realizar.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDoce">
          ¿Para descartar la presencia de parásitos que se indica?
        </a>
      </h4>
    </div>
    <div id="collapseDoce" class="panel-collapse collapse">
      <div class="panel-body">
        Un examen general de heces es lo que se debe efectuar.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTrece">
          ¿Tengo ardor y dolor al orinar, puedo descartar infección urinaria con algún examen?
        </a>
      </h4>
    </div>
    <div id="collapseTrece" class="panel-collapse collapse">
      <div class="panel-body">
        Sí, con el examen general de orina, seguido de un urocultivo.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCatorce">
          ¿Tomo medicamentos, debo tomarlos antes o después del examen de sangre?
        </a>
      </h4>
    </div>
    <div id="collapseCatorce" class="panel-collapse collapse">
      <div class="panel-body">
        A menos que el médico indique lo contrario, no deje de tomar sus medicamentos e informe por favor al Laboratorio de cuáles medicamentos usted utiliza.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseQuince">
          ¿Cuánto debo esperar para hacerme una prueba de embarazo con certeza?
        </a>
      </h4>
    </div>
    <div id="collapseQuince" class="panel-collapse collapse">
      <div class="panel-body">
        Debe tener al menos tres días de retraso o esperar al menos que pasen de 10 a 12 días después de la relación en la que se sospecha se dio el embarazo, para que la prueba alcance su máximo nivel de confianza.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDiezSeis">
          ¿Por qué cuando me piden los exámenes de heces seriados, debo entregar uno diario y no los tres juntos?
        </a>
      </h4>
    </div>
    <div id="collapseDiezSeis" class="panel-collapse collapse">
      <div class="panel-body">
        La finalidad de solicitar tres muestras es para tener una mayor probabilidad de encontrar la existencia de parásitos intestinales, esto debe  hacerse en días diferentes para ampliar el muestreo, si guardas la muestra por tres días, puede ser que los huevecillos, quistes o parásitos se deterioren dificultando su identificación.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDiezSiete">
          ¿El material que se utiliza para tomar las muestras es seguro?
        </a>
      </h4>
    </div>
    <div id="collapseDiezSiete" class="panel-collapse collapse">
      <div class="panel-body">
        Sí, todo el material que se utiliza en el laboratorio como agujas, tubos, jeringas, etc.,  siempre son nuevas y estériles,  se desechan después de ser usados.
      </div>
    </div>
  </div>
 </div>
 </div>
  

@stop