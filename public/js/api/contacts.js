
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$.get('../api/telephone').done(
    (response) => {
        $.post('../get-telephone', {telephone: response}).done(
            (response) => { $('#telephone_content').append(response); }
        )
    }
)

$.get('../api/address').done(
    (response) => {
        $.post('../get-address', {address: response}).done(
            (response) => { $('#address_content').append(response); }
        )
    }
)

$.get('../api/email').done(
    (response) => {
        $.post('../get-email', {email: response}).done(
            (response) => { $('#email_content').append(response); }
        )
    }
)

let i = 0;

$(document).on('click', '#update_btn', (event) => {
    i++;
    event.target.innerText = 'Подтвердить';
    let input_id = event.target.getAttribute('data-target');
    let input = document.getElementById(input_id);
    input.classList.add('form_hidden_input_active');
    let btn_id = event.target.getAttribute('data-btn');
    let btn = document.getElementById(btn_id);
    if( i === 2 ){
        btn.click();
    }
})



$('.dada').addClass('active');
