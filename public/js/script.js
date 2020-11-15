$(document).on('click', '#submit', function(e){
    e.preventDefault();
    
    var content = $('input[name=content]:checked').val();
    var kpiseo = $('input[name=kpiseo]:checked').val();
    var sem = $('input[name=sem]:checked').val();
    var content_repl = $('input[name=content_repl]').prop("checked");
    var sem_repl = $('input[name=sem_repl]').prop("checked");

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "config",
        type: "post",
        data: {content : content, 
               kpiseo : kpiseo, 
               sem : sem,
               content_repl : content_repl,
               sem_repl : sem_repl},
        success: function (result){
            $('.result').html(result);
            $('.res_header').html('');
            $('.count_data').appendTo( $('.res_header') );
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Ошибка: Not connect.\n Verify Network. \n Страница будет перегружена!';
            } else if (jqXHR.status == 404) {
                msg = 'Ошибка: Requested page not found. [404] \n Страница будет перегружена!';
            } else if (jqXHR.status == 500) {
                msg = 'Ошибка: Internal Server Error [500]. \n Страница будет перегружена!';
            } else if (exception === 'parsererror') {
                msg = 'Ошибка: Requested JSON parse failed. \n Страница будет перегружена!';
            } else if (exception === 'timeout') {
                msg = 'Ошибка: Time out error. \n Страница будет перегружена!';
            } else if (exception === 'abort') {
                msg = 'Ошибка: Ajax request aborted. \n Страница будет перегружена!';
            } else {
                msg = 'Ошибка: Uncaught Error.\n' + jqXHR.responseText + ' \n Страница будет перегружена!';
            }
            console.log(msg);
        }
    });
});

//цепляем событие на onclick кнопки
var button = document.getElementById('bo-con');
button.addEventListener('click', function (e) {
  e.preventDefault();
  //нашли наш контейнер
  var ta = document.getElementById('bo-pre-con');
  console.log(ta); 
  //производим его выделение
  var range = document.createRange();
  range.selectNode(ta); 
  window.getSelection().addRange(range); 
 
  //пытаемся скопировать текст в буфер обмена
  try { 
    document.execCommand('copy'); 
  } catch(err) { 
    console.log('Can`t copy, boss'); 
  } 
  //очистим выделение текста, чтобы пользователь "не парился"
  // window.getSelection().removeAllRanges();
});

//цепляем событие на onclick кнопки
var button = document.getElementById('bo-kpi');
button.addEventListener('click', function (e) {
  e.preventDefault();
  //нашли наш контейнер
  var ta = document.getElementById('bo-pre-kpi');
  console.log(ta); 
  //производим его выделение
  var range = document.createRange();
  range.selectNode(ta); 
  window.getSelection().addRange(range); 
 
  //пытаемся скопировать текст в буфер обмена
  try { 
    document.execCommand('copy'); 
  } catch(err) { 
    console.log('Can`t copy, boss'); 
  } 
  //очистим выделение текста, чтобы пользователь "не парился"
  // window.getSelection().removeAllRanges();
});

//цепляем событие на onclick кнопки
var button = document.getElementById('bo-sem');
button.addEventListener('click', function (e) {
  e.preventDefault();
  //нашли наш контейнер
  var ta = document.getElementById('bo-pre-sem');
  console.log(ta); 
  //производим его выделение
  var range = document.createRange();
  range.selectNode(ta); 
  window.getSelection().addRange(range); 
 
  //пытаемся скопировать текст в буфер обмена
  try { 
    document.execCommand('copy'); 
  } catch(err) { 
    console.log('Can`t copy, boss'); 
  } 
  //очистим выделение текста, чтобы пользователь "не парился"
  // window.getSelection().removeAllRanges();
});

//цепляем событие на onclick кнопки
var button = document.getElementById('bo-all');
button.addEventListener('click', function (e) {
  e.preventDefault();
  //нашли наш контейнер
  var ta = document.getElementById('bo-pre-all');
  console.log(ta); 
  //производим его выделение
  var range = document.createRange();
  range.selectNode(ta); 
  window.getSelection().addRange(range); 
 
  //пытаемся скопировать текст в буфер обмена
  try { 
    document.execCommand('copy'); 
  } catch(err) { 
    console.log('Can`t copy, boss'); 
  } 
  //очистим выделение текста, чтобы пользователь "не парился"
  // window.getSelection().removeAllRanges();
});

//цепляем событие на onclick кнопки
var button = document.getElementById('bo-filter');
button.addEventListener('click', function (e) {
  e.preventDefault();
  //нашли наш контейнер
  var ta = document.getElementById('bo-pre-filter');
  console.log(ta); 
  //производим его выделение
  var range = document.createRange();
  range.selectNode(ta); 
  window.getSelection().addRange(range); 
 
  //пытаемся скопировать текст в буфер обмена
  try { 
    document.execCommand('copy'); 
  } catch(err) { 
    console.log('Can`t copy, boss'); 
  } 
  //очистим выделение текста, чтобы пользователь "не парился"
  // window.getSelection().removeAllRanges();
});