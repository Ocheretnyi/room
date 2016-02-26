<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="fon.css" type="text/css" />
<style type="text/css">
	
	#wrap{
		display: none;
		opacity: 0.8;
		position: fixed;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		padding: 16px;
		background-color: rgba(1, 1, 1, 0.725);
		z-index: 100;
		overflow: auto;
	}
	
	#window{
		width: 220px;
		height: 370px;
		margin: 50px auto;
		display: none;
		background: #fff;
		z-index: 200;
		position: fixed;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		padding: 16px;
	}
	
	
</style>
</head>
<body>
<center>	

<ul class="dropdown">
 <li class="dropdown-top">
 <a class="dropdown-top" href="/">Жанри</a>
 <ul class="dropdown-inside">
 <li><a href="/">Бойовик</a></li>
 <li><a href="/">Фільми жахів</a></li>
 <li><a href="/">Фантастика</a></li>
 <li><a href="/">Комадія</a></li>
 <li><a href="/">Мелодрами</a></li>
 <li><a href="/">Документальні фільми</a></li>
 <li><a href="/">Мультфільми</a></li>
 </ul>
 </li>

 <li class="dropdown-top">
 <a class="dropdown-top" href="/">Зали</a>
 <ul class="dropdown-inside">
 <li><a href="/">Великий зал</a></li>
 <li><a href="/">Середній зал</a></li>
 <li><a href="/">Малий зал</a></li>
 <li><a href="/">3D</a></li>
 <li><a href="/">VIP</a></li>
 </ul>
 </li>

 <li class="dropdown-top">
 <a class="dropdown-top" href="/">Замовлення квитків</a>
 </ul>
 </li>
</ul></center>
<script type="text/javascript">

					//Функция показа
			function show(state){

					document.getElementById('window').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}
			
		</script>
					<!-- Задний прозрачный фон-->
		<div onclick="show('none')" id="wrap"></div>

					<!-- Само окно-->
			<div id="window">

                                        <!-- Форма реєстрації-->
				Логін: <br/>
                                   <input name="login" type="text"
                                    size="25" maxlength="30" value" "/>
                                       <br/>
                                Пароль:<br/>
                                   <input name="pg" type="password"
                                    size="25" maxlength="30" value" "/><br/>
                                Ім"я:<br/>
                                   <input name="name" type="text"
                                    size="25" maxlength="30" value" "/><br/>
                                Прізвище:<br/>
                                   <input name="surname" type="text"
                                    size="25" maxlength="30" value" "/><br/>
                                Країна:<br/>
                                   <input name="country" type="text"
                                    size="25" maxlength="30" value" "/><br/>
                                Місто:<br/>
                                   <input name="sity" type="text"
                                    size="25" maxlength="30" value" "/><br/>
                          <form name="form1">
                                Пол:</br>
                                <input type="radio" name="sex" value="man">Чоловіча</br>
                                <input type="radio" name="sex" value="woman">Жіноча</br>
                          </form>                  
                                Поштова скринька:<br/>
                                   <input name="mail" type="text"
                                    size="25" maxlength="30" value" "/><br/></br>
                                   <input type="submit" name="enter"                                   
                                value="Реєстрація"/>		
				  
			</div>
                         
                                         <!-- Вхід в систему  -->
                          <div style="text-indent:1200px">      
                               <font color="yellow">Логін:</font> <br/>
                          <div style="text-indent:1200px">
                                   <input name="login type="text"
                                    size="15" maxlength="20" value" "/><br/>
                          <div style="text-indent:1200px">
                                
                               <font color="yellow">Пароль:</font> <br/>
                          <div style="text-indent:1200px">
                                   <input name="pg" type="password"
                                    size="15" maxlength="20" value" "/>
                          <div style="text-indent:1200px">
                                   <input name="remember"
                                    type="checkbox" value="yes"/>
                          <div style="text-indent:1200px">
                                <font color=yellow>Запам"ятати:</font> </br>
                          <div style="text-indent:1200px"> 
                           <button class="myButton" right onclick="show('block1')">Вхід</button>
                          <div style="text-indent:1200px"> 	  
		          <button class="myButton" right onclick="show('block')">Реєстрація</button>
                          </div></div></div></div></div></div></div></div>

	
 
                 <!--Розрахунок квитків--->
      <form name="bonus">
               <font color="yellow">Введіть кількість білетів</font><br>
               <input type="text" name="num" size="20"><br>
               <input type = "button"value="Розрахувати" OnClick = "document.bonus.resultat.value=document.bonus.num.value*50">                 
               <input type="text" name="resultat" size="2"> <font color="yellow">грн.</font>

      </form>          				
	            				
</body>
</html>
