<!DOCTYPE html>
<html lang="en">
<div class="container">
        <h3>Flights from Paris to Buenos Aires: </h3>
    <table class="table">
        <thead>
        <tr>
            <th>Choose</th>
            <th>Flight #</th>
            <th>Airline</th>
            <th>Departs: Paris</th>
            <th>Arrives: Buenos Aires</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form name="VA43" method="post" action="purchase.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>43</td>
                <td>Virgin America</td>
                <td>1:43 AM</td>
                <td>9:45 PM</td>
                <td>$472.56</td>
                <input type="hidden" value="43" name="flight">
                <input type="hidden" value="472.56" name="price">
                <input type="hidden" value="Virgin America" name="airline">
                <input type="hidden" name="fromPort" value="Paris"/>
                <input type="hidden" name="toPort" value="Buenos Aires"/>
            </form>
        </tr>
        <tr>
            <form name="UA234" method="post" action="purchase.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>234</td>
                <td>United Airlines</td>
                <td>7:43 AM</td>
                <td>10:45 PM</td>
                <td>$432.98</td>
                <input type="hidden" value="234" name="flight">
                <input type="hidden" value="432.98" name="price">
                <input type="hidden" value="United Airlines" name="airline">
                <input type="hidden" name="fromPort" value="Paris"/>
                <input type="hidden" name="toPort" value="Buenos Aires"/>
            </form>
        </tr>
        <tr>
            <form name="AL969" method="post" action="purchase.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>9696</td>
                <td>Aer Lingus</td>
                <td>5:27 AM</td>
                <td>8:22 PM</td>
                <td>$200.98</td>
                <input type="hidden" value="9696" name="flight">
                <input type="hidden" value="200.98" name="price">
                <input type="hidden" value="Aer Lingus" name="airline">
                <input type="hidden" name="fromPort" value="Paris"/>
                <input type="hidden" name="toPort" value="Buenos Aires"/>
            </form>

        </tr>
        <tr>
            <form name="VA12" method="post" action="purchase.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>12</td>
                <td>Virgin America</td>
                <td>11:23 AM</td>
                <td>1:45 PM</td>
                <td>$765.32</td>
                <input type="hidden" value="12" name="flight">
                <input type="hidden" value="765.32" name="price">
                <input type="hidden" value="Virgin America" name="airline">
                <input type="hidden" name="fromPort" value="Paris"/>
                <input type="hidden" name="toPort" value="Buenos Aires"/>
            </form>
        </tr>
        <tr>
            <form name="L4346" method="post" action="purchase.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>4346</td>
                <td>Lufthansa</td>
                <td>1:45 AM</td>
                <td>8:34 PM</td>
                <td>$233.98</td>
                <input type="hidden" value="4346" name="flight">
                <input type="hidden" value="233.98" name="price">
                <input type="hidden" value="Lufthansa" name="airline">
                <input type="hidden" name="fromPort" value="Paris"/>
                <input type="hidden" name="toPort" value="Buenos Aires"/>
            </form>
        </tr>
        </tbody>
    </table>
    <input type="hidden" name="fromPort" value="Paris"/>
    <input type="hidden" name="toPort" value="Buenos Aires"/>
    </div>
</div>
