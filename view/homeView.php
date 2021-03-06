{{> header }}
{{> barraLateral }}
<div id="content-wrapper" class="d-flex flex-column">


    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        {{> barraTop }}
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            {{#viajeCargado}}
            <div class="alert alert-primary" role="alert">
                Se cargo Viaje Correctamente.
            </div>
            {{/viajeCargado}}

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Viajes en curso</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de carga</th>
                                <th>Estado</th>
                                <th>Supervisor</th>
                                <th>Chofer</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de carga</th>
                                <th>Estado</th>
                                <th>Supervisor</th>
                                <th>Chofer</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            {{#viajes}}
                            <tr>
                                <td>{{id}}</td>
                                <td>{{origen}}</td>
                                <td>{{destino}}</td>
                                <td>{{fecha_carga}}</td>
                                <td>{{estado}}</td>
                                <td>{{nombreSupervisor}} {{apellidoSupervisor}}</td>
                                <td>{{nombreChofer}} {{apellidoChofer}}</td>
                            </tr>
                            {{/viajes}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
{{> footer }}
