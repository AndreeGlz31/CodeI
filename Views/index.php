<!DOCTYPE html>
<html lang="en">
 <div class="jumbotron">
        <div class="container">
    <h1>Welcome to the Simple Travel Agency</h1>
    <h3>The is a Sample site you can test with BlazeMeter!</h3>
    <h3>Check out our destination <a href="Vacaciones.php"> destination of the week! The Beach!</a></h3>
  </div>
</div>
    <h1></h1>
<div class="container">
    <h1> Choose your depature city:</h1>
<form action="reservar.php" method="post">
    <select name="depature" id="form-inline">
        <option value="Paris">Paris</option>
        <option value="Philadelphia">Philadelphia</option>
        <option value="Boston">Boston</option>
        <option value="portland">Portland</option>
        <option value="San Diego">San Diego</option>
        <option value="Mexico City">Mexico Citi</option>
        <option value="Sao Paolo">Sao Paolo</option>
    </select>
    <p>
    <h1>Choose your destination city:</h1>
    <select name="Dest" id="form-inline">
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Rome">Rome</option>
        <option value="London">London</option>
        <option value="Berlin">Berlin</option>
        <option value="New York">New York</option>
        <option value="Dublin">Dublin</option>
        <option value="Cairo">Cairo</option>
    </select>
	<p></p>
            <div class="container">
            <input type="submit" class="btn btn-primary" value="Find Flights"/>
        </div>
 </form>
</div>

