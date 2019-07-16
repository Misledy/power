<?php

function activar_votacion() {
global $wpdb;  
 
    $result_activar_votacion = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'activar_activar_votacion'"); 
    foreach($result_activar_votacion as $r)
    {
            $activar_votacion = $r->option_value;
    } 

    $result_fecha_votacion = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'activar_fecha_votacion'"); 
    foreach($result_fecha_votacion as $r)
    {
            $fecha_votacion = $r->option_value;
    }  
    $fecha_votacion = "PM";
?>

            <div class="count-down text-center">
                <p>Las votaciones finalizan en:</p>
                <div class="counter text-center">
                 <div id="countdown"></div>

                    <div class="days">
                        <span id="days"></span>
                        <p>DIAS</p>
                    </div>

                    <div class="hours">
                            <span id="hours"></span>
                            <p>HRS.</p>
                    </div>

                    <div class="minutes">
                            <span id="minutes">40</span>
                            <p>MIN.</p>
                    </div>

                    <div class="seconds">
                            <span id="seconds">20</span>
                            <p>SEC.</p>
                    </div>

                </div>

            </div>
<?php } ?>            
<!--****************************** Cronómetro ******************************-->

<script>

var end1 = '<?php echo $fecha_votacion; ?>';
var end = new Date( end1 );

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';
            document.getElementById('days').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        document.getElementById('days').innerHTML = end1;
        document.getElementById('countdown').innerHTML = days + ' dias, ';
        document.getElementById('countdown').innerHTML += hours + ' horas, ';
        document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
        document.getElementById('countdown').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);
</script>