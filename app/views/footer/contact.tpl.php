<form action="" class="mx-5">
    <div class="mb-3 w-75 ">
        <label for="exampleFormControlInput1" class="form-label text-white">Prénom</label>
            <input type="text" class="form-control formInput" id="exampleFormControlInput1" value="" required placeholder="Votre prénom">
    </div>
    <div class="mb-3 w-75">
        <label for="exampleFormControlInput1" class="form-label text-white">NOM</label>
            <input type="text" class="form-control formInput" id="exampleFormControlInput1" placeholder="Votre nom de famille" value="" required>
    </div>
    <div class="mb-3 w-75">
        <label for="exampleFormControlInput1" class="form-label text-white">Adresse mail</label>
            <input type="email" class="form-control formInput" id="exampleFormControlInput1" placeholder="name@example.com" value="" required>
    </div>
    <div class="mb-3 w-75">
        <label for="exampleFormControlTextarea1" class="form-label text-white">Message</label>
            <textarea class="form-control formInput" maxlength="600"id="exampleFormControlTextarea1" placeholder="Ecrivez votre message ici (600 caractères maximum)" rows="5" value="" required ></textarea>
    </div>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label text-white" for="invalidCheck">
        J'accepte les termes et les conditions
        </label>
            <div class="invalid-feedback text-white">
        Vous devez accepter les ternes et les conditions avant d'envoyer le message. 
            </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-warning" type="submit">Envoyer</button>
  </div>
</form>