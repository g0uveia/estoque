$(document).ready(function(){
  $('.chips').chips();
  $('.modal').modal();
  $('.tabs').tabs();

  $('.chips-autocomplete').chips({
    autocompleteOptions: {
      data: {
        'Vidro':null,
        'Coluna':null
      },
      limit: Infinity,
      minLength: 1
    },
    placeholder: 'Buscar'
  });

  $('#btn-delete').click(function(){
    $('.check').show();
    $('input[type=checkbox]').val('delete');
  });
  $('#btn-edit').click(function(){
    $('.check').show();
    $('input[type=checkbox]').val('edit');
  });

  $('.avatar').click(function() {
    $('input[type=checkbox]:visible', this).click();
  });

  $('input[type=checkbox]').click(function(){
    var operacao = $(this).val();
    if (operacao === "edit") {
      window.location =  + '?id=' + $(this).prop('id');
    } else if (operacao === "delete") {
      $('#modal1').modal('open');
    }
  })
});
