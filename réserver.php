<!DOCTYPE html>
<html>
    <head>
        <title>Réservation</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body class = "boka">
        <?php require_once "menu.html";?>

        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-contenair">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                <h3>Réservation</h3>
                <form>
                    <div class = "form-row">
                        
                    <select name="jahr select">
                            <option value = "jahr select">Jahr Select</option>
                            <option value = "jahr select">2023</option>
                            <option value = "jahr select">2024</option>
                            <option value = "jahr select">2025</option>
                            <option value = "jahr select">2026</option>
                            <option value = "jahr select">2027</option>
                            <option value = "jahr select">2028</option>
                            <option value = "jahr select">2029</option>
                            <option value = "jahr select">2030</option>
                        </select>
                        
                        <select name="Monat select">
                            <option value = "jahr select">Monat Select</option>
                            <option value = "jahr select">Januar</option>
                            <option value = "jahr select">Februar</option>
                            <option value = "jahr select">März</option>
                            <option value = "jahr select">April</option>
                            <option value = "jahr select">May</option>
                            <option value = "jahr select">Juni</option>
                            <option value = "jahr select">Juli</option>
                            <option value = "jahr select">August</option>
                            <option value = "jahr select">September</option>
                            <option value = "jahr select">Oktober</option>
                            <option value = "jahr select">November</option>
                            <option value = "jahr select">Dezember</option>
                        </select> 

                        <input type="number" placeholder = " Select Day" min = "1" max = "31">
                        

                        <select name="hours select">
                        <option value = "hours select">Hours Select</option>
                        <option value = "hours select">11 Uhr 30</option>
                        <option value = "hours select">11 Uhr 45</option>
                        <option value = "hours select">12 Uhr 00</option>
                        <option value = "hours select">12 Uhr 15</option>
                        <option value = "hours select">12 Uhr 30</option>
                        <option value = "hours select">12 Uhr 45</option>
                        <option value = "hours select">13 Uhr 00</option>
                        <option value = "hours select">13 Uhr 15</option>
                        <option value = "hours select">13 Uhr 30</option>
                        <option value = "hours select">13 Uhr 45</option>
                        <option value = "hours select">14 Uhr 00</option>
                        <option value = "hours select">14 Uhr 15</option>
                        <option value = "hours select">14 Uhr 30</option>
                        <option value = "hours select">19 Uhr 30</option>
                        <option value = "hours select">19 Uhr 45</option>
                        <option value = "hours select">20 Uhr 00</option>
                        <option value = "hours select">20 Uhr 15</option>
                        <option value = "hours select">20 Uhr 30</option>
                        <option value = "hours select">20 Uhr 45</option>
                        <option value = "hours select">21 Uhr 00</option>
                        <option value = "hours select">21 Uhr 15</option>
                        <option value = "hours select">21 Uhr 30</option>
                        <option value = "hours select">21 Uhr 45</option>
                        <option value = "hours select">22 Uhr 00</option>
                        <option value = "hours select">22 Uhr 15</option>
                        <option value = "hours select">22 Uhr 30</option>
                        <select name="days select">
                    </div>

                    <div class = "form-row">
                        <input type="text" placeholder = "Ihre Name und Vorname">
                        <input type="text" placeholder = "Telefonnummer">
                    </div>

                    <div class  = "form-row">
                        <input type="number" placeholder = " Anzahl der Personen" min = "1">
                    </div>
                    <a class = "buttt" href="felicitation.php">BOOK TABLE</a>
                </form>
                </div>
            </div>
        </section>
    </body>
</html>