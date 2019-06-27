$(document).ready(function() {

    $(".photo").click(function(){	// Событие клика на маленькое изображение
        var img = $(this);	// Получаем изображение, на которое кликнули
        var src = img.attr('src'); // Достаем из этого изображения путь до картинки
        $("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
            "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
            "<img src='"+src+"' class='justify-content-center align-items-center popup_img' />"+ // Само увеличенное фото
            "</div>");
        $(".popup").fadeIn(400); // Медленно выводим изображение
        $(".popup_bg").click(function(){	// Событие клика на затемненный фон
            $(".popup").fadeOut(400);	// Медленно убираем всплывающее окно
            setTimeout(function() {
                $(".popup").remove();
            }, 800);
        });
    });

});