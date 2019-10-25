<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Registro</title>
        <link rel = "stylesheet" href = "./css/style-register.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="image/logo-apolo.jpg">
    </head>
    <body>
        <header class = "container-fluid">
            <div class = "row d-flex justify-content-between">
                <img id = "uac" class = "" src = "image/uac-logo.png" alt = "UAC" width="95" height="95">
                <img id = "fdi" src = "image/fi.png" alt = "FDI" width="95" height="95">
            </div>
        </header>
        
        <main class = "container d-flex justify-content-center align-items-center" id="accordion-main" >
            <div class="row card  d-block" style="width: 18rem;">
                <div class= " d-flex justify-content-end m-3">
                    <button type="button" class="btn btn-link" data-toggle= "collapse" data-target= "#config" aria-expanded="false" aria-control="collapseOne"><img class="img-fluid" src="image/configuraciones.png" width="30"></button>
                </div>
                <img class="card-img-top img-fluid" src="image/lector-prueba.gif" alt="Escaner">
                <div class="card-body  text-center">
                    <h4 class="card-text">Escanea tu credencial en la camara.</h4>
              </div>
            </div>
        </main>
        
        <!--Seccion para las configuraciones del escaner-->
        <section class="container-fluid">
            <div  class="row m-0 mt-4 p-2 mt-sm-5 collapse" data-parent="#accordion-main" id="config">
                <div class="col-12">
                    <div class="controls">
                        <fieldset class="input-group">

                        </fieldset>
                        <fieldset class="reader-config-group">
                            <label>
                                <span>Tipo de Lector</span>
                                <select name="decoder_readers">
                                    <option value="code_128">Code 128</option>
                                    <option value="code_39" selected="selected">Code 39</option>
                                    <option value="code_39_vin">Code 39 VIN</option>
                                    <option value="ean">EAN</option>
                                    <option value="ean_extended">EAN-extended</option>
                                    <option value="ean_8">EAN-8</option>
                                    <option value="upc">UPC</option>
                                    <option value="upc_e">UPC-E</option>
                                    <option value="codabar">Codabar</option>
                                    <option value="i2of5">I2of5</option>
                                    <option value="2of5">Standard 2 of 5</option>
                                    <option value="code_93">Code 93</option>
                                </select>
                            </label>
                            <label>
                                <span>Res</span>
                                <select name="input-stream_constraints">
                                    <option value="320x240">320px</option>
                                    <option selected="selected" value="640x480">640px</option>
                                    <option value="800x600">800px</option>
                                    <option value="1280x720">1280px</option>
                                    <option value="1600x960">1600px</option>
                                    <option value="1920x1080">1920px</option>
                                </select>
                            </label>
                            <label>
                                <span>Size</span>
                                <select name="locator_patch-size">
                                    <option value="x-small">x-small</option>
                                    <option value="small">small</option>
                                    <option selected="selected" value="medium">medium</option>
                                    <option value="large">large</option>
                                    <option value="x-large">x-large</option>
                                </select>
                            </label>
                            <label>
                                <span>Tam. Muestreo</span>
                                <input type="checkbox" checked="checked" name="locator_half-sample" />
                            </label>
                            <label>
                                <span>Hilos</span>
                                <select name="numOfWorkers">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option selected="selected" value="4">4</option>
                                    <option value="8">8</option>
                                </select>
                            </label>
                            <label>
                                <span>Dispositivo</span>
                                <select name="input-stream_constraints" id="deviceSelection">
                                </select>
                            </label>
                            <label style="display: none">
                                <span>Zoom</span>
                                <select name="settings_zoom"></select>
                            </label>
                            <label style="display: none">
                                <span>Torch</span>
                                <input type="checkbox" name="settings_torch" />
                            </label>
                        </fieldset>
                    </div>
                    <div id="result_strip">
                        <ul class="thumbnails"></ul>
                    </div>
                    <div class="d-none">
                    <div id="interactive" class="viewport"></div>
                    </div>
                </section>
                </div>
            </div>
        </section>
        
        
        <script src="./js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="./js/popper.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/adapter-latest.js" type="text/javascript"></script>
        <script src="./js/quagga.min.js" type="text/javascript"></script>
        <script src="./js/Camara.js" type="text/javascript"></script>
    </body>
</html>