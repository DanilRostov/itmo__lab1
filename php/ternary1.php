<?php
    $age = 19;
    $restricted = ( $age < 18 ) ? 'yes' :
		(( $age == 18) ? 'notsure' :
		    'no'
        );
    echo ( $restricted );
?>
