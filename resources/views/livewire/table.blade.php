<div>

    <div class="container py-5">
        <div class="row text-center pb-4">
            <div class="col-lg-12">
                <h1 class="poppins_regular">MIS INVITADOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th># Personas</th>
                                <th>Acompañantes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($this->invitados as $user)
                                <tr>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->num_personas }}</td>
                                    <td>{{ $user->comentarios }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row text-left pb-4">
            <div class="col-lg-12">
                <h1 class="poppins_regular">Total: {{$this->count_all}}</h1>
            </div>
        </div>
    </div>
</div>
