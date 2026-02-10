
<!--https://google.com/search?q=valor
https://www.bing.com/search?q=
https://search.yahoo.com/search?p
https://www.behance.net/search/projects/-->

$listadoBuscador=['https://google.com/','https://www.bing.com/','https://www.behance.net/','https://search.yahoo.com/'];
$listadoBuscador=$_GET['search']
<form action="https://google.com/search" method="get" target="_blank">

        <label for="buscador" > mi google</label>
        <input type="text" name="q" placeholder="¿Qué quies?" required>
        <button type="submit">Buscar en google</button>
    </form>
<!--$listadoBuscador=['nombre'=<'google' ;'url'0< 'htpps..../search?=']
      foreach($buscadores as $elemento){echo "<li> {$elemento['nombre']}}   