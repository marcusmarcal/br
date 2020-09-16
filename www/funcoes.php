<?php
function converte_data($data) {
    if (strstr($data, "/")) {
        $A = explode("/", $data);
        $V_data = $A[2] . "-" . $A[1] . "-" . $A[0];
    } elseif (strstr($data, "-")) {
        $A = explode("-", $data);
        $V_data = $A[2] . "/" . $A[1] . "/" . $A[0];
    }
    return $V_data;
}