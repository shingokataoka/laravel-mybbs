'use strict';
{


document.querySelectorAll('[name="is_done"]').forEach(is_done => {
    is_done.addEventListener('change', e => {
        e.target.parentNode.submit();
    });
});




}

