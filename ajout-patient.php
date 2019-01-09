
        <h1>Formulaire nouveau patient</h1>
        <form action="index.php" method="post">
            <div class="form-field">
                <input type="text" class="text" name="firstname" placeholder="Votre prénom" required>
            </div>
            <div class="form-field">
                <input type="text" class="text" name="lastname" placeholder="Votre nom de famille" required>
            </div>
            <div class="form-field">
                <input type="email" class="text" name="mail" placeholder="Votre adresse mail" required>
            </div>
            <div class="form-field">
                <label>Votre date de naissance</label>
                <input type="text" class="date" name="birthdate"required>
            </div>
            <div class="form-field">
                <label>Votre N° de téléphone</label>
                <input type="tel" class="tel" name="phone"required>
            </div>

            <div class="form-field">
                <button class="button" name="send" type="submit">Envoyer</button>
            </div>
        </form>

    