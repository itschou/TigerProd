<div class="text-center">
    <div class="card bg-light">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Réserver une session</h4>
            <form method="POST" action=" {{ route('newsession') }} ">
                @csrf

                <div class="form-group">
                    <label for="session" class="text-dark">Type de session</label>
                    <select class="form-control" id="session" name="type">
                        <optgroup label="Music">
                            <option value="COMPOSITION MUSICALE">COMPOSITION MUSICALE</option>
                            <option value="DIRECTION ARTISTIQUE">DIRECTION ARTISTIQUE</option>
                            <option value="ENREGISTREMENT ET MIXAGE">ENREGISTREMENT ET MIXAGE</option>
                            <option value="POST PRODUCTION">POST PRODUCTION</option>
                        </optgroup>
                        <optgroup label="AUTRES SERVICES">
                            <option value="TOURNAGE DE CLIP">TOURNAGE DE CLIP</option>
                            <option value="IMPRESSION">IMPRESSION</option>
                        </optgroup>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="date" class="text-dark">Date de la session</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Réserver</button>
            </form>
        </div>
    </div>

</div>

<style>
    .card {
        border: none;
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #FFD700;
    }

    .btn-primary {
        background-color: #FFD700;
        border-color: #FFD700;
    }

    .btn-primary:hover {
        background-color: #ffe02e;
        border-color: #ffe02e;
    }

    .form-control:focus {
        border-color: #FFD700;
        box-shadow: 0 0 0 0.2rem rgba(243, 114, 33, 0.25);
    }
</style>
