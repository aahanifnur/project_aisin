$(document).ready(function () {
    $(".add_item_btn_sda").click(function (e) {
        e.preventDefault();
        $("#show_item").prepend(`
    <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Nama AKK / APD</label>
                                    <input name="nama" type="text" class="form-control mb-2" id="nama" aria-describedby="">
                                    <select class="form-control" id="akk_apd_s" aria-placeholder="">
                                        <option>OK</option>
                                        <option>NG</option>
                                    </select>
                                </div>

                                <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn_sda">
                                    Remove
                                </button>                                   
                            </form>
                        </div>
                        `)
    });
    $(document).on('click', '.remove_item_btn_sda', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
});

///hsbdshhbdj
