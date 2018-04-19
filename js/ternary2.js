const
    x = NaN,
    result = ( x != x ) ? '=NaN' :
        ( x === null ) ? '=null' :
        ( x === undefined ) ? '=undefined' :
        ( x === 0 ) ? '=0' :
        ( x === '' ) ? '""' :
        ( x === false ) ? '=false' :
        'something else';

console.log(result);
