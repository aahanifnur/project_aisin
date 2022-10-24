$(document).ready(function () {
    $(".add_item_btn_alat").click(function (e) {
        e.preventDefault();
        $("#show_item_6").prepend(` 
        <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Nama AKK / APD</label>
                                                <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                                <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>OK</option>
                                                    <option>NG</option>
                                                </select>
                                            </div>

                                            <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn_alat">
                                                Remove
                                            </button>
                                        </form>
                                    </div>
    `)
    });
    $(document).on('click', '.remove_item_btn_alat', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
});