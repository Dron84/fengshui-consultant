// author http://uniquesite.ru
$(document).ready(function(){
  if (window.location.search=="?goahome=1"){
    goa_numbers(1)
    goa_change_on_href(1)
  }else if (window.location.search=="?goahome=2"){
    goa_numbers(2)
    goa_change_on_href(2)
  }else if (window.location.search=="?goahome=3"){
    goa_numbers(3)
    goa_change_on_href(3)
  }else if(window.location.search=="?goahome=4"){
    goa_numbers(4)
    goa_change_on_href(4)
  }else if (window.location.search=="?goahome=6"){
    goa_numbers(6)
    goa_change_on_href(6)
  }else if (window.location.search=="?goahome=7"){
    goa_numbers(7)
    goa_change_on_href(7)
  }else if (window.location.search=="?goahome=8"){
    goa_numbers(8)
    goa_change_on_href(8)
  }else if (window.location.search=="?goahome=9"){
    goa_numbers(9)
    goa_change_on_href(9)
  }else if (window.location.search==''){

  }else{
    $('#goahome_error').html('Что то пошло не так. Повторите проделанную работу')
    $('#goahome_error').css({'color':'red'})
  }

  $('#goahome').on('change touch', function(){
    if ($(this).val()==1){
      goa_numbers(1)
    }else if ($(this).val()==2){
      goa_numbers(2)
    }else if ($(this).val()==3){
      goa_numbers(3)
    }else if ($(this).val()==4){
      goa_numbers(4)
    }else if ($(this).val()==6){
      goa_numbers(6)
    }else if ($(this).val()==7){
      goa_numbers(7)
    }else if ($(this).val()==8){
      goa_numbers(8)
    }else if ($(this).val()==9){
      goa_numbers(9)
    }else{
      $('#goa').css({'display':'none'})
      $('#group').css({'display':'none'})
      window.location.search=''
    }
  })
})
function goa_change_on_href(i){
  $('#goahome').val(i)
}
function goa_numbers(i){
  if (i == 1){
    clear_goa()
    $('#goa_home_1').html('Шен Ци')
    goa_info('+4','1')
    $('#goa_home_2').html('Яань Нянь')
    goa_info('+2','2')
    $('#goa_home_3').html('Цзюэ Мин')
    goa_info('-4','3')
    $('#goa_home_4').html('Тянь И')
    goa_info('+3','4')
    $('#goa_home_5').html(i+'<br> Кань')
    $('#goa_home_6').html('Хо Хай')
    goa_info('-1','6')
    $('#goa_home_7').html('У Гуй')
    goa_info('-3','7')
    $('#goa_home_8').html('Фу Вей')
    goa_info('+1','8')
    $('#goa_home_9').html('Лю Ша')
    goa_info('-2','9')
    goa_people_deg(i)
    $('#goa_home_1').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_2').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_4').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_8').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==2){
    clear_goa()
    $('#goa_home_1').html('У Гуй')
    goa_info('-3','1')
    $('#goa_home_2').html('Лю Ша')
    goa_info('-2','2')
    $('#goa_home_3').html('Фу Вей')
    goa_info('+1','3')
    $('#goa_home_4').html('Хо Хай')
    goa_info('-1','4')
    $('#goa_home_5').html(i+'<br> Кунь')
    $('#goa_home_6').html('Тянь И')
    goa_info('+3','6')
    $('#goa_home_7').html('Шен Ци')
    goa_info('+4','7')
    $('#goa_home_8').html('Цзюэ Мин')
    goa_info('-4','8')
    $('#goa_home_9').html('Яань Нянь')
    goa_info('+2','9')
    goa_people_deg(i)
    $('#goa_home_3').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_6').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_7').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_9').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==3){
    clear_goa()
    $('#goa_home_1').html('Яань Нянь')
    goa_info('+2','1')
    $('#goa_home_2').html('Шен Ци')
    goa_info('+4','2')
    $('#goa_home_3').html('Хо Хай')
    goa_info('-1','3')
    $('#goa_home_4').html('Фу Вей')
    goa_info('+1','4')
    $('#goa_home_5').html(i+'<br> Чжэнь')
    $('#goa_home_6').html('Цзюэ Мин')
    goa_info('-4','6')
    $('#goa_home_7').html('Лю Ша')
    goa_info('-2','7')
    $('#goa_home_8').html('Тянь И')
    goa_info('+3','8')
    $('#goa_home_9').html('У Гуй')
    goa_info('-3','9')
    goa_people_deg(i)
    $('#goa_home_1').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_2').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_4').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_8').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==4){
    clear_goa()
    $('#goa_home_1').html('Фу Вей')
    goa_info('+1','1')
    $('#goa_home_2').html('Тянь И')
    goa_info('+3','2')
    $('#goa_home_3').html('У Гуй')
    goa_info('-3','3')
    $('#goa_home_4').html('Яань Нянь')
    goa_info('+2','4')
    $('#goa_home_5').html(i+'<br> Шунь')
    $('#goa_home_6').html('Лю Ша')
    goa_info('-2','6')
    $('#goa_home_7').html('Цзюэ Мин')
    goa_info('-4','7')
    $('#goa_home_8').html('Шен Ци')
    goa_info('+4','8')
    $('#goa_home_9').html('Хо Хай')
    goa_info('-1','9')
    goa_people_deg(i)
    $('#goa_home_1').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_2').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_4').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_8').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==6){
    clear_goa()
    $('#goa_home_1').html('Хо Хай')
    goa_info('-1','1')
    $('#goa_home_2').html('Цзюэ Мин')
    goa_info('-4','2')
    $('#goa_home_3').html('Яань Нянь')
    goa_info('+2','3')
    $('#goa_home_4').html('У Гуй')
    goa_info('-3','4')
    $('#goa_home_5').html(i+'<br> Тянь')
    $('#goa_home_6').html('Шен Ци')
    goa_info('+4','6')
    $('#goa_home_7').html('Тянь И')
    goa_info('+3','7')
    $('#goa_home_8').html('Лю Ша')
    goa_info('-2','8')
    $('#goa_home_9').html('Фу Вей')
    goa_info('+1','9')
    goa_people_deg(i)
    $('#goa_home_3').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_6').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_7').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_9').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==7){
    clear_goa()
    $('#goa_home_1').html('Лю Ша')
    goa_info('-2','1')
    $('#goa_home_2').html('У Гуй')
    goa_info('-3','2')
    $('#goa_home_3').html('Тянь И')
    goa_info('+3','3')
    $('#goa_home_4').html('Цзюэ Мин')
    goa_info('-4','4')
    $('#goa_home_5').html(i+'<br> Дуй')
    $('#goa_home_6').html('Фу Вей')
    goa_info('+1','6')
    $('#goa_home_7').html('Яань Нянь')
    goa_info('+2','7')
    $('#goa_home_8').html('Хо Хай')
    goa_info('-1','8')
    $('#goa_home_9').html('Шен Ци')
    goa_info('+4','9')
    goa_people_deg(i)
    $('#goa_home_3').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_6').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_7').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_9').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==8){
    clear_goa()
    $('#goa_home_1').html('Цзюэ Мин')
    goa_info('-4','1')
    $('#goa_home_2').html('Хо Хай')
    goa_info('-1','2')
    $('#goa_home_3').html('Шен Ци')
    goa_info('+4','3')
    $('#goa_home_4').html('Лю Ша')
    goa_info('-2','4')
    $('#goa_home_5').html(i+'<br> Гэнь')
    $('#goa_home_6').html('Яань Нянь')
    goa_info('+2','6')
    $('#goa_home_7').html('Фу Вей')
    goa_info('+1','7')
    $('#goa_home_8').html('У Гуй')
    goa_info('-3','8')
    $('#goa_home_9').html('Тянь И')
    goa_info('+3','9')
    goa_people_deg(i)
    $('#goa_home_3').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_6').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_7').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_9').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }else if(i==9){
    clear_goa()
    $('#goa_home_1').html('Тянь И')
    goa_info('+3','1')
    $('#goa_home_2').html('Фу Вей')
    goa_info('+1','2')
    $('#goa_home_3').html('Лю Ша')
    goa_info('-2','3')
    $('#goa_home_4').html('Шен Ци')
    goa_info('+4','4')
    $('#goa_home_5').html(i+'<br> Ли')
    $('#goa_home_6').html('У Гуй')
    goa_info('-3','6')
    $('#goa_home_7').html('Хо Хай')
    goa_info('-1','7')
    $('#goa_home_8').html('Яань Нянь')
    goa_info('+2','8')
    $('#goa_home_9').html('Цзюэ Мин')
    goa_info('-4','9')
    goa_people_deg(i)
    $('#goa_home_1').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_2').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_4').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
    $('#goa_home_8').css({'background-color': 'rgba(238,0,255,0.4)', 'color':'white'})
  }
  $('#goa').css({'display':'block'})
}
function clear_goa() {
  $('#goa_home_1').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_2').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_3').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_4').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_6').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_7').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_8').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_9').css({'background-color': 'rgba(255,255,255,0.4)', 'color':'black'})
  $('#goa_home_1_modal').remove()
  $('#goa_home_1').removeAttr('data-toggle')
  $('#goa_home_1').removeAttr('data-target')
  $('#goa_home_2_modal').remove()
  $('#goa_home_2').removeAttr('data-toggle')
  $('#goa_home_2').removeAttr('data-target')
  $('#goa_home_3_modal').remove()
  $('#goa_home_3').removeAttr('data-toggle')
  $('#goa_home_3').removeAttr('data-target')
  $('#goa_home_4_modal').remove()
  $('#goa_home_4').removeAttr('data-toggle')
  $('#goa_home_4').removeAttr('data-target')
  $('#goa_home_6_modal').remove()
  $('#goa_home_6').removeAttr('data-toggle')
  $('#goa_home_6').removeAttr('data-target')
  $('#goa_home_7_modal').remove()
  $('#goa_home_7').removeAttr('data-toggle')
  $('#goa_home_7').removeAttr('data-target')
  $('#goa_home_8_modal').remove()
  $('#goa_home_8').removeAttr('data-toggle')
  $('#goa_home_8').removeAttr('data-target')
  $('#goa_home_9_modal').remove()
  $('#goa_home_9').removeAttr('data-toggle')
  $('#goa_home_9').removeAttr('data-target')
  $('#group').remove()

}
function goa_info(number, goa_home_n){
  if (number=='+4'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">+4 (Шен Ци)</h4></div><div class="modal-body"><p>+4 (Шен Ци) - Самая Благоприятная энергия. Она очень сильная и мощная. Это направление лучше использовать сильным и целеустремлённым людям. Она приносит здоровье, богатство, успех в бизнесе. Используя эту энергию вы станете  гиперактивными, поэтому будьте аккуратнее с этим направлением если у вас есть проблемы со здоровьем. Это направление также вносит позитивный  окрас в сексуальную жизнь, даёт рождение детей. Но, как оборотная сторона медали, может привнести нестабильность, нервозную возбужденность и нарушение сна.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='+3'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">+3 (Тянь И)</h4></div><div class="modal-body"><p>+3 (Тянь И) - "небесный доктор". Очень благоприятная энергия, особенно для тех, кто хочет поправить свое здоровье. Повышает активность, приносит здоровье. Очень благоприятно влияет на деньги и карьеру. В отличии от энергии Шен Ци (+4), Тянь И (+3) более мягкая. Её использование также может привнести в вашу жизнь помощь высших сил.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='+2'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">+2 (Янь Нянь)</h4></div><div class="modal-body"><p>+2 (Янь Нянь) - энергия долголетия и хорошего потомства. Эта энергия помогает привнести баланс в отношении между двумя людьми. Также эта энергия гармонизирует и укрепляет связи, делает активным в обществе и расслабляет. Её использование очень подходит для налаживания отношений в паре.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='+1'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">+1 (Фу Вей)</h4></div><div class="modal-body"><p>+1 (Фу Вей) - эта энергия направлена на укрепление отношений в семье, в первую очередь.  Она помогает человеку найти себя, обрести свой путь, раскрыть потенциал. Возвращает человека к реальности. Помогает повысить социальный потенциал.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='-1'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">-1 (Хо Хай)</h4></div><div class="modal-body"><p>-1 (Хо Хай) - переводится с китайского языка как "мелкие неприятности ". Самая щадящая из всех негативных энергий.  Дает человеку ощущение постоянной усталости, беспокойства по пустякам. Человек, находясь под властью этой энергии, может себя потерять, ослабить здоровье, плохо спать, стать ленивым.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='-2'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">-2 (Лю Ша)</h4></div><div class="modal-body"><p>-2 (Лю Ша) - переводится с китайского языка как "шесть убийц ". Используя эту энергию, человек может начать принимать неправильные решения, в силу своей самоуверенности. Эта энергия споров, разногласия, сплетен. Кроме того она несёт с  собой ограничение в финансах.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='-3'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">-3 (У Гуй)</h4></div><div class="modal-body"><p>-3 (У Гуй) - "Пять призраков". Сильная негативная энергия. Может принести конфликты, потерю денег, в том числе и грабежи, несчастные случаи. Человеку становится трудно принимать решения.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
  if (number=='-4'){
    id = 'goa_home_'+goa_home_n
    $('body').append('<div id="'+id+'_modal" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">-4 (Цзюэ Мин)</h4></div><div class="modal-body"><p>-4 (Цзюэ Мин) - "Полный крах". Самая разрушительная энергия. Эта энергия способна привнести в вашу жизнь самые плачевные ситуации: банкротство, несчастье, развод. Нет стабильности. Жизнь в постоянном напряжении.</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div></div></div></div>')
    $('#'+id).attr('data-toggle',"modal")
    $('#'+id).attr('data-target', "#"+id+"_modal")
    $('#'+id).css({'cursor':'pointer'})
  }
}
function goa_people_deg(i){
  if (i==1 || i==3 || i==4 || i==9){
      $('div.container.goa').append('<div id="group" style="font-style: italic;font-weight: bold">Вы относитесь к Восточной группе с благоприятными направлениями: Юг, Восток, Юго-восток, Север. </div>')
  }else if (i==2 || i==6 || i==7 || i==8){
      $('div.container.goa').append('<div id="group" style="font-style: italic;font-weight: bold">Вы относитесь к Западной группе с благоприятными направлениями: Северо-восток, Запад, Северо-запад, Юго-запад. </div>')
  }
}
