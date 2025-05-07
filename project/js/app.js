$(document).ready(function() {
    // Khi thay đổi tỉnh/thành, tải danh sách quận/huyện
    $('#province').on('change', function() {
        var id_tinhthanh = $(this).val();
        $('#district').empty().append('<option value="">Chọn quận / huyện</option>');
        $('#wards').empty().append('<option value="">Chọn phường / xã</option>');

        if (id_tinhthanh) {
            $.ajax({
                url: 'ajax_get_district.php',
                method: 'GET',
                dataType: "json",
                data: { id_tinhthanh: id_tinhthanh },
                success: function(data) {
                    $.each(data, function(i, quanhuyen) {
                        $('#district').append(`<option value="${id_quanhuyen}">${ten_quanhuyen}</option>`);
                    });
                }
            });
        }
    });

    // Khi thay đổi quận/huyện, tải danh sách phường/xã
    $('#district').on('change', function() {
        var id_quanhuyen = $(this).val();
        $('#wards').empty().append('<option value="">Chọn phường / xã</option>');

        if (id_quanhuyen) {
            $.ajax({
                url: 'ajax_get_wards.php',
                method: 'GET',
                dataType: "json",
                data: { id_quanhuyen: id_quanhuyen },
                success: function(data) {
                    $.each(data, function(i, wards) {
                        $('#wards').append(`<option value="${id_phuongxa}">${ten_phuongxa}</option>`);
                    });
                }
            });
        }
    });
});