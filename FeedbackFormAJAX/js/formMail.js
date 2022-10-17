$("#sendMail").on("click", function() {
    var email = $("#email").val().trim(); // .val() - возвращает все значения
    var name = $("#name").val().trim(); // .trim() - удаляет все лишние пробелы
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();

    if(email == "") {
        $("#errorMess").text("Введите email");
        return false;
    } else if(name == "") {
        $("#errorMess").text("Введите имя");
        return false;
    } else if(phone == "") {
        $("#errorMess").text("Введите телефон");
        return false;
    } else if(message.length < 5) {
        $("#errorMess").text("Введите сообщение не менее 5 символов");
        return false;
    }

    $("#errorMess").text("");

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'email': email, 'name': name, 'phone': phone, 'message': message },
        dataType: 'html',
        beforeSend: function() {
            $("#sendMail").prop("didable", true); 
        },
        success: function(data) {
            if(!data)
                alert("Были ошибки, сообщение не отправлено!");
            else
                $('#mailForm').trigger("reset");
            alert(data); 
            $("#sendMail").prop("didable", false); 
        }
    });
});