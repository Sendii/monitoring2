<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
                    title:{
                        text: "Total of amount orders"
                    },
                    data: [
                    {
                        type: "column",
                        dataPoints: [
                            {{--@foreach($users as $rows)
                                [ " {{$rows->name}} ", {{$rows->email}} ]
                            @endforeach--}}

                            <?php 
                                foreach($users as $key) {
                                    echo "{label:'{$key->email}', y:{$key->name}}, \r\n";
                                }
                             ?>
                        ]
                    }]
                });
                chart.render();
            }
        </script>
        <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Charts</title>

        {!! Charts::styles() !!} -->

    </head>
    <body>
        <!-- Main Application (Can be VueJS or other JS framework) -->
        <!-- <div class="app">
            <center>
                {!! $chart->html() !!}
            </center>
        </div> -->
        <!-- End Of Main Application -->
        <!-- {!! Charts::scripts() !!}
        {!! $chart->script() !!} -->
    </body>
</html>