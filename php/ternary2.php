<?php
    $x = 0;
    $result = ( $x === null ) ? '=null' :
        (( $x === 0 ) ? '=0' :
            (( $x === '' ) ? '""' :
                (( $x === false ) ? '=false' : 'something else')
            )
        );

    echo ( $result );
?>
