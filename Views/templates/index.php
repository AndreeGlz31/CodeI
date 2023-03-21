<!DOCTYPE html>
<html lang="en">
	<h1>Welcome to the Simple Travel Agency</h1>
    	<h3>The is a Sample site you can test with BlazeMeter!</h3>
    	<h3>Check out our destination <a href="templates/Vacaciones.php"> destination of the week! The Beach!</a></h3>
    	<h1></h1>
<div class="container">
    	<h1> Choose your depature city:</h1>
    	<select name="depature" id="IdDep">
	 <form action="reservar.php" method="post">
        	<option value="Paris">Paris</option>
        	<option value="Philadelphia">Philadelphia</option>
        	<option value="Boston">Boston</option>
        	<option value="portland">Portland</option>
        	<option value="San Diego">San Diego</option>
        	<option value="Mexico City">Mexico Citi</option>
        	<option value="Sao Paolo">Sao Paolo</option>
    	</select>
    	<h1>Choose your destination city:</h1>
    	<select name="Dest" id="IdDest">
        	<option value="Buenos Aires">Buenos Aires</option>
        	<option value="Rome">Rome</option>
        	<option value="London">London</option>
        	<option value="Berlin">Berlin</option>
        	<option value="New York">New York</option>
        	<option value="Dublin">Dublin</option>
        	<option value="Cairo">Cairo</option>
   	 </select>
        </form>
	<p></p>
           <input type="submit" class="btn btn-primary" value="Find Flights"/>
 </form>
</div>
