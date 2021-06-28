{{> header }}
{{> barraLateral }}
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->

            {{> barraTop }}
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <h1 class="h3 mb-4 text-gray-800 text-center">Cargar nuevo viaje.</h1>

                <div class="achicar">
                    <H3>Cliente</H3>

                    <form method="post"  enctype="multipart/form-data" action="cargarViaje/procesarCargaViaje">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control" name="nombreCliente"
                                    id="nombreCliente" placeholder="Nombre">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="apellidoCliente"
                                    name="apellidoCliente" placeholder="Apellido">
                            </div>

                        </div>

                    <div class="form-group">
                        <input type="Number" class="form-control" id="cuitCliente"
                               name="cuitCliente"  placeholder="CUIT">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="domicilioCliente"
                               name="domicilioCliente"    placeholder="Domicilio">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="telefonoCliente"
                               name="telefonoCliente"    placeholder="Teléfono">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="emailCliente"
                               name="emailCliente"    placeholder="Email">
                    </div>


                    <div>
                        <hr class="sidebar-divider mt-4">
                        <h3>Viaje</h3>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="origenViaje"
                               name="origenViaje"    placeholder="Dirección origen">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="destinoViaje"
                               name="destinoViaje"    placeholder="Dirección destino">
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" id="fechaCarga"
                               name="fechaCarga" aria-describedby="fecha">
                        <small id="fecha" class="text-muted">
                            Fecha de carga.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" id="eta"
                               name="eta" aria-describedby="eta">
                        <small id="eta" class="text-muted">
                            Fecha estimada de llegada.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" id="etd"
                        name="etd" aria-describedby="etd">
                        <small id="etd" class="text-muted">
                        Fecha estimada de salida.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="kmPrevisto"
                               name="kmPrevisto"    placeholder="Kilometros previstos">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="combustiblePrevisto"
                               name="combustiblePrevisto"    placeholder="Cumbustible previsto Lts">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="viaticosPrevisto"
                        name="viaticosPrevisto"    placeholder="Viáticos Previstos">
                        </div>
                    <div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="peajesPrevisto"
                        name="peajesPrevisto"    placeholder="Peajes Previstos">
                    </div>

                    <div class="form-group">
                       <input type="text" class="form-control" id="pesajesPrevisto"
                       name="pesajesPrevisto"    placeholder="Pesajes Previstos">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="extrasPrevisto"
                        name="extrasPrevisto"    placeholder="Extras Previstos">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="feePrevisto"
                        name="feePrevisto"    placeholder="Fee Previsto">
                    </div>


                        <div>

                        <hr class="sidebar-divider mt-4">
                        <h3>Supervisor</h3>
                        </div>

                        <div class="form-group">

                            <select class="form-control" id="supervisorViaje" name="supervisorViaje">

                                <option selected >Seleccionar Supervisor</option>
                                {{#supervisores}}
                                <option value="{{id}}">{{nombre}} {{apellido}} </option>
                                {{/supervisores}}
                            </select>

                        </div>

                        <div>

                    <div>
                        <hr class="sidebar-divider mt-4">
                        <h3>Camión</h3>
                    </div>

                        <div class="form-group">

                            <select class="form-control" id="camionViaje" name="camionViaje">

                                <option selected >Seleccionar Camión</option>
                                {{#camiones}}
                                <option value="{{id}}">{{marca}}-{{modelo}} </option>
                                {{/camiones}}
                            </select>

                        </div>

                    <div>
                        <hr class="sidebar-divider mt-4">
                        <h3>Carga</h3>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="arrastradorViaje" name="arrastradorViaje">
                            <option selected >Seleccionar Arrastrador</option>
                            {{#arrastradores}}
                            <option value="{{id}}">{{tipo}}-{{patente}}</option>
                            {{/arrastradores}}
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="pesoCarga"
                               name="pesoCarga"    placeholder="Peso neto de la carga">
                    </div>

                    <div class="form-group">
                        <label for="hazardCarga">Hazard</label> <br>
                        <input  type="radio" name="hazardCarga" id="hazardCarga" value="1"> Si

                        <input  type="radio" name="hazardCarga" id="hazardCarga" value="0"> No

                    </div>

                    <div class="form-group">
                        <select class="form-control" id="imoCarga" name="imoCarga">
                            <option value="" selected >Seleccionar IMO Class</option>
                            <option value="1">Class 1</option>
                            <option value="2">Class 2</option>
                            <option value="3">Class 3</option>
                            <option value="41">Class 4.1</option>
                            <option value="42">Class 4.2</option>
                            <option value="43">Class 4.3</option>
                            <option value="51">Class 5.1</option>
                            <option value="52">Class 5.2</option>
                            <option value="61">Class 6.1</option>
                            <option value="62">Class 6.2</option>
                            <option value="7">Class 7</option>
                            <option value="8">Class 8</option>
                            <option value="9">Class 9</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <label for="reeferCarga">Reefer</label> <br>
                        <input  type="radio" name="reeferCarga" id="reeferCarga" value="1"> Si

                        <input  type="radio" name="reeferCarga" id="reeferCarga" value="0"> No

                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="temperaturaCarga"
                               name="temperaturaCarga"    placeholder="Temperatura de la carga">
                    </div>

                    <div>
                        <hr class="sidebar-divider mt-4">
                        <h3>Chofer</h3>
                    </div>

                    <div class="form-group">

                        <select class="form-control" id="choferViaje" name="choferViaje">

                            <option selected >Seleccionar Chofer</option>
                            {{#choferes}}
                            <option value="{{id}}">{{nombre}} {{apellido}}</option>
                            {{/choferes}}
                        </select>

                    </div>

                    <div class="form-group">
                        <hr class="sidebar-divider mt-4">
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-dark">Cargar Viaje</button>
                    </div>



                </form>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

{{> footer }}