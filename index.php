<?php
// date_default_timezone_set("ASIA/KOLKATA");
// echo time() / 60 / 60 / 24 / 365;
// echo date('NS d D l z W');
$str = strtotime('20-01-2002');
echo date('d - F - Y - t - L - h:i:s', $str);
