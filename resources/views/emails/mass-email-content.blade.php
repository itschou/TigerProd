<div class="card bg-dark">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-0">Nouveau message de TigerProd</h5>
                <span>Objet : {{$objet}}</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">{{$messagee}}</p>
    </div>
    <div class="card-footer">
        <p class="mb-0">Cordialement,</p>
        <p class="mb-0">L'équipe de TigerProd</p>
    </div>
</div>

<style>
    .card {
        border: none;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
        font-family: 'Helvetica Neue', sans-serif;
        font-size: 14px;
        line-height: 1.5;
    }

    .card-header {
        background-color: #343a40;
        color: #fff;
        font-weight: bold;
        padding: 10px 15px;
    }

    .card-body {
        background-color: #f5f5f5;
        padding: 15px;
    }

    .card-footer {
        background-color: #343a40;
        color: #fff;
        font-weight: bold;
        padding: 10px 15px;
    }

    img {
        object-fit: cover;
        border-radius: 50%;
    }
</style>
