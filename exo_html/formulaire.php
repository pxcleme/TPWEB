<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>formulaire</title>
</head>

<body>
        <form action="">  <!-- balise formulaire -->
            <div>
                <label>
                    <p>civilité
                        <input type="radio"id="button" name="button" value="homme"> homme 
                        <input type="radio"id="button" name="button" value="femme"> femme
                    </p>
                </label>
            </div>

            <!-- texte box-->
            <div>
                <label for="name">nom : </label>
                <input type="text" id="name">
            </div>

            <div>
                <label for="subname">prenom : </label>
                <input type="text" id="subname">
            </div>

            <label for="année">jour</label>
            <?php
                for ( $i = 1; $i <= 100000; $i ++)
                {
                    echo '<option value="' . $i . '">' . $i . '</option>' ;
                }
                ?>
                </select>
            <select name="mois" id="mois">
                <option>Mois</option>
                <option>Janvier</option>
                <option>Fevrier</option>
                <option>Mars</option>
                <option>Avril</option>
                <option>Mai</option>
                <option>Juin</option>
                <option>Juillet</option>
                <option>Aout</option>
                <option>Septembre</option>
                <option>Octobre</option>
                <option>Novembre</option>
                <option>Decembre</option>
            </select>
            <select name="année" id="année">
                <option>Année</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>   
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
                <option>1995</option>
                <option>1994</option>
                <option>1993</option>
                <option>1992</option>
                <option>1991</option>
                <option>1990</option>
                <option>1989</option>
                <option>1988</option>
                <option>1987</option>
                <option>1986</option>
                <option>1985</option>
                <option>1984</option>
            </select>
            <div>
                <label for="numero">numero
                    <input type="text"id="numero">
                </label>
                <label for="rue">rue : </label>
                <input type="text" id="rue">
            </div>
            <p>address</p>
            <input type="month">
        </form>   <!-- fin du formulaire-->
</body>
</html>