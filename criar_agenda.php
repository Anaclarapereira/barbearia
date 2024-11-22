<?php   
 include "connection.php";
 echo "<pre>";
 print_r($_POST);

 $inicio = strtotime($_POST['horario']);
 $final = strtotime($_POST['horario  ']);
 $mins = ($inicio - $final) / 60;

 if($mins < 0)
  $mins = $mins*(-1);
//echo $mins;

$qnt_de_agendamento = $mins/30;

//echo "<br> qnt: $qnt-agendamento";
$acumulado = $inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";   
for($i = 0; $i < $qnt_de_agendamento; $i++){

     echo "/n Criado agendamento no harario para: " . date('H:i', $acumulado) . "  do usuario";

}
 


 $barbeiro = $_POST['barbeiro'];
 $dia_da_semana = $_POST['dia'];
 $horario_de_inicio = $_POST['horario_inicio'];
 $horario_de_saida_intervalo = $_POST['horario_saida_intervalo'];






 $horario_de_volta_intervalo = $_POST['horario_volta_intervalo'];
 $horario_fim = $_POST['horario_fim'];

echo "<br>barbeiro $barbeiro";
echo "<br>dia_da_semana $dia";
echo "<br>horario_de_inicio $horario_inicio";
echo "<br>horario_de_saida_intervalo $horario_saida_intervalo";
echo "<br>horario_de_volta_intervalo $horario_volta_intervalo";
echo "<br>horario_fim $horario_fim";


 ?>