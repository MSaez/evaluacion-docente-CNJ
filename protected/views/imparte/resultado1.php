<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->pageTitle=Yii::app()->name . ' - Informe de No Observados';
$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	'Informe de No Observados: '.$profesor->pro_rut,
);
?>

<h3>Resumen de cantidad de No Observados</h3>
</br>
<h5>Datos del profesor:</h5>
<table class="table">
	<tr>
		<td>
			<span>Profesor</span>
		</td>
		<td>
			<?php echo $profesor->pro_nombres." ".$profesor->pro_paterno." ".$profesor->pro_materno;?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Rut</span>
		</td>
		<td>
			<?php echo $profesor->pro_rut; ?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Curso</span>
		</td>
		<td>
			<?php echo $curso->cur_nombre; ?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Asignatura</span>
		</td>
		<td>
			<?php echo $asignatura->asi_nombre; ?>
		</td>
	</tr>
</table>
</br>
<div class="alert alert-warning in fade">
		<h3>Leyenda</h3>
		<table class="table">
			<tr>
				<td>
					Evaluación Calificada
				</td>
				<td>
					<?php echo TbHtml::icon(TbHtml::ICON_OK_SIGN);?>
				</td>
			</tr>
			<tr>
				<td>
					No Observado (N/O)
				</td>
				<td>
					<?php echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);?>
				</td>
			</tr>
		</table>
				
</div>

<h3>Tabla resumen:</h3>
<table class="table table-striped">
	<tr>
		<h5>Ámbito I: Dominio y cobertura Curricular.</h5>
	</tr>
	<tr>
		<td>
			<strong>No. item</strong>
		</td>
		<td>
			<strong><center>Descripción</center></strong>
		</td>
		<td>
			<strong>Obs. 1</strong>
		</td>
		<td>
			<strong>Obs. 2</strong>
		</td>
		<td>
			<strong>Obs. 3</strong>
		</td>
		<td>
			<strong>Obs. 4</strong>
		</td>
		<td>
			<strong>Obs. 5</strong>
		</td>
		<td>
			<strong>Total</strong>
		</td>
	</tr>
	<tr>
		<td>
			<strong>01</strong>
		</td>
		<td>
			Existe correlación entre la planificación semestral, y la clase que se observa.
		</td>
		<td>
			<?php if($ev1 != null){
							if($ev1->a1i1 == 0)
								echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
							else
								echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
							if($ev2->a1i1 == 0)
								echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
							else
								echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
							if($ev3->a1i1 == 0)
								echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
							else
								echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
							if($ev4->a1i1 == 0)
								echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
							else
								echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
							if($ev5->a1i1 == 0)
								echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
							else
								echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i1 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i1 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i1 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i1 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i1 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>02</strong>
		</td>
		<td>
			Comunica claramente lo que espera que los estudiantes aprendan o consoliden en cada clase y establece las relaciones entre las actividades realizadas y los objetivos a alcanzar.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i2 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i2 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i2 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i2 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i2 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>03</strong>
		</td>
		<td>
			Las actividades de enseñanza son coherentes con el contenido, adecuadas al tiempo disponible y al nivel del cual se trate.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i3 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i3 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i3 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i3 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i3 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>04</strong>
		</td>
		<td>
			Introduce nuevos conceptos con claridad y rigurosidad conceptual.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i4 == 0)
						echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
				  else
						echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i4 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i4 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i4 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i4 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i4 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>05</strong>
		</td>
		<td>
			Aplica variadas estrategias de enseñanza, por ejemplo, que los estudiantes comparen, clasifiquen, generen analogías y metáforas, resuman, elaboren preguntas, expliquen, modelen conceptos, entre otras.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i5 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i5 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i5 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i5 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i5 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>06</strong>
		</td>
		<td>
			Motiva y promueve que los estudiantes practiquen y apliquen las habilidades y conceptos recién adquiridos en forma graduada, variada y distribuida en el tiempo. 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i6 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i6 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i6 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i6 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i6 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>07</strong>
		</td>
		<td>
			Monitorea, retroalimenta, reconoce y refuerza el trabajo de los estudiantes constantemente. y mantienen una actitud de altas expectativas sobre sus posibilidades de aprendizaje y desarrollo.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a1i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a1i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a1i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a1i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a1i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a1i7 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a1i7 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a1i7 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a1i7 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a1i7 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	</table>
	</br>
	<table class="table table-striped">
	<tr>
		<h5>Ámbito II: Ambiente de la Sala de Clases.</h5>
	</tr>
	<tr>
		<td>
			<strong>No. item</strong>
		</td>
		<td>
			<strong><center>Descripción</center></strong>
		</td>
		<td>
			<strong>Obs. 1</strong>
		</td>
		<td>
			<strong>Obs. 2</strong>
		</td>
		<td>
			<strong>Obs. 3</strong>
		</td>
		<td>
			<strong>Obs. 4</strong>
		</td>
		<td>
			<strong>Obs. 5</strong>
		</td>
		<td>
			<strong>Total</strong>
		</td>
	</tr>
	<tr>
		<td>
			<strong>01</strong>
		</td>
		<td>
			Genera un clima de confianza y respeto (los estudiantes se atreven a hacer preguntas, frena burlas, acepta comentarios y/o críticas). 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i1 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i1 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i1 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i1 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i1 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>02</strong>
		</td>
		<td>
			Establece reglas claras, que son conocidas y respetadas por todos los estudiantes, al comenzar la clase, para que ésta se desarrolle en un ambiente propicio para el aprendizaje.  
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i2 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i2 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i2 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i2 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i2 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>03</strong>
		</td>
		<td>
			Maneja estrategias de normalización adecuadas al nivel de los estudiantes, guiando su comportamiento.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i3 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i3 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i3 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i3 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i3 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>04</strong>
		</td>
		<td>
			En caso de interrupción de la clase, consigue volver a captar su atención y retomar el trabajo sin grandes demoras. 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i4 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i4 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i4 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i4 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i4 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>05</strong>
		</td>
		<td>
			Respeta la opinión de sus estudiantes, reforzando la participación en clases y el compromiso de ellos en su aprendizaje.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i5 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i5 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i5 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i5 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i5 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>06</strong>
		</td>
		<td>
			Incentiva la participación de todos los alumnos/as en clases.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i6 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i6 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i6 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i6 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i6 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>07</strong>
		</td>
		<td>
			Establece un clima de relaciones interpersonales respetuosas y empáticas, promoviendo un trabajo colaborativo entre los estudiantes. 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i7 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i7 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i7 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i7 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i7 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>08</strong>
		</td>
		<td>
			Organiza el espacio físico de la sala, según el tipo de actividad a realizar, para que éste apoye la metodología de trabajo que se utilizará.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i8 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i8 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i8 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i8 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i8 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>09</strong>
		</td>
		<td>
			Utiliza estrategias metodológicas tendientes a favorecer el aprendizaje de los estudiantes que presentan NEE, (material especial, tiempos adicionales, atención personalizada, mediación, etc.). 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i9 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i9 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i9 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i9 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i9 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>10</strong>
		</td>
		<td>
			Se preocupa por el orden y el aseo de la sala, solicitando a los alumnos que limpien, recojan papeles y ordenen los escritorios si es necesario.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i10 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i10 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i10 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i10 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i10 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>11</strong>
		</td>
		<td>
			Realiza actividades que favorecen el afianzamiento de valores, especialmente el sentido de la solidaridad entre los estudiantes.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a2i11 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a2i11 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a2i11 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a2i11 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a2i11 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a2i11 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a2i11 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a2i11 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a2i11 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a2i11 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>

</table>
</br>
<table class="table table-striped">
	<tr>
		<h5>Ámbito III: Enseñanza para el Aprendizaje.</h5>
	</tr>
	<tr>
		<td>
			<strong>No. item</strong>
		</td>
		<td>
			<strong><center>Descripción</center></strong>
		</td>
		<td>
			<strong>Obs. 1</strong>
		</td>
		<td>
			<strong>Obs. 2</strong>
		</td>
		<td>
			<strong>Obs. 3</strong>
		</td>
		<td>
			<strong>Obs. 4</strong>
		</td>
		<td>
			<strong>Obs. 5</strong>
		</td>
		<td>
			<strong>Total</strong>
		</td>
	</tr>
	<tr>
		<td>
			<strong>01</strong>
		</td>
		<td>
			Explica claramente los objetivos y actividades a desarrollar en clases, de modo que sus alumnos comprendan cabalmente lo que se espera de ellos. 
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i1 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i1 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i1 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i1 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i1 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i1 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>02</strong>
		</td>
		<td>
			Establece vínculos entre los aprendizajes logrados en la clase anterior y los nuevos a lograr.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i2 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i2 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i2 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i2 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i2 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i2 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>03</strong>
		</td>
		<td>
			Responde las preguntas que le plantean sus alumnos, de modo de aclarar las dudas acerca de los contenidos tratados en clases.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i3 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i3 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i3 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i3 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i3 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i3 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>04</strong>
		</td>
		<td>
			Establece vínculos entre los contenidos de su sector con la realidad.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i4 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i4 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i4 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i4 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i4 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i4 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>05</strong>
		</td>
		<td>
			Utiliza estrategias de retroalimentación que permitan a los alumnos/as darse cuenta de sus logros y/o errores.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i5 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i5 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i5 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i5 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i5 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i5 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>06</strong>
		</td>
		<td>
			Utiliza metodologías activas y participativas, de modo que los alumnos tengan la posibilidad de involucrarse en su propio aprendizaje.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i6 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i6 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i6 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i6 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i6 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i6 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>07</strong>
		</td>
		<td>
			Logra que todos los estudiantes participen de manera activa en clases (que estén atentos, pregunten, lean, discutan, ejecuten tareas, entre otros).
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i7 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i7 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i7 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i7 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i7 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i7 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>08</strong>
		</td>
		<td>
			Implementa variadas actividades de acuerdo al tipo y complejidad de los contenidos.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i8 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i8 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i8 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i8 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i8 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i8 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>09</strong>
		</td>
		<td>
			Maneja recursos didácticos y tecnológicos, en su quehacer pedagógico, de modo de mejorar los niveles de aprendizaje y motivación de los estudiantes.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i9 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i9 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i9 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i9 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i9 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i9 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>10</strong>
		</td>
		<td>
			Realiza un cierre de la clase, en el cual se resumen los principales aspectos abordados en ella.
		</td>
		<td>
			<?php if($ev1 != null){
						if($ev1->a3i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev2 != null){
						if($ev2->a3i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev3 != null){
						if($ev3->a3i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev4 != null){
						if($ev4->a3i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php if($ev5 != null){
						if($ev5->a3i10 == 0)
							echo TbHtml::icon(TbHtml::ICON_REMOVE_SIGN);
						else
							echo TbHtml::icon(TbHtml::ICON_OK_SIGN);
					}?>
		</td>
		<td>
			<?php 	$contador = 0;
					if ($ev1 != null){
						if($ev1->a3i10 == 0)
							$contador++;}
					if ($ev2 != null){
						if($ev2->a3i10 == 0)
							$contador++;}
					if ($ev3 != null){
						if($ev3->a3i10 == 0)
							$contador++;}
					if ($ev4 != null){
						if($ev4->a3i10 == 0)
							$contador++;}
					if ($ev5 != null){
						if($ev5->a3i10 == 0)
							$contador++;}
					echo $contador; ?>
		</td>
	</tr>
	

</table>
