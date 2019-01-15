$(document).ready(function () {

  $('#list-items').html(localStorage.getItem('listItems'))

  //Add item

  $('.add-items').submit(function (event) {
    event.preventDefault()

    let item = $('#todo-list-item').val()

    if (item) {
      $('#list-items').append('<li><input class="checkbox" type="checkbox"><div class="item">' + item + '</div><i class="fas fa-save save" title="Save"></i><i class="fas fa-edit edit" title="Edit"></i><i class="fas fa-times remove" title="Remove"></i><hr></li>')
      localStorage.setItem('listItems', $('#list-items').html())
      $('#todo-list-item').val('')
    }
  })

  //Checkbox "task is finished"

  $(document).on('change', '.checkbox', function () {
    if ($(this).attr('checked')) {
      $(this).removeAttr('checked')
    } else {
      $(this).attr('checked', 'checked')
    }

    $(this).parent().toggleClass('completed')
    localStorage.setItem('listItems', $('#list-items').html())
  })

  //Edit item

  $(document).on('click', '.edit', function () {
    $(this).siblings('.item').attr('contenteditable', 'true').addClass('editable')
  })

  //Save item

  $(document).on('click', '.save', function () {
    $(this).siblings('.item').attr('contenteditable', 'false').removeClass('editable')
    localStorage.setItem('listItems', $('#list-items').html())
  })

  //Remove item

  $(document).on('click', '.remove', function () {
    $(this).parent().fadeOut(1000, function () {
      $(this).remove()
      localStorage.setItem('listItems', $('#list-items').html())
    })
  })

})