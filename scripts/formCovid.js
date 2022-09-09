$("#CovidSend").on("Click", function () {
    var phone_num = $("#phone_num").val().trim();
    var email = $("#email").val().trim();
    var fio = $("#fio").val().trim();
    var fio_eng = $("#fio_eng").val().trim();
    var gender = $("#gender").val().trim();
    var birth = $("#birth").val().trim();
    var address = $("#address").val().trim();
    var place_of_work = $("#place_of_work").val().trim();
    var test_type = $("#test_type").val().trim();

    if (email == "") {
        $("#errorMess").text("Введите email");
        return false;
    } else if (phone_num == "") {
        $("#errorMess").text("Введите номер телефона");
        return false;
    } else if (fio == "") {
        $("#errorMess").text("Введите ФИО");
        return false;
    } else if (fio_eng == "") {
        $("#errorMess").text("Введите ФИО на английском");
        return false;
    } else if (gender == "") {
        $("#errorMess").text("Выберите пол");
        return false;
    } else if (birth == "") {
        $("#errorMess").text("Введите дату рождения");
        return false;
    } else if (address == "") {
        $("#errorMess").text("Укажите адрес проживания");
        return false;
    } else if (place_of_work == "") {
        $("#errorMess").text("Укажите место работы или учебы");
        return false;
    } else if (test_type == "") {
        $("#errorMess").text("Выберите тип тестирования");
        return false;
    } 

    $("#errorMess").text("");
})