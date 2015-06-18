$('#add-notes-block').hide();

$('.etudiant .buttons .btn').on('click', function(){
    var buttonID = $(this).attr('id');

    switch(buttonID) {

        case 'view-notes':
            $('#view-notes').addClass('active');
            if ($('#add-notes').hasClass('active')) {
                $('#add-notes').removeClass('active');
            }

            $('#view-notes-block').fadeIn(300);
            $('#add-notes-block').hide();
        break;

        case 'add-notes':
            $('#add-notes').addClass('active');
            if ($('#view-notes').hasClass('active')) {
                $('#view-notes').removeClass('active');
            }

            $('#view-notes-block').hide();
            $('#add-notes-block').fadeIn(300);
        break;
    }
});

$('#classe').hide();
$('#controle').hide();

function showDiv(el) {
    if (el.value == 'etudiant') {
        $('#classe').hide();
        $('#controle').hide();
        $('#etudiant').fadeIn(300);
    }
    if (el.value == 'classe') {
        $('#classe').fadeIn(300);
        $('#controle').hide();
        $('#etudiant').hide();
    }
    if (el.value == 'controle') {
        $('#classe').hide();
        $('#controle').fadeIn(300);
        $('#etudiant').hide();
    }
}