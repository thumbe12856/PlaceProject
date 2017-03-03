<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Export PlaceProject</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <!--material css-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    </head>

    <body>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div>
        <div class="formWrapper">
            <form action="{{url("/export")}}" method="get">
                <div class="signin-card">
                    <div class="row">
                        <div class="col s12 m6 offset-m3">
                            <div class="card z-depth-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="card-content black-text center-align">
                                            <span class="card-title">企劃書生成</span>
                                        </div>
                                        <form id="loginForm">
                                            <div class="input-field">
                                                <i class="material-icons prefix">date_range</i>
                                                <input type="text" id="date" name="date">
                                                <label for="date">活動日期，例如：民國106年3月7日(星期二)　中午12時30分</label>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">translate</i>
                                                <input type="text" id="name" name="name">
                                                <label for="name">活動名稱，例如：105學年度第二學期第五次畢代畢編大會</label>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">location_city</i>
                                                <input type="text" id="location" name="location">
                                                <label for="location">活動地點，例如：國立中正大學活動中心231教室</label>
                                            </div>
                                            <div class="card-action center">
                                                <button type="submit" class="btn btn-warning">Export<i class="material-icons right">send</i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>




            <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/2.3.2/spin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.0/lodash.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dustjs-linkedin/2.7.2/dust-core.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="js/index.js"></script>

    </body>
</html>