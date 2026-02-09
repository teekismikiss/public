<header>
<h1>Viajes Plimplim</h1>
<p>Generador de tarjetas de embarque/boardingpass</p>
</header>


<main>
<!-- boardingcard.php? ori=Palma & dest=Oviedo & s=m pax=Sergio & date=2026-06-24-->
<form action ="boarding.php" method="get"> <!-- cd son datos sensible en vez de get post-->
<label>Origen: <input type="text" name="ori"> </label>
<label>Destino: <input type="text" name="dest"> </label>
<label>Nombre: <input type="text" name="pax"> </label>
<label>Sexo: <select name="s"> 
    <option value ="m">male</option>
    <option value ="f">female</option>
    <option value ="u">undefined</option>
</label>
<label>Fecha: <input type="date" name="date"> </label>
<input type="submit" value=""Genera boarding>














</main>