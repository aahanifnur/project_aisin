$(document).ready(function () {
    $(".add_item_btn_apd").click(function (e) {
        e.preventDefault();
        $("#show_item_4").prepend(` 
        <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Nama AKK / APD</label>
                                                <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                                <input type="number" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">

                                            </div>

                                            <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn_apd">
                                                Remove
                                            </button>
                                        </form>
                                    </div>
    `)
    });
    $(document).on('click', '.remove_item_btn_apd', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
});