(function() {
    "use strict";
    var HT = {};
    var _token = $('meta[name="csrf-token"]').attr('content');

    HT.switchery = () => {
        $('.js-switch').each(function() {
            var switchery = new Switchery(this, {color: '#1AB394'});
        })
    }

    HT.changeStatus = () => {
        if($('.status').length) {
            $(document).on('change', '.status', function(e) {
                let option = {
                    'value' : $(this).val(),
                    'modelId' : $(this).attr('data-modelId'),
                    'model' : $(this).attr('data-model'),
                    'field' : $(this).attr('data-field'),
                    '_token' : _token
                }
                // console.log(option);
                $.ajax({
                    url: 'ajax/dashboard/changeStatus',
                    type : 'POST',
                    data : option,
                    dataType : 'json',
                    success: function(res) {
                        console.log(res);
                    },
                    error : function(jqXHR, textStatus, errorThrown) {
                        console.log('Lỗi :'  +textStatus+ '' +errorThrown)
                    }
                })
                e.preventDefault()
            })
        };
    }

    $(document).ready(function() {
        HT.switchery();
        HT.changeStatus();
    })
})(jQuery);