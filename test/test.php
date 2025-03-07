<?php

try {
    trigger_error("Using an empty password is unsafe", E_ERROR);
} catch (\Exception $e) {
    print 444;
    print_r($e);
}
