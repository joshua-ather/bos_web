$(document).ready(function () {
    $.fn['getData']();
    $.fn['getTable']();
})

$.fn.getData = function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'http://localhost:8000/api/v1/show_user',
        method: 'post',
        dataType: 'JSON',
        cache: false,
        success: function (response) {
            if (response.status.code === 3) {
                $('#workshop_10').text(response.data.workshop.name)
                $('#user_10').text(response.data.name)
                $('#user_20').text(response.data.national_id)
            }
        },
        error: function (xhr, textStatus, errorThrown) {

        }
    });

    $.ajax({
        url: 'http://localhost:8000/api/v1/show_app-config',
        method: 'post',
        dataType: 'JSON',
        cache: false,
        success: function (response) {
            if (response.status.code === 3) {
                $('#company_10').html(response.data.name_alias + '&nbsp;')
                $('#company_20').text('(' + response.data.name_company + ').')
                $('#logo_brand > img').attr('src', response.data.picture_company)
            }
        },
        error: function (xhr, textStatus, errorThrown) {

        }
    });

}

$.fn.getTable = function () {
    ajaxGetData();
    animateKnob();

    function ajaxGetData($url = 'http://localhost:8000/api/v1/show_inventory') {
        $.ajax({
            url: $url,
            method: 'post',
            dataType: 'JSON',
            cache: false,
            success: function (response) {
                console.log(response)
                if (response.status.code === 3) {
                    $('#table_inventory tbody').html(getElement(response.data.data))
                    $('#nav_table').html(getNavTable(response.data))
                }
            },
            error: function (xhr, textStatus, errorThrown) {

            }
        });
    }

    function getElement($data) {
        var elem;
        $.each($data, function (i, value) {
            elem += '' +
                '<tr>\n' +
                '    <td>\n' +
                '        <div class="text-center">\n' +
                '            <i class="fas fa-circle" style="color: '+ (value['alarm'] === 3 ? "#58BFA0" : (value['alarm'] === 2 ? "#EC9023" : "#FC8787")) +'"></i>\n' +
                '        </div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['status_moving'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div>'+ value['sku_number'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div>'+ value['category_item'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div>'+ value['name_item'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['demand'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['min'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['max'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['stock'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['on_order'] +'</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['lead_time'] +' Hari</div>\n' +
                '    </td>\n' +
                '    <td>\n' +
                '        <div class="text-center">'+ value['sgt_order'] +'</div>\n' +
                '    </td>\n' +
                '</tr>';
        });
        return elem;
    }

    function getNavTable($data) {
        var elem = '' +
            '<a href="javascript:void(0)" data-href="'+ $data['prev_page_url'] +'" class="link_nav_table">\n' +
            '    <i>\n' +
            '        <svg width="13px" height="13px" viewBox="0 0 4.9 10.5" style="transform: rotate(90deg)"><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#AAAAAA"/></svg>\n' +
            '    </i>\n' +
            '    <span class="small-text mx-2">Prev</span>\n' +
            '</a>\n';

        $.each($data['links'], function (i, value) {
            if (i === 0 || i > $data['last_page']) return;
            elem += '' +
                '<a href="javascript:void(0)" data-href="'+ value['url'] +'" class="mx-2 link_nav_table '+ (value['active'] === true ? "active" : "") +'">\n' +
                '    <span class="small-text">'+ (i) +'</span>\n' +
                '</a>\n';
        });

        elem += '' +
            '<a href="javascript:void(0)" data-href="'+ $data['next_page_url'] +'" class="mx-2 link_nav_table">\n' +
            '    <span class="small-text">Next</span>\n' +
            '    <i>\n' +
            '        <svg width="13px" height="13px" viewBox="0 0 4.9 10.5" style="transform: rotate(-90deg)"><path d="M298.2,426.4l-2.4-2.5h1.7v-8H299v8h1.7Z" transform="translate(-295.8 -415.9)" fill="#AAAAAA"/></svg>\n' +
            '    </i>\n' +
            '</a>';
        return elem;
    }

    $(document).on('click', '.link_nav_table', function () {
        let link = $(this).attr('data-href');
        if (link !== 'null' || link !== null) {
            ajaxGetData(link);
        }
    })

    function animateKnob() {
        $({animatedVal: 0}).animate({animatedVal: 35}, {
            duration: 2000,
            easing: "swing",
            step: function () {
                $("#fast_knob").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });
        $({animatedVal: 0}).animate({animatedVal: 45}, {
            duration: 2000,
            easing: "swing",
            step: function () {
                $("#medium_knob").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });
        $({animatedVal: 0}).animate({animatedVal: 20}, {
            duration: 2000,
            easing: "swing",
            step: function () {
                $("#slow_knob").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });
    }
}
