$(document).ready(function () {
    // code JQuery
    /*
    - Cu phap: $(selector).action()
    + $: bat dau voi JQuery
    + selector: dinh danh cho element html
         + id: #nameID -> lay ra duy nhat 1 element
         + class: .className -> lay ra nhieu element vi co chung class
         + tag element: nameTag -> lay ra tat ca cac html cung the

    + action() - hanh dong - phuong thuc - ham
          + tra cuu trong doc JQuery
     */

    $('#show-name').click(function () {
        $('.column-name').toggle();
    });

    function hoverUser(color = 'red') {
        $('.user-item').hover(function (){
            $(this).css('background-color', color)
        }, function (){
            $(this).css('background-color', 'white')
        })
    }

    $('#color-name').change(function (){
        // lay ggia  tri tu o input
        let nameColor = $(this).val();
        //hoverUser(nameColor)
        $('body').css('background-color', nameColor).css('color', 'white')
    })

    $('.delete-user-item').click(function (){
        let userID = $(this).attr('data-id');
        // thu hien goi ajax
        $.ajax({
            url: 'http://127.0.0.1:8000/admin/users/' + userID + '/delete',
            method: 'GET',
            dataType: 'json',
            success: function (response){
                // xu ly du lieu sau khi goi ajax -> JQuery
                $('#user-item-'+userID).remove();
            },
            error: function (err){

            }
        })
    })

})
