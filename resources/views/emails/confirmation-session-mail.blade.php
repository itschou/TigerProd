<div class="container text-center mx-auto">
    <h1>Bonjour / Bonsoir {{ Auth::user()->prenom }}</h1>
    <p>Votre demande a été envoyé a TigerProd avec succès.</p>
    <p>Nous vous contacterons le plus vite possible (48 HEURES) au {{ Auth::user()->telephone }} </p><br>
    <p>Cordialement L'équipe TigerProd.</p>
</div>


<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        background-color: #2a2a2a;
        color: #000000;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    h1 {
        margin-top: 0;
    }

    p {
        margin-bottom: 1.5em;
    }
</style>
