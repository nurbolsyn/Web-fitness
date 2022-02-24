<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Fitness-gym</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>



<body>
<div class="top">
  <div class="header">
    <div class="left">Fitness-gym</div>
  </div>
</div>

<div class="container">
  <div class="navigation"> <a href="index.php">Главная</a> <a href="Price.php">Цена</a> <a href="Coach.php">Тренер</a> <a href="Galeria.php">Галерея</a> <a href="Contacts.php">Контакты</a>
    <div class="clearer"><span></span></div>
  </div>
  <div class="main">
    <div class="content"><center>
		<h1>МЕСЯЦ 2000 руб</h1>
		<p>Безлимитный тренажерный зал
		</br>1 месяц
		</br>Свободное посещение</p>
		<h1>ТРИ МЕСЯЦА 5500 руб</h1>
		<p>Безлимитный тренажерный зал
		</br>3 месяца
		</br>Для новых клиентов</p>
		<h1>ГОДОВОЙ 20000 руб</h1>
		<p>Безлимитный тренажерный зал
		</br>12 месяцев
		</br>30 дней стоп-карта</p>
		<p>Если хочешь узнать подробности,пишите заявку и мы свяжемся.</p>
	  
		<div class="content"><center>
		<form action="zak.php" method="post">
		<table>
		<caption style="font-size:25pt;"> Отправить заявку </caption>
		<TBODY>
		<tr align="center">
			<td><label for=name>ФИО:</label></td>
			<td><input style="width:400px;" name=name></td>
		</tr>
		<tr align="center">
			<td><label for=name> Серия и номер паспорта: </label></td>
			<td><input style="width:400px;" name=pasport></td>
		</tr>
		<tr align="center">
			<td><label for=name>Телефон:</label></td>
			<td><input style="width:400px;" name=tel></td>
		</tr>
		<tr align="center">
			<td><label for=name>Электронная почта:</label></td>
			<td><input style="width:400px;" name=mail></td>
		</tr>
		<tr align="center">
			<td><label for=name>Абонемент</label></td>
			<td><input style="width:400px;" name=abon></td>
		</tr>
		</table>
		<input name="B1" value="Отправить" type="submit">
		</form>	
		</div>  
	  
    </div>
    <div class="clearer"><span></span></div>
  </div>
  
	  
	<footer>
		  <div class="footer">
			<div class="col-end">Новосибирск 2022</div>
		  </div>
	</footer>

</div>
</body>
</html>